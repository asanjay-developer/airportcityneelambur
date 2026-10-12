<?php
$ld = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'     => 'Organization',
            '@id'       => $site['url'] . '#org',
            'name'      => $site['name'],
            'url'       => $site['url'],
            'logo'      => img_url('logo'),
            'email'     => $site['emails'][0],
            'telephone' => $site['phones'][0]['tel'],
            'address'   => [
                '@type'           => 'PostalAddress',
                'addressLocality' => 'Neelambur, Coimbatore',
                'addressRegion'   => 'Tamil Nadu',
                'postalCode'      => '641407',
                'addressCountry'  => 'IN',
            ],
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => array_map(static fn ($f) => [
                '@type' => 'Question',
                'name'  => $f[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
            ], $faqs),
        ],
    ],
];
?>
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($site['title']) ?></title>
  <meta name="description" content="<?= e($site['description']) ?>">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <meta name="theme-color" content="#13223A">
  <link rel="canonical" href="<?= e($site['url']) ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= e($site['name']) ?>">
  <meta property="og:title" content="<?= e($site['title']) ?>">
  <meta property="og:description" content="<?= e($site['description']) ?>">
  <meta property="og:url" content="<?= e($site['url']) ?>">
  <meta property="og:image" content="<?= e(img_url('entrance')) ?>">
  <meta property="og:locale" content="<?= e($site['locale']) ?>">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="icon" href="<?= e(img_url('logo')) ?>">
  <link rel="preload" href="assets/fonts/bodoni-moda-latin-400-normal.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="assets/fonts/dm-sans-latin-400-normal.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" as="image" href="<?= e(img_url('entrance')) ?>" fetchpriority="high">
  <script>
    (function(d){d.classList.add('js');
      if(window.matchMedia&&matchMedia('(prefers-reduced-motion: reduce)').matches){d.classList.add('rm');}
    })(document.documentElement);
  </script>
  <link rel="stylesheet" href="assets/css/app.css?v=1">
  <script type="application/ld+json"><?= json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body class="bg-porcelain text-ink font-sans antialiased selection:bg-copper/40">
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:bg-porcelain focus:px-4 focus:py-2 focus:text-navy">Skip to content</a>
