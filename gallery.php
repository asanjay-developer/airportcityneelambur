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
    <img src="assets/img/IMG_0561-1000x1000.webp" alt="Airport City Neelambur — site photograph 1" width="1000" height="1000" loading="eager" decoding="async" class="absolute inset-0 h-full w-full object-cover" fetchpriority="high" data-hero-img="" sizes="100vw">
    <div class="absolute inset-0 bg-navy-950/60"></div>
    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-navy-950/80 to-transparent"></div>
  </div>

  <div class="mx-auto grid min-h-[88svh] max-w-[1500px] grid-cols-12 gap-x-6 px-6 pb-14 pt-36 md:px-12 md:pb-16">
    <div class="col-span-12 flex flex-col justify-end md:col-span-9">
      <nav aria-label="Breadcrumb" class="mb-8" data-hero-fade>
        <ol class="flex items-center gap-4 text-[.7rem] uppercase tracking-[.34em] text-copper-light">
          <li><a href="index.php" class="link-line">Home</a></li>
          <li aria-hidden="true" class="h-px w-8 bg-copper"></li>
          <li aria-current="page" class="text-porcelain/80">Gallery</li>
        </ol>
      </nav>

      <h1 id="page-title" class="font-display text-[clamp(3.2rem,9vw,9.5rem)] font-light leading-[.95] tracking-[-.015em]">
        <span class="mask"><span class="mask-in" data-hero-line>Gallery</span></span>
        <span class="mask md:pl-[9vw]"><span class="mask-in italic text-copper-light" data-hero-line>The project,</span></span>
        <span class="mask"><span class="mask-in" data-hero-line>up close.</span></span>
      </h1>

      <p class="mt-10 max-w-md text-[.95rem] font-light leading-relaxed text-porcelain/85" data-hero-fade>
        Explore the Airport City Neelambur project through our gallery — the layout, residential plots, internal roads, open spaces and the overall project environment at Avinashi Main Road, Neelambur, Coimbatore.
      </p>

      <div class="mt-10 flex flex-wrap items-center gap-x-10 gap-y-5" data-hero-fade>
        <a href="contact-us.html" class="group inline-flex items-center gap-4 border border-copper-light px-7 py-4 text-[.72rem] uppercase tracking-[.24em] transition-colors duration-500 hover:bg-copper hover:text-porcelain">
          Book a site visit <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span>
        </a>
        <a href="plots-layout.html" class="link-line text-[.72rem] uppercase tracking-[.24em]">Plots &amp; layout</a>
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

<section id="photos" class="relative overflow-hidden bg-navy-950 py-28 text-porcelain md:py-44" aria-labelledby="photos-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-8 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-7">
        <p class="eyebrow text-copper-light" data-fade>Photographs</p>
        <h2 id="photos-title" class="mt-6 font-display text-[clamp(2.5rem,5.2vw,4.9rem)] font-light leading-[1.04] tracking-[-.01em] ">
          <span class="mask"><span class="mask-in" data-line>A closer look at</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>Airport City.</span></span>
        </h2>
      </div>
      <p class="max-w-md font-light leading-[1.8] text-porcelain/80 md:col-span-4 md:col-start-9 md:self-end" data-fade>Select any photograph to view it full size.</p>
    </div>
    <ul class="mt-20 grid gap-y-10 md:mt-28 md:grid-cols-12 md:gap-x-6 md:gap-y-0" id="gallery-grid">
      <li class="md:col-span-7 ">
        <button type="button" class="reveal group relative block w-full overflow-hidden bg-navy-900 aspect-[1260/680]" data-lightbox="arch" aria-label="View photograph 1 of 7 full size">
          <img src="assets/img/DSC04232.jpg-1-1260x680.webp" alt="Entrance arch, Airport City Neelambur" width="1260" height="680" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 55vw, 100vw">
          <span class="absolute bottom-4 left-4 font-display text-lg italic text-porcelain opacity-0 transition-opacity duration-500 group-hover:opacity-100 group-focus-visible:opacity-100">01 / 07</span>
        </button>
      </li>
      <li class="md:col-span-4 md:col-start-9 md:mt-24">
        <button type="button" class="reveal group relative block w-full overflow-hidden bg-navy-900 aspect-square" data-lightbox="g1" aria-label="View photograph 2 of 7 full size">
          <img src="assets/img/IMG_0561-1000x1000.webp" alt="Airport City Neelambur — site photograph 1" width="1000" height="1000" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 55vw, 100vw">
          <span class="absolute bottom-4 left-4 font-display text-lg italic text-porcelain opacity-0 transition-opacity duration-500 group-hover:opacity-100 group-focus-visible:opacity-100">02 / 07</span>
        </button>
      </li>
      <li class="md:col-span-4 md:col-start-2 md:-mt-8">
        <button type="button" class="reveal group relative block w-full overflow-hidden bg-navy-900 aspect-square" data-lightbox="g2" aria-label="View photograph 3 of 7 full size">
          <img src="assets/img/playground.webp" alt="Airport City Neelambur — site photograph 2" width="1000" height="1000" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 55vw, 100vw">
          <span class="absolute bottom-4 left-4 font-display text-lg italic text-porcelain opacity-0 transition-opacity duration-500 group-hover:opacity-100 group-focus-visible:opacity-100">03 / 07</span>
        </button>
      </li>
      <li class="md:col-span-7 md:col-start-6 md:mt-20">
        <button type="button" class="reveal group relative block w-full overflow-hidden bg-navy-900 aspect-[1260/680]" data-lightbox="g5" aria-label="View photograph 4 of 7 full size">
          <img src="assets/img/IMG_0561-1000x1000.webp" alt="Airport City Neelambur — site photograph 5" width="1260" height="680" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 55vw, 100vw">
          <span class="absolute bottom-4 left-4 font-display text-lg italic text-porcelain opacity-0 transition-opacity duration-500 group-hover:opacity-100 group-focus-visible:opacity-100">04 / 07</span>
        </button>
      </li>
      <li class="md:col-span-5 ">
        <button type="button" class="reveal group relative block w-full overflow-hidden bg-navy-900 aspect-square" data-lightbox="g3" aria-label="View photograph 5 of 7 full size">
          <img src="assets/img/IMG_0504.JPG-1000x1000.webp" alt="Airport City Neelambur — site photograph 3" width="1000" height="1000" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 55vw, 100vw">
          <span class="absolute bottom-4 left-4 font-display text-lg italic text-porcelain opacity-0 transition-opacity duration-500 group-hover:opacity-100 group-focus-visible:opacity-100">05 / 07</span>
        </button>
      </li>
      <li class="md:col-span-5 md:col-start-8 md:mt-32">
        <button type="button" class="reveal group relative block w-full overflow-hidden bg-navy-900 aspect-square" data-lightbox="g6" aria-label="View photograph 6 of 7 full size">
          <img src="assets/img/IMG_0580-1260x680.webp" alt="Airport City Neelambur — site photograph 6" width="1000" height="1000" loading="lazy" decoding="async" class="parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover" sizes="(min-width:768px) 55vw, 100vw">
          <span class="absolute bottom-4 left-4 font-display text-lg italic text-porcelain opacity-0 transition-opacity duration-500 group-hover:opacity-100 group-focus-visible:opacity-100">06 / 07</span>
        </button>
      </li>
      <li class="md:col-span-10 md:col-start-2 md:mt-24">

      </li>
    </ul>
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

