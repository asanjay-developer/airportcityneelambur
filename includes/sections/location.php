<?php $max = max(array_column($distances, 1)); ?>
<section id="location" class="relative overflow-hidden bg-ink py-28 text-porcelain md:py-44" aria-labelledby="location-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-20 md:grid-cols-12 md:gap-x-10">

      <div class="md:col-span-5">
        <p class="eyebrow text-copper-light" data-fade>Location advantage</p>
        <h2 id="location-title" class="mt-6 font-display text-[clamp(2.5rem,5.2vw,4.9rem)] font-light leading-[1.02]">
          <span class="mask"><span class="mask-in" data-line>Neelambur.</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>Connected to</span></span>
          <span class="mask"><span class="mask-in" data-line>what matters.</span></span>
        </h2>
        <p class="mt-8 max-w-md font-light leading-[1.8] text-porcelain/80" data-fade>The right location can make a difference to both your lifestyle and the long-term value of your property.</p>
        <p class="mt-5 max-w-md font-light leading-[1.8] text-porcelain/80" data-fade>Airport City is strategically located in Neelambur, Coimbatore, along the Avinashi Main Road corridor, giving residents convenient connectivity to the airport, hospitals, educational institutions, hotels, transport hubs and major employment destinations.</p>

        <dl class="mt-12 max-w-md space-y-7 border-t border-porcelain/15 pt-10">
          <div data-fade><dt class="font-display text-2xl italic text-copper-light">Close to Coimbatore Airport</dt><dd class="mt-1 text-sm font-light text-porcelain/70">Convenient access to Coimbatore International Airport for residents and frequent travellers.</dd></div>
          <div data-fade><dt class="font-display text-2xl italic text-copper-light">Excellent road connectivity</dt><dd class="mt-1 text-sm font-light text-porcelain/70">Easy access to Avinashi Road and major routes towards the city and surrounding areas.</dd></div>
          <div data-fade><dt class="font-display text-2xl italic text-copper-light">Fast-growing neighbourhood</dt><dd class="mt-1 text-sm font-light text-porcelain/70">Neelambur continues to attract residential and commercial development.</dd></div>
        </dl>

        <a href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener" class="group mt-12 inline-flex items-center gap-4 border border-copper px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-ink" data-fade>
          Get directions to Airport City <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">↗</span><span class="sr-only">(opens in a new tab)</span>
        </a>
      </div>

      <div class="md:col-span-6 md:col-start-7 md:pt-24">
        <h3 class="mb-2 flex items-center justify-between text-[.68rem] uppercase tracking-[.3em] text-porcelain/60"><span>Distance from the project</span><span>km</span></h3>
        <ul>
          <?php foreach ($distances as $d): ?>
            <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
              <div class="flex items-baseline justify-between gap-6">
                <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug"><?= e($d[0]) ?></span>
                <span class="shrink-0 font-display text-3xl italic text-copper-light"><?= rtrim(rtrim(number_format((float) $d[1], 2), '0'), '.') ?></span>
              </div>
              <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
                <div class="dist-bar h-px origin-left bg-copper" style="width: <?= round($d[1] / $max * 100, 1) ?>%"></div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
