/* Airport City Neelambur — interactions & motion.
 * Vanilla JS + GSAP/ScrollTrigger (+ Lenis for smooth scroll).
 * Everything animated is gated on prefers-reduced-motion; content is fully visible without JS. */
(() => {
  'use strict';

  const root = document.documentElement;
  const $ = (s, c = document) => c.querySelector(s);
  const $$ = (s, c = document) => Array.from(c.querySelectorAll(s));
  const reduced = root.classList.contains('rm') ||
    (window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches);

  /* ------------------------------------------------------------------
   * Features that need no animation library
   * ---------------------------------------------------------------- */

  // Mobile menu ------------------------------------------------------
  const header = $('#site-header');
  const toggle = $('#menu-toggle');
  const menu = $('#menu');
  const setMenu = (open) => {
    if (!menu || !toggle) return;
    menu.dataset.open = String(open);
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    const bars = $$('.bar', toggle);
    if (bars.length === 2) {
      bars[0].style.transform = open ? 'translateY(4px) rotate(45deg)' : '';
      bars[1].style.transform = open ? 'translateY(-4px) rotate(-45deg)' : '';
    }
    document.body.style.overflow = open ? 'hidden' : '';
    if (open) {
      header.dataset.solid = 'false';
      header.classList.add('text-porcelain');
      menu.querySelector('a')?.focus({ preventScroll: true });
    } else {
      toggle.focus({ preventScroll: true });
    }
  };
  toggle?.addEventListener('click', () => setMenu(menu.dataset.open !== 'true'));
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && menu?.dataset.open === 'true') setMenu(false);
  });
  // Simple focus trap while the menu is open
  menu?.addEventListener('keydown', (e) => {
    if (e.key !== 'Tab') return;
    const f = [toggle, ...$$('a', menu)];
    const first = f[0], last = f[f.length - 1];
    if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
    else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
  });

  // Video facade (loads YouTube only on demand) -----------------------
  $$('[data-video-play]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const id = btn.dataset.videoPlay;
      const wrap = btn.closest('[data-video]');
      const iframe = document.createElement('iframe');
      iframe.src = `https://www.youtube-nocookie.com/embed/${encodeURIComponent(id)}?autoplay=1&rel=0`;
      iframe.title = 'Airport City Neelambur — project film';
      iframe.allow = 'autoplay; encrypted-media; picture-in-picture; fullscreen';
      iframe.allowFullscreen = true;
      iframe.className = 'absolute inset-0 h-full w-full';
      wrap.innerHTML = '';
      wrap.appendChild(iframe);
    });
  });

  // Lightbox ----------------------------------------------------------
  const dlg = $('#lightbox');
  if (dlg) {
    const lbImg = $('#lightbox-img');
    const triggers = $$('[data-lightbox]');
    let idx = 0, opener = null;
    const show = (i) => {
      idx = (i + triggers.length) % triggers.length;
      const src = triggers[idx].querySelector('img');
      lbImg.src = src.currentSrc || src.src;
      lbImg.alt = src.alt;
    };
    const open = (i, el) => {
      opener = el;
      show(i);
      if (typeof dlg.showModal === 'function') dlg.showModal(); else dlg.setAttribute('open', '');
      document.body.style.overflow = 'hidden';
      window.__lenis?.stop();
      $('#lb-close').focus();
    };
    const close = () => {
      if (dlg.open) dlg.close();
    };
    dlg.addEventListener('close', () => {
      document.body.style.overflow = '';
      window.__lenis?.start();
      opener?.focus({ preventScroll: true });
    });
    triggers.forEach((t, i) => t.addEventListener('click', () => open(i, t)));
    $('#lb-close').addEventListener('click', close);
    $('#lb-prev').addEventListener('click', () => show(idx - 1));
    $('#lb-next').addEventListener('click', () => show(idx + 1));
    dlg.addEventListener('click', (e) => { if (e.target === dlg) close(); });
    dlg.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') show(idx - 1);
      if (e.key === 'ArrowRight') show(idx + 1);
    });
  }

  // Enquiry form (static site: opens the visitor's email app, no server) ----
  const form = $('#enquiry-form');
  if (form) {
    const status = $('#form-status');
    const say = (msg, isError) => {
      if (!status) return;
      status.textContent = msg;
      status.classList.remove('hidden');
      status.classList.toggle('border-ink', !!isError);
      status.classList.toggle('border-copper', !isError);
    };
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const v = (n) => (form.elements[n]?.value || '').trim();
      if (v('website')) return; // honeypot
      const name = v('name'), phone = v('phone'), email = v('email');
      if (!name || !/^[0-9+()\-\s]{7,20}$/.test(phone)) {
        say('Please enter your name and a valid phone number.', true);
        (name ? form.elements.phone : form.elements.name).focus();
        return;
      }
      if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        say('Please check your email address.', true);
        form.elements.email.focus();
        return;
      }
      const body = [
        'New site-visit enquiry', '',
        `Name: ${name}`,
        `Phone: ${phone}`,
        `Email: ${email || '-'}`,
        `Looking for: ${v('interest') || '-'}`, '',
        'Message:', v('message') || '-',
      ].join('\n');
      const to = (form.getAttribute('action') || '').replace(/^mailto:/, '');
      window.location.href = `mailto:${to}?subject=${encodeURIComponent('Site visit enquiry — ' + name)}&body=${encodeURIComponent(body)}`;
      say('Your email app should now open with your enquiry ready to send. If it doesn’t, please call us instead.', false);
    });
  }

  // Header: solid background after hero, hide on scroll down -----------
  let lastY = window.scrollY;
  const onScroll = () => {
    const y = window.scrollY;
    if (menu?.dataset.open === 'true') return;
    header.dataset.solid = String(y > window.innerHeight * 0.6);
    header.dataset.hidden = String(y > lastY && y > window.innerHeight * 0.9);
    lastY = y;
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ------------------------------------------------------------------
   * Animation layer
   * ---------------------------------------------------------------- */
  const { gsap, ScrollTrigger } = window;
  if (!gsap || !ScrollTrigger) {
    // Library failed to load: reveal everything.
    root.classList.remove('js');
    return;
  }
  gsap.registerPlugin(ScrollTrigger);

  // Counters (static text is already in the markup, so reduced-motion is fine)
  const runCounters = () => {
    $$('[data-count]').forEach((el) => {
      const end = parseFloat(el.dataset.count);
      const dec = parseInt(el.dataset.decimals || '0', 10);
      const o = { v: 0 };
      gsap.to(o, {
        v: end, duration: 2, ease: 'power2.out',
        onUpdate: () => { el.textContent = o.v.toFixed(dec); },
        scrollTrigger: { trigger: el, start: 'top 90%', once: true },
      });
    });
  };

  if (reduced) {
    // Anchor links: native smooth behaviour is disabled by CSS; nothing else animates.
    wireAnchors(null);
    activeNav();
    return;
  }

  // Smooth scroll ------------------------------------------------------
  let lenis = null;
  if (window.Lenis) {
    lenis = new window.Lenis({ duration: 1.15, easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), smoothWheel: true });
    window.__lenis = lenis;
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((t) => lenis.raf(t * 1000));
    gsap.ticker.lagSmoothing(0);
  }
  wireAnchors(lenis);

  function wireAnchors(l) {
    $$('a[href^="#"]').forEach((a) => {
      a.addEventListener('click', (e) => {
        const id = a.getAttribute('href');
        if (id.length < 2 && id !== '#') return;
        const target = id === '#' ? document.body : $(id);
        if (!target) return;
        e.preventDefault();
        if (menu?.dataset.open === 'true') setMenu(false);
        const offset = id === '#top' ? 0 : -70;
        if (l) l.scrollTo(target, { offset, duration: 1.6 });
        else target.scrollIntoView({ block: 'start' });
        history.replaceState(null, '', id);
        // Move focus for keyboard / screen-reader users
        target.setAttribute('tabindex', '-1');
        target.focus({ preventScroll: true });
      });
    });
  }

  // Active nav highlighting -----------------------------------------
  function activeNav() {
    const links = $$('[data-nav]');
    const map = { about: 'about', project: 'project', amenities: 'project', location: 'location', faq: 'location', plots: 'plots', gallery: 'gallery', contact: 'contact' };
    Object.keys(map).forEach((id) => {
      const sec = document.getElementById(id);
      if (!sec) return;
      ScrollTrigger.create({
        trigger: sec, start: 'top 45%', end: 'bottom 45%',
        onToggle: (self) => {
          if (!self.isActive) return;
          links.forEach((l) => l.setAttribute('aria-current', String(l.dataset.nav === map[id])));
        },
      });
    });
  }
  activeNav();

  // Hero intro ------------------------------------------------------
  const heroImg = $('[data-hero-img]');
  const intro = gsap.timeline({ defaults: { ease: 'power3.out' } });
  intro
    .fromTo('[data-hero-media]', { clipPath: 'inset(0 0 100% 0)' }, { clipPath: 'inset(0 0 0% 0)', duration: 1.5, ease: 'power4.inOut' })
    .fromTo(heroImg, { scale: 1.25 }, { scale: 1, duration: 2.4, ease: 'power2.out' }, 0)
    .fromTo('[data-hero-line]', { yPercent: 115, opacity: 1 }, { yPercent: 0, opacity: 1, duration: 1.2, stagger: 0.14 }, 0.7)
    .fromTo('[data-hero-fade]', { opacity: 0, y: 24 }, { opacity: 1, y: 0, duration: 1, stagger: 0.12 }, 1.2)
    .fromTo('[data-hero-inset]', { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 1.2 }, 1.5)
    .fromTo(header, { yPercent: -100 }, { yPercent: 0, duration: 1, clearProps: 'transform' }, 1.4);

  // Hero parallax on scroll
  gsap.to(heroImg, {
    yPercent: 14, ease: 'none',
    scrollTrigger: { trigger: '#top', start: 'top top', end: 'bottom top', scrub: true },
  });
  gsap.to('#top .mx-auto', {
    yPercent: -6, opacity: 0.2, ease: 'none',
    scrollTrigger: { trigger: '#top', start: '35% top', end: 'bottom top', scrub: true },
  });

  // Masked heading lines (staggered) ---------------------------------
  const groups = new Map();
  $$('[data-line]').forEach((el) => {
    const g = el.closest('h2, h3') || el.parentElement;
    if (!groups.has(g)) groups.set(g, []);
    groups.get(g).push(el);
  });
  groups.forEach((lines, g) => {
    gsap.fromTo(lines, { yPercent: 115, opacity: 1 }, {
      yPercent: 0, opacity: 1, duration: 1.1, ease: 'power3.out', stagger: 0.12,
      scrollTrigger: { trigger: g, start: 'top 85%', once: true },
    });
  });

  // Fade-up (batched so siblings stagger naturally) -----------------
  ScrollTrigger.batch('[data-fade]', {
    start: 'top 90%', once: true,
    onEnter: (els) => gsap.fromTo(els, { opacity: 0, y: 36 }, { opacity: 1, y: 0, duration: 1, ease: 'power3.out', stagger: 0.09, overwrite: true }),
  });

  // Cinematic image reveals ------------------------------------------
  $$('.reveal').forEach((el) => {
    const img = $('img', el);
    const tl = gsap.timeline({ scrollTrigger: { trigger: el, start: 'top 88%', once: true } });
    tl.fromTo(el, { clipPath: 'inset(0 0 100% 0)' }, { clipPath: 'inset(0 0 0% 0)', duration: 1.5, ease: 'power4.inOut' });
    if (img) tl.fromTo(img, { scale: 1.3 }, { scale: 1, duration: 1.8, ease: 'power2.out' }, 0);
  });

  // Subtle parallax inside oversized images --------------------------
  $$('.parallax-img').forEach((img) => {
    const host = img.parentElement;
    const oversized = img.className.includes('h-[1');
    if (!oversized) return;
    gsap.fromTo(img, { yPercent: -5 }, {
      yPercent: 5, ease: 'none',
      scrollTrigger: { trigger: host, start: 'top bottom', end: 'bottom top', scrub: true },
    });
  });

  // Large floating numerals
  $$('[data-parallax-y]').forEach((el) => {
    gsap.fromTo(el, { y: 0 }, {
      y: parseFloat(el.dataset.parallaxY) * 10, ease: 'none',
      scrollTrigger: { trigger: el.closest('section'), start: 'top bottom', end: 'bottom top', scrub: true },
    });
  });

  // Distance bars draw in --------------------------------------------
  $$('.dist-bar').forEach((bar) => {
    gsap.fromTo(bar, { scaleX: 0 }, {
      scaleX: 1, duration: 1.6, ease: 'power3.out',
      scrollTrigger: { trigger: bar, start: 'top 92%', once: true },
    });
  });

  runCounters();

  // Mobile menu link entrance
  const menuLinks = $$('.menu-link');
  toggle?.addEventListener('click', () => {
    if (menu.dataset.open === 'true') {
      gsap.fromTo(menuLinks, { yPercent: 100 }, { yPercent: 0, duration: 0.9, ease: 'power3.out', stagger: 0.07, delay: 0.15 });
    }
  });

  // Keep triggers accurate once remote images have laid out
  window.addEventListener('load', () => ScrollTrigger.refresh());
})();
