<?php include_once '_templates/_head.php' ?>
<body class="bg-porcelain text-ink font-sans antialiased selection:bg-copper/40">
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:bg-porcelain focus:px-4 focus:py-2 focus:text-navy">Skip to content</a>
<header id="site-header" class="fixed inset-x-0 top-0 z-50 text-porcelain transition-[background-color,color,transform] duration-500 data-[solid=true]:bg-porcelain/95 data-[solid=true]:text-ink data-[solid=true]:shadow-[0_1px_0_rgba(35,34,31,.08)] data-[hidden=true]:-translate-y-full" data-solid="false" data-hidden="false">
  <div class="mx-auto flex max-w-[1500px] items-center justify-between px-6 py-5 md:px-12 md:py-6">
    <a href="index.php" class="group flex shrink-0 items-baseline gap-3 whitespace-nowrap" aria-label="Airport City Neelambur — home">
      <span class="font-display text-2xl font-light uppercase tracking-[.28em] md:text-[1.7rem]">Airport City</span>
      <span class="hidden h-px w-8 bg-copper transition-all duration-500 group-hover:w-14 2xl:block"></span>
      <span class="hidden text-[.65rem] font-light uppercase tracking-[.3em] opacity-80 2xl:block">Neelambur</span>
    </a>

			<?php include_once '_templates/_navbar.php' ?>
  </div>
</header>

<?php include_once '_templates/_mob_navbar.php' ?>

<main id="main">

<!-- ============================ HERO ============================ -->
<section id="top" class="relative isolate overflow-hidden bg-navy-950 text-porcelain" aria-labelledby="about-title">
  <div class="absolute inset-0 -z-10 overflow-hidden" data-hero-media>
    <img src="assets/img/IMG_0580-1260x680.webp" alt="Airport City Neelambur — site photograph 5" width="1260" height="680" loading="eager" decoding="async" class="absolute inset-0 h-full w-full object-cover" fetchpriority="high" data-hero-img="" sizes="100vw">    <div class="absolute inset-0 bg-navy-950/60"></div>
    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-navy-950/80 to-transparent"></div>
  </div>

  <div class="mx-auto grid min-h-[88svh] max-w-[1500px] grid-cols-12 gap-x-6 px-6 pb-14 pt-36 md:px-12 md:pb-16">
    <div class="col-span-12 flex flex-col justify-end md:col-span-9">
      <nav aria-label="Breadcrumb" class="mb-8" data-hero-fade>
        <ol class="flex items-center gap-4 text-[.7rem] uppercase tracking-[.34em] text-copper-light">
          <li><a href="index.php" class="link-line">Home</a></li>
          <li aria-hidden="true" class="h-px w-8 bg-copper"></li>
          <li aria-current="page" class="text-porcelain/80">About</li>
        </ol>
      </nav>

      <h1 id="about-title" class="font-display text-[clamp(3.2rem,9vw,9.5rem)] font-light leading-[.95] tracking-[-.015em]">
        <span class="mask"><span class="mask-in" data-hero-line>About</span></span>
        <span class="mask md:pl-[9vw]"><span class="mask-in italic text-copper-light" data-hero-line>Airport City</span></span>
        <span class="mask"><span class="mask-in" data-hero-line>Neelambur</span></span>
      </h1>

      <p class="mt-10 max-w-md text-[.95rem] font-light leading-relaxed text-porcelain/85" data-hero-fade>
        A premium residential villa plot community in Neelambur, Coimbatore.
      </p>

      <div class="mt-10 flex flex-wrap items-center gap-x-10 gap-y-5" data-hero-fade>
        <a href="index.html#contact" class="group inline-flex items-center gap-4 border border-copper-light px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-porcelain">
          Book a site visit <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span>
        </a>
        <a href="index.html#project" class="link-line text-[.72rem] uppercase tracking-[.24em]">Explore the project</a>
      </div>
    </div>

    <aside class="hidden md:col-span-3 md:col-start-10 md:flex md:flex-col md:justify-end" aria-hidden="true">
      <div class="relative ml-auto w-full max-w-[17rem]" data-hero-inset>
        <div class="absolute -right-3 -top-3 h-full w-full border border-copper-light/70"></div>
        <div class="relative aspect-[4/5] overflow-hidden bg-navy-900">
          <img src="assets/img/playground.webp" alt="" width="1000" height="1000" loading="eager" decoding="async" class="h-full w-full object-cover" sizes="280px">        </div>
      </div>
    </aside>
  </div>
</section>

