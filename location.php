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
    <img src="assets/img/IMG_0580-1260x680.webp" alt="Airport City Neelambur — site photograph 4" width="1260" height="680" loading="eager" decoding="async" class="absolute inset-0 h-full w-full object-cover" fetchpriority="high" data-hero-img="" sizes="100vw">
    <div class="absolute inset-0 bg-navy-950/60"></div>
    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-navy-950/80 to-transparent"></div>
  </div>

  <div class="mx-auto grid min-h-[88svh] max-w-[1500px] grid-cols-12 gap-x-6 px-6 pb-14 pt-36 md:px-12 md:pb-16">
    <div class="col-span-12 flex flex-col justify-end md:col-span-9">
      <nav aria-label="Breadcrumb" class="mb-8" data-hero-fade>
        <ol class="flex items-center gap-4 text-[.7rem] uppercase tracking-[.34em] text-copper-light">
          <li><a href="index.php" class="link-line">Home</a></li>
          <li aria-hidden="true" class="h-px w-8 bg-copper"></li>
          <li aria-current="page" class="text-porcelain/80">Location</li>
        </ol>
      </nav>

      <h1 id="page-title" class="font-display text-[clamp(3.2rem,9vw,9.5rem)] font-light leading-[.95] tracking-[-.015em]">
        <span class="mask"><span class="mask-in" data-hero-line>Location</span></span>
        <span class="mask md:pl-[9vw]"><span class="mask-in italic text-copper-light" data-hero-line>Neelambur,</span></span>
        <span class="mask"><span class="mask-in" data-hero-line>Coimbatore</span></span>
      </h1>

      <p class="mt-10 max-w-md text-[.95rem] font-light leading-relaxed text-porcelain/85" data-hero-fade>
        Airport City Neelambur — a prime location for your dream home and future investment.
      </p>

      <div class="mt-10 flex flex-wrap items-center gap-x-10 gap-y-5" data-hero-fade>
        <a href="contact-us.html" class="group inline-flex items-center gap-4 border border-copper-light px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-porcelain">
          Book a site visit <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span>
        </a>
        <a href="https://www.google.com/maps/search/?api=1&query=Airport+City+Neelambur+Coimbatore" target="_blank" rel="noopener" class="link-line text-[.72rem] uppercase tracking-[.24em]">Get directions</a>
      </div>
    </div>

    <aside class="hidden md:col-span-3 md:col-start-10 md:flex md:flex-col md:justify-end" aria-hidden="true">
      <div class="relative ml-auto w-full max-w-[17rem]" data-hero-inset>
        <div class="absolute -right-3 -top-3 h-full w-full border border-copper-light/70"></div>
        <div class="relative aspect-[4/5] overflow-hidden bg-navy-900">
          <img src="assets/img/IMG_0577-1000x1000.webp" alt="" width="1000" height="1000" loading="eager" decoding="async" class="h-full w-full object-cover" sizes="280px">
        </div>
      </div>
    </aside>
  </div>
</section>

