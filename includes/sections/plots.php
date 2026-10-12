<section id="plots" class="relative overflow-hidden bg-porcelain py-28 md:py-44" aria-labelledby="plots-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-14 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-6">
        <p class="eyebrow" data-fade>Plots &amp; layout</p>
        <h2 id="plots-title" class="mt-6 font-display text-[clamp(2.5rem,5.2vw,4.9rem)] font-light leading-[1.02] text-navy">
          <span class="mask"><span class="mask-in" data-line>Explore thoughtfully</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>planned plots.</span></span>
        </h2>
      </div>
      <p class="max-w-md font-light leading-[1.8] text-ink/85 md:col-span-4 md:col-start-9 md:self-end" data-fade>
        A premium setting to build your dream home in one of Coimbatore’s well-connected and growing locations. Our team will share current plot availability and guide you to the one that fits.
      </p>
    </div>

    <figure class="reveal relative mt-16 md:mt-24 md:w-[88%]">
      <div class="absolute -bottom-4 -right-4 hidden h-full w-full border border-copper md:block"></div>
      <button type="button" class="relative block w-full overflow-hidden bg-porcelain-200" data-lightbox="layout" aria-label="Open the plots and layout image full size">
        <?= img('layout', 'parallax-img h-auto w-full', ['sizes' => '(min-width:768px) 85vw, 100vw']) ?>
      </button>
      <figcaption class="mt-6 text-[.66rem] uppercase tracking-[.28em] text-ink/60">Layout options — Airport City Neelambur</figcaption>
    </figure>

    <ol class="mt-28 grid gap-x-8 gap-y-14 md:mt-40 md:grid-cols-4" aria-label="How to choose your plot">
      <?php foreach ($steps as $i => $s): ?>
        <li class="relative border-t border-ink/20 pt-8 <?= ['', 'md:mt-14', 'md:mt-28', 'md:mt-44'][$i] ?>" data-fade>
          <span class="font-display text-[5.5rem] font-light italic leading-none text-copper/70"><?= $i + 1 ?></span>
          <h3 class="mt-4 font-display text-[1.9rem] font-light leading-tight text-navy"><?= e($s[0]) ?></h3>
          <p class="mt-4 text-[.95rem] font-light leading-[1.75] text-ink/80"><?= e($s[1]) ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
