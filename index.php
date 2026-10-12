<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/helpers.php';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';

foreach (['hero', 'about', 'project', 'location', 'plots', 'gallery', 'faq', 'contact'] as $s) {
    section($s);
}

require __DIR__ . '/includes/footer.php';
