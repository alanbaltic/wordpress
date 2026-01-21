/*
  Baltic Theme v1.6 — Motion Layer (fresh start)
  - Slow, elegant fade + lift on scroll
  - Gentle CTA glow (no bounce)
  - Hero headline cross-fade swap
  - Respects prefers-reduced-motion
*/

(function () {
  const body = document.body;
  if (!body) return;

  const reduce =
    window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  if (reduce) return;

  body.classList.add("be-motion-ready");

  const SKIP_CLOSEST = "header, nav, footer, .bqd-modal";

  const revealSelectors = [
    ".hero-overlay-text",
    ".hero-heading",
    ".hover-card",
    ".be-marquee-item",
    ".rounded-2xl",
    ".rounded-xl",
    "section h1",
    "section h2",
    "section h3",
    "section p",
    ".be-reveal"
  ];

  const targets = new Set();
  document.querySelectorAll(revealSelectors.join(",")).forEach((el) => {
    if (el.closest(SKIP_CLOSEST)) return;
    if (el.closest("a,button")) return;
    el.classList.add("be-watch");
    targets.add(el);
  });

  let staggerIndex = 0;
  targets.forEach((el) => {
    const delay = (staggerIndex % 6) * 80;
    el.style.setProperty("--be-delay", `${delay}ms`);
    staggerIndex += 1;
  });

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("be-in");
        } else {
          entry.target.classList.remove("be-in");
        }
      });
    },
    {
      threshold: 0.18,
      rootMargin: "0px 0px -10% 0px"
    }
  );

  targets.forEach((el) => io.observe(el));

  // CTA glow (keep shine, remove bounce)
  const ctaSelectors = [
    "a.bg-emerald-400",
    "button.bg-emerald-400",
    ".wpcf7-form input[type='submit']",
    ".wpcf7-form .wpcf7-submit",
    ".bqd-trigger",
    "a[data-bqd-open='1']"
  ];

  document.querySelectorAll(ctaSelectors.join(",")).forEach((el) => {
    if (el.closest(SKIP_CLOSEST)) return;
    el.classList.add("be-cta-wow");
  });

  // Hero headline cross-fade swap
  function startSwap(el, a, b, ms) {
    if (!el || el.dataset.beSwapActive) return;
    el.dataset.beSwapActive = "true";
    el.classList.add("be-swap");

    let on = false;
    const interval = Math.max(2600, ms || 3200);
    const fadeOutMs = 420;
    const fadeInMs = 700;

    setInterval(() => {
      el.classList.add("be-swap-fade-out");
      setTimeout(() => {
        el.textContent = on ? a : b;
        el.classList.remove("be-swap-fade-out");
        el.classList.add("be-swap-fade-in");
        setTimeout(() => {
          el.classList.remove("be-swap-fade-in");
        }, fadeInMs);
        on = !on;
      }, fadeOutMs);
    }, interval);
  }

  const heroSpan = document.querySelector("h1 span.text-emerald-400");
  if (heroSpan) {
    const a = heroSpan.textContent.trim() || "London & Surrounding Areas";
    const b = heroSpan.getAttribute("data-alt") || "Essex • Kent • Surrey";
    startSwap(heroSpan, a, b, 3200);
  }

  const stripH2 = document.querySelector(".hero-heading");
  if (stripH2) {
    const a = stripH2.textContent.trim() || "Brightening up cold spaces!";
    const b =
      stripH2.getAttribute("data-alt") ||
      "Solar • EV • Electrical — done properly.";
    startSwap(stripH2, a, b, 3400);
  }
})();
