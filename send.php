<?php
declare(strict_types=1);

/* =====================================================================
 *  AIRPORT CITY NEELAMBUR - ENQUIRY FORM MAILER   (single file, no libraries)
 *
 *  How it sends:
 *   1) If $smtp['pass'] is filled in below -> sends through your SMTP mailbox
 *      (most reliable: lands in the inbox, not spam).
 *   2) If SMTP is blank or fails        -> falls back to PHP mail(), the same
 *      method as your old send.php.
 * ===================================================================== */

// ====== YOUR SETTINGS ======
// srinivasan3979@gmail.com
$to   = "srinivasan3979@gmail.com";            // you receive enquiries here (several: "a@x.com, b@y.com")
$from = "noreply@airportcityneelambur.com";    // must be a real mailbox on your domain
$site = "Airport City Neelambur";

// --- SMTP (optional but recommended). Create the mailbox in cPanel / your host,
//     then paste its password here. Leave 'pass' empty to use mail() only.
$smtp = [
    'host'   => 'mail.airportcityneelambur.com', // your host's outgoing mail server
    'port'   => 465,                              // 465 = SSL, 587 = TLS (STARTTLS)
    'secure' => 'ssl',                            // 'ssl' for 465, 'tls' for 587
    'user'   => 'noreply@airportcityneelambur.com',
    'pass'   => '',                               // <- mailbox password goes here
    'verify_cert' => false,                       // set true if your host has a valid certificate for the host name above
];

$minSecondsBetweenSends = 30;                     // simple flood limit per visitor
// ===========================


/* ---------- helpers ---------- */

// JSON for the website's script; a small page if JavaScript is off.
$wantsJson = stripos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false;

function respond(bool $ok, string $message, int $status = 200): void
{
    global $wantsJson;
    http_response_code($status);
    if ($wantsJson) {
        header('Content-Type: application/json; charset=UTF-8');
        header('Cache-Control: no-store');
        echo json_encode(['ok' => $ok, 'message' => $message], JSON_UNESCAPED_UNICODE);
    } else {
        header('Content-Type: text/html; charset=UTF-8');
        $m = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        $c = $ok ? '#173C32' : '#8a2b1c';
        echo '<!doctype html><html lang="en"><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">'
           . '<title>Airport City Neelambur</title>'
           . '<body style="font-family:system-ui,sans-serif;display:grid;place-items:center;min-height:100vh;margin:0;padding:1.5rem;background:#F2F0EC;color:#25282E">'
           . '<main style="max-width:28rem;text-align:center"><p style="font-size:1.15rem;line-height:1.6;color:' . $c . '">' . $m . '</p>'
           . '<p><a href="/" style="color:#1B2E4B">Back to the website</a></p></main></body></html>';
    }
    exit;
}

// One line only: strips tags, line breaks and control characters (blocks email-header injection).
function one_line(string $v, int $max): string
{
    $v = strip_tags($v);
    $v = preg_replace('/[\x00-\x1F\x7F]+/u', ' ', $v) ?? '';
    return mb_substr(trim($v), 0, $max);
}

// Minimal SMTP client. Returns [true, ''] or [false, 'reason'].
function smtp_deliver(array $c, array $recipients, string $from, string $data): array
{
    $remote = ($c['secure'] === 'ssl' ? 'ssl://' : 'tcp://') . $c['host'] . ':' . $c['port'];
    $ctx = stream_context_create(['ssl' => [
        'verify_peer'       => (bool)$c['verify_cert'],
        'verify_peer_name'  => (bool)$c['verify_cert'],
        'allow_self_signed' => !$c['verify_cert'],
    ]]);
    $fp = @stream_socket_client($remote, $errno, $errstr, 15, STREAM_CLIENT_CONNECT, $ctx);
    if (!$fp) {
        return [false, "connect failed: $errstr ($errno)"];
    }
    stream_set_timeout($fp, 15);

    $read = static function () use ($fp): string {
        $out = '';
        while (($line = fgets($fp, 515)) !== false) {
            $out .= $line;
            if (strlen($line) < 4 || $line[3] === ' ') {
                break;
            }
        }
        return $out;
    };
    $cmd = static function (string $line, array $okCodes) use ($fp, $read): array {
        if ($line !== '') {
            fwrite($fp, $line . "\r\n");
        }
        $resp = $read();
        $code = (int)substr($resp, 0, 3);
        return [in_array($code, $okCodes, true), trim($resp)];
    };

    $fail = static function (string $why) use ($fp): array {
        @fwrite($fp, "QUIT\r\n");
        @fclose($fp);
        return [false, $why];
    };

    [$ok, $r] = $cmd('', [220]);
    if (!$ok) return $fail("greeting: $r");

    $ehloHost = preg_replace('/[^A-Za-z0-9.\-]/', '', (string)($_SERVER['SERVER_NAME'] ?? 'localhost')) ?: 'localhost';
    [$ok, $r] = $cmd("EHLO $ehloHost", [250]);
    if (!$ok) return $fail("EHLO: $r");

    if ($c['secure'] === 'tls') {
        [$ok, $r] = $cmd('STARTTLS', [220]);
        if (!$ok) return $fail("STARTTLS: $r");
        $method = STREAM_CRYPTO_METHOD_TLS_CLIENT;
        if (defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) {
            $method = STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT;
        }
        if (defined('STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT')) {
            $method |= STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT;
        }
        if (!@stream_socket_enable_crypto($fp, true, $method)) return $fail('TLS handshake failed');
        [$ok, $r] = $cmd("EHLO $ehloHost", [250]);
        if (!$ok) return $fail("EHLO after TLS: $r");
    }

    if ($c['user'] !== '') {
        [$ok, $r] = $cmd('AUTH LOGIN', [334]);
        if (!$ok) return $fail("AUTH: $r");
        [$ok, $r] = $cmd(base64_encode($c['user']), [334]);
        if (!$ok) return $fail("AUTH user: $r");
        [$ok, $r] = $cmd(base64_encode($c['pass']), [235]);
        if (!$ok) return $fail("login rejected (check mailbox password): $r");
    }

    [$ok, $r] = $cmd("MAIL FROM:<$from>", [250]);
    if (!$ok) return $fail("MAIL FROM: $r");
    foreach ($recipients as $rcpt) {
        [$ok, $r] = $cmd("RCPT TO:<$rcpt>", [250, 251]);
        if (!$ok) return $fail("RCPT $rcpt: $r");
    }
    [$ok, $r] = $cmd('DATA', [354]);
    if (!$ok) return $fail("DATA: $r");

    $data = preg_replace("/\r\n|\r|\n/", "\r\n", $data) ?? $data;
    $data = preg_replace('/^\./m', '..', $data) ?? $data;      // dot-stuffing
    fwrite($fp, $data . "\r\n.\r\n");
    [$ok, $r] = $cmd('', [250]);
    if (!$ok) return $fail("message rejected: $r");

    @fwrite($fp, "QUIT\r\n");
    @fclose($fp);
    return [true, ''];
}


