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
    targets.add(el);
  });

  // CTAs: make them extra juicy
  document.querySelectorAll('a[data-bqd-open="1"], a[href="#contact"], a[href="#services"], button, .bqd-trigger').forEach(el => {
    if (el.closest('.bqd-modal')) return;
    targets.add(el);
  });

  // Apply watch class
  targets.forEach(watch);

  // Intersection Observer: add/remove .be-in so it replays both ways
  const io = new IntersectionObserver((entries) => {
    for (const entry of entries) {
      const el = entry.target;
      if (entry.isIntersecting) {
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
})();
