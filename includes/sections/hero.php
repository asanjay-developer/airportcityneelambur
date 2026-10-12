<section id="top" class="relative isolate min-h-[100svh] overflow-hidden bg-navy-950 text-porcelain" aria-labelledby="hero-title">
  <div class="absolute inset-0 -z-10 overflow-hidden" data-hero-media>
    <?= img('entrance', 'absolute inset-0 h-full w-full object-cover', ['loading' => 'eager', 'fetchpriority' => 'high', 'data-hero-img' => '', 'sizes' => '100vw']) ?>
    <div class="absolute inset-0 bg-navy-950/55"></div>
    <div class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-navy-950/70 to-transparent"></div>
  </div>

  <div class="mx-auto grid min-h-[100svh] max-w-[1500px] grid-cols-12 gap-x-6 px-6 pb-14 pt-32 md:px-12 md:pb-16">
    <div class="col-span-12 flex flex-col justify-end md:col-span-9">
      <p class="mb-8 flex items-center gap-4 text-[.7rem] uppercase tracking-[.38em] text-copper-light" data-hero-fade>
        <span class="h-px w-12 bg-copper"></span>Neelambur · Coimbatore
      </p>
      <h1 id="hero-title" class="font-display text-[clamp(3.2rem,8.6vw,9rem)] font-light leading-[.95] tracking-[-.015em]">
        <span class="mask"><span class="mask-in" data-hero-line>Connecting</span></span>
        <span class="mask md:pl-[9vw]"><span class="mask-in italic text-copper-light" data-hero-line>Lifestyle,</span></span>
        <span class="mask"><span class="mask-in" data-hero-line>Building Futures.</span></span>
      </h1>
      <p class="mt-10 max-w-md text-[.95rem] font-light leading-relaxed text-porcelain/85" data-hero-fade>
        A premium residential plotted development along the Avinashi Main Road corridor, with convenient access to Coimbatore’s airport, education, healthcare and business hubs.
      </p>
      <div class="mt-10 flex flex-wrap items-center gap-x-10 gap-y-5" data-hero-fade>
        <a href="#contact" class="group inline-flex items-center gap-4 border border-copper px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-ink">
          Book a site visit <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span>
        </a>
        <a href="#about" class="link-line text-[.72rem] uppercase tracking-[.24em]">Discover the project</a>
      </div>
    </div>

    <aside class="relative hidden md:col-span-3 md:col-start-10 md:flex md:flex-col md:justify-between" aria-label="Project at a glance">
      <ul class="ml-auto space-y-7 text-right" data-hero-fade>
        <?php foreach ($facts as $f): ?>
          <li>
            <p class="font-display text-5xl font-light leading-none"><?= e($f['value']) ?><?php if ($f['unit']): ?> <span class="text-xl italic text-copper-light"><?= e($f['unit']) ?></span><?php endif; ?></p>
            <p class="mt-2 text-[.66rem] uppercase tracking-[.28em] text-porcelain/70"><?= e($f['label']) ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="relative ml-auto mt-10 w-full max-w-[19rem]" data-hero-inset>
        <div class="absolute -right-3 -top-3 h-full w-full border border-copper/70"></div>
        <div class="relative aspect-[4/3] overflow-hidden bg-navy-900">
          <?= img('arch', 'h-full w-full object-cover', ['loading' => 'eager', 'sizes' => '300px']) ?>
        </div>
      </div>
    </aside>
  </div>

  <a href="#about" class="absolute bottom-6 left-1/2 hidden -translate-x-1/2 flex-col items-center gap-3 text-[.62rem] uppercase tracking-[.4em] text-porcelain/70 lg:flex" aria-label="Scroll to About">
    Scroll <span class="relative block h-12 w-px overflow-hidden bg-porcelain/20"><span class="scroll-cue absolute inset-x-0 top-0 h-1/2 bg-copper"></span></span>
  </a>
</section>