<!-- ============================ INTRO ============================ -->
<section id="intro" class="relative overflow-hidden bg-porcelain py-28 md:py-44" aria-labelledby="intro-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">

      <div class="md:col-span-5">
        <p class="eyebrow" data-fade>Welcome to Airport City</p>
        <h2 id="intro-title" class="mt-6 font-display text-[clamp(2.4rem,5vw,4.6rem)] font-light leading-[1.02] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>A better address</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>for your future.</span></span>
        </h2>

        <figure class="reveal relative mt-14 w-[82%] md:w-[78%]">
          <div class="relative aspect-[4/5] overflow-hidden bg-porcelain-200">
            <img src="assets/img/IMG_0561-1000x1000.webp" alt="Airport City Neelambur — site photograph 1" width="1000" height="1000" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 36vw, 80vw">          </div>
          <figcaption class="mt-4 flex items-center gap-3 text-[.66rem] uppercase tracking-[.28em] text-ink/60">
            <span class="h-px w-8 bg-copper"></span>Neelambur, Coimbatore
          </figcaption>
        </figure>
      </div>

      <div class="md:col-span-6 md:col-start-7 md:pt-28">
        <p class="font-display text-[clamp(1.6rem,2.7vw,2.5rem)] font-light leading-[1.3] text-navy" data-fade>
          Airport City is a premium residential community for those who want to build a home in one of Coimbatore’s fast-developing areas.
        </p>
        <p class="mt-10 max-w-xl text-[1.02rem] font-light leading-[1.8] text-ink/85" data-fade>
          Planned around comfortable living and long-term value, it offers residential plots in Neelambur — a location with access to key destinations and a peaceful lifestyle.
        </p>

        <dl class="mt-14 grid max-w-xl grid-cols-2 gap-10 border-t border-ink/15 pt-10">
                      <div data-fade>
              <dt class="text-[.66rem] uppercase tracking-[.28em] text-ink/60">Approximate extent</dt>
              <dd class="mt-3 font-display text-[clamp(2.6rem,4.4vw,4rem)] font-light leading-none text-navy">
                6.39 <span class="text-xl italic text-copper">acres</span>
              </dd>
            </div>
                      <div data-fade>
              <dt class="text-[.66rem] uppercase tracking-[.28em] text-ink/60">Premium residential plots</dt>
              <dd class="mt-3 font-display text-[clamp(2.6rem,4.4vw,4rem)] font-light leading-none text-navy">
                110 <span class="text-xl italic text-copper">plots</span>
              </dd>
            </div>
                  </dl>
      </div>
    </div>
  </div>
</section>

<!-- ======================= MISSION & VISION ======================= -->
<section id="purpose" class="relative overflow-hidden bg-navy py-28 text-porcelain md:py-44" aria-labelledby="purpose-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <h2 id="purpose-title" class="sr-only">Our mission and vision</h2>
    <div class="grid gap-y-24 md:grid-cols-12 md:gap-x-10">

      <article class="md:col-span-5">
        <p class="font-display text-2xl italic text-copper-light" data-fade>i.</p>
        <h3 class="mt-4 font-display text-[clamp(3rem,6.2vw,6.2rem)] font-light italic leading-[1]">
          <span class="mask"><span class="mask-in" data-line>Our Mission.</span></span>
        </h3>
        <p class="mt-10 max-w-md font-display text-[clamp(1.35rem,2vw,1.8rem)] font-light leading-[1.4] text-porcelain/90" data-fade>
          To offer well-planned residential plots that give buyers and investors a well-connected location — and the chance to build a better future.
        </p>
      </article>

      <div class="hidden md:col-span-1 md:flex md:justify-center" aria-hidden="true">
        <span class="block w-px bg-porcelain/15"></span>
      </div>

      <article class="md:col-span-5 md:mt-48">
        <p class="font-display text-2xl italic text-copper-light" data-fade>ii.</p>
        <h3 class="mt-4 font-display text-[clamp(3rem,6.2vw,6.2rem)] font-light italic leading-[1]">
          <span class="mask"><span class="mask-in" data-line>Our Vision.</span></span>
        </h3>
        <p class="mt-10 max-w-md font-display text-[clamp(1.35rem,2vw,1.8rem)] font-light leading-[1.4] text-porcelain/90" data-fade>
          To create a residential environment where location, planning, convenience and lifestyle come together.
        </p>
        <p class="mt-6 max-w-md text-[.98rem] font-light leading-[1.8] text-porcelain/70" data-fade>
          A plot is more than land: it is the foundation for a dream home, a family’s future and a long-term asset.
        </p>
      </article>
    </div>
  </div>
</section>

