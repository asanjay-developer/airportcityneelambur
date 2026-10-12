<header id="site-header" class="fixed inset-x-0 top-0 z-50 text-porcelain transition-[background-color,color,transform] duration-500 data-[solid=true]:bg-porcelain/95 data-[solid=true]:text-ink data-[solid=true]:shadow-[0_1px_0_rgba(35,34,31,.08)] data-[hidden=true]:-translate-y-full" data-solid="false" data-hidden="false">
  <div class="mx-auto flex max-w-[1500px] items-center justify-between px-6 py-5 md:px-12 md:py-6">
    <a href="#top" class="group flex shrink-0 items-baseline gap-3 whitespace-nowrap" aria-label="<?= e($site['name']) ?> — home">
      <span class="font-display text-2xl font-light uppercase tracking-[.28em] md:text-[1.7rem]">Airport City</span>
      <span class="hidden h-px w-8 bg-copper transition-all duration-500 group-hover:w-14 2xl:block"></span>
      <span class="hidden text-[.65rem] font-light uppercase tracking-[.3em] opacity-80 2xl:block">Neelambur</span>
    </a>

    <nav aria-label="Primary" class="hidden xl:block">
      <ul class="flex items-center gap-8 whitespace-nowrap 2xl:gap-10">
        <?php foreach ($nav as $n): ?>
          <li>
            <a href="#<?= e($n['id']) ?>" data-nav="<?= e($n['id']) ?>" class="nav-link group relative inline-flex items-baseline gap-2 py-1 text-[.72rem] font-normal uppercase tracking-[.22em]">
              <span class="font-display text-sm italic text-copper-light [[data-solid=true]_&]:text-copper"><?= e($n['num']) ?></span>
              <span><?= e($n['label']) ?></span>
              <span class="absolute inset-x-0 -bottom-0.5 h-px origin-left scale-x-0 bg-copper transition-transform duration-500 group-hover:scale-x-100 group-aria-[current=true]:scale-x-100"></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <div class="flex items-center gap-5">
      <a href="tel:<?= e($site['phones'][0]['tel']) ?>" class="hidden whitespace-nowrap text-[.72rem] uppercase tracking-[.22em] 2xl:inline-block">
        <span class="sr-only">Call </span><?= e($site['phones'][0]['display']) ?>
      </a>
      <button id="menu-toggle" type="button" class="relative z-[60] flex h-11 w-11 flex-col items-center justify-center gap-[7px] xl:hidden" aria-expanded="false" aria-controls="menu" aria-label="Open menu">
        <span class="bar block h-px w-7 bg-current transition-transform duration-500"></span>
        <span class="bar block h-px w-7 bg-current transition-transform duration-500"></span>
      </button>
    </div>
  </div>
</header>

<div id="menu" class="invisible fixed inset-0 z-[55] bg-navy-900 text-porcelain opacity-0 transition-[opacity,visibility] duration-500 data-[open=true]:visible data-[open=true]:opacity-100 xl:hidden" data-open="false" role="dialog" aria-modal="true" aria-label="Site menu">
  <div class="flex h-full flex-col justify-between px-8 pb-10 pt-28">
    <nav aria-label="Mobile">
      <ul class="space-y-1">
        <?php foreach ($nav as $n): ?>
          <li class="overflow-hidden">
            <a href="#<?= e($n['id']) ?>" class="menu-link flex items-baseline gap-4 py-2 font-display text-[2.6rem] font-light leading-none">
              <span class="text-base italic text-copper"><?= e($n['num']) ?></span>
              <span><?= e($n['label']) ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <div class="space-y-2 text-sm font-light tracking-wide text-porcelain/80">
      <p><?= e($site['address'][0]) ?>, <?= e($site['address'][1]) ?></p>
      <a class="block text-porcelain" href="tel:<?= e($site['phones'][0]['tel']) ?>"><?= e($site['phones'][0]['display']) ?></a>
      <a class="block text-porcelain" href="mailto:<?= e($site['emails'][0]) ?>"><?= e($site['emails'][0]) ?></a>
    </div>
  </div>
</div>

<main id="main">
