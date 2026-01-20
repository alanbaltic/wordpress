<?php
/*
Template Name: Kids Zone Page
*/
get_header();

/**
 * Pages you’ll create separately (slugs can be changed any time):
 * - /kids-zone/electricity-basics/
 * - /kids-zone/online-quizzes/
 * - /kids-zone/safety-first/
 * - /kids-zone/quiz/            (reads ?difficulty=easy|medium|hard&level=1..150)
 * - /contact/
 */

$links = [
  'basics' => home_url('/kids-zone/electricity-basics/'),
  'quizzes' => home_url('/kids-zone/online-quizzes/'),
  'safety' => home_url('/kids-zone/safety-first/'),
  'quiz'   => home_url('/kids-zone/quiz/'),
  'contact'=> home_url('/contact/'),
];

// YouTube VIDEO IDs (just the ID, not the full URL)
$yt = [
  // BBC Teach (Spooky Science): "How electricity works"
  'basics' => '3Wl-5w1yCh4',

  // Electrical Safety First: "Charley Says - Never overload sockets"
  'safety' => 'nxNgHE0rXdI',
];

function kids_zone_youtube_embed($video_id){
  $video_id = trim((string)$video_id);
  if (!$video_id) return '';
  $src = 'https://www.youtube-nocookie.com/embed/' . rawurlencode($video_id) . '?rel=0&modestbranding=1';
  return $src;
}
?>

<!-- Hero -->
<section class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <p class="inline-flex items-center rounded-full border border-emerald-500/40 bg-emerald-500/10 px-3 py-1 text-xs font-medium text-emerald-300 mb-4">
      Kids Zone – learn about electricity safely
    </p>

    <h1 class="text-3xl md:text-4xl font-semibold tracking-tight mb-3">
      Baltic Kids Zone
    </h1>

    <p class="text-sm text-slate-300 max-w-2xl">
      A little corner of Baltic Electric for curious kids (and big kids). Short lessons, fun videos,
      and quick quizzes to learn how electricity works — safely, simply, and without the boring bits.
    </p>
  </div>
</section>

<!-- 3 Clickable Sections -->
<section class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 grid md:grid-cols-3 gap-6 text-sm">

    <a href="<?php echo esc_url($links['basics']); ?>"
       class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition hover:border-emerald-500/40 hover:bg-slate-900/80 focus:outline-none focus:ring-2 focus:ring-emerald-500/40">
      <div class="flex items-start justify-between gap-3">
        <h2 class="font-semibold mb-1 text-slate-100">⚡ Electricity basics</h2>
        <span class="text-xs text-emerald-300/90 border border-emerald-500/30 bg-emerald-500/10 rounded-full px-2 py-0.5">Open</span>
      </div>
      <p class="text-slate-300 text-xs leading-relaxed">
        Kid-friendly explainers about circuits, switches, bulbs, batteries, and why “power” needs a complete loop.
      </p>
      <p class="mt-3 text-xs text-slate-400 group-hover:text-slate-300">
        Tap to learn →
      </p>
    </a>

    <a href="<?php echo esc_url($links['quizzes']); ?>"
       class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition hover:border-emerald-500/40 hover:bg-slate-900/80 focus:outline-none focus:ring-2 focus:ring-emerald-500/40">
      <div class="flex items-start justify-between gap-3">
        <h2 class="font-semibold mb-1 text-slate-100">🎮 Online quizzes</h2>
        <span class="text-xs text-emerald-300/90 border border-emerald-500/30 bg-emerald-500/10 rounded-full px-2 py-0.5">Play</span>
      </div>
      <p class="text-slate-300 text-xs leading-relaxed">
        Quick multiple-choice quizzes (easy / medium / hard) with up to 150 levels. Great for 5–10 minute brain boosts.
      </p>
      <p class="mt-3 text-xs text-slate-400 group-hover:text-slate-300">
        Tap to start →
      </p>
    </a>

    <a href="<?php echo esc_url($links['safety']); ?>"
       class="hover-card group rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition hover:border-emerald-500/40 hover:bg-slate-900/80 focus:outline-none focus:ring-2 focus:ring-emerald-500/40">
      <div class="flex items-start justify-between gap-3">
        <h2 class="font-semibold mb-1 text-slate-100">🚫 Safety first</h2>
        <span class="text-xs text-emerald-300/90 border border-emerald-500/30 bg-emerald-500/10 rounded-full px-2 py-0.5">Learn</span>
      </div>
      <p class="text-slate-300 text-xs leading-relaxed">
        Simple rules about sockets, plugs, water, damaged cables, and when to stop and tell an adult straight away.
      </p>
      <p class="mt-3 text-xs text-slate-400 group-hover:text-slate-300">
        Tap for safety tips →
      </p>
    </a>

  </div>
