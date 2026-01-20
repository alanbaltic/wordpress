<?php
/* Front page template */
get_header();
?>

<!-- Header video strip -->
<section class="border-b border-slate-800 bg-black">
  <div class="max-w-6xl mx-auto px-4 pt-6 pb-10">
    <div class="relative aspect-[21/9] md:aspect-[16/9] rounded-2xl overflow-hidden border border-slate-800 bg-black shadow-xl shadow-emerald-500/10">
      <video
        class="w-full h-full object-cover opacity-100"
        autoplay
        muted
        loop
        playsinline
      >
        <source src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/START-SCREEN2.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>

      <!-- subtle gradient so it blends nicely with the rest of the site -->
      <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>

      <!-- centred overlay text -->
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

-

<!-- Trust strip -->
<section class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-6 flex flex-wrap items-center gap-4 text-xs text-slate-400 justify-between">
    <div class="flex items-center gap-2">
      <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
      <span>Fully insured • Part P compliant • Based in South London</span>
    </div>
    <div class="flex flex-wrap items-center gap-3">
      <span class="px-2 py-1 rounded-full border border-slate-800">NAPIT Registered</span>
      <span class="px-2 py-1 rounded-full border border-slate-800">EV &amp; Solar installs</span>
      <span class="px-2 py-1 rounded-full border border-slate-800">EICRs &amp; remedials</span>
    </div>
  </div>
</section>

<!-- Brands / accreditations strip -->
<section class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-6 space-y-3">
    <div class="text-xs text-slate-400 text-center">
      We regularly work with kit and schemes such as:
    </div>

    <div class="flex flex-wrap items-center justify-center gap-4 text-xs">
      <!-- GivEnergy -->
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-4 py-3 flex items-center justify-center gap-3">
        <img
          src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/givenergy-logo-scaled.png"
          alt="GivEnergy"
          class="h-8 w-auto"
        />
      </div>

      <!-- Growatt -->
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-4 py-3 flex items-center justify-center gap-3">
        <img
          src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/Growatt-logo-new-GB.png"
          alt="Growatt"
          class="h-8 w-auto"
        />
      </div>

      <!-- NAPIT -->
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-4 py-3 flex items-center justify-center gap-3">
        <img
          src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/napitlogo.webp"
          alt="NAPIT registered"
          class="h-8 w-auto"
        />
      </div>

      <!-- TrustMark -->
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-4 py-3 flex items-center justify-center gap-3">
        <img
          src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/trustmark.webp"
          alt="TrustMark"
          class="h-8 w-auto"
        />
      </div>

      <!-- MCS -->
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 px-4 py-3 flex items-center justify-center gap-3">
        <img
          src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/MCSCertifiedMark_BLACK_RGB-1848918833.png"
          alt="MCS certified"
          class="h-8 w-auto"
        />
      </div>
    </div>
  </div>
</section>