<!-- ============================ PILLARS ============================ -->
<section id="pillars" class="relative bg-porcelain-200 py-28 md:py-44" aria-labelledby="pillars-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="md:max-w-[58%]">
      <p class="eyebrow" data-fade>At a glance</p>
      <h2 id="pillars-title" class="mt-6 font-display text-[clamp(2.4rem,5vw,4.6rem)] font-light leading-[1.02] text-navy">
        <span class="mask"><span class="mask-in" data-line>Airport City,</span></span>
        <span class="mask"><span class="mask-in italic text-copper" data-line>in four ideas.</span></span>
      </h2>
    </div>

    <div class="mt-20 grid gap-y-16 md:mt-28 md:grid-cols-12 md:gap-x-10">
      <ol class="md:col-span-7" aria-label="What defines Airport City">
                  <li class="border-t border-ink/20 py-10 last:border-b md:py-14 " data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-12 shrink-0 font-display text-5xl font-light italic leading-none text-copper md:w-16 md:text-6xl" aria-hidden="true">01</span>
              <div>
                <h3 class="text-[.7rem] font-normal uppercase tracking-[.3em] text-navy">Prime Location</h3>
                <p class="mt-3 font-display text-[clamp(1.8rem,3.2vw,3rem)] font-light italic leading-tight text-navy">Neelambur, Coimbatore.</p>
                <p class="mt-4 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">A strategically located area with good connectivity.</p>
              </div>
            </div>
          </li>
                  <li class="border-t border-ink/20 py-10 last:border-b md:py-14 md:pl-24" data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-12 shrink-0 font-display text-5xl font-light italic leading-none text-copper md:w-16 md:text-6xl" aria-hidden="true">02</span>
              <div>
                <h3 class="text-[.7rem] font-normal uppercase tracking-[.3em] text-navy">Planned Community</h3>
                <p class="mt-3 font-display text-[clamp(1.8rem,3.2vw,3rem)] font-light italic leading-tight text-navy">Designed for Modern Living.</p>
                <p class="mt-4 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">Planned for comfort, accessibility and future growth.</p>
              </div>
            </div>
          </li>
                  <li class="border-t border-ink/20 py-10 last:border-b md:py-14 " data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-12 shrink-0 font-display text-5xl font-light italic leading-none text-copper md:w-16 md:text-6xl" aria-hidden="true">03</span>
              <div>
                <h3 class="text-[.7rem] font-normal uppercase tracking-[.3em] text-navy">Lifestyle &amp; Convenience</h3>
                <p class="mt-3 font-display text-[clamp(1.8rem,3.2vw,3rem)] font-light italic leading-tight text-navy">A Place to Build Your Dream Home.</p>
                <p class="mt-4 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">Suited to families who want a contemporary lifestyle.</p>
              </div>
            </div>
          </li>
                  <li class="border-t border-ink/20 py-10 last:border-b md:py-14 md:pl-24" data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-12 shrink-0 font-display text-5xl font-light italic leading-none text-copper md:w-16 md:text-6xl" aria-hidden="true">04</span>
              <div>
                <h3 class="text-[.7rem] font-normal uppercase tracking-[.3em] text-navy">Future Potential</h3>
                <p class="mt-3 font-display text-[clamp(1.8rem,3.2vw,3rem)] font-light italic leading-tight text-navy">Invest in Tomorrow.</p>
                <p class="mt-4 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">A developing location with long-term asset potential.</p>
              </div>
            </div>
          </li>
              </ol>

      <div class="md:col-span-4 md:col-start-9">
        <div class="md:sticky md:top-32">
          <figure class="reveal">
            <div class="relative aspect-[3/4] overflow-hidden bg-porcelain">
              <img src="assets/img/IMG_0504.JPG-1000x1000.jpg" alt="Airport City Neelambur — site photograph 6" width="1000" height="1000" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 30vw, 90vw">            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======================== WHY CHOOSE ======================== -->
