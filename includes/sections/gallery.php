<?php
// key, grid placement (md+), aspect, vertical offset
$tiles = [
    ['arch', 'md:col-span-7',                 'aspect-[1260/680]', ''],
    ['g1',   'md:col-span-4 md:col-start-9',  'aspect-square',     'md:mt-24'],
    ['g2',   'md:col-span-4 md:col-start-2',  'aspect-square',     'md:-mt-8'],
    ['g5',   'md:col-span-7 md:col-start-6',  'aspect-[1260/680]', 'md:mt-20'],
    ['g3',   'md:col-span-5',                 'aspect-square',     ''],
    ['g6',   'md:col-span-5 md:col-start-8',  'aspect-square',     'md:mt-32'],
];
?>
<section id="gallery" class="relative overflow-hidden bg-navy-950 py-28 text-porcelain md:py-44" aria-labelledby="gallery-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-8 md:grid-cols-12 md:gap-x-10">
      <div class="md:col-span-7">
        <p class="eyebrow text-copper-light" data-fade>Gallery</p>
        <h2 id="gallery-title" class="mt-6 font-display text-[clamp(2.5rem,5.2vw,4.9rem)] font-light leading-[1.02]">
          <span class="mask"><span class="mask-in" data-line>The project,</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>up close.</span></span>
        </h2>
      </div>
      <p class="max-w-md font-light leading-[1.8] text-porcelain/80 md:col-span-4 md:col-start-9 md:self-end" data-fade>Take a closer look at the layout, residential plots, internal roads, open spaces and the overall project environment at Avinashi Main Road, Neelambur.</p>
    </div>

    <ul class="mt-20 grid gap-y-10 md:mt-28 md:grid-cols-12 md:gap-x-6 md:gap-y-0" id="gallery-grid">
      <?php foreach ($tiles as $i => $t): ?>
        <li class="<?= e($t[1]) ?> <?= e($t[3]) ?>">
          <button type="button" class="reveal group relative block w-full overflow-hidden bg-navy-900 <?= e($t[2]) ?>" data-lightbox="<?= e($t[0]) ?>" aria-label="View photograph <?= $i + 1 ?> of <?= count($tiles) ?> full size">
            <?= img($t[0], 'parallax-img absolute left-0 top-[-8%] h-[116%] w-full object-cover', ['sizes' => '(min-width:768px) 55vw, 100vw']) ?>
            <span class="absolute bottom-4 left-4 font-display text-lg italic text-porcelain opacity-0 transition-opacity duration-500 group-hover:opacity-100 group-focus-visible:opacity-100"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?> / <?= str_pad((string) count($tiles), 2, '0', STR_PAD_LEFT) ?></span>
          </button>
        </li>
      <?php endforeach; ?>
    </ul>
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
