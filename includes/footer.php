</main>

<footer class="relative overflow-hidden bg-ink-950 text-porcelain/80">
  <div class="mx-auto max-w-[1500px] px-6 pb-10 pt-24 md:px-12 md:pt-32">
    <p class="font-display text-[clamp(3.5rem,13vw,13rem)] font-light uppercase leading-[.85] tracking-[.04em] text-porcelain/[.06]" aria-hidden="true">Airport City</p>

    <div class="mt-[-1.5rem] grid gap-14 md:mt-[-3.5rem] md:grid-cols-12">
      <div class="md:col-span-5">
        <p class="font-display text-3xl font-light uppercase tracking-[.24em] text-porcelain">Airport City</p>
        <p class="mt-6 max-w-sm text-sm font-light leading-relaxed">Airport City is a thoughtfully planned residential community in Neelambur, Coimbatore, offering a well-connected address for building your dream home and securing your future.</p>
      </div>

      <div class="md:col-span-3 md:col-start-7">
        <h2 class="text-[.68rem] uppercase tracking-[.3em] text-copper-light">Company Information</h2>
        <address class="mt-6 space-y-4 text-sm font-light not-italic leading-relaxed">
          <p>Project Location<br><?= e($site['address'][0]) ?>,<br><?= e($site['address'][1]) ?></p>
          <p>
            <?php foreach ($site['emails'] as $m): ?>
              <a class="block hover:text-copper" href="mailto:<?= e($m) ?>"><?= e($m) ?></a>
            <?php endforeach; ?>
          </p>
          <p>
            <?php foreach ($site['phones'] as $p): ?>
              <a class="block hover:text-copper" href="tel:<?= e($p['tel']) ?>"><?= e($p['display']) ?></a>
            <?php endforeach; ?>
          </p>
        </address>
      </div>

      <div class="md:col-span-2">
        <h2 class="text-[.68rem] uppercase tracking-[.3em] text-copper-light">Explore</h2>
        <ul class="mt-6 space-y-3 text-sm font-light">
          <?php foreach ($nav as $n): ?>
            <li><a class="hover:text-copper" href="#<?= e($n['id']) ?>"><?= e($n['label']) ?></a></li>
          <?php endforeach; ?>
          <li><a class="hover:text-copper" href="#faq">FAQs</a></li>
        </ul>
      </div>

      <div class="md:col-span-2 md:col-start-11 md:row-start-1 md:-mt-0">
        <h2 class="text-[.68rem] uppercase tracking-[.3em] text-copper-light">Legal</h2>
        <ul class="mt-6 space-y-3 text-sm font-light">
          <li><a class="hover:text-copper" href="<?= e($site['privacy_url']) ?>" rel="noopener">Privacy Policy</a></li>
        </ul>
      </div>
    </div>

    <div class="mt-20 flex flex-col gap-3 border-t border-porcelain/10 pt-8 text-xs font-light tracking-wide md:flex-row md:justify-between">
      <p>© <?= e((string) $site['year']) ?> <?= e($site['name']) ?>. All rights reserved.</p>
      <a href="#top" class="uppercase tracking-[.25em] hover:text-copper" data-top>Back to top ↑</a>
    </div>
  </div>
</footer>

<a href="tel:<?= e($site['phones'][0]['tel']) ?>" class="fixed bottom-5 right-5 z-40 flex items-center gap-3 bg-navy px-5 py-3 text-[.7rem] uppercase tracking-[.22em] text-porcelain shadow-[0_10px_30px_-10px_rgba(0,0,0,.5)] transition-colors hover:bg-copper md:hidden">
  <span class="h-px w-5 bg-copper"></span>Call us
</a>

<?php if (is_file(__DIR__ . '/../assets/js/vendor/lenis.min.js')): ?>
<script src="assets/js/vendor/lenis.min.js" defer></script>
<?php endif; ?>
<script src="assets/js/vendor/gsap.min.js" defer></script>
<script src="assets/js/vendor/ScrollTrigger.min.js" defer></script>
<script src="assets/js/app.js?v=1" defer></script>
</body>
</html>
