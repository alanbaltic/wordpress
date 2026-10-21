  </main>
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="BTS homepage">
            <img class="brand-mark" src="<?php echo esc_url(get_theme_file_uri('/assets/bts-mark.svg')); ?>" width="110" height="36" alt="BTS logo">
            <span class="brand-wording"><strong>Baltic Technical<br>Services</strong><small>Electrical • Renewables • Compliance</small></span>
          </a>
          <p>Professional electrical, renewable energy and compliance services across London and the South East.</p>
        </div>
        <div class="footer-links">
          <div><h3>Services</h3>
            <a href="<?php echo esc_url(home_url('/solar-battery/')); ?>">Solar &amp; Battery</a>
            <a href="<?php echo esc_url(home_url('/ev-chargers/')); ?>">EV Chargers</a>
            <a href="<?php echo esc_url(home_url('/eicrs-boards/')); ?>">EICRs &amp; Boards</a>
            <a href="<?php echo esc_url(home_url('/servicing-maintenance/')); ?>">Servicing &amp; Maintenance</a>
            <a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQs</a>
          </div>
          <div><h3>Company &amp; policies</h3>
            <a href="<?php echo esc_url(home_url('/careers/')); ?>">Careers</a>
            <a href="<?php echo esc_url(home_url('/kids-zone/')); ?>">Kids Zone</a>
            <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>
            <a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>">Terms &amp; Conditions</a>
            <a href="<?php echo esc_url(home_url('/health-and-safety-policy/')); ?>">Health &amp; Safety</a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© <?php echo esc_html(wp_date('Y')); ?> Baltic Electric Ltd trading as Baltic Technical Services. All rights reserved.</p>
        <p>NAPIT registered contractor • Membership 70877</p>
      </div>
    </div>
  </footer>
</div>
<script>
(function(){
  var header = document.getElementById('main-header');
  var button = document.getElementById('mobileMenuToggle');
  var nav = document.getElementById('mobileNav');
  if (header) window.addEventListener('scroll', function(){ header.classList.toggle('scrolled', window.scrollY > 12); }, {passive:true});
  if (button && nav) {
    button.addEventListener('click', function(){
      var open = nav.classList.toggle('open');
      button.setAttribute('aria-expanded', String(open));
      button.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    });
    nav.querySelectorAll('a').forEach(function(link){link.addEventListener('click', function(){
      nav.classList.remove('open');button.setAttribute('aria-expanded','false');
    });});
  }
})();
</script>
<?php wp_footer(); ?>
</body>
</html>
