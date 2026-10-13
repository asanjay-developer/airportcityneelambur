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

<section id="top" class="relative isolate overflow-hidden bg-navy-950 text-porcelain" aria-labelledby="page-title">
  <div class="absolute inset-0 -z-10 overflow-hidden" data-hero-media>
    <img src="assets/img/hero-1600.webp" alt="The grand entrance of Airport City Neelambur" width="1024" height="683" loading="eager" decoding="async" class="absolute inset-0 h-full w-full object-cover" fetchpriority="high" data-hero-img="" sizes="100vw">
    <div class="absolute inset-0 bg-navy-950/60"></div>
    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-navy-950/80 to-transparent"></div>
  </div>

  <div class="mx-auto grid min-h-[88svh] max-w-[1500px] grid-cols-12 gap-x-6 px-6 pb-14 pt-36 md:px-12 md:pb-16">
    <div class="col-span-12 flex flex-col justify-end md:col-span-9">
      <nav aria-label="Breadcrumb" class="mb-8" data-hero-fade>
        <ol class="flex items-center gap-4 text-[.7rem] uppercase tracking-[.34em] text-copper-light">
          <li><a href="index.php" class="link-line">Home</a></li>
          <li aria-hidden="true" class="h-px w-8 bg-copper"></li>
          <li aria-current="page" class="text-porcelain/80">Project &amp; Amenities</li>
        </ol>
      </nav>

      <h1 id="page-title" class="font-display text-[clamp(3.2rem,9vw,9.5rem)] font-light leading-[.95] tracking-[-.015em]">
        <span class="mask"><span class="mask-in" data-hero-line>Project</span></span>
        <span class="mask md:pl-[9vw]"><span class="mask-in italic text-copper-light" data-hero-line>&amp; Amenities</span></span>
      </h1>

      <p class="mt-10 max-w-md text-[.95rem] font-light leading-relaxed text-porcelain/85" data-hero-fade>
        Premium villa plots in Neelambur, Coimbatore — designed for better living and future growth.
      </p>

      <div class="mt-10 flex flex-wrap items-center gap-x-10 gap-y-5" data-hero-fade>
        <a href="contact-us.html" class="group inline-flex items-center gap-4 border border-copper-light px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-porcelain">
          Book a site visit <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span>
        </a>
        <a href="location.html" class="link-line text-[.72rem] uppercase tracking-[.24em]">See the location</a>
      </div>
    </div>

    <aside class="hidden md:col-span-3 md:col-start-10 md:flex md:flex-col md:justify-end" aria-hidden="true">
      <div class="relative ml-auto w-full max-w-[17rem]" data-hero-inset>
        <div class="absolute -right-3 -top-3 h-full w-full border border-copper-light/70"></div>
        <div class="relative aspect-[4/5] overflow-hidden bg-navy-900">
          <img src="assets/img/DSC04232.jpg-1-1260x680.webp" alt="" width="1260" height="680" loading="eager" decoding="async" class="h-full w-full object-cover" sizes="280px">
        </div>
      </div>
    </aside>
  </div>
</section>

