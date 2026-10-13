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
    <img src="assets/img/hero-900.webp" alt="Airport City Neelambur — site photograph 6" width="1000" height="1000" loading="eager" decoding="async" class="absolute inset-0 h-full w-full object-cover" fetchpriority="high" data-hero-img="" sizes="100vw">
    <div class="absolute inset-0 bg-navy-950/60"></div>
    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-navy-950/80 to-transparent"></div>
  </div>

  <div class="mx-auto grid min-h-[88svh] max-w-[1500px] grid-cols-12 gap-x-6 px-6 pb-14 pt-36 md:px-12 md:pb-16">
    <div class="col-span-12 flex flex-col justify-end md:col-span-9">
      <nav aria-label="Breadcrumb" class="mb-8" data-hero-fade>
        <ol class="flex items-center gap-4 text-[.7rem] uppercase tracking-[.34em] text-copper-light">
          <li><a href="index.php" class="link-line">Home</a></li>
          <li aria-hidden="true" class="h-px w-8 bg-copper"></li>
          <li aria-current="page" class="text-porcelain/80">Plots &amp; Layout</li>
        </ol>
      </nav>

      <h1 id="page-title" class="font-display text-[clamp(3.2rem,9vw,9.5rem)] font-light leading-[.95] tracking-[-.015em]">
        <span class="mask"><span class="mask-in" data-hero-line>Plots</span></span>
        <span class="mask md:pl-[9vw]"><span class="mask-in italic text-copper-light" data-hero-line>&amp; Layout</span></span>
      </h1>

      <p class="mt-10 max-w-md text-[.95rem] font-light leading-relaxed text-porcelain/85" data-hero-fade>
        Explore thoughtfully planned residential plots at Airport City Neelambur — a premium setting to build your dream home in one of Coimbatore’s well-connected and growing locations.
      </p>

      <div class="mt-10 flex flex-wrap items-center gap-x-10 gap-y-5" data-hero-fade>
        <a href="contact-us.html" class="group inline-flex items-center gap-4 border border-copper-light px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-porcelain">
          Book a site visit <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span>
        </a>
        <a href="project-amenities.html" class="link-line text-[.72rem] uppercase tracking-[.24em]">Project &amp; amenities</a>
      </div>
    </div>

    <aside class="hidden md:col-span-3 md:col-start-10 md:flex md:flex-col md:justify-end" aria-hidden="true">
      <div class="relative ml-auto w-full max-w-[17rem]" data-hero-inset>
        <div class="absolute -right-3 -top-3 h-full w-full border border-copper-light/70"></div>
        <div class="relative aspect-[4/5] overflow-hidden bg-navy-900">
          <img src="assets/img/IMG_0504.JPG-1000x1000.webp" alt="" width="1000" height="1000" loading="eager" decoding="async" class="h-full w-full object-cover" sizes="280px">
        </div>
      </div>
    </aside>
  </div>
</section>

<!-- LAYOUT -->
<section id="layout-plan" class="relative overflow-hidden bg-porcelain py-28 md:py-44" aria-labelledby="layout-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-14 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-6">
        <p class="eyebrow" data-fade>Plots &amp; layout</p>
        <h2 id="layout-title" class="mt-6 font-display text-[clamp(2.5rem,5.2vw,4.9rem)] font-light leading-[1.04] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>Explore thoughtfully</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>planned plots.</span></span>
        </h2>
      </div>
      <p class="max-w-md font-light leading-[1.8] text-ink/85 md:col-span-4 md:col-start-9 md:self-end" data-fade>Choose a plot that suits your home plans, your preferred position within the layout and your investment requirements. Our team will share current plot availability and guide you to the one that fits.</p>
    </div>

    <figure class="reveal relative mt-16 md:mt-24 md:w-[88%]">
      <div class="absolute -bottom-4 -right-4 hidden h-full w-full border border-copper md:block"></div>
      <button type="button" class="relative block w-full overflow-hidden bg-porcelain-200" data-lightbox="layout" aria-label="Open the plots and layout image full size">
        <img src="assets/img/airportcityneelambur-laoutoptions.webp" alt="Plots and layout options at Airport City Neelambur" width="1200" height="800" loading="lazy" decoding="async" class="parallax-img h-auto w-full" sizes="(min-width:768px) 85vw, 100vw">
      </button>
      <figcaption class="mt-6 flex flex-wrap items-center justify-between gap-x-8 gap-y-3 text-[.66rem] uppercase tracking-[.28em] text-ink/60">
        <span>Layout options — Airport City Neelambur</span>
        <span class="flex gap-8">
          <a class="link-line text-navy" href="AIRPORT CITY-BROCHURE.pdf" target="_blank" rel="noopener">Download brochure<span class="sr-only"> (PDF, opens in a new tab)</span></a>
          <a class="link-line text-navy" href="https://airportcityneelambur.com/wp-content/uploads/2026/08/AIRPORT-CITY-BROCHURE.-1_page-0003.jpg.jpeg" target="_blank" rel="noopener">Download layout<span class="sr-only"> (opens in a new tab)</span></a>
        </span>
      </figcaption>
    </figure>
  </div>
</section>

