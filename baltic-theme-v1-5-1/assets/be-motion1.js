/* Baltic Motion (Calm) — replay on scroll up & down */
(() => {
  // Prevent double init
  if (window.__BE_MOTION_INIT__) return;
  window.__BE_MOTION_INIT__ = true;

  const prefersReduced =
    window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (prefersReduced) return;

  function init() {
    if (!document.body) return;

    document.body.classList.add("be-motion-ready");

    // --- Scroll direction (up/down) ---
    let lastY = window.scrollY || 0;
    let ticking = false;

    function setDir() {
      const y = window.scrollY || 0;
      const dirUp = y < lastY;

      document.body.classList.toggle("be-dir-up", dirUp);
      document.body.classList.toggle("be-dir-down", !dirUp);

      lastY = y;
      ticking = false;
    }

    // Set initial direction state immediately
    setDir();

    window.addEventListener(
      "scroll",
      () => {
        if (!ticking) {
          ticking = true;
          requestAnimationFrame(setDir);
        }
      },
      { passive: true }
    );

    // --- Auto add .be-watch to common elements ---
    const autoSelectors = [".hover-card", "section h2", "section h3"];

    function ensureWatchClasses(root = document) {
      autoSelectors.forEach((sel) => {
        root.querySelectorAll(sel).forEach((el) => {
          if (!el.classList.contains("be-watch")) el.classList.add("be-watch");
        });
      });
    }

    ensureWatchClasses();

    // --- Intersection observer (replay both ways) ---
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("be-in");
          } else {
            // Remove so it replays when you scroll back
            entry.target.classList.remove("be-in");
          }
        });
      },
      {
        threshold: 0.15,
        rootMargin: "0px 0px -10% 0px",
      }
    );

    // Track what we've already observed
    const observed = new WeakSet();

    function observeAll(root = document) {
      root.querySelectorAll(".be-watch").forEach((el) => {
        if (observed.has(el)) return;
        observed.add(el);
        io.observe(el);
      });
    }

    observeAll();

    // --- If WP injects/updates blocks later, keep it working ---
    const mo = new MutationObserver((mutations) => {
      for (const m of mutations) {
        m.addedNodes.forEach((node) => {
          if (!(node instanceof HTMLElement)) return;
          ensureWatchClasses(node);
          observeAll(node);
        });
      }
    });

    mo.observe(document.documentElement, { childList: true, subtree: true });
  }

  // Run safely whether script is in head or footer
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init, { once: true });
  } else {
    init();
  }
})();