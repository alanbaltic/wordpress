<?php
get_header();
?>

<!-- Header video strip -->
<section class="border-b border-slate-800 bg-black">
  <div class="max-w-6xl mx-auto px-4 pt-6 pb-10">
    <div class="relative aspect-[21/9] md:aspect-[16/9] rounded-2xl overflow-hidden border border-slate-800 bg-black shadow-xl shadow-emerald-500/10">
      <video class="w-full h-full object-cover opacity-100" autoplay muted loop playsinline>
        <source src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/START-SCREEN2.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>

      <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>

      <div class="absolute inset-0 flex items-center justify-center">
        <div class="hero-overlay-text text-center px-6">
          <h2 class="hero-heading text-xl sm:text-2xl md:text-3xl font-semibold mb-2 text-amber-400">
            Brightening up cold spaces!
          </h2>
          <p class="text-sm sm:text-base text-slate-100">
            Lighting the way with warmth and brilliance.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hero (centered) -->
<section class="border-b border-slate-800 bg-gradient-to-b from-slate-950 to-slate-900">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-16 text-center">

    <p class="inline-flex items-center justify-center rounded-full border border-emerald-500/40 bg-emerald-500/10 px-3 py-1 text-xs font-medium text-emerald-300 mb-4 mx-auto">
      Local • Qualified • No Hard Sell
    </p>

    <h1 class="text-3xl sm:text-4xl md:text-5xl font-semibold tracking-tight mb-4 mx-auto max-w-4xl">
      Solar, EV &amp; Electrical Done Properly in
      <span class="text-emerald-400">London &amp; Surrounding Areas</span>.
    </h1>

    <p class="text-sm sm:text-base text-slate-300 mb-6 mx-auto max-w-2xl">
      Baltic Electric is a small, family-run firm specialising in Solar PV, Battery Storage, EV Chargers
      and Domestic Electrical work. No sales reps — just an electrician turning up, explaining it clearly,
      and doing the job right.
    </p>

    <div class="flex flex-wrap items-center justify-center gap-3 mb-6">
      <a href="#contact" class="inline-flex items-center rounded-full bg-emerald-400 px-5 py-2.5 text-sm font-semibold text-slate-950 hover:bg-emerald-300 transition">
        Request a Site Visit
      </a>
      <a href="#services" class="text-sm text-emerald-300 hover:text-emerald-200">
        View Services
      </a>
    </div>

    <div class="rounded-2xl border border-slate-800 bg-slate-900/40 p-4 mx-auto max-w-3xl text-left">
      <div class="text-xs text-slate-400 mb-2 text-center sm:text-left">What You Get</div>
      <ul class="text-sm text-slate-200 grid gap-2 sm:grid-cols-3">
        <li class="be-reveal be-delay-1 flex gap-2 items-start"><span class="text-amber-400">✓</span><span>Clear Quotes, No Sales Reps</span></li>
        <li class="be-reveal be-delay-2 flex gap-2 items-start"><span class="text-amber-400">✓</span><span>Neat Installs &amp; Proper Certification</span></li>
        <li class="be-reveal be-delay-3 flex gap-2 items-start"><span class="text-amber-400">✓</span><span>Aftercare You Can Actually Reach</span></li>
      </ul>
    </div>

    <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs text-slate-300 mx-auto max-w-3xl">
      <div class="rounded-xl border border-slate-800 bg-slate-950/40 p-3">
        <div class="font-semibold text-slate-100">NAPIT / CPS</div>
        <div class="text-slate-400">Part P Compliant</div>
      </div>
      <div class="rounded-xl border border-slate-800 bg-slate-950/40 p-3">
        <div class="font-semibold text-slate-100">London Aware</div>
        <div class="text-slate-400">ULEZ • Parking • Access</div>
      </div>
      <div class="rounded-xl border border-slate-800 bg-slate-950/40 p-3">
        <div class="font-semibold text-slate-100">Honest Pricing</div>
        <div class="text-slate-400">No Surprise Add-Ons</div>
      </div>
    </div>

  </div>
</section>

<!-- Trust strip (full width, bigger) -->
<section class="border-b border-slate-800 bg-slate-950">
  <div class="w-full px-4 sm:px-6 lg:px-8 py-10">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row md:items-center md:justify-between gap-4 text-sm text-slate-300">
      <div class="flex items-center justify-center md:justify-start gap-3">
        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
        <span class="text-slate-200 font-medium">
          Fully Insured • Part P Compliant • Based in South London
        </span>
      </div>
      <div class="flex flex-wrap items-center justify-center md:justify-end gap-3">
        <span class="px-3 py-1.5 rounded-full border border-slate-800 bg-slate-950/40">NAPIT Registered</span>
        <span class="px-3 py-1.5 rounded-full border border-slate-800 bg-slate-950/40">EV &amp; Solar Installs</span>
        <span class="px-3 py-1.5 rounded-full border border-slate-800 bg-slate-950/40">EICRs &amp; Remedials</span>
      </div>
    </div>
  </div>
