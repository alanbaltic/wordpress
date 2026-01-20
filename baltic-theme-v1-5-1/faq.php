<?php
/**
 * Template Name: FAQ
 */
defined('ABSPATH') || exit;
get_header();
?>

<section id="faqs" class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">

    <style>
      .faq-item{
        border-radius: 1rem;
        border: 1px solid #1f2933;
        background: rgba(15,23,42,0.55);
        padding: 1rem;
        margin-bottom: 0.75rem;
        transition: transform 160ms ease, box-shadow 160ms ease, border-color 160ms ease, background-color 160ms ease;
      }
      .faq-item:hover{
        transform: translateY(-2px);
        box-shadow: 0 16px 36px rgba(15,23,42,0.9);
        border-color: rgba(251, 191, 36, 0.55);   /* amber-400 */
        background: rgba(30,41,59,0.75);
      }
      .faq-item summary{ list-style:none; }
      .faq-item summary::-webkit-details-marker{ display:none; }

      .faq-question{
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap: 0.9rem;
        cursor:pointer;
      }
      .faq-icon{
        width: 32px;
        height: 32px;
        flex: 0 0 32px;
        border-radius: 9999px;
        border: 1px solid #1f2933;
        display:flex;
        align-items:center;
        justify-content:center;
        background: transparent;
        transition: transform 180ms ease, background-color 160ms ease, border-color 160ms ease, box-shadow 160ms ease;
      }
      .faq-icon svg{
        width: 14px;
        height: 14px;
        display:block;
        transition: transform 180ms ease;
      }
      .faq-icon svg line{
        stroke: #fbbf24;               /* amber-400 */
        stroke-width: 2.2;
        stroke-linecap: round;
        vector-effect: non-scaling-stroke;
      }
      .faq-item[open] .faq-icon{
        background: rgba(251,191,36,0.95);
        border-color: rgba(251,191,36,0.95);
        box-shadow: 0 10px 25px rgba(251,191,36,0.25);
      }
      .faq-item[open] .faq-icon svg{
        transform: rotate(45deg);
      }
      .faq-item[open] .faq-icon svg line{
        stroke: #0b1220;
      }
      .faq-answer{
        margin-top: 0.65rem;
        font-size: 0.875rem;
        color: #e5e7eb;
        line-height: 1.55;
      }
    </style>

    <h2 class="text-2xl md:text-3xl font-semibold tracking-tight mb-3">
      Frequently asked questions
    </h2>
    <p class="text-sm text-slate-300 mb-8 max-w-2xl">
      A few of the things we’re asked most often. If you don’t see your question here, just drop it in your enquiry.
    </p>

    <div class="space-y-2 text-sm">

      <!-- Missing ones from front page -->
      <details class="faq-item">
        <summary class="faq-question">
          <span class="font-semibold text-slate-100">Do you cover my area?</span>
          <span class="faq-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </summary>
        <div class="faq-answer">
          Based in South London, we cover Croydon, Bromley, Sutton, Mitcham, Streatham and nearby areas.
          For larger solar jobs we’ll travel further, just ask.
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">
          <span class="font-semibold text-slate-100">Are you actually qualified?</span>
          <span class="faq-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </summary>
        <div class="faq-answer">
          Yes, we’re fully qualified electricians and we work to BS 7671 and Part P. We’re not a pressure-sales solar outfit, we’re tradespeople. We focus on workmanship, safety, and doing the job properly. For solar and renewables, we follow MCS standards, including MIS 3002 / MIS 3012 where applicable, and we issue the correct certification for the work.
The majority of our team hold an ECS Gold Card, or are working towards it.
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">
          <span class="font-semibold text-slate-100">Can you fix work someone else has started?</span>
          <span class="faq-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </summary>
        <div class="faq-answer">
          Usually, yes. We’ll need to see what’s been done and sometimes it’s safer to redo sections properly,
          but we’re happy to look and advise.
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">
          <span class="font-semibold text-slate-100">Do you offer finance?</span>
          <span class="faq-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </summary>
        <div class="faq-answer">
          Right now we keep things simple: clear quotes and staged payments.
          If we introduce finance in future it’ll be advertised clearly, not hidden in small print.
        </div>
      </details>

      <!-- Keep the other ones too -->
      <details class="faq-item">
        <summary class="faq-question">
          <span class="font-semibold text-slate-100">Will solar and a battery actually save me money?</span>
          <span class="faq-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </summary>
        <div class="faq-answer">
          For most homes with decent daytime or evening usage, Yes, especially if you run an EV or have higher usage.
          Savings depend on your roof, usage pattern and tariff, so we size systems around your real usage.
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">
          <span class="font-semibold text-slate-100">Do I need a battery, or can I just have panels?</span>
          <span class="faq-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </summary>
        <div class="faq-answer">
          You don’t have to have a battery. Panels alone can still cut daytime bills.
          A battery usually makes sense if you’re home mornings/evenings or want to store solar for later.
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">
          <span class="font-semibold text-slate-100">How long does an install take and how disruptive is it?</span>
          <span class="faq-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </summary>
        <div class="faq-answer">
          Most domestic solar + battery installs take 1 day once scaffolding is up. EV chargers and board upgrades
          are usually done in a day. There may be short periods with the power off while we work.
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">
          <span class="font-semibold text-slate-100">What about planning permission and DNO applications?</span>
          <span class="faq-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </summary>
        <div class="faq-answer">
          Most domestic roof-top systems fall under permitted development, so planning usually isn’t needed.
          Where DNO notification or approval is required, we handle the paperwork and guide you through it.
        </div>
      </details>

    </div>
  </div>
</section>

<?php get_footer(); ?>