/* ---------- request checks ---------- */

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    respond(false, 'Invalid request.', 405);
}

// Honeypot: real visitors never fill this hidden field. Pretend success so bots move on.
if (trim((string)($_POST['website'] ?? '')) !== '') {
    respond(true, 'Thank you! Your enquiry has been sent.');
}

$name     = one_line((string)($_POST['name'] ?? ''), 100);
$phone    = one_line((string)($_POST['phone'] ?? ''), 20);
$email    = one_line((string)($_POST['email'] ?? ''), 120);
$interest = one_line((string)($_POST['interest'] ?? ''), 80);   // optional (only if your form has it)
$message  = trim(strip_tags((string)($_POST['message'] ?? '')));
$message  = mb_substr(str_replace("\0", '', $message), 0, 1000);

// Required: name + phone. Optional: email, message.
if ($name === '' || $phone === '') {
    respond(false, 'Please enter your name and phone number.', 422);
}
if (!preg_match('/^[0-9+()\-\s]{7,20}$/', $phone)) {
    respond(false, 'Please enter a valid phone number.', 422);
}
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Please check your email address.', 422);
}

// Flood limit, kept in the server's temp folder.
$stamp = sys_get_temp_dir() . '/acn_form_' . md5(($_SERVER['REMOTE_ADDR'] ?? 'x') . '|' . ($_SERVER['HTTP_USER_AGENT'] ?? ''));
if (is_file($stamp) && (time() - (int)@filemtime($stamp)) < $minSecondsBetweenSends) {
    respond(false, 'Please wait a moment before sending another enquiry.', 429);
}


/* ---------- build the email ---------- */

$subject = 'New site-visit enquiry - ' . $name;
$body  = "You received a new enquiry from the $site website.\n\n";
$body .= "Name:   $name\n";
$body .= "Phone:  $phone\n";
$body .= 'Email:  ' . ($email !== '' ? $email : '-') . "\n";
if ($interest !== '') {
    $body .= "Looking for: $interest\n";
}
$body .= "\nMessage:\n" . ($message !== '' ? $message : '-') . "\n\n";
$body .= 'Sent: ' . date('d M Y, h:i A') . " (server time)\n";

$recipients = array_values(array_filter(array_map('trim', explode(',', $to)), static fn($a) => filter_var($a, FILTER_VALIDATE_EMAIL)));
if (!$recipients) {
    error_log('send.php: no valid recipient in $to');
    respond(false, 'The form is not set up correctly. Please call us on +91 90039 75968.', 500);
}

$encSubject = mb_encode_mimeheader($subject, 'UTF-8');

$common  = "MIME-Version: 1.0\r\n";
$common .= "Content-Type: text/plain; charset=UTF-8\r\n";
$common .= "Content-Transfer-Encoding: 8bit\r\n";
$common .= "From: $site <$from>\r\n";
if ($email !== '') {
    $common .= 'Reply-To: ' . mb_encode_mimeheader($name, 'UTF-8') . " <$email>\r\n";
}


/* ---------- send ---------- */

$sent = false;

// 1) SMTP
if ($smtp['pass'] !== '') {
    $domain  = substr(strrchr($from, '@') ?: '@localhost', 1);
    $data  = 'Date: ' . date('r') . "\r\n";
    $data .= 'Message-ID: <' . bin2hex(random_bytes(12)) . '@' . $domain . ">\r\n";
    $data .= 'To: ' . implode(', ', $recipients) . "\r\n";
    $data .= "Subject: $encSubject\r\n";
    $data .= $common . "\r\n" . $body;
    [$sent, $why] = smtp_deliver($smtp, $recipients, $from, $data);
    if (!$sent) {
        error_log("send.php: SMTP failed ($why) - trying mail()");
    }
}

// 2) PHP mail() fallback (same method as the old send.php)
if (!$sent) {
    $sent = mail(implode(', ', $recipients), $encSubject, $body, rtrim($common, "\r\n"), '-f' . $from);
}

if ($sent) {
    @touch($stamp);
    respond(true, 'Thank you! Your enquiry has been sent. Our team will call you shortly.');
}

error_log('send.php: enquiry could not be sent (SMTP and mail() both failed)');
respond(false, 'Sorry, we could not send your enquiry. Please call us on +91 90039 75968.', 500);