<!-- STEPS -->
<section id="steps" class="relative overflow-hidden bg-porcelain-200 py-28 md:py-44" aria-labelledby="steps-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-4 md:sticky md:top-32 md:self-start">
        <p class="eyebrow" data-fade>How it works</p>
        <h2 id="steps-title" class="mt-6 font-display text-[clamp(2.4rem,4.8vw,4.5rem)] font-light leading-[1.04] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>Four steps</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>to your plot.</span></span>
        </h2>
        <p class="mt-8 max-w-sm font-light leading-[1.8] text-ink/85" data-fade>From first look to booking, our team is with you at every step.</p>
        <a href="contact-us.html" class="link-line mt-10 inline-flex items-center gap-3 text-[.72rem] uppercase tracking-[.26em] text-navy" data-fade>Book a site visit <span aria-hidden="true">→</span></a>
      </div>
      <ol class="md:col-span-7 md:col-start-6" aria-label="Steps to choose your plot">
        <li class="border-t border-ink/20 py-12 last:border-b md:py-16 " data-fade>
          <br>
          <div class="flex items-start gap-6 md:gap-10">
            <span class="w-14 shrink-0 font-display text-[4.5rem] font-light italic leading-[.8] text-copper md:w-24 md:text-[7rem]" aria-hidden="true">1</span>
            
            <div>
              <h3 class="font-display text-[clamp(1.8rem,3vw,2.8rem)] font-light leading-tight text-navy">Explore Your Plot Options</h3>
              <p class="mt-4 max-w-md text-[.98rem] font-light leading-[1.8] text-ink/80">Start your journey by exploring the available residential plots at Airport City Neelambur. Choose a plot that suits your home plans, preferred location within the layout and investment requirements.</p>
              <ul class="mt-6 space-y-3 text-sm font-light text-ink/85"><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Understand the available plot options and layout</span></li><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Choose a plot based on your preferred size and location</span></li><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Get assistance from our team throughout the selection process</span></li></ul>
            </div>
          </div>
        </li>
        <br> 
        <li class="border-t border-ink/20 py-12 last:border-b md:py-16 md:pl-20" data-fade>
          <br>
          <div class="flex items-start gap-6 md:gap-10">
            <span class="w-14 shrink-0 font-display text-[4.5rem] font-light italic leading-[.8] text-copper md:w-24 md:text-[7rem]" aria-hidden="true">2</span>
            <div>
              <h3 class="font-display text-[clamp(1.8rem,3vw,2.8rem)] font-light leading-tight text-navy">Understand the Layout</h3>
              <p class="mt-4 max-w-md text-[.98rem] font-light leading-[1.8] text-ink/80">Get a clear understanding of the overall layout and the positioning of individual plots before making your decision. Our team can help you identify the plot that best matches your requirements.</p>
              <ul class="mt-6 space-y-3 text-sm font-light text-ink/85"><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Review the overall project layout</span></li><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Understand plot positioning and road access</span></li><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Compare available options based on your requirements</span></li></ul>
            </div>
          </div>
        </li>
        <br>
        <li class="border-t border-ink/20 py-12 last:border-b md:py-16 " data-fade>
         <br>
          <div class="flex items-start gap-6 md:gap-10">
            <span class="w-14 shrink-0 font-display text-[4.5rem] font-light italic leading-[.8] text-copper md:w-24 md:text-[7rem]" aria-hidden="true">3</span>
            <div>
              <h3 class="font-display text-[clamp(1.8rem,3vw,2.8rem)] font-light leading-tight text-navy">Visit the Project Site</h3>
              <p class="mt-4 max-w-md text-[.98rem] font-light leading-[1.8] text-ink/80">Experience Airport City Neelambur in person. A site visit gives you an opportunity to understand the location, surrounding development and overall residential environment before choosing your plot.</p>
              <ul class="mt-6 space-y-3 text-sm font-light text-ink/85"><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Visit the Airport City Neelambur project</span></li><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Experience the location and surroundings</span></li><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Discuss your requirements with our project team</span></li></ul>
            </div>
          </div>
        </li>
        <br>
        <li class="border-t border-ink/20 py-12 last:border-b md:py-16 md:pl-20" data-fade>
          <br>
          <div class="flex items-start gap-6 md:gap-10">
            <span class="w-14 shrink-0 font-display text-[4.5rem] font-light italic leading-[.8] text-copper md:w-24 md:text-[7rem]" aria-hidden="true">4</span>
            <div>
              <h3 class="font-display text-[clamp(1.8rem,3vw,2.8rem)] font-light leading-tight text-navy">Secure Your Dream Plot</h3>
              <p class="mt-4 max-w-md text-[.98rem] font-light leading-[1.8] text-ink/80">Once you have selected the right plot, our team will guide you through the next steps of the booking and purchase process, helping you move closer to owning your future home at Airport City Neelambur.</p>
              <ul class="mt-6 space-y-3 text-sm font-light text-ink/85"><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Select your preferred plot</span></li><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Complete the booking process with guided assistance</span></li><li class="flex gap-4"><span class="mt-[.7em] h-px w-5 shrink-0 bg-copper"></span><span>Take the next step towards building your dream home</span></li></ul>
            </div>
          </div>
        </li>
        <br>
      </ol>
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

<dialog id="lightbox" class="m-0 h-full max-h-none w-full max-w-none bg-ink-950/95 p-0 text-porcelain backdrop:bg-ink-950" aria-label="Image viewer">
  <div class="relative flex h-full w-full items-center justify-center px-4 py-16 md:px-24">
    <img id="lightbox-img" src="" alt="" class="max-h-full max-w-full object-contain">
    <button type="button" id="lb-close" class="absolute right-5 top-5 flex h-12 w-12 items-center justify-center text-3xl font-light hover:text-copper" aria-label="Close viewer">×</button>
    <button type="button" id="lb-prev" class="absolute left-3 top-1/2 flex h-12 w-12 -translate-y-1/2 items-center justify-center text-3xl font-light hover:text-copper md:left-8" aria-label="Previous image">←</button>
    <button type="button" id="lb-next" class="absolute right-3 top-1/2 flex h-12 w-12 -translate-y-1/2 items-center justify-center text-3xl font-light hover:text-copper md:right-8" aria-label="Next image">→</button>
  </div>
</dialog>
</main>

	<?php include_once '_templates/_footer.php' ?>