<!-- Core services -->
<section id="services" class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
      <div>
        <h2 class="text-2xl md:text-3xl font-semibold tracking-tight mb-2">Core services</h2>
        <p class="text-sm text-slate-300 max-w-xl">
          Everything built around what people actually need in London and the suburbs: safe electrics, lower
          bills and easy car charging.
        </p>
      </div>
    </div>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      <article class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col">
        <h3 class="font-semibold mb-1">Solar PV &amp; Battery Storage</h3>
        <p class="text-sm text-slate-300 mb-3">
          Design, supply and installation of rooftop solar with optional battery storage. Systems sized around
          your actual usage, not just the biggest array that fits.
        </p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• Domestic rooftops and small commercial</li>
          <li>• Monitoring app setup and walkthrough</li>
          <li>• Existing systems checked &amp; tested</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">
          Ideal if you want to cut bills and daytime grid use.
        </span>
      </article>

      <article class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col">
        <h3 class="font-semibold mb-1">EV Charger Installations</h3>
        <p class="text-sm text-slate-300 mb-3">
          Tidy installs with proper load calculations, no trailing cables across footpaths and clear
          explanation of how to use your charger.
        </p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• Smart chargers with scheduling</li>
          <li>• Load management / main fuse checks</li>
          <li>• Out-of-hours installs available</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">
          Perfect if you’ve just ordered a new EV or PHEV.
        </span>
      </article>

      <article class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col">
        <h3 class="font-semibold mb-1">Consumer Units, EICRs &amp; Remedials</h3>
        <p class="text-sm text-slate-300 mb-3">
          Landlord reports, buyer/seller checks and board upgrades to current standards, with photos and
          straightforward pricing.
        </p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• EICRs for rentals &amp; sales</li>
          <li>• Consumer unit upgrades with surge protection</li>
          <li>• Fault finding and small works</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">
          Ideal for landlords and homeowners who want peace of mind.
        </span>
      </article>

      <article class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col">
        <h3 class="font-semibold mb-1">Extractor Fans &amp; Ventilation</h3>
        <p class="text-sm text-slate-300 mb-3">
          Bathroom and kitchen fans sized correctly for the space, with quiet operation and proper duct routing
          to actually clear the moisture.
        </p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• Replacements for noisy/ineffective fans</li>
          <li>• Humidistat and timer options</li>
          <li>• Advice on condensation issues</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">
          Great for damp, mouldy rooms and rentals.
        </span>
      </article>

      <article class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col">
        <h3 class="font-semibold mb-1">General Domestic Electrical</h3>
        <p class="text-sm text-slate-300 mb-3">
          Sockets, lighting, cookers, fault finding and sorting out "that thing the last guy left half done".
        </p>
        <ul class="text-xs text-slate-400 space-y-1 mb-4">
          <li>• Additional sockets &amp; lighting</li>
          <li>• Fault finding &amp; repairs</li>
          <li>• Small jobs welcome</li>
        </ul>
        <span class="mt-auto text-xs text-emerald-300">
          For all the jobs that never quite make it off the list.
        </span>
      </article>
    </div>
  </div>
</section>

<!-- Process -->
<section id="process" class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <h2 class="text-2xl md:text-3xl font-semibold tracking-tight mb-6">How we work</h2>
    <div class="grid md:grid-cols-4 gap-4 text-sm">
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-4">
        <div class="text-xs text-slate-400 mb-2">Step 1</div>
        <h3 class="font-semibold mb-1">Quick chat</h3>
        <p class="text-slate-300 text-xs">
          You send a brief description and a couple of photos. We’ll tell you quickly if it’s something we can help with.
        </p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-4">
        <div class="text-xs text-slate-400 mb-2">Step 2</div>
        <h3 class="font-semibold mb-1">Survey &amp; quote</h3>
        <p class="text-slate-300 text-xs">
          For bigger jobs we visit, check access, electrics and roof, then send a clear quote with no hidden extras.
        </p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-4">
        <div class="text-xs text-slate-400 mb-2">Step 3</div>
        <h3 class="font-semibold mb-1">Install day</h3>
        <p class="text-slate-300 text-xs">
          We turn up on time, protect your home, carry out the work and tidy up properly before we leave.
        </p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-4">
        <div class="text-xs text-slate-400 mb-2">Step 4</div>
        <h3 class="font-semibold mb-1">Sign-off &amp; support</h3>
        <p class="text-slate-300 text-xs">
          Certificates, app walkthroughs and aftercare. If you’ve got questions later, you can actually get hold of us.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14 grid md:grid-cols-2 gap-8">
    <div>
      <h2 class="text-2xl md:text-3xl font-semibold tracking-tight mb-3">Let’s talk about your job</h2>
      <p class="text-sm text-slate-300 mb-4">
        Send a quick summary of what you need along with your postcode. If you’ve got photos, even better. We’ll
        get back to you with next steps.
      </p>
      <div class="text-sm text-slate-300 space-y-1">
        <p>
          <span class="font-semibold">Email:</span> [email hidden]
        </p>
        <p>
          <span class="font-semibold">Phone:</span> 0208 264 6715
        </p>
        <p>
          <span class="font-semibold">Base:</span> London, UK
        </p>
      </div>
    </div>
    <div class="space-y-3 text-sm">
      <?php echo do_shortcode('[contact-form-7 id="2748737" title="Baltic Enquiry"]'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>