</section>

<!-- Quiz Launcher (Easy / Medium / Hard + 150 levels) -->
<section class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <div class="grid lg:grid-cols-2 gap-8 items-start">
      <div>
        <h2 class="text-xl font-semibold mb-2">🏁 Quiz Arena</h2>
        <p class="text-slate-300 text-xs leading-relaxed max-w-xl">
          Pick your difficulty and level, then hit Start. Levels scale up gradually
          (more tricky wording, more safety scenarios, and more “spot the mistake” questions).
        </p>

        <div class="mt-5 hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
          <div class="flex flex-wrap items-center gap-2 mb-4">
            <span class="text-xs text-slate-300">Difficulty:</span>

            <button type="button" data-diff="easy"
              class="kid-diff-btn rounded-full border border-emerald-500/30 bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-200 hover:bg-emerald-500/15">
              Easy
            </button>
            <button type="button" data-diff="medium"
              class="kid-diff-btn rounded-full border border-slate-700 bg-slate-950/40 px-3 py-1 text-xs font-semibold text-slate-200 hover:border-emerald-500/30 hover:bg-emerald-500/10">
              Medium
            </button>
            <button type="button" data-diff="hard"
              class="kid-diff-btn rounded-full border border-slate-700 bg-slate-950/40 px-3 py-1 text-xs font-semibold text-slate-200 hover:border-emerald-500/30 hover:bg-emerald-500/10">
              Hard
            </button>

            <span class="ml-auto text-[11px] text-slate-400">Electricity basics & safety</span>
          </div>

          <div class="grid sm:grid-cols-3 gap-4 items-end">
            <div class="sm:col-span-2">
              <label for="kidLevel" class="block text-xs text-slate-300 mb-2">Level: <span id="kidLevelOut" class="font-semibold text-slate-100">1</span> / 150</label>
              <input id="kidLevel" type="range" min="1" max="150" value="1"
                class="w-full accent-emerald-400">
              <p class="mt-2 text-[11px] text-slate-400">
                Tip: Level 1–20 = super gentle. 21–80 = steady learning. 81–150 = “think like a sparky”.
              </p>
            </div>

            <div class="flex sm:justify-end">
              <a id="kidStartQuiz"
                 href="<?php echo esc_url($links['quiz']); ?>?difficulty=easy&level=1"
                 class="inline-flex items-center justify-center rounded-xl bg-emerald-500/20 border border-emerald-500/35 px-4 py-3 text-sm font-semibold text-emerald-200 hover:bg-emerald-500/25">
                Start Quiz →
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h3 class="font-semibold mb-2">⭐ Reward ideas (beat your best score)</h3>
        <ul class="text-xs text-slate-300 space-y-2 list-disc pl-5">
          <li>Sticker/stamp on a “Baltic Kids Zone” chart</li>
          <li>Pick the bedtime story tonight</li>
          <li>10 minutes extra screen time (parent-approved)</li>
          <li>Choose the music for 1 song</li>
          <li>Small treat: hot chocolate / biscuit / fruit lollies</li>
          <li>3 wins in a row = a “big win” reward</li>
        </ul>
        <p class="mt-4 text-[11px] text-slate-400">
          (You can keep rewards simple — the real win is confidence + safety knowledge.)
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Watch & Learn (YouTube embeds + short quiz) -->
<section class="bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <div class="flex items-end justify-between gap-4 mb-6">
      <div>
        <h2 class="text-xl font-semibold mb-2">📺 Watch & Learn</h2>
        <p class="text-slate-300 text-xs max-w-2xl leading-relaxed">
          Watch a short lesson, then answer a mini-quiz to check what you remembered.
        </p>
      </div>
      <a href="<?php echo esc_url($links['basics']); ?>"
         class="hidden sm:inline-flex text-xs text-emerald-200 hover:text-emerald-100 border border-emerald-500/30 bg-emerald-500/10 rounded-full px-3 py-1">
        More lessons →
      </a>
    </div>

    <div class="grid lg:grid-cols-2 gap-6">

      <!-- Basics Video -->
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 overflow-hidden">
        <div class="p-5 border-b border-slate-800">
          <h3 class="font-semibold">⚡ Electricity basics (video + quick quiz)</h3>
          <p class="text-xs text-slate-300 mt-1">
            Tip: Watch together, then try the mini-quiz.
          </p>
        </div>

        <div class="p-5">
          <?php $basics_src = kids_zone_youtube_embed($yt['basics']); ?>
          <?php if ($basics_src): ?>
            <div class="relative w-full rounded-xl overflow-hidden border border-slate-800 bg-slate-950" style="padding-top:56.25%;">
              <iframe
                class="absolute inset-0 w-full h-full"
                src="<?php echo esc_url($basics_src); ?>"
                title="Electricity basics video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
          <?php endif; ?>

          <div class="mt-5">
            <p class="text-xs font-semibold text-slate-200 mb-2">Mini-quiz</p>

            <div class="kid-quiz" data-quiz="basics">
              <div class="space-y-4 text-xs text-slate-300">
                <div>
                  <p class="font-semibold text-slate-200 mb-2">1) A loop that electricity travels around is called a…</p>
                  <label class="block"><input type="radio" name="bq1" value="0" class="mr-2"> Battery</label>
                  <label class="block"><input type="radio" name="bq1" value="1" class="mr-2"> Circuit</label>
                  <label class="block"><input type="radio" name="bq1" value="0" class="mr-2"> Sticker</label>
                </div>

                <div>
                  <p class="font-semibold text-slate-200 mb-2">2) If a circuit is broken, a bulb will usually…</p>
                  <label class="block"><input type="radio" name="bq2" value="1" class="mr-2"> Turn off</label>
                  <label class="block"><input type="radio" name="bq2" value="0" class="mr-2"> Get brighter forever</label>
                  <label class="block"><input type="radio" name="bq2" value="0" class="mr-2"> Turn into a banana</label>
                </div>

                <div>
                  <p class="font-semibold text-slate-200 mb-2">3) Electricity is best described as…</p>
                  <label class="block"><input type="radio" name="bq3" value="1" class="mr-2"> A kind of energy we use</label>
                  <label class="block"><input type="radio" name="bq3" value="0" class="mr-2"> A type of cereal</label>
                  <label class="block"><input type="radio" name="bq3" value="0" class="mr-2"> A kind of shoe</label>
                </div>
              </div>

              <div class="mt-4 flex items-center gap-3">
                <button type="button"
                        class="kid-check rounded-xl bg-emerald-500/20 border border-emerald-500/35 px-4 py-2 text-xs font-semibold text-emerald-200 hover:bg-emerald-500/25">
                  Check answers
                </button>
                <p class="kid-result text-xs text-slate-300"></p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Safety Video -->
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 overflow-hidden">
        <div class="p-5 border-b border-slate-800">
          <h3 class="font-semibold">🚫 Safety first (video + quick quiz)</h3>
          <p class="text-xs text-slate-300 mt-1">
            Simple rules: stop, don’t touch, and tell an adult.
          </p>
        </div>

        <div class="p-5">
          <?php $safety_src = kids_zone_youtube_embed($yt['safety']); ?>
          <?php if ($safety_src): ?>
            <div class="relative w-full rounded-xl overflow-hidden border border-slate-800 bg-slate-950" style="padding-top:56.25%;">
              <iframe
                class="absolute inset-0 w-full h-full"
                src="<?php echo esc_url($safety_src); ?>"
                title="Electricity safety video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
          <?php endif; ?>

          <div class="mt-5">
            <p class="text-xs font-semibold text-slate-200 mb-2">Mini-quiz</p>

            <div class="kid-quiz" data-quiz="safety">
              <div class="space-y-4 text-xs text-slate-300">
                <div>
                  <p class="font-semibold text-slate-200 mb-2">1) Is it safe to put things into a socket?</p>
                  <label class="block"><input type="radio" name="sq1" value="1" class="mr-2"> No — never</label>
                  <label class="block"><input type="radio" name="sq1" value="0" class="mr-2"> Yes — if it’s shiny</label>
                  <label class="block"><input type="radio" name="sq1" value="0" class="mr-2"> Yes — if it’s a pencil</label>
                </div>

                <div>
                  <p class="font-semibold text-slate-200 mb-2">2) If you see a damaged cable, you should…</p>
                  <label class="block"><input type="radio" name="sq2" value="1" class="mr-2"> Stop and tell an adult</label>
                  <label class="block"><input type="radio" name="sq2" value="0" class="mr-2"> Pull it really hard</label>
                  <label class="block"><input type="radio" name="sq2" value="0" class="mr-2"> Hide it under a pillow</label>
                </div>

                <div>
                  <p class="font-semibold text-slate-200 mb-2">3) Water and electricity are…</p>
                  <label class="block"><input type="radio" name="sq3" value="1" class="mr-2"> Dangerous together</label>
                  <label class="block"><input type="radio" name="sq3" value="0" class="mr-2"> Best friends</label>
                  <label class="block"><input type="radio" name="sq3" value="0" class="mr-2"> The same thing</label>
                </div>
              </div>

              <div class="mt-4 flex items-center gap-3">
                <button type="button"
                        class="kid-check rounded-xl bg-emerald-500/20 border border-emerald-500/35 px-4 py-2 text-xs font-semibold text-emerald-200 hover:bg-emerald-500/25">
                  Check answers
                </button>
                <p class="kid-result text-xs text-slate-300"></p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

    <!-- Parents & teachers -->
    <div class="mt-10 hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-6 grid md:grid-cols-2 gap-6">
      <div>
        <h2 class="text-xl font-semibold mb-2">Parents &amp; teachers</h2>
        <p class="text-slate-300 text-xs leading-relaxed">
          You’re welcome to use anything here for classrooms, homework, or rainy-day activities.
          If you’d like a tailored session for a local school, use our contact form.
        </p>
      </div>
      <div class="flex md:justify-end items-start">
        <a href="<?php echo esc_url($links['contact']); ?>"
           class="inline-flex items-center justify-center rounded-xl bg-slate-950/40 border border-slate-700 px-4 py-3 text-xs font-semibold text-slate-200 hover:border-emerald-500/30 hover:bg-emerald-500/10">
          Contact Baltic Electric →
        </a>
      </div>
    </div>

  </div>
