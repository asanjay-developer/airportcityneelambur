<?php
/**
 * Minimal enquiry handler: validates, then emails the sales inbox with PHP's mail().
 * No database, no stored data. Honeypot field "website" filters basic bots.
 */
declare(strict_types=1);

require __DIR__ . '/includes/config.php';

function back(string $status): never
{
    $dir = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/\\');
    header('Location: ' . $dir . '/?status=' . $status . '#contact', true, 303);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    back('error');
}
if (trim((string) ($_POST['website'] ?? '')) !== '') {
    back('sent'); // silently drop bots
}

$clean = static fn (string $k, int $max): string =>
    mb_substr(trim(preg_replace('/[\r\n]+/', ' ', (string) ($_POST[$k] ?? ''))), 0, $max);

$name     = $clean('name', 100);
$phone    = $clean('phone', 20);
$email    = $clean('email', 120);
$interest = $clean('interest', 60);
$message  = mb_substr(trim((string) ($_POST['message'] ?? '')), 0, 1000);

if ($name === '' || !preg_match('/^[0-9+()\-\s]{7,20}$/', $phone) || ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL))) {
    back('error');
}

$body = "New site-visit enquiry\n\nName: $name\nPhone: $phone\nEmail: " . ($email ?: '-') . "\nLooking for: " . ($interest ?: '-') . "\n\nMessage:\n" . ($message ?: '-') . "\n";

$headers = [
    'From' => 'Airport City Website <no-reply@airportcityneelambur.com>',
    'Content-Type' => 'text/plain; charset=UTF-8',
];
if ($email !== '') {
    $headers['Reply-To'] = $email;
}

$ok = mail($site['form_to'], 'Site visit enquiry — ' . $name, $body, $headers);
back($ok ? 'sent' : 'error');
