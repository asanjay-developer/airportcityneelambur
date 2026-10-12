<section id="about" class="relative overflow-hidden bg-porcelain py-28 md:py-44" aria-labelledby="about-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">

      <div class="relative md:col-span-5">
        <span class="pointer-events-none absolute -left-4 -top-16 select-none font-display text-[clamp(9rem,22vw,20rem)] font-light italic leading-none text-copper/20 md:-left-10 md:-top-24" aria-hidden="true" data-parallax-y="-12">110</span>
        <figure class="reveal relative ml-auto w-[88%] md:w-[85%]">
          <div class="relative aspect-[4/5] overflow-hidden bg-porcelain-200">
            <?= img('g1', 'parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover', ['sizes' => '(min-width:768px) 40vw, 90vw']) ?>
          </div>
          <figcaption class="mt-4 flex items-center gap-3 text-[.66rem] uppercase tracking-[.28em] text-ink/60">
            <span class="h-px w-8 bg-copper"></span>110 premium residential plots
          </figcaption>
        </figure>
      </div>

      <div class="md:col-span-6 md:col-start-7 md:pt-40">
        <p class="eyebrow" data-fade>Welcome to Airport City</p>
        <h2 id="about-title" class="mt-6 font-display text-[clamp(2.4rem,5vw,4.6rem)] font-light leading-[1.02] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>More than a plot.</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>A place to build</span></span>
          <span class="mask"><span class="mask-in" data-line>your tomorrow.</span></span>
        </h2>

        <div class="mt-10 max-w-xl space-y-5 text-[1.02rem] font-light leading-[1.8] text-ink/85">
          <p data-fade>Buying land is not simply about owning a piece of property. It is about choosing where your family will grow, where your home will stand and where your investment can create value over time.</p>
          <p data-fade>Airport City is a premium residential plotted development located in Neelambur, Coimbatore, planned for people who want the advantages of connectivity without giving up the comfort of community living.</p>
          <p data-fade>Spread across approximately 6.39 acres, the development features 110 premium residential plots with planned infrastructure, internal roads, security, landscaped spaces and lifestyle amenities.</p>
        </div>

        <div class="mt-14 grid max-w-xl gap-10 border-t border-ink/15 pt-10 sm:grid-cols-2">
          <div data-fade>
            <h3 class="font-display text-3xl font-light italic text-navy">Our Mission.</h3>
            <p class="mt-3 text-[.95rem] font-light leading-relaxed text-ink/80">Making quality residential land ownership simpler, safer and more meaningful.</p>
          </div>
          <div data-fade>
            <h3 class="font-display text-3xl font-light italic text-navy">Our Vision.</h3>
            <p class="mt-3 text-[.95rem] font-light leading-relaxed text-ink/80">Creating a well-planned community where families can build their future with confidence.</p>
          </div>
        </div>

        <a href="#project" class="link-line mt-12 inline-flex items-center gap-3 text-[.72rem] uppercase tracking-[.26em] text-navy" data-fade>Explore Airport City <span aria-hidden="true">→</span></a>
      </div>
    </div>

    <dl class="mt-28 grid grid-cols-2 border-y border-ink/15 md:mt-40 md:grid-cols-4">
      <?php foreach ($facts as $i => $f): ?>
        <div class="px-2 py-10 md:px-8 <?= $i > 0 ? 'md:border-l md:border-ink/15' : '' ?> <?= $i % 2 === 1 ? 'border-l border-ink/15 md:border-l' : '' ?> <?= $i > 1 ? 'border-t border-ink/15 md:border-t-0' : '' ?>" data-fade>
          <dt class="order-2 text-[.66rem] uppercase tracking-[.28em] text-ink/60"><?= e($f['label']) ?></dt>
          <dd class="mt-3 font-display text-[clamp(2.8rem,5vw,4.6rem)] font-light leading-none text-navy">
            <?php if (is_numeric($f['value'])): ?>
              <span data-count="<?= e($f['value']) ?>" data-decimals="<?= str_contains($f['value'], '.') ? 2 : 0 ?>"><?= e($f['value']) ?></span>
            <?php else: ?><?= e($f['value']) ?><?php endif; ?>
            <?php if ($f['unit']): ?><span class="text-xl italic text-copper"><?= e($f['unit']) ?></span><?php endif; ?>
          </dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>