<!-- INTRO -->
<section id="intro" class="relative overflow-hidden bg-porcelain py-28 md:py-44" aria-labelledby="intro-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-14 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-6">
        <p class="eyebrow" data-fade>Premium villa plots in Neelambur</p>
        <h2 id="intro-title" class="mt-6 font-display text-[clamp(2.4rem,5vw,4.6rem)] font-light leading-[1.04] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>Designed for</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>better living.</span></span>
        </h2>
      </div>
      <p class="max-w-md font-light leading-[1.8] text-ink/85 md:col-span-4 md:col-start-9 md:self-end" data-fade>A prime location, gated community living and planned villa plots — for families and long-term investors alike.</p>
    </div>
    <ol class="mt-20 grid gap-x-10 gap-y-14 md:mt-28 md:grid-cols-3" aria-label="Project highlights">
      <li class="border-t border-ink/20 pt-8 " data-fade>
        <span class="font-display text-2xl italic text-copper">i.</span>
        <h3 class="mt-4 font-display text-[clamp(1.9rem,2.8vw,2.6rem)] font-light leading-tight text-navy">Prime Location</h3>
        <p class="mt-4 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">Strategically located in Neelambur, with links to Coimbatore International Airport, Avinashi Main Road and key city areas.</p>
        <a href="location.html" class="link-line mt-6 inline-flex items-center gap-3 text-[.7rem] uppercase tracking-[.26em] text-navy">Explore the location <span aria-hidden="true">→</span></a>
      </li>
      <li class="border-t border-ink/20 pt-8 md:mt-16" data-fade>
        <span class="font-display text-2xl italic text-copper">ii.</span>
        <h3 class="mt-4 font-display text-[clamp(1.9rem,2.8vw,2.6rem)] font-light leading-tight text-navy">Gated Community Living</h3>
        <p class="mt-4 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">A planned community offering security, peaceful surroundings and a better family lifestyle.</p>
        <a href="contact-us.html" class="link-line mt-6 inline-flex items-center gap-3 text-[.7rem] uppercase tracking-[.26em] text-navy">Book a site visit <span aria-hidden="true">→</span></a>
      </li>
      <li class="border-t border-ink/20 pt-8 md:mt-32" data-fade>
        <span class="font-display text-2xl italic text-copper">iii.</span>
        <h3 class="mt-4 font-display text-[clamp(1.9rem,2.8vw,2.6rem)] font-light leading-tight text-navy">Investment Potential</h3>
        <p class="mt-4 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">Neelambur's location and connectivity make it attractive for building or investing for the long term.</p>
        <a href="contact-us.html" class="link-line mt-6 inline-flex items-center gap-3 text-[.7rem] uppercase tracking-[.26em] text-navy">Speak to our team <span aria-hidden="true">→</span></a>
      </li>
    </ol>
  </div>
</section>

<!-- FOUR FEATURES -->
<section id="features" class="relative overflow-hidden bg-navy py-28 text-porcelain md:py-44" aria-labelledby="features-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="md:max-w-[60%]">
      <p class="eyebrow text-copper-light" data-fade>Why choose Airport City Neelambur</p>
      <h2 id="features-title" class="mt-6 font-display text-[clamp(2.4rem,5vw,4.6rem)] font-light leading-[1.04] tracking-[-.01em] ">
          <span class="mask"><span class="mask-in" data-line>Long-term</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>investment potential.</span></span>
        </h2>
      <p class="mt-8 max-w-md font-light leading-[1.8] text-porcelain/80" data-fade>Strategic connectivity plus premium villa plot living — with airport access and proximity to Avinashi Main Road supporting everyday convenience and custom home building.</p>
    </div>
    <ol class="mt-20 grid gap-x-16 md:mt-28 md:grid-cols-2" aria-label="Key features">
      <li class="border-t border-porcelain/15 py-10 " data-fade>
        <p class="font-display text-[clamp(4.5rem,9vw,8rem)] font-light italic leading-none text-copper-light/70" aria-hidden="true">01</p>
        <h3 class="mt-4 font-display text-[clamp(1.8rem,2.8vw,2.6rem)] font-light leading-tight">Gated Community</h3>
        <p class="mt-3 max-w-sm font-light leading-[1.75] text-porcelain/75">A secure, well-planned environment for family living.</p>
      </li>
      <li class="border-t border-porcelain/15 py-10 md:mt-24" data-fade>
        <p class="font-display text-[clamp(4.5rem,9vw,8rem)] font-light italic leading-none text-copper-light/70" aria-hidden="true">02</p>
        <h3 class="mt-4 font-display text-[clamp(1.8rem,2.8vw,2.6rem)] font-light leading-tight">Premium Villa Plots</h3>
        <p class="mt-3 max-w-sm font-light leading-[1.75] text-porcelain/75">Plots that let buyers create their own dream home.</p>
      </li>
      <li class="border-t border-porcelain/15 py-10 " data-fade>
        <p class="font-display text-[clamp(4.5rem,9vw,8rem)] font-light italic leading-none text-copper-light/70" aria-hidden="true">03</p>
        <h3 class="mt-4 font-display text-[clamp(1.8rem,2.8vw,2.6rem)] font-light leading-tight">Airport Connectivity</h3>
        <p class="mt-3 max-w-sm font-light leading-[1.75] text-porcelain/75">About 5 minutes from Coimbatore International Airport.</p>
      </li>
      <li class="border-t border-porcelain/15 py-10 md:mt-24" data-fade>
        <p class="font-display text-[clamp(4.5rem,9vw,8rem)] font-light italic leading-none text-copper-light/70" aria-hidden="true">04</p>
        <h3 class="mt-4 font-display text-[clamp(1.8rem,2.8vw,2.6rem)] font-light leading-tight">Avinashi Main Road Connectivity</h3>
        <p class="mt-3 max-w-sm font-light leading-[1.75] text-porcelain/75">About 2 minutes from Avinashi Main Road.</p>
      </li>
    </ol>
  </div>