</section>

<!-- Brands / Accreditations strip -->
<section class="border-b border-slate-800 bg-slate-950">
  <div class="w-full px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-6xl mx-auto">
      <div class="text-sm text-slate-300 text-center mb-6">
        We Regularly Work With Kit and Schemes Such As:
      </div>

      <div class="be-marquee rounded-2xl px-2">
        <div class="be-marquee-track" id="beMarqueeTrack">

          <!-- GROUP 1 (MEASURE THIS) -->
          <div class="be-marquee-group" id="beMarqueeGroup1">
            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/givenergy-logo-scaled.png" alt="GivEnergy" class="h-12 md:h-14 w-auto" />
            </div>

            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/Growatt-logo-new-GB.png" alt="Growatt" class="h-12 md:h-14 w-auto" />
            </div>

            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/napitlogo.webp" alt="NAPIT registered" class="h-12 md:h-14 w-auto" />
            </div>

            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/trustmark.webp" alt="TrustMark" class="h-12 md:h-14 w-auto" />
            </div>

            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/MCSCertifiedMark_BLACK_RGB-1848918833.png" alt="MCS certified" class="h-12 md:h-14 w-auto" />
            </div>
          </div>

          <!-- SEAM (THIS IS THE GAP AT THE LOOP) -->
          <div class="be-marquee-seam" id="beMarqueeSeam" aria-hidden="true"></div>

          <!-- GROUP 2 (DUPLICATE) -->
          <div class="be-marquee-group" aria-hidden="true">
            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/givenergy-logo-scaled.png" alt="GivEnergy" class="h-12 md:h-14 w-auto" />
            </div>

            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/Growatt-logo-new-GB.png" alt="Growatt" class="h-12 md:h-14 w-auto" />
            </div>

            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/napitlogo.webp" alt="NAPIT registered" class="h-12 md:h-14 w-auto" />
            </div>

            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/trustmark.webp" alt="TrustMark" class="h-12 md:h-14 w-auto" />
            </div>

            <div class="be-marquee-item hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-6 py-5 flex items-center justify-center">
              <img src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/MCSCertifiedMark_BLACK_RGB-1848918833.png" alt="MCS certified" class="h-12 md:h-14 w-auto" />
            </div>
          </div>

        </div>
      </div>

      <script>
        (function () {
          function setShift() {
            const track = document.getElementById('beMarqueeTrack');
            const g1 = document.getElementById('beMarqueeGroup1');
            const seam = document.getElementById('beMarqueeSeam');
            if (!track || !g1 || !seam) return;

            const w1 = g1.getBoundingClientRect().width;
            const ws = seam.getBoundingClientRect().width;

            // Set the shift on the TRACK (not :root) to avoid overrides
            track.style.setProperty('--be-marquee-shift', (w1 + ws) + 'px');
          }

          // Run after layout + images (logos change width after loading)
          window.addEventListener('load', setShift);
          window.addEventListener('resize', setShift);

          // Also run immediately (twice) to catch initial layout
          requestAnimationFrame(() => requestAnimationFrame(setShift));
        })();
      </script>

    </div>
  </div>
</section>

