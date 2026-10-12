<?php $roman = ['i', 'ii', 'iii', 'iv', 'v', 'vi']; ?>
<section id="project" class="relative bg-navy-900 text-porcelain" aria-labelledby="project-title">
  <div class="mx-auto max-w-[1500px] px-6 py-28 md:px-12 md:py-44">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">

      <div class="md:col-span-5 md:sticky md:top-32 md:self-start">
        <p class="eyebrow text-copper-light" data-fade>Why choose Airport City</p>
        <h2 id="project-title" class="mt-6 font-display text-[clamp(2.3rem,4.6vw,4.3rem)] font-light leading-[1.04]">
          <span class="mask"><span class="mask-in" data-line>Everything you need</span></span>
          <span class="mask"><span class="mask-in" data-line>to make your land</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>investment feel complete.</span></span>
        </h2>
        <p class="mt-8 max-w-md font-light leading-[1.8] text-porcelain/80" data-fade>
          A good residential plot should give you more than a location. It should give you connectivity, infrastructure, security, community and confidence. Airport City brings these essentials together in a thoughtfully planned residential environment at Neelambur.
        </p>

        <div class="mt-12 max-w-md" data-fade>
          <div class="relative aspect-[16/10] overflow-hidden bg-navy-950" data-video>
            <?= img('g5', 'h-full w-full object-cover opacity-80', ['sizes' => '(min-width:768px) 36vw, 90vw']) ?>
            <button type="button" class="group absolute inset-0 flex items-center justify-center gap-4 text-[.7rem] uppercase tracking-[.28em]" data-video-play="<?= e($site['video_id']) ?>" aria-label="Play the Airport City film">
              <span class="flex h-16 w-16 items-center justify-center rounded-full border border-copper bg-navy-950/50 transition-colors duration-500 group-hover:bg-copper group-hover:text-ink">
                <svg viewBox="0 0 24 24" class="ml-1 h-5 w-5 fill-current" aria-hidden="true"><path d="M7 4.5v15l13-7.5z"/></svg>
              </span>
              <span>Watch the film</span>
            </button>
          </div>
        </div>
      </div>

      <ol class="md:col-span-6 md:col-start-7" aria-label="Project credentials">
        <?php foreach ($credentials as $i => $c): ?>
          <li class="group relative border-t border-porcelain/15 py-9 last:border-b md:py-12" data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-8 shrink-0 font-display text-2xl italic text-copper-light md:w-10"><?= e($roman[$i]) ?>.</span>
              <div class="transition-transform duration-700 ease-out group-hover:translate-x-3">
                <h3 class="font-display text-[clamp(1.7rem,3vw,2.6rem)] font-light leading-tight"><?= e($c[0]) ?></h3>
                <p class="mt-2 max-w-sm text-sm font-light leading-relaxed text-porcelain/65"><?= e($c[1]) ?></p>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>

<section id="amenities" class="relative overflow-hidden bg-porcelain-200 py-28 md:py-44" aria-labelledby="amenities-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">

      <div class="md:col-span-4">
        <p class="eyebrow" data-fade>World-class amenities</p>
        <h2 id="amenities-title" class="mt-6 font-display text-[clamp(2.3rem,4.4vw,4.1rem)] font-light leading-[1.04] text-navy">
          <span class="mask"><span class="mask-in" data-line>Designed for the</span></span>
          <span class="mask"><span class="mask-in" data-line>way you want</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>to live.</span></span>
        </h2>
        <p class="mt-8 font-light leading-[1.8] text-ink/85" data-fade>At Airport City, every element is planned to make the community more functional, comfortable and enjoyable — from the roads you drive on to the spaces where families spend time together.</p>

        <h3 class="mt-14 text-[.68rem] uppercase tracking-[.3em] text-navy" data-fade>Planned for better living</h3>
        <ul class="mt-5 space-y-3 border-l border-copper pl-6 text-[.95rem] font-light text-ink/85">
          <?php foreach ($planning as $p): ?><li data-fade><?= e($p) ?></li><?php endforeach; ?>
        </ul>

        <a href="#contact" class="link-line mt-12 inline-flex items-center gap-3 text-[.72rem] uppercase tracking-[.26em] text-navy" data-fade>Book a site visit <span aria-hidden="true">→</span></a>
      </div>

      <ol class="md:col-span-7 md:col-start-6" aria-label="Amenities">
        <?php foreach ($amenities as $i => $a): ?>
          <li class="amenity group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 <?= $i % 2 ? 'md:pl-16' : '' ?>" data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2"><?= e($a) ?></span>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>

<div class="relative h-[55vh] min-h-[22rem] overflow-hidden bg-navy-950 md:h-[75vh]" aria-hidden="false">
  <?= img('g4', 'parallax-img absolute left-0 top-[-12%] h-[124%] w-full object-cover', ['sizes' => '100vw']) ?>
  <div class="absolute inset-0 bg-navy-950/25"></div>
</div>