</section>

<!-- AMENITIES -->
<section id="facilities" class="relative overflow-hidden bg-porcelain-200 py-28 md:py-44" aria-labelledby="facilities-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-4">
        <p class="eyebrow" data-fade>World-class amenities</p>
        <h2 id="facilities-title" class="mt-6 font-display text-[clamp(2.3rem,4.4vw,4.1rem)] font-light leading-[1.04] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>Designed for the</span></span>
          <span class="mask"><span class="mask-in" data-line>way you want</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>to live.</span></span>
        </h2>
        <p class="mt-8 font-light leading-[1.8] text-ink/85" data-fade>At Airport City, every element is planned to make the community more functional, comfortable and enjoyable — from the roads you drive on to the spaces where families spend time together.</p>
        <h3 class="mt-14 text-[.68rem] uppercase tracking-[.3em] text-navy" data-fade>Planned for better living</h3>
        <ul class="mt-5 space-y-3 border-l border-copper pl-6 text-[.95rem] font-light text-ink/85"><li data-fade>Wide internal roads</li><li data-fade>Avenue plantation</li><li data-fade>Drainage infrastructure</li><li data-fade>Street lighting</li><li data-fade>Landscaped green spaces</li><li data-fade>Secure gated development</li></ul>
      </div>
      <ol class="md:col-span-7 md:col-start-6" aria-label="Amenities">
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 " data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">01</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">Grand Entrance</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 md:pl-16" data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">02</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">60,000-Litre Overhead Water Tank</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 " data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">03</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">Grand Green Park</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 md:pl-16" data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">04</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">Badminton &amp; Basketball Courts</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 " data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">05</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">Children's Play Area</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 md:pl-16" data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">06</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">10-Foot Compound Wall</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 " data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">07</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">Open-Air Amphitheatre</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 md:pl-16" data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">08</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">Senior Citizen Walking Area</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 " data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">09</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">Cricket Practice Area</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 md:pl-16" data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">10</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">Athikadavu Water Connection</span>
          </li>
          <li class="group flex items-baseline gap-5 border-b border-ink/15 py-5 md:gap-8 md:py-6 " data-fade>
            <span class="w-8 shrink-0 font-display text-base italic text-copper">11</span>
            <span class="font-display text-[clamp(1.55rem,2.8vw,2.5rem)] font-light leading-tight text-navy transition-transform duration-500 ease-out group-hover:translate-x-2">3-Phase EB Connection</span>
          </li>
      </ol>
    </div>
  </div>
</section>

<div class="relative h-[55vh] min-h-[22rem] overflow-hidden bg-navy-950 md:h-[75vh]">
  <img src="assets/img/img5.webp" alt="Airport City Neelambur — site photograph 4" width="1260" height="680" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-12%] h-[124%] w-full object-cover" sizes="100vw">
  <div class="absolute inset-0 bg-navy-950/25"></div>
</div>