</section>

<script>
(function(){
  // Quiz launcher (difficulty + level -> link)
  const quizBase = <?php echo json_encode($links['quiz']); ?>;
  const level = document.getElementById('kidLevel');
  const levelOut = document.getElementById('kidLevelOut');
  const startLink = document.getElementById('kidStartQuiz');
  const diffBtns = document.querySelectorAll('.kid-diff-btn');

  let currentDiff = 'easy';

  function updateStartLink(){
    const lvl = level ? level.value : 1;
    if (levelOut) levelOut.textContent = lvl;
    if (startLink) startLink.href = `${quizBase}?difficulty=${encodeURIComponent(currentDiff)}&level=${encodeURIComponent(lvl)}`;
  }

  diffBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      currentDiff = btn.getAttribute('data-diff') || 'easy';

      diffBtns.forEach(b => {
        b.classList.remove('border-emerald-500/30','bg-emerald-500/10','text-emerald-200');
        b.classList.add('border-slate-700','bg-slate-950/40','text-slate-200');
      });

      btn.classList.remove('border-slate-700','bg-slate-950/40','text-slate-200');
      btn.classList.add('border-emerald-500/30','bg-emerald-500/10','text-emerald-200');

      updateStartLink();
    });
  });

  if (level) level.addEventListener('input', updateStartLink);
  updateStartLink();

  // Mini quizzes under videos
  document.querySelectorAll('.kid-quiz').forEach(quiz => {
    const btn = quiz.querySelector('.kid-check');
    const out = quiz.querySelector('.kid-result');

    btn.addEventListener('click', () => {
      const radios = quiz.querySelectorAll('input[type="radio"]:checked');
      let score = 0;

      radios.forEach(r => score += Number(r.value || 0));

      if (radios.length === 0) {
        out.textContent = "Pick your answers first 🙂";
        out.className = "kid-result text-xs text-slate-300";
        return;
      }

      out.textContent = `Score: ${score} / 3`;
      out.className = score === 3
        ? "kid-result text-xs text-emerald-200"
        : "kid-result text-xs text-slate-300";
    });
  });
})();
</script>

<?php get_footer(); ?>