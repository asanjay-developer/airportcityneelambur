# Airport City Neelambur — bespoke site (PHP + Tailwind + GSAP)

## Run locally
    php -S localhost:8000
Requires PHP 8.1+. No database, no admin, no Node at runtime.

## Structure
    index.php                 page assembly
    contact.php               enquiry handler (PHP mail(), honeypot, no storage)
    includes/config.php       ALL copy, contacts, distances, image list (edit here)
    includes/helpers.php      e(), img(), section()
    includes/head|header|footer.php
    includes/sections/*.php   hero, about, project(+amenities), location, plots, gallery, faq, contact
    src/input.css             Tailwind source (fonts, small component classes)
    assets/css/app.css        built CSS (committed)
    assets/js/app.js          interactions + GSAP/ScrollTrigger + Lenis
    assets/js/vendor/         gsap, ScrollTrigger, lenis (self-hosted)
    assets/fonts/             Bodoni Moda + DM Sans (self-hosted woff2)

## Rebuild CSS (only if you change classes)
    npm i -D tailwindcss@3 && npm run build

## Images
Photos currently load from the original site's /wp-content/uploads/ URLs.
For speed and independence, download them and drop them into assets/img/ using
the same file names listed in includes/config.php; they are picked up automatically.

## Before launch
- Set the real RERA / DTCP numbers if you want them shown (not published on the original page).
- Social links were "#" placeholders on the original; none are shown. Add to config + footer.
- Test the contact form on your host (mail() must be enabled) or swap to SMTP.