<!-- WHY THIS LOCATION -->
<section id="advantages" class="relative overflow-hidden bg-porcelain py-28 md:py-44" aria-labelledby="advantages-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-16 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-5">
        <p class="eyebrow" data-fade>Location advantage</p>
        <h2 id="advantages-title" class="mt-6 font-display text-[clamp(2.3rem,4.6vw,4.3rem)] font-light leading-[1.04] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>A prime location</span></span>
          <span class="mask"><span class="mask-in" data-line>for your dream home</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>&amp; future investment.</span></span>
        </h2>
        <figure class="reveal relative mt-14 w-[82%] md:w-[78%]">
          <div class="relative aspect-[4/5] overflow-hidden bg-porcelain-200">
            <img src="assets/img/playground.webp" alt="Airport City Neelambur — site photograph 2" width="1000" height="1000" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 36vw, 80vw">
          </div>
        </figure>
      </div>
      <div class="grid gap-x-10 md:col-span-6 md:col-start-7 md:grid-cols-2">
        <ul class="">
          <li class="border-t border-ink/20 py-9" data-fade>
            <span class="font-display text-xl italic text-copper">i.</span>
            <h3 class="mt-3 font-display text-[clamp(1.7rem,2.6vw,2.3rem)] font-light leading-tight text-navy">Prime Neelambur Location</h3>
            <p class="mt-3 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">Located in one of Coimbatore's rapidly developing residential areas, Airport City Neelambur offers a well-connected address for families and property investors.</p>
          </li>
          <li class="border-t border-ink/20 py-9" data-fade>
            <span class="font-display text-xl italic text-copper">iii.</span>
            <h3 class="mt-3 font-display text-[clamp(1.7rem,2.6vw,2.3rem)] font-light leading-tight text-navy">Excellent Road Connectivity</h3>
            <p class="mt-3 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">With easy access to Avinashi Road and major connecting routes, Neelambur provides convenient travel towards Coimbatore city and surrounding areas.</p>
          </li>
          <li class="border-t border-ink/20 py-9" data-fade>
            <span class="font-display text-xl italic text-copper">v.</span>
            <h3 class="mt-3 font-display text-[clamp(1.7rem,2.6vw,2.3rem)] font-light leading-tight text-navy">Ideal for Family Living</h3>
            <p class="mt-3 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">A strategically positioned residential location that combines accessibility, convenience and a peaceful environment for building your dream home.</p>
          </li>
        </ul>
        <ul class="md:mt-20">
          <li class="border-t border-ink/20 py-9" data-fade>
            <span class="font-display text-xl italic text-copper">ii.</span>
            <h3 class="mt-3 font-display text-[clamp(1.7rem,2.6vw,2.3rem)] font-light leading-tight text-navy">Close to Coimbatore Airport</h3>
            <p class="mt-3 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">Enjoy convenient access to Coimbatore International Airport, making domestic and international travel easier for residents and frequent travellers.</p>
          </li>
          <li class="border-t border-ink/20 py-9" data-fade>
            <span class="font-display text-xl italic text-copper">iv.</span>
            <h3 class="mt-3 font-display text-[clamp(1.7rem,2.6vw,2.3rem)] font-light leading-tight text-navy">Fast-Growing Neighbourhood</h3>
            <p class="mt-3 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">Neelambur continues to attract residential and commercial development, making it an emerging destination for homebuyers and real estate investors.</p>
          </li>
          <li class="border-t border-ink/20 py-9" data-fade>
            <span class="font-display text-xl italic text-copper">vi.</span>
            <h3 class="mt-3 font-display text-[clamp(1.7rem,2.6vw,2.3rem)] font-light leading-tight text-navy">Future-Ready Investment</h3>
            <p class="mt-3 max-w-sm text-[.95rem] font-light leading-[1.75] text-ink/80">A well-connected location can add long-term value to your property. Airport City Neelambur offers an opportunity to invest in a growing part of Coimbatore.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- DISTANCES -->
<section id="distances" class="relative overflow-hidden bg-ink py-28 text-porcelain md:py-44" aria-labelledby="distances-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-20 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-5">
        <p class="eyebrow text-copper-light" data-fade>Distance from the project</p>
        <h2 id="distances-title" class="mt-6 font-display text-[clamp(2.5rem,5.2vw,4.9rem)] font-light leading-[1.04] tracking-[-.01em] ">
          <span class="mask"><span class="mask-in" data-line>Neelambur.</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>Connected to</span></span>
          <span class="mask"><span class="mask-in" data-line>what matters.</span></span>
        </h2>
        <p class="mt-8 max-w-md font-light leading-[1.8] text-porcelain/80" data-fade>Airport City is strategically located in Neelambur, Coimbatore, along the Avinashi Main Road corridor, giving residents convenient connectivity to the airport, hospitals, educational institutions, hotels, transport hubs and major employment destinations.</p>
        <a href="https://www.google.com/maps/search/?api=1&query=Airport+City+Neelambur+Coimbatore" target="_blank" rel="noopener" class="group mt-12 inline-flex items-center gap-4 border border-copper-light px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-porcelain" data-fade>
          Get directions to Airport City <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">↗</span><span class="sr-only">(opens in a new tab)</span>
        </a>
      </div>
      <div class="md:col-span-6 md:col-start-7 md:pt-24">
        <h3 class="mb-2 flex items-center justify-between text-[.68rem] uppercase tracking-[.3em] text-porcelain/60"><span>Place</span><span>km</span></h3>
        <ul>
          <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug">Yello Train School</span>
              <span class="shrink-0 font-display text-3xl italic text-copper-light">0.5</span>
            </div>
            <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-px origin-left bg-copper-light" style="width: 7.1%"></div>
            </div>
          </li>
          <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug">Neelambur – Avinashi Road</span>
              <span class="shrink-0 font-display text-3xl italic text-copper-light">1.5</span>
            </div>
            <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-px origin-left bg-copper-light" style="width: 21.4%"></div>
            </div>
          </li>
          <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug">PSG Institute of Technology</span>
              <span class="shrink-0 font-display text-3xl italic text-copper-light">4</span>
            </div>
            <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-px origin-left bg-copper-light" style="width: 57.1%"></div>
            </div>
          </li>
          <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug">Royal Care Hospital</span>
              <span class="shrink-0 font-display text-3xl italic text-copper-light">5</span>
            </div>
            <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-px origin-left bg-copper-light" style="width: 71.4%"></div>
            </div>
          </li>
          <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug">New Coimbatore International Airport</span>
              <span class="shrink-0 font-display text-3xl italic text-copper-light">6</span>
            </div>
            <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-px origin-left bg-copper-light" style="width: 85.7%"></div>
            </div>
          </li>
          <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug">Le Méridien Hotel</span>
              <span class="shrink-0 font-display text-3xl italic text-copper-light">6</span>
            </div>
            <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-px origin-left bg-copper-light" style="width: 85.7%"></div>
            </div>
          </li>
          <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug">KPR Tech Park</span>
              <span class="shrink-0 font-display text-3xl italic text-copper-light">6</span>
            </div>
            <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-px origin-left bg-copper-light" style="width: 85.7%"></div>
            </div>
          </li>
          <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug">KGM Hospital</span>
              <span class="shrink-0 font-display text-3xl italic text-copper-light">7</span>
            </div>
            <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-px origin-left bg-copper-light" style="width: 100.0%"></div>
            </div>
          </li>
          <li class="border-t border-porcelain/15 py-5 last:border-b md:py-6" data-fade>
            <div class="flex items-baseline justify-between gap-6">
              <span class="font-display text-[clamp(1.35rem,2.4vw,2rem)] font-light leading-snug">KMCH Hospital</span>
              <span class="shrink-0 font-display text-3xl italic text-copper-light">7</span>
            </div>
            <div class="mt-3 h-px w-full bg-porcelain/10" aria-hidden="true">
              <div class="dist-bar h-px origin-left bg-copper-light" style="width: 100.0%"></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- HELP CHOOSING -->