<section id="why" class="relative overflow-hidden bg-ink py-28 text-porcelain md:py-44" aria-labelledby="why-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">

      <div class="md:col-span-5">
        <p class="eyebrow text-copper-light" data-fade>Why choose Airport City</p>
        <h2 id="why-title" class="mt-6 font-display text-[clamp(2.3rem,4.8vw,4.4rem)] font-light leading-[1.04]">
          <span class="mask"><span class="mask-in" data-line>A location designed</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>around your future.</span></span>
        </h2>
        <a href="index.html#location" class="link-line mt-12 inline-flex items-center gap-3 text-[.72rem] uppercase tracking-[.26em]" data-fade>Explore Airport City <span aria-hidden="true">→</span></a>
      </div>

      <dl class="md:col-span-6 md:col-start-7 md:pt-14">
                  <div class="border-t border-porcelain/15 py-8 last:border-b md:py-10" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <dt class="font-display text-[clamp(1.5rem,2.6vw,2.3rem)] font-light">Location Advantage</dt>
              <dd class="shrink-0 font-display text-5xl font-light italic text-copper-light md:text-6xl">
                <span data-count="95" data-decimals="0">95</span><span class="text-2xl">%</span>
              </dd>
            </div>
            <div class="mt-6 h-[2px] w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-[2px] origin-left bg-copper-light" style="width: 95%"></div>
            </div>
          </div>
                  <div class="border-t border-porcelain/15 py-8 last:border-b md:py-10" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <dt class="font-display text-[clamp(1.5rem,2.6vw,2.3rem)] font-light">Community Planning</dt>
              <dd class="shrink-0 font-display text-5xl font-light italic text-copper-light md:text-6xl">
                <span data-count="90" data-decimals="0">90</span><span class="text-2xl">%</span>
              </dd>
            </div>
            <div class="mt-6 h-[2px] w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-[2px] origin-left bg-copper-light" style="width: 90%"></div>
            </div>
          </div>
                  <div class="border-t border-porcelain/15 py-8 last:border-b md:py-10" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <dt class="font-display text-[clamp(1.5rem,2.6vw,2.3rem)] font-light">Connectivity</dt>
              <dd class="shrink-0 font-display text-5xl font-light italic text-copper-light md:text-6xl">
                <span data-count="90" data-decimals="0">90</span><span class="text-2xl">%</span>
              </dd>
            </div>
            <div class="mt-6 h-[2px] w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-[2px] origin-left bg-copper-light" style="width: 90%"></div>
            </div>
          </div>
              </dl>
    </div>
  </div>
</section>

<!-- ======================== WHY NEELAMBUR ======================== -->
<section id="neelambur" class="relative overflow-hidden bg-porcelain py-28 md:py-44" aria-labelledby="neelambur-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid items-center gap-y-16 md:grid-cols-12 md:gap-x-10">

      <figure class="reveal relative md:col-span-5">
        <div class="relative aspect-square overflow-hidden bg-porcelain-200">
          <img src="assets/img/IMG_0577-1000x1000.webp" alt="Airport City Neelambur — site photograph 3" width="1000" height="1000" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 40vw, 100vw">        </div>
      </figure>

      <div class="md:col-span-6 md:col-start-7">
        <p class="eyebrow" data-fade>The neighbourhood</p>
        <h2 id="neelambur-title" class="mt-6 font-display text-[clamp(2.6rem,5.6vw,5.2rem)] font-light leading-[1.02] text-navy">
          <span class="mask"><span class="mask-in italic text-copper" data-line>Why Neelambur?</span></span>
        </h2>
        <p class="mt-10 max-w-xl font-display text-[clamp(1.45rem,2.3vw,2.1rem)] font-light leading-[1.35] text-navy" data-fade>
          Neelambur is emerging as a preferred residential area in Coimbatore, offering connectivity, accessibility and room for future development.
        </p>
        <div class="mt-12 flex flex-wrap gap-x-10 gap-y-5" data-fade>
          <a href="index.html#location" class="link-line inline-flex items-center gap-3 text-[.72rem] uppercase tracking-[.26em] text-navy">See the location <span aria-hidden="true">→</span></a>
          <a href="index.html#plots" class="link-line inline-flex items-center gap-3 text-[.72rem] uppercase tracking-[.26em] text-navy">Plots &amp; layout <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ CLOSING CTA ============================ -->
<section id="visit" class="relative overflow-hidden bg-navy py-28 text-porcelain md:py-44" aria-labelledby="visit-title">
  <div class="mx-auto grid max-w-[1500px] gap-y-14 px-6 md:grid-cols-12 md:gap-x-10 md:px-12">
    <div class="md:col-span-8">
      <p class="eyebrow text-copper-light" data-fade>Your next address starts here</p>
      <h2 id="visit-title" class="mt-6 font-display text-[clamp(2.6rem,6.4vw,6.2rem)] font-light leading-[1]">
        <span class="mask"><span class="mask-in" data-line>Let’s build your</span></span>
        <span class="mask md:pl-[8vw]"><span class="mask-in italic text-copper-light" data-line>future at</span></span>
        <span class="mask"><span class="mask-in" data-line>Airport City!</span></span>
      </h2>
    </div>

    <div class="md:col-span-4 md:col-start-9 md:self-end">
      <p class="font-light leading-[1.8] text-porcelain/80" data-fade>
        Looking for a premium villa plot in a well-connected location? Airport City Neelambur offers gated-community villa plots in Neelambur, Coimbatore, designed for peaceful living and a promising future.
      </p>
      <a href="index.html#contact" class="group mt-10 inline-flex items-center gap-4 border border-copper-light px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-porcelain" data-fade>
        Book your site visit <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span>
      </a>
      <p class="mt-8 font-display text-xl font-light" data-fade>
        <a class="hover:text-copper-light" href="tel:+919003975968"><span class="sr-only">Call </span>+91 90039 75968</a>
      </p>
    </div>
  </div>
</section>

</main>

	<?php include_once '_templates/_footer.php' ?>

