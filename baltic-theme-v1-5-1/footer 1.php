  </main>

  <footer class="border-t border-slate-800 bg-slate-950">
    <div class="max-w-6xl mx-auto px-4 py-8 grid gap-6 md:grid-cols-3 text-xs text-slate-400">
      <!-- Brand / summary -->
      <div class="space-y-2">
        <div class="flex items-center gap-2">
          <img
            src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/Baltic-electric-4-white.png"
            alt="Baltic Electric Ltd"
            class="h-20 md:h-25 w-auto"
          />
        </div>
        <p>
          Solar, EV charging and domestic electrical work across Croydon and surrounding areas, with a focus on clear explanations and tidy installs.
        </p>
        <p class="text-[11px] text-slate-500">
          © <?php echo date('Y'); ?> Baltic Electric Ltd. All rights reserved.
        </p>
      </div>

      <!-- Quick links -->
      <div>
        <h3 class="text-slate-200 font-semibold mb-2 text-xs uppercase tracking-wide">Pages</h3>
		 <ul class="space-y-1">
  			<li><a href="<?php echo esc_url( home_url('/') ); ?>" class="hover:text-emerald-400">Home</a></li>
  			<li><a href="<?php echo esc_url( home_url('/solar-battery/') ); ?>" class="hover:text-emerald-400">Solar &amp; Battery</a></li>
  			<li><a href="<?php echo esc_url( home_url('/ev-chargers/') ); ?>" class="hover:text-emerald-400">EV Chargers</a></li>
  			<li><a href="<?php echo esc_url( home_url('/eicrs-boards/') ); ?>" class="hover:text-emerald-400">EICRs &amp; Boards</a></li>
  			<li><a href="<?php echo esc_url( home_url('/servicing-maintenance/') ); ?>" class="hover:text-emerald-400">Servicing &amp; Maintenance</a></li>
  			<li><a href="<?php echo esc_url( home_url('/eco4-gbis/') ); ?>" class="hover:text-emerald-400">ECO4 &amp; GBIS Funding</a></li>
  			<li><a href="<?php echo esc_url( home_url('/kids-zone/') ); ?>" class="hover:text-emerald-400">Kids Zone</a></li>
  			<li><a href="<?php echo esc_url( home_url('/faq/') ); ?>" class="hover:text-emerald-400">FAQs</a></li>
		 </ul>

      </div>

      <!-- Legal / policies -->
      <div>
        <h3 class="text-slate-200 font-semibold mb-2 text-xs uppercase tracking-wide">Legal &amp; policies</h3>
        <ul class="space-y-1">
          <li><a href="<?php echo esc_url( home_url('/privacy-policy/') ); ?>" class="hover:text-emerald-400">Privacy Policy</a></li>
          <li><a href="<?php echo esc_url( home_url('/terms-and-conditions/') ); ?>" class="hover:text-emerald-400">Terms &amp; Conditions</a></li>
          <li><a href="<?php echo esc_url( home_url('/health-and-safety-policy/') ); ?>" class="hover:text-emerald-400">Health &amp; Safety Policy</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</div>
</body>
</html>