<section id="help" class="relative overflow-hidden bg-porcelain-200 py-28 md:py-40" aria-labelledby="help-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-12 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-6">
        <p class="eyebrow" data-fade>What are you looking for?</p>
        <h2 id="help-title" class="mt-6 font-display text-[clamp(2.3rem,4.6vw,4.3rem)] font-light leading-[1.04] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>Not sure which plot</span></span>
          <span class="mask"><span class="mask-in" data-line>is right for you?</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>Let us help.</span></span>
        </h2>
        <p class="mt-8 max-w-md font-light leading-[1.8] text-ink/85" data-fade>Tell us what you’re looking for, and our team will help you explore the right plot option at Airport City Neelambur.</p>
        <a href="plots-layout.html" class="link-line mt-10 inline-flex items-center gap-3 text-[.72rem] uppercase tracking-[.26em] text-navy" data-fade>Explore plot options <span aria-hidden="true">→</span></a>
      </div>
      <ul class="flex flex-wrap content-start gap-3 md:col-span-5 md:col-start-8 md:pt-16" aria-label="Choose what you are looking for">
        <li><a href="contact-us.html?interest=Dream+Home#enquiry" class="inline-block border border-ink/30 px-5 py-3 text-[.7rem] uppercase tracking-[.22em] text-navy transition-colors duration-500 hover:border-copper hover:bg-copper hover:text-porcelain">Dream Home</a></li>
        <li><a href="contact-us.html?interest=Investment+Property#enquiry" class="inline-block border border-ink/30 px-5 py-3 text-[.7rem] uppercase tracking-[.22em] text-navy transition-colors duration-500 hover:border-copper hover:bg-copper hover:text-porcelain">Investment Property</a></li>
        <li><a href="contact-us.html?interest=Premium+Villa+Plot#enquiry" class="inline-block border border-ink/30 px-5 py-3 text-[.7rem] uppercase tracking-[.22em] text-navy transition-colors duration-500 hover:border-copper hover:bg-copper hover:text-porcelain">Premium Villa Plot</a></li>
        <li><a href="contact-us.html?interest=Future+Family+Home#enquiry" class="inline-block border border-ink/30 px-5 py-3 text-[.7rem] uppercase tracking-[.22em] text-navy transition-colors duration-500 hover:border-copper hover:bg-copper hover:text-porcelain">Future Family Home</a></li>
        <li><a href="contact-us.html?interest=Long-Term+Investment#enquiry" class="inline-block border border-ink/30 px-5 py-3 text-[.7rem] uppercase tracking-[.22em] text-navy transition-colors duration-500 hover:border-copper hover:bg-copper hover:text-porcelain">Long-Term Investment</a></li>
        <li><a href="contact-us.html?interest=Near+Airport+Location#enquiry" class="inline-block border border-ink/30 px-5 py-3 text-[.7rem] uppercase tracking-[.22em] text-navy transition-colors duration-500 hover:border-copper hover:bg-copper hover:text-porcelain">Near Airport Location</a></li>
        <li><a href="contact-us.html?interest=Gated+Community+Living#enquiry" class="inline-block border border-ink/30 px-5 py-3 text-[.7rem] uppercase tracking-[.22em] text-navy transition-colors duration-500 hover:border-copper hover:bg-copper hover:text-porcelain">Gated Community Living</a></li>
        <li><a href="contact-us.html?interest=Residential+Plot#enquiry" class="inline-block border border-ink/30 px-5 py-3 text-[.7rem] uppercase tracking-[.22em] text-navy transition-colors duration-500 hover:border-copper hover:bg-copper hover:text-porcelain">Residential Plot</a></li>
      </ul>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="bg-porcelain py-28 md:py-40" aria-labelledby="faq-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-14 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-4">
        <p class="eyebrow" data-fade>To know more about the location</p>
        <h2 id="faq-title" class="mt-6 font-display text-[clamp(2.4rem,5vw,4.6rem)] font-light leading-[1.04] tracking-[-.01em] text-navy">
          <span class="mask"><span class="mask-in" data-line>Find your place</span></span>
          <span class="mask"><span class="mask-in italic text-copper" data-line>in Neelambur.</span></span>
        </h2>
      </div>
      <div class="md:col-span-7 md:col-start-6">
        <details class="faq group border-t border-ink/20 last:border-b" data-fade open>
          <summary class="flex cursor-pointer list-none items-start justify-between gap-8 py-7 font-display text-[clamp(1.3rem,2.2vw,1.8rem)] font-light leading-snug text-navy marker:content-none [&::-webkit-details-marker]:hidden">
            <span>Why is Neelambur a good location to buy a plot in Coimbatore?</span>
            <span class="mt-1 font-sans text-2xl font-extralight text-copper transition-transform duration-500 group-open:rotate-45" aria-hidden="true">+</span>
          </summary>
          <p class="max-w-2xl pb-8 font-light leading-[1.8] text-ink/80">Neelambur is a strategically positioned area of Coimbatore with convenient access to the airport, Avinashi Road and important parts of the city. Its growing residential and commercial development makes it an attractive location for both homebuyers and property investors.</p>
        </details>
        <details class="faq group border-t border-ink/20 last:border-b" data-fade>
          <summary class="flex cursor-pointer list-none items-start justify-between gap-8 py-7 font-display text-[clamp(1.3rem,2.2vw,1.8rem)] font-light leading-snug text-navy marker:content-none [&::-webkit-details-marker]:hidden">
            <span>How is Airport City Neelambur connected to Coimbatore Airport?</span>
            <span class="mt-1 font-sans text-2xl font-extralight text-copper transition-transform duration-500 group-open:rotate-45" aria-hidden="true">+</span>
          </summary>
          <p class="max-w-2xl pb-8 font-light leading-[1.8] text-ink/80">Airport City Neelambur is strategically located near Coimbatore International Airport, offering convenient access for residents, business travellers and frequent flyers.</p>
        </details>
        <details class="faq group border-t border-ink/20 last:border-b" data-fade>
          <summary class="flex cursor-pointer list-none items-start justify-between gap-8 py-7 font-display text-[clamp(1.3rem,2.2vw,1.8rem)] font-light leading-snug text-navy marker:content-none [&::-webkit-details-marker]:hidden">
            <span>Is Neelambur a good location for property investment?</span>
            <span class="mt-1 font-sans text-2xl font-extralight text-copper transition-transform duration-500 group-open:rotate-45" aria-hidden="true">+</span>
          </summary>
          <p class="max-w-2xl pb-8 font-light leading-[1.8] text-ink/80">Neelambur&#x27;s connectivity, proximity to the airport and ongoing development make it a promising location to consider for residential property investment. Buyers should evaluate the specific project, approvals, pricing and future requirements before investing.</p>
        </details>
        <details class="faq group border-t border-ink/20 last:border-b" data-fade>
          <summary class="flex cursor-pointer list-none items-start justify-between gap-8 py-7 font-display text-[clamp(1.3rem,2.2vw,1.8rem)] font-light leading-snug text-navy marker:content-none [&::-webkit-details-marker]:hidden">
            <span>Why choose Airport City Neelambur over other plots in Coimbatore?</span>
            <span class="mt-1 font-sans text-2xl font-extralight text-copper transition-transform duration-500 group-open:rotate-45" aria-hidden="true">+</span>
          </summary>
          <p class="max-w-2xl pb-8 font-light leading-[1.8] text-ink/80">Airport City combines a strategic Neelambur location, convenient airport and road connectivity, premium residential plots and a community-focused approach, making it an option worth exploring for both homebuyers and investors.</p>
        </details>
      </div>
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


