/*
  Baltic Theme v1.5 — Motion Layer (CHAOS MODE)
  What it does:
  - Scroll reveal that REPLAYS on scroll-down and scroll-up
  - Adds randomised, bouncy FX per element (enter => new vibe)
  - Adds “alive” ambient glow drift
  - Headline swaps between two phrases with a bouncy flip
  - Respects prefers-reduced-motion
*/

(function(){
  const body = document.body;
  if (!body) return;

  const reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduce) return;

  // Mark ready
  body.classList.add('be-motion-ready');

  // Detect scroll direction (for direction-aware reveals)
  let lastY = window.scrollY || 0;
  function setDir(){
    const y = window.scrollY || 0;
    const dir = (y > lastY) ? 'down' : 'up';
    body.classList.toggle('be-dir-down', dir === 'down');
    body.classList.toggle('be-dir-up', dir === 'up');
    lastY = y;
  }
  setDir();
  window.addEventListener('scroll', setDir, { passive: true });

  // "As mad as can be" — default chaos. If you ever want calmer, add body.be-calm.
  const isFront = body.classList.contains('home') || body.classList.contains('front-page');
  if (isFront && !body.classList.contains('be-calm')) {
    // keep it spicy
  } else {
    // not front page: still animated, slightly less chaotic
    body.style.setProperty('--be-chaos', '.0');
  }

  // Helper: add reveal class once
  function watch(el){
    if (!el || el.classList.contains('be-watch')) return;
    el.classList.add('be-watch');

    // mark for scroll parallax
    el.classList.add('be-parallax');
  }

  const FX = [
    'be-fx-wobble',
    'be-fx-slam',
    'be-fx-swing',
    'be-fx-glitch'
  ];

  const textSelectors = '.hero-overlay-text, .hero-heading';
  const isTextElement = (el) => {
    if (!el) return false;
    if (/^(H1|H2|H3|P)$/i.test(el.tagName)) return true;
    return el.matches(textSelectors);
  };

  function applyRandomFX(el){
    FX.forEach(c => el.classList.remove(c));
    if (isTextElement(el)) return;
    // Don’t glitch EVERYTHING — reserve more for headings.
    const isHeading = /^(H1|H2|H3)$/i.test(el.tagName);
    let pool = FX;
    if (!isHeading) pool = FX.filter(c => c !== 'be-fx-glitch');

    const pick = pool[Math.floor(Math.random() * pool.length)];
    el.classList.add(pick);
  }

  // Collect elements to animate (tuned for your front-page layout)
  const targets = new Set();

  // Cards / panels
  document.querySelectorAll('.hover-card, .be-marquee-item, .rounded-2xl, .rounded-xl').forEach(el => {
    // Skip huge wrappers that would look weird
    if (el.closest('header') || el.closest('nav') || el.closest('.bqd-modal')) return;
    targets.add(el);
  });

  // Headings + key copy blocks
  document.querySelectorAll('h1, h2, h3, .hero-overlay-text, .hero-heading, p').forEach(el => {
    if (el.closest('header') || el.closest('nav') || el.closest('.bqd-modal')) return;
    // Don’t animate tiny footer legal lines too aggressively
    if (el.closest('footer')) return;
    el.classList.add('be-no-parallax');
    targets.add(el);
  });

  // CTAs: make them extra juicy
  document.querySelectorAll('a[data-bqd-open="1"], a[href="#contact"], a[href="#services"], button, .bqd-trigger').forEach(el => {
    if (el.closest('.bqd-modal')) return;
    if (el.tagName === 'A' || el.tagName === 'BUTTON') el.classList.add('be-cta-wow');
    targets.add(el);
  });

  // Apply watch class
  targets.forEach(watch);

  // Intersection Observer: add/remove .be-in so it replays both ways
  const io = new IntersectionObserver((entries) => {
    for (const entry of entries) {
      const el = entry.target;
      if (entry.isIntersecting) {
        applyRandomFX(el);
        el.classList.add('be-in');
      } else {
        el.classList.remove('be-in');
      }
    }
  }, {
    threshold: 0.18,
    rootMargin: '0px 0px -8% 0px'
  });

  targets.forEach(el => io.observe(el));

  // Scroll-reactive parallax (subtle, but makes it feel alive)
  const parallaxEls = Array.from(document.querySelectorAll('.be-parallax'))
    .filter(el => !el.closest('header') && !el.closest('nav') && !isTextElement(el));

  let raf = null;
  function tick(){
    raf = null;
    const vh = window.innerHeight || 800;
    const center = vh * 0.5;

    for (const el of parallaxEls) {
      const r = el.getBoundingClientRect();
      // distance from center => -1..1-ish
      const p = Math.max(-1.2, Math.min(1.2, (r.top + r.height*0.5 - center) / center));
      const chaos = parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--be-chaos')) || 1;

      // tiny drift; scaled by chaos
      const px = (p * 6 * chaos).toFixed(2);
      const py = (-p * 8 * chaos).toFixed(2);
      el.style.setProperty('--be-prx', px + 'px');
      el.style.setProperty('--be-pry', py + 'px');
    }
  }

  function requestTick(){
    if (raf) return;
    raf = requestAnimationFrame(tick);
  }
  requestTick();
  window.addEventListener('scroll', requestTick, { passive: true });
  window.addEventListener('resize', requestTick);

  // Mouse move "alive" drift
  let mouseRAF = null;
  window.addEventListener('mousemove', (e) => {
    if (mouseRAF) return;
    mouseRAF = requestAnimationFrame(() => {
      mouseRAF = null;
      const x = (e.clientX / window.innerWidth - 0.5) * 2;
      const y = (e.clientY / window.innerHeight - 0.5) * 2;
      body.style.setProperty('--be-mx', x.toFixed(3));
      body.style.setProperty('--be-my', y.toFixed(3));
    });
  }, { passive: true });

  // Headline text swap (bouncy)
  function startSwap(el, a, b, ms){
    if (!el) return;
    let on = false;
    const t = Math.max(1800, ms || 2400);
    setInterval(() => {
      el.classList.remove('be-swap-in');
      el.classList.add('be-swap-out');
      setTimeout(() => {
        el.textContent = on ? a : b;
        el.classList.remove('be-swap-out');
        el.classList.add('be-swap-in');
        setTimeout(() => el.classList.remove('be-swap-in'), 520);
        on = !on;
      }, 280);
    }, t);
  }

  // Primary hero highlight span
  const heroSpan = document.querySelector('h1 span.text-emerald-400');
  if (heroSpan) {
    heroSpan.classList.add('be-swap');
    const a = heroSpan.textContent.trim() || 'London & Surrounding Areas';
    const b = heroSpan.getAttribute('data-alt') || 'Essex • Kent • Surrey';
    startSwap(heroSpan, a, b, 2200);
  }

  // Secondary hero overlay headline (video strip)
  const stripH2 = document.querySelector('.hero-heading');
  if (stripH2) {
    stripH2.classList.add('be-swap');
    const a = stripH2.textContent.trim() || 'Brightening up cold spaces!';
    const b = stripH2.getAttribute('data-alt') || 'Solar • EV • Electrical - done properly.';
    startSwap(stripH2, a, b, 2600);
  }

})();