<!-- CREDENTIALS + FILM -->
<section id="credentials" class="relative bg-navy-900 text-porcelain" aria-labelledby="credentials-title">
  <div class="mx-auto max-w-[1500px] px-6 py-28 md:px-12 md:py-44">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-5 md:sticky md:top-32 md:self-start">
        <p class="eyebrow text-copper-light" data-fade>Approvals &amp; infrastructure</p>
        <h2 id="credentials-title" class="mt-6 font-display text-[clamp(2.3rem,4.6vw,4.3rem)] font-light leading-[1.04] tracking-[-.01em] ">
          <span class="mask"><span class="mask-in" data-line>Everything you need</span></span>
          <span class="mask"><span class="mask-in" data-line>to make your land</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>investment feel complete.</span></span>
        </h2>
        <p class="mt-8 max-w-md font-light leading-[1.8] text-porcelain/80" data-fade>A good residential plot should give you more than a location. It should give you connectivity, infrastructure, security, community and confidence.</p>
        <div class="mt-12 max-w-md" data-fade>
          <div class="relative aspect-[16/10] overflow-hidden bg-navy-950" data-video>
            <img src="assets/img/IMG_0580-1260x680.webp" alt="Airport City Neelambur — site photograph 5" width="1260" height="680" loading="lazy" decoding="async" class="h-full w-full object-cover opacity-80" sizes="(min-width:768px) 36vw, 90vw">
            <button type="button" class="group absolute inset-0 flex items-center justify-center gap-4 text-[.7rem] uppercase tracking-[.28em]" data-video-play="Eurr_fdNQzs" aria-label="Play the Airport City film">
              <span class="flex h-16 w-16 items-center justify-center rounded-full border border-copper-light bg-navy-950/50 transition-colors duration-500 group-hover:bg-copper">
                <svg viewBox="0 0 24 24" class="ml-1 h-5 w-5 fill-current" aria-hidden="true"><path d="M7 4.5v15l13-7.5z"/></svg>
              </span>
              <span>Watch the film</span>
            </button>
          </div>
        </div>
      </div>
      <ol class="md:col-span-6 md:col-start-7" aria-label="Project credentials">
          <li class="group relative border-t border-porcelain/15 py-8 last:border-b md:py-10" data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-8 shrink-0 font-display text-2xl italic text-copper-light md:w-10">i.</span>
              <div class="transition-transform duration-700 ease-out group-hover:translate-x-3">
                <h3 class="font-display text-[clamp(1.7rem,3vw,2.6rem)] font-light leading-tight">DTCP Approved Layout</h3>
                <p class="mt-2 max-w-sm text-sm font-light leading-relaxed text-porcelain/65">An approved layout, planned within the regulatory framework.</p>
              </div>
            </div>
          </li>
          <li class="group relative border-t border-porcelain/15 py-8 last:border-b md:py-10" data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-8 shrink-0 font-display text-2xl italic text-copper-light md:w-10">ii.</span>
              <div class="transition-transform duration-700 ease-out group-hover:translate-x-3">
                <h3 class="font-display text-[clamp(1.7rem,3vw,2.6rem)] font-light leading-tight">RERA Registered Project</h3>
                <p class="mt-2 max-w-sm text-sm font-light leading-relaxed text-porcelain/65">Registered under RERA for buyer confidence.</p>
              </div>
            </div>
          </li>
          <li class="group relative border-t border-porcelain/15 py-8 last:border-b md:py-10" data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-8 shrink-0 font-display text-2xl italic text-copper-light md:w-10">iii.</span>
              <div class="transition-transform duration-700 ease-out group-hover:translate-x-3">
                <h3 class="font-display text-[clamp(1.7rem,3vw,2.6rem)] font-light leading-tight">Grand Entrance Arch</h3>
                <p class="mt-2 max-w-sm text-sm font-light leading-relaxed text-porcelain/65">A signature arrival to the community.</p>
              </div>
            </div>
          </li>
          <li class="group relative border-t border-porcelain/15 py-8 last:border-b md:py-10" data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-8 shrink-0 font-display text-2xl italic text-copper-light md:w-10">iv.</span>
              <div class="transition-transform duration-700 ease-out group-hover:translate-x-3">
                <h3 class="font-display text-[clamp(1.7rem,3vw,2.6rem)] font-light leading-tight">Athikadavu Water Connection</h3>
                <p class="mt-2 max-w-sm text-sm font-light leading-relaxed text-porcelain/65">Water supply connection for the layout.</p>
              </div>
            </div>
          </li>
          <li class="group relative border-t border-porcelain/15 py-8 last:border-b md:py-10" data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-8 shrink-0 font-display text-2xl italic text-copper-light md:w-10">v.</span>
              <div class="transition-transform duration-700 ease-out group-hover:translate-x-3">
                <h3 class="font-display text-[clamp(1.7rem,3vw,2.6rem)] font-light leading-tight">3-Phase EB Connection</h3>
                <p class="mt-2 max-w-sm text-sm font-light leading-relaxed text-porcelain/65">Three-phase electricity connection in place.</p>
              </div>
            </div>
          </li>
          <li class="group relative border-t border-porcelain/15 py-8 last:border-b md:py-10" data-fade>
            <div class="flex items-baseline gap-6 md:gap-10">
              <span class="w-8 shrink-0 font-display text-2xl italic text-copper-light md:w-10">vi.</span>
              <div class="transition-transform duration-700 ease-out group-hover:translate-x-3">
                <h3 class="font-display text-[clamp(1.7rem,3vw,2.6rem)] font-light leading-tight">10-Foot Compound Wall</h3>
                <p class="mt-2 max-w-sm text-sm font-light leading-relaxed text-porcelain/65">A secure, gated boundary around the development.</p>
              </div>
            </div>
          </li>
      </ol>
    </div>
  </div>
