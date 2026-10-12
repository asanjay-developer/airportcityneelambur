<?php $status = $_GET['status'] ?? ''; ?>
<section id="contact" class="relative overflow-hidden bg-navy-900 py-28 text-porcelain md:py-44" aria-labelledby="contact-title">
  <div class="mx-auto max-w-[1500px] px-6 md:px-12">
    <div class="grid gap-y-20 md:grid-cols-12 md:gap-x-10">

      <div class="md:col-span-5">
        <p class="eyebrow text-copper-light" data-fade>Your next address starts here</p>
        <h2 id="contact-title" class="mt-6 font-display text-[clamp(2.5rem,5.2vw,4.9rem)] font-light leading-[1.02]">
          <span class="mask"><span class="mask-in" data-line>Let’s build your</span></span>
          <span class="mask"><span class="mask-in italic text-copper-light" data-line>future at</span></span>
          <span class="mask"><span class="mask-in" data-line>Airport City.</span></span>
        </h2>
        <p class="mt-8 max-w-md font-light leading-[1.8] text-porcelain/80" data-fade>Looking for a premium villa plot in a well-connected location? Airport City Neelambur offers gated-community villa plots in Neelambur, Coimbatore, designed for peaceful living and a promising future.</p>

        <div class="mt-14 grid gap-10 border-t border-porcelain/15 pt-10 sm:grid-cols-2" data-fade>
          <div>
            <h3 class="text-[.68rem] uppercase tracking-[.3em] text-copper-light">Address</h3>
            <address class="mt-4 font-display text-xl font-light not-italic leading-snug"><?= e($site['address'][0]) ?><br><?= e($site['address'][1]) ?></address>
            <a href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener" class="link-line mt-4 inline-block text-[.68rem] uppercase tracking-[.24em]">Open in Maps<span class="sr-only"> (opens in a new tab)</span></a>
          </div>
          <div>
            <h3 class="text-[.68rem] uppercase tracking-[.3em] text-copper-light">Call us</h3>
            <ul class="mt-4 space-y-1 font-display text-xl font-light">
              <?php foreach ($site['phones'] as $p): ?>
                <li><a class="hover:text-copper-light" href="tel:<?= e($p['tel']) ?>"><?= e($p['display']) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="sm:col-span-2">
            <h3 class="text-[.68rem] uppercase tracking-[.3em] text-copper-light">Send mail</h3>
            <ul class="mt-4 space-y-1 font-display text-xl font-light">
              <?php foreach ($site['emails'] as $m): ?>
                <li><a class="break-all hover:text-copper-light" href="mailto:<?= e($m) ?>"><?= e($m) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="md:col-span-6 md:col-start-7 md:pt-20">
        <form action="contact.php" method="post" class="bg-porcelain p-8 text-ink md:p-14" aria-labelledby="form-title" data-fade novalidate>
          <h3 id="form-title" class="font-display text-3xl font-light italic text-navy md:text-4xl">Book your site visit</h3>
          <p class="mt-2 text-sm font-light text-ink/70">Tell us what you’re looking for and our team will help you explore the right plot option.</p>

          <?php if ($status === 'sent'): ?>
            <p role="status" class="mt-6 border-l-2 border-copper bg-porcelain-200 px-4 py-3 text-sm">Thank you — your enquiry has been sent. Our team will be in touch shortly.</p>
          <?php elseif ($status === 'error'): ?>
            <p role="alert" class="mt-6 border-l-2 border-ink bg-porcelain-200 px-4 py-3 text-sm">Sorry, we couldn’t send that. Please check your details or call us directly.</p>
          <?php endif; ?>

          <div class="mt-8 space-y-7">
            <div class="field"><label for="f-name">Full name</label><input id="f-name" name="name" type="text" required autocomplete="name" maxlength="100"></div>
            <div class="grid gap-7 sm:grid-cols-2">
              <div class="field"><label for="f-phone">Phone</label><input id="f-phone" name="phone" type="tel" required autocomplete="tel" maxlength="20" inputmode="tel"></div>
              <div class="field"><label for="f-email">Email</label><input id="f-email" name="email" type="email" autocomplete="email" maxlength="120"></div>
            </div>
            <div class="field">
              <label for="f-interest">What are you looking for?</label>
              <select id="f-interest" name="interest">
                <option value="">Select an option</option>
                <?php foreach ($interests as $o): ?><option><?= e($o) ?></option><?php endforeach; ?>
              </select>
            </div>
            <div class="field"><label for="f-msg">Message</label><textarea id="f-msg" name="message" rows="3" maxlength="1000"></textarea></div>
            <div class="hidden" aria-hidden="true"><label>Leave empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
          </div>

          <button type="submit" class="group mt-10 inline-flex w-full items-center justify-between bg-navy px-7 py-5 text-[.72rem] uppercase tracking-[.26em] text-porcelain transition-colors duration-500 hover:bg-copper hover:text-ink sm:w-auto sm:gap-16">
            Send enquiry <span aria-hidden="true" class="transition-transform duration-500 group-hover:translate-x-1">→</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
