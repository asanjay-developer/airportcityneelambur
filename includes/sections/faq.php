<section id="faq" class="bg-porcelain-200 py-28 md:py-40" aria-labelledby="faq-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-14 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-4">
        <p class="eyebrow" data-fade>To know more about the location</p>
        <h2 id="faq-title" class="mt-6 font-display text-[clamp(2.3rem,4.4vw,4.1rem)] font-light leading-[1.04] text-navy">
          <span class="mask"><span class="mask-in" data-line>Find your place</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>in Neelambur.</span></span>
        </h2>
      </div>
      <div class="md:col-span-7 md:col-start-6">
        <?php foreach ($faqs as $i => $f): ?>
          <details class="faq group border-t border-ink/20 last:border-b" data-fade <?= $i === 0 ? 'open' : '' ?>>
            <summary class="flex cursor-pointer list-none items-start justify-between gap-8 py-7 font-display text-[clamp(1.3rem,2.2vw,1.8rem)] font-light leading-snug text-navy marker:content-none [&::-webkit-details-marker]:hidden">
              <span><?= e($f[0]) ?></span>
              <span class="mt-1 font-sans text-2xl font-extralight text-copper transition-transform duration-500 group-open:rotate-45" aria-hidden="true">+</span>
            </summary>
            <p class="max-w-2xl pb-8 font-light leading-[1.8] text-ink/80"><?= e($f[1]) ?></p>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