</section>

<!-- PRICING -->
<section id="pricing" class="relative overflow-hidden bg-ink py-28 text-porcelain md:py-44" aria-labelledby="pricing-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-5">
        <p class="eyebrow text-copper-light" data-fade>Plot pricing</p>
        <h2 id="pricing-title" class="mt-6 font-display text-[clamp(2.3rem,4.8vw,4.4rem)] font-light leading-[1.04] tracking-[-.01em] ">
          <span class="mask"><span class="mask-in" data-line>Choose the right</span></span>
          <span class="mask"><span class="mask-in" data-line>plot for your</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>future.</span></span>
        </h2>
        <p class="mt-8 max-w-md font-light leading-[1.8] text-porcelain/80" data-fade>Own a premium villa plot and build the home you’ve imagined.</p>
      </div>

      <div class="md:col-span-6 md:col-start-7 md:pt-12">
        <div class="border-t border-porcelain/15 pt-10" data-fade>
          <h3 class="text-[.68rem] uppercase tracking-[.3em] text-copper-light">Premium villa plots</h3>
          <p class="mt-4 text-[.7rem] uppercase tracking-[.28em] text-porcelain/60">Starting from</p><br>
          <p class="font-display text-[clamp(3.6rem,8vw,7rem)] font-light leading-none"><span class="font-sans text-[.55em] font-light">₹</span>16.50 <span class="text-[.3em] italic text-copper-light">Lakhs / Cent*</span></p>
          <p class="mt-6 max-w-md font-light leading-[1.8] text-porcelain/80">Residential land in Neelambur with airport and road connectivity.</p>
          <div class="mt-8"><a href="AIRPORT CITY-BROCHURE.pdf" target="_blank" rel="noopener" class="group inline-flex items-center gap-4 border border-copper-light hover:bg-copper hover:text-porcelain px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 " data-fade>
          Download brochure <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span><span class="sr-only"> (opens in a new tab)</span>
        </a></div>
        </div>
        <!-- <div class="mt-16 border-t border-porcelain/15 pt-10" data-fade>
          <h3 class="text-[.68rem] uppercase tracking-[.3em] text-copper-light">Site visit</h3>
          <p class="mt-4 max-w-md font-display text-[clamp(1.5rem,2.4vw,2.1rem)] font-light leading-snug">Explore the location, plot options and project details with our team.</p>
          <div class="mt-8 flex flex-wrap gap-x-10 gap-y-5">
            <a href="https://airportcityneelambur.com/wp-content/uploads/2026/08/AIRPORT-CITY-BROCHURE.-1_page-0003.jpg.jpeg" target="_blank" rel="noopener" class="group inline-flex items-center gap-4 border border-copper-light hover:bg-copper hover:text-porcelain px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 " data-fade>
          Download layout <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span><span class="sr-only"> (opens in a new tab)</span>
        </a>
            <a href="contact-us.php" class="link-line self-center text-[.72rem] uppercase tracking-[.24em]">Plan your visit</a>
          </div>
        </div> -->
        <p class="mt-10 text-xs font-light italic text-porcelain/55" data-fade>*Please confirm current pricing and availability with our team.</p>
      </div>
    </div>
  </div>