<!-- Core services (6 cards + clickable where pages exist) -->
<section id="services" class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
      <div>
        <h2 class="text-2xl md:text-3xl font-semibold tracking-tight mb-2">Core Services</h2>
        <p class="text-sm text-slate-300 max-w-xl">
          Everything built around what people actually need in London and the suburbs: safe electrics, lower
          bills and easy car charging.
        </p>
      </div>
    </div>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      <a href="<?php echo esc_url( home_url('/solar-battery/') ); ?>" class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col focus:outline-none focus:ring-2 focus:ring-amber-400/60">
        <h3 class="font-semibold mb-1 group-hover:text-amber-400 transition">Solar PV &amp; Battery Storage</h3>
        <p class="text-sm text-slate-300 mb-3">Design, supply and installation of rooftop solar with optional battery storage. Systems sized around your actual usage, not just the biggest array that fits.</p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• Domestic rooftops and small commercial</li>
          <li>• Monitoring app setup and walkthrough</li>
          <li>• Existing systems checked &amp; tested</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">Ideal if you want to cut bills and daytime grid use.</span>
      </a>

      <a href="<?php echo esc_url( home_url('/ev-chargers/') ); ?>" class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col focus:outline-none focus:ring-2 focus:ring-amber-400/60">
        <h3 class="font-semibold mb-1 group-hover:text-amber-400 transition">EV Charger Installations</h3>
        <p class="text-sm text-slate-300 mb-3">Tidy installs with proper load calculations, no trailing cables across footpaths and clear explanation of how to use your charger.</p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• Smart chargers with scheduling</li>
          <li>• Load management / main fuse checks</li>
          <li>• Out-of-hours installs available</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">Perfect if you’ve just ordered a new EV or PHEV.</span>
      </a>

      <a href="<?php echo esc_url( home_url('/eicrs-boards/') ); ?>" class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col focus:outline-none focus:ring-2 focus:ring-amber-400/60">
        <h3 class="font-semibold mb-1 group-hover:text-amber-400 transition">Consumer Units, EICRs &amp; Remedials</h3>
        <p class="text-sm text-slate-300 mb-3">Landlord reports, buyer/seller checks and board upgrades to current standards, with photos and straightforward pricing.</p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• EICRs for rentals &amp; sales</li>
          <li>• Consumer unit upgrades with surge protection</li>
          <li>• Fault finding and small works</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">Ideal for landlords and homeowners who want peace of mind.</span>
      </a>

      <a href="<?php echo esc_url( home_url('/servicing-maintenance/') ); ?>" class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col focus:outline-none focus:ring-2 focus:ring-amber-400/60">
        <h3 class="font-semibold mb-1 group-hover:text-amber-400 transition">Servicing &amp; Maintenance</h3>
        <p class="text-sm text-slate-300 mb-3">Ongoing checks, planned maintenance and keeping systems safe and reliable — ideal for landlords, homeowners and small commercial sites.</p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• Planned maintenance &amp; compliance support</li>
          <li>• Troubleshooting and fault finding</li>
          <li>• Reports, recommendations and remedials</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">For peace of mind and fewer surprises.</span>
      </a>

      <article class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col">
        <h3 class="font-semibold mb-1">Extractor Fans &amp; Ventilation</h3>
        <p class="text-sm text-slate-300 mb-3">Bathroom and kitchen fans sized correctly for the space, with quiet operation and proper duct routing to actually clear the moisture.</p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• Replacements for noisy/ineffective fans</li>
          <li>• Humidistat and timer options</li>
          <li>• Advice on condensation issues</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">Great for damp, mouldy rooms and rentals.</span>
      </article>

      <article class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col">
        <h3 class="font-semibold mb-1">General Domestic Electrical</h3>
        <p class="text-sm text-slate-300 mb-3">Sockets, lighting, cookers, fault finding and sorting out "that thing the last guy left half done".</p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• Additional sockets &amp; lighting</li>
          <li>• Fault finding &amp; repairs</li>
          <li>• Small jobs welcome</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">For all the jobs that never quite make it off the list.</span>
      </article>
    </div>
  </div>
</section>

<!-- Process -->
<section id="process" class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <h2 class="text-2xl md:text-3xl font-semibold tracking-tight mb-6">How We Work</h2>
    <div class="grid md:grid-cols-4 gap-4 text-sm">
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-4">
        <div class="text-xs text-slate-400 mb-2">Step 1</div>
        <h3 class="font-semibold mb-1">Quick Chat</h3>
        <p class="text-slate-300 text-xs">You send a brief description and a couple of photos. We’ll tell you quickly if it’s something we can help with.</p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-4">
        <div class="text-xs text-slate-400 mb-2">Step 2</div>
        <h3 class="font-semibold mb-1">Survey &amp; Quote</h3>
        <p class="text-slate-300 text-xs">For bigger jobs we visit, check access, electrics and roof, then send a clear quote with no hidden extras.</p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-4">
        <div class="text-xs text-slate-400 mb-2">Step 3</div>
        <h3 class="font-semibold mb-1">Install Day</h3>
        <p class="text-slate-300 text-xs">We turn up on time, protect your home, carry out the work and tidy up properly before we leave.</p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-4">
        <div class="text-xs text-slate-400 mb-2">Step 4</div>
        <h3 class="font-semibold mb-1">Sign-off &amp; Support</h3>
        <p class="text-slate-300 text-xs">Certificates, app walkthroughs and aftercare. If you’ve got questions later, you can actually get hold of us.</p>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14 grid md:grid-cols-2 gap-8">
    <div>
      <h2 class="text-2xl md:text-3xl font-semibold tracking-tight mb-3">Let’s Talk About Your Job</h2>
      <p class="text-sm text-slate-300 mb-4">
        Send a quick summary of what you need along with your postcode. If you’ve got photos, even better. We’ll
        get back to you with next steps.
      </p>
      <div class="text-sm text-slate-300 space-y-1">
        <p><span class="font-semibold">Enquiry:</span> Fill Out Contact Form</p>
        <p><span class="font-semibold">Phone:</span> 0208 264 6715</p>
        <p><span class="font-semibold">Base:</span> London, UK</p>
      </div>
    </div>

    <div class="space-y-3 text-sm">
      <?php echo do_shortcode('[contact-form-7 id="2748737" title="Baltic Enquiry"]'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>