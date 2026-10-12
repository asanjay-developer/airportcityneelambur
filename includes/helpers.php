<?php
declare(strict_types=1);

/** HTML-escape. */
function e(string $v): string
{
    return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Resolve an image key to a URL: local assets/img/<file> wins, else the original site's upload. */
function img_url(string $key): string
{
    global $images, $imageHost;
    $i = $images[$key];
    if (is_file(__DIR__ . '/../assets/img/' . $i['file'])) {
        return 'assets/img/' . rawurlencode($i['file']);
    }
    return $imageHost . $i['path'] . rawurlencode($i['file']);
}

/**
 * Render an <img>. $extra is an associative array of additional attributes.
 * Images are lazy by default; pass ['loading' => 'eager', 'fetchpriority' => 'high'] for the hero.
 */
function img(string $key, string $class = '', array $extra = []): string
{
    global $images;
    $i = $images[$key];
    $attrs = array_merge([
        'src'      => img_url($key),
        'alt'      => $i['alt'],
        'width'    => (string) $i['w'],
        'height'   => (string) $i['h'],
        'loading'  => 'lazy',
        'decoding' => 'async',
        'class'    => $class,
    ], $extra);
    $out = '';
    foreach ($attrs as $k => $v) {
        $out .= ' ' . $k . '="' . e((string) $v) . '"';
    }
    return '<img' . $out . '>';
}

/** Include a section partial with access to the shared site data. */
function section(string $name): void
{
    global $site, $images, $nav, $facts, $credentials, $amenities, $planning, $distances, $steps, $faqs, $interests;
    require __DIR__ . '/sections/' . $name . '.php';
}