</section>

<!-- HIGHLIGHTS -->
<section id="highlights" class="relative overflow-hidden bg-porcelain py-28 md:py-44" aria-labelledby="highlights-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-14 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-5">
        <p class="eyebrow" data-fade>At a glance</p>
        <h2 id="highlights-title" class="mt-6 font-display text-[clamp(2.4rem,5vw,4.6rem)] font-light leading-[1.04] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>Your future address</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>starts here.</span></span>
        </h2>
        <p class="mt-8 max-w-md font-light leading-[1.8] text-ink/85" data-fade>A space in a strategically located part of Coimbatore — villa plots, connectivity and a peaceful community.</p>
      </div>
      <ul class="md:col-span-6 md:col-start-7" aria-label="Project highlights">
          <li class="flex items-baseline gap-5 border-b border-ink/15 py-5" data-fade>
            <span class="h-px w-6 shrink-0 translate-y-[-.35em] bg-copper"></span>
            <span class="font-display text-[clamp(1.35rem,2.1vw,1.9rem)] font-light leading-snug text-navy">Prime Neelambur Location</span>
          </li>
          <li class="flex items-baseline gap-5 border-b border-ink/15 py-5" data-fade>
            <span class="h-px w-6 shrink-0 translate-y-[-.35em] bg-copper"></span>
            <span class="font-display text-[clamp(1.35rem,2.1vw,1.9rem)] font-light leading-snug text-navy">Just 5 Minutes from Coimbatore International Airport</span>
          </li>
          <li class="flex items-baseline gap-5 border-b border-ink/15 py-5" data-fade>
            <span class="h-px w-6 shrink-0 translate-y-[-.35em] bg-copper"></span>
            <span class="font-display text-[clamp(1.35rem,2.1vw,1.9rem)] font-light leading-snug text-navy">Around 2 Minutes to Avinashi Main Road</span>
          </li>
          <li class="flex items-baseline gap-5 border-b border-ink/15 py-5" data-fade>
            <span class="h-px w-6 shrink-0 translate-y-[-.35em] bg-copper"></span>
            <span class="font-display text-[clamp(1.35rem,2.1vw,1.9rem)] font-light leading-snug text-navy">Premium Villa Plots</span>
          </li>
          <li class="flex items-baseline gap-5 border-b border-ink/15 py-5" data-fade>
            <span class="h-px w-6 shrink-0 translate-y-[-.35em] bg-copper"></span>
            <span class="font-display text-[clamp(1.35rem,2.1vw,1.9rem)] font-light leading-snug text-navy">Gated Community Concept</span>
          </li>
          <li class="flex items-baseline gap-5 border-b border-ink/15 py-5" data-fade>
            <span class="h-px w-6 shrink-0 translate-y-[-.35em] bg-copper"></span>
            <span class="font-display text-[clamp(1.35rem,2.1vw,1.9rem)] font-light leading-snug text-navy">Peaceful Residential Environment</span>
          </li>
      </ul>
    </div>
  </div>
</section>

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
      <a href="contact-us.html" class="group mt-10 inline-flex items-center gap-4 border border-copper-light px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-porcelain" data-fade>
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


