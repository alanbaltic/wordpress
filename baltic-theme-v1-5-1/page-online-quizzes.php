<?php
/*
Template Name: Kids Zone – Online Quizzes
*/
get_header();

$links = [
  'kids'     => home_url('/kids-zone/'),
  'arena'    => home_url('/kids-zone/quiz/?difficulty=easy&level=1'),
  'mathrace' => home_url('/kids-zone/math-race/'),
  'basics'   => home_url('/kids-zone/electricity-basics/'),
  'safety'   => home_url('/kids-zone/safety-first/'),
];
?>

<section class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <div class="flex flex-wrap items-center gap-3 mb-4">
      <a href="<?php echo esc_url($links['kids']); ?>" class="text-xs text-slate-300 hover:text-emerald-400">← Back to Kids Zone</a>
      <span class="inline-flex items-center rounded-full border border-emerald-500/40 bg-emerald-500/10 px-3 py-1 text-xs font-medium text-emerald-300">Online Quizzes</span>
    </div>

    <h1 class="text-3xl md:text-4xl font-semibold tracking-tight">Pick a game</h1>
    <p class="text-sm text-slate-300 max-w-2xl mt-3">
      Short challenges, big smiles. Beat your personal best and unlock silly rewards.
      (Parents: everything is designed to be safe, age-friendly and quick.)
    </p>
  </div>
</section>

<section class="bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">

    <div class="grid md:grid-cols-3 gap-6 text-sm">
      <a href="<?php echo esc_url($links['arena']); ?>" class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col focus:outline-none focus:ring-2 focus:ring-emerald-500/40">
        <div class="flex items-center justify-between gap-3">
          <h2 class="font-semibold text-lg">⚡ Quiz Arena</h2>
          <span class="text-xs rounded-full border border-slate-700 px-3 py-1 text-slate-300">150 levels</span>
        </div>
        <p class="text-slate-300 text-xs mt-2">Electricity basics + safety quizzes that scale from super easy to “smart sparky”.</p>
        <p class="text-emerald-300 text-xs mt-4">Start →</p>
      </a>

      <a href="<?php echo esc_url($links['mathrace']); ?>" class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col focus:outline-none focus:ring-2 focus:ring-emerald-500/40">
        <div class="flex items-center justify-between gap-3">
          <h2 class="font-semibold text-lg">🏁 Math Race</h2>
          <span class="text-xs rounded-full border border-slate-700 px-3 py-1 text-slate-300">20 questions</span>
        </div>
        <p class="text-slate-300 text-xs mt-2">Fast addition + subtraction challenges perfect for around age 7.</p>
        <p class="text-emerald-300 text-xs mt-4">Race →</p>
      </a>

      <a href="<?php echo esc_url($links['basics']); ?>" class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 flex flex-col focus:outline-none focus:ring-2 focus:ring-emerald-500/40">
        <div class="flex items-center justify-between gap-3">
          <h2 class="font-semibold text-lg">🎥 Watch & Learn</h2>
          <span class="text-xs rounded-full border border-slate-700 px-3 py-1 text-slate-300">Video quizzes</span>
        </div>
        <p class="text-slate-300 text-xs mt-2">Short YouTube clips with mini quizzes after each video.</p>
        <p class="text-emerald-300 text-xs mt-4">Watch →</p>
      </a>
    </div>

    <div class="mt-10 grid md:grid-cols-2 gap-6">
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h3 class="font-semibold mb-2">⭐ Reward ideas (no money required)</h3>
        <ul class="text-xs text-slate-300 space-y-2 list-disc list-inside">
          <li>Pick the family dessert for tonight.</li>
          <li>Choose the next movie (PG, obviously 😄).</li>
          <li>Extra 10 minutes of story time.</li>
          <li>Design a “Junior Sparky” sticker badge and wear it for the day.</li>
        </ul>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h3 class="font-semibold mb-2">👨‍👩‍👧‍👦 Parent tip</h3>
        <p class="text-xs text-slate-300">Sit with them for the first round. If they get something wrong, ask: “What did the video say?” and let them answer it themselves.</p>
        <div class="mt-4 flex flex-wrap gap-3">
          <a href="<?php echo esc_url($links['safety']); ?>" class="inline-flex items-center rounded-full border border-slate-700 px-4 py-2 text-xs text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition">🚫 Safety first videos</a>
          <a href="<?php echo esc_url($links['basics']); ?>" class="inline-flex items-center rounded-full border border-slate-700 px-4 py-2 text-xs text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition">⚡ Electricity basics videos</a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
