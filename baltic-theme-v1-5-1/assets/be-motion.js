/*
  Baltic Motion — CALM+ (restores bounce swaps + text-link shimmer)
  - Smooth reveal replay on scroll down & up
  - No random pop/wobble/glitch/jitter
  - CTAs keep shimmer/bounce (button style)
  - Text-links (View Services) get shimmer/underline sweep (text only)
  - Headline swaps bounce between phrases
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

  // ---- scroll direction (for direction-aware reveals)
  let lastY = window.scrollY || 0;
  let ticking = false;

  function setDir() {
    const y = window.scrollY || 0;
    const dirUp = y < lastY;
    body.classList.toggle("be-dir-up", dirUp);
    body.classList.toggle("be-dir-down", !dirUp);
    lastY = y;
    ticking = false;
  }

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

  setDir();

  // ---- helpers
  function hasBgClass(el) {
    if (!el || !el.classList) return false;
    for (const c of el.classList) if (c.startsWith("bg-")) return true;
    return false;
  }

  // "Button-like" CTAs only (get be-cta-wow)
  function isButtonCTA(el) {
    if (!el) return false;
    if (el.closest(SKIP_CLOSEST)) return false;

    // Buttons: your main emerald/amber pills + BQD triggers
    if (el.matches(".bqd-trigger, button")) return true;
    if (el.tagName === "A" && hasBgClass(el)) return true; // bg-emerald-400 etc.

    // Anchors to sections that are styled like buttons (yours usually have bg-emerald-400 anyway)
    return false;
  }

  // Text-link shimmer candidates (View Services / See what we look after)
  function isTextLink(el) {
    if (!el || el.tagName !== "A") return false;
    if (el.closest(SKIP_CLOSEST)) return false;
    if (hasBgClass(el)) return false; // not buttons
    if (el.classList.contains("bqd-trigger")) return false;

    const href = el.getAttribute("href") || "";
    const isServices = href === "#services" || href.includes("#services");
    const isGreenText =
      el.classList.contains("text-emerald-300") ||
      el.classList.contains("text-emerald-200") ||
      el.classList.contains("text-emerald-400");

    // Add other similar links by class (you mentioned “see what we look after”)
    const looksLikeLink =
      isServices || isGreenText || el.classList.contains("be-link-sweep");

    return looksLikeLink;
  }

  // Wrap ONLY text nodes into <span class="be-link-text"> for correct underline width
  function ensureLinkTextSpan(a) {
    if (!a || a.querySelector(".be-link-text")) return;

    const span = document.createElement("span");
    span.className = "be-link-text";

    const nodes = Array.from(a.childNodes);
    const firstText = nodes.find((n) => n.nodeType === 3); // TEXT_NODE
    if (!firstText) return;

    a.insertBefore(span, firstText);

    nodes.forEach((n) => {
      if (n.nodeType === 3) span.appendChild(n);
    });

    if (!span.textContent || !span.textContent.trim()) {
      span.remove();
    }
  }

  // ---- Apply text-link shimmer/sweep
  document.querySelectorAll("a").forEach((a) => {
    if (!isTextLink(a)) return;
    a.classList.add("be-link-sweep");
    ensureLinkTextSpan(a);
  });

  // ---- Apply CTA wow to BUTTON-LIKE CTAs only
  document.querySelectorAll("a,button").forEach((el) => {
    if (!isButtonCTA(el)) return;
    el.classList.add("be-cta-wow");
  });

  // ---- Smooth reveal targets (no links/buttons)
  const revealSelectors = [
    ".hover-card",
    ".be-marquee-item",
    "section h2",
    "section h3",
    ".hover-card p",
    ".hover-card ul li",
  ];

  const targets = new Set();

  revealSelectors.forEach((sel) => {
    document.querySelectorAll(sel).forEach((el) => {
      if (el.closest(SKIP_CLOSEST)) return;
      if (el.closest("a,button")) return; // prevent transform conflicts with links
      el.classList.add("be-watch");
      targets.add(el);
    });
  });

  // ---- IntersectionObserver (replays both ways) with tiny exit delay to stop flicker
  const leaveTimers = new WeakMap();

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        const el = entry.target;

        const pending = leaveTimers.get(el);
        if (pending) {
          clearTimeout(pending);
          leaveTimers.delete(el);
        }

        if (entry.isIntersecting) {
          el.classList.add("be-in");
        } else {
          const t = setTimeout(() => {
            el.classList.remove("be-in");
            leaveTimers.delete(el);
          }, 140);
          leaveTimers.set(el, t);
        }
      });
    },
    { threshold: 0.16, rootMargin: "0px 0px -10% 0px" }
  );

  targets.forEach((el) => io.observe(el));

  // ---- Ambient glow drift reacts to mouse
  let mouseRAF = null;
  window.addEventListener(
    "mousemove",
    (e) => {
      if (mouseRAF) return;
      mouseRAF = requestAnimationFrame(() => {
        mouseRAF = null;
        const x = (e.clientX / window.innerWidth - 0.5) * 2;
        const y = (e.clientY / window.innerHeight - 0.5) * 2;
        body.style.setProperty("--be-mx", x.toFixed(3));
        body.style.setProperty("--be-my", y.toFixed(3));
      });
    },
    { passive: true }
  );

  // ---- Headline swap (slow fade)
  function startSwap(el, a, b, ms) {
    if (!el) return;
    let on = false;
    const t = Math.max(2400, ms || 2800);

    setInterval(() => {
      el.classList.remove("be-swap-fade-in");
      el.classList.add("be-swap-fade-out");

      setTimeout(() => {
        el.textContent = on ? a : b;
        el.classList.remove("be-swap-fade-out");
        el.classList.add("be-swap-fade-in");
        setTimeout(() => el.classList.remove("be-swap-fade-in"), 700);
        on = !on;
      }, 360);
    }, t);
  }

  const heroSpan = document.querySelector("h1 span.text-emerald-400");
  if (heroSpan) {
    const a = heroSpan.textContent.trim() || "London & Surrounding Areas";
    const b = heroSpan.getAttribute("data-alt") || "Essex • Kent • Surrey";
    startSwap(heroSpan, a, b, 2400);
  }

  const stripH2 = document.querySelector(".hero-heading");
  if (stripH2) {
    const a = stripH2.textContent.trim() || "Brightening up cold spaces!";
    const b =
      stripH2.getAttribute("data-alt") ||
      "Solar • EV • Electrical — done properly.";
    startSwap(stripH2, a, b, 2800);
  }
})();
