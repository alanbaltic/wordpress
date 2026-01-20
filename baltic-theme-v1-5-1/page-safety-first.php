<?php
/*
Template Name: Kids Zone – Safety First
*/
get_header();

$links = [
  'kids'   => home_url('/kids-zone/'),
  'quizzes'=> home_url('/kids-zone/online-quizzes/'),
  'arena'  => home_url('/kids-zone/quiz/?difficulty=easy&level=1'),
  'basics' => home_url('/kids-zone/electricity-basics/'),
];

$videos = [
  [
    'id' => 'nxNgHE0rXdI',
    'title' => 'Charley Says – Never overload sockets',
    'by' => 'Electrical Safety First',
    'blurb' => 'Too many powerful things in one socket can overheat.',
    'quiz' => [
      [ 'q' => 'What should you do if there aren\'t enough sockets?', 'a' => 1, 'opts' => ['Add more adaptors', 'Ask an adult / electrician', 'Jam two plugs into one hole'] ],
      [ 'q' => 'Overloading sockets can cause…', 'a' => 0, 'opts' => ['Overheating / fire', 'Ice', 'More Wi‑Fi'] ],
      [ 'q' => 'Best rule for kids:', 'a' => 2, 'opts' => ['Fix plugs yourself', 'Pull cables to unplug', 'Tell an adult if something feels wrong'] ],
    ],
  ],
  [
    'id' => '7RwX5SNc-xE',
    'title' => 'Charley Says – Never buy fake electrical goods',
    'by' => 'Electrical Safety First',
    'blurb' => 'Fake chargers and plugs can be dangerous.',
    'quiz' => [
      [ 'q' => 'A good place to buy chargers is…', 'a' => 1, 'opts' => ['A random market stall', 'A trusted shop / brand', 'A mystery box'] ],
      [ 'q' => 'If a charger looks damaged you should…', 'a' => 0, 'opts' => ['Stop using it and tell an adult', 'Keep using it', 'Tape it and hope'] ],
      [ 'q' => 'Why do fake goods matter?', 'a' => 2, 'opts' => ['They\'re louder', 'They\'re heavier', 'They may not be safe'] ],
    ],
  ],
  [
    'id' => '7w-80ZBSS6k',
    'title' => 'Bee Safe',
    'by' => 'UK Power Networks',
    'blurb' => 'A child-friendly safety story about electricity at home and outdoors.',
    'quiz' => [
      [ 'q' => 'If you see something electrical outside that looks broken, you…', 'a' => 2, 'opts' => ['Go closer', 'Throw stones', 'Stay back and tell an adult'] ],
      [ 'q' => 'If a cable is on the ground, you should…', 'a' => 1, 'opts' => ['Touch it with a stick', 'Keep away and warn others', 'Take a photo standing on it'] ],
      [ 'q' => 'The safest helper is…', 'a' => 0, 'opts' => ['A grown-up', 'A fork', 'A puddle'] ],
    ],
  ],
  [
    'id' => 'ApTfemeK6qQ',
    'title' => 'The Electric Detective',
    'by' => 'UK Power Networks',
    'blurb' => 'Learn safe choices through a fun story (aimed at 7–11).',
    'quiz' => [
      [ 'q' => 'If your hands are wet, you should…', 'a' => 0, 'opts' => ['Dry them before using switches', 'Touch a socket quickly', 'Use a toaster in the bath'] ],
      [ 'q' => 'If you smell burning from a plug, you should…', 'a' => 2, 'opts' => ['Ignore it', 'Hide it', 'Tell an adult straight away'] ],
      [ 'q' => 'Kids should try to repair cables?', 'a' => 1, 'opts' => ['Yes', 'No', 'Only on Tuesdays'] ],
    ],
  ],
];
?>

<section class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <div class="flex flex-wrap items-center gap-3 mb-4">
      <a href="<?php echo esc_url($links['kids']); ?>" class="text-xs text-slate-300 hover:text-emerald-400">← Back to Kids Zone</a>
      <span class="inline-flex items-center rounded-full border border-emerald-500/40 bg-emerald-500/10 px-3 py-1 text-xs font-medium text-emerald-300">Safety First</span>
    </div>

    <h1 class="text-3xl md:text-4xl font-semibold tracking-tight">Safety first, always</h1>
    <p class="text-sm text-slate-300 max-w-2xl mt-3">
      Electricity is amazing… and it can be dangerous. These videos and mini-quizzes teach the #1 rule:
      <span class="text-emerald-300 font-semibold">if you\'re not sure, get an adult.</span>
    </p>

    <div class="mt-6 flex flex-wrap gap-3">
      <a href="<?php echo esc_url($links['arena']); ?>" class="inline-flex items-center rounded-full bg-emerald-400 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-emerald-300 transition">🏁 Safety Quiz Arena</a>
      <a href="<?php echo esc_url($links['basics']); ?>" class="inline-flex items-center rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition">⚡ Back to Basics</a>
    </div>
  </div>
</section>

<section class="bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">

    <div class="grid md:grid-cols-3 gap-6 mb-10">
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h3 class="font-semibold mb-2">🚫 Don\'t touch</h3>
        <p class="text-xs text-slate-300">Sockets, chargers, plugs and wires are for grown-ups. If something is loose, broken or hot, tell an adult.</p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h3 class="font-semibold mb-2">💧 Water + electricity = no</h3>
        <p class="text-xs text-slate-300">Dry hands first. Keep devices away from baths, sinks and puddles.</p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h3 class="font-semibold mb-2">🧑‍🤝‍🧑 Get an adult</h3>
        <p class="text-xs text-slate-300">If you ever feel unsure: stop, step back, and get a grown-up. That\'s the smart move.</p>
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      <?php foreach ($videos as $i => $v): $src = function_exists('baltic_youtube_embed_src') ? baltic_youtube_embed_src($v['id']) : ''; $key = 'sz' . ($i+1); ?>
        <article class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 overflow-hidden">
          <div class="p-5">
            <div class="flex items-start justify-between gap-3">
              <div>
                <h2 class="text-lg font-semibold"><?php echo esc_html($v['title']); ?></h2>
                <p class="text-xs text-slate-400"><?php echo esc_html($v['by']); ?> • <?php echo esc_html($v['blurb']); ?></p>
              </div>
              <span class="text-xs rounded-full border border-slate-700 px-3 py-1 text-slate-300">Video + quiz</span>
            </div>

            <?php if ($src): ?>
              <div class="mt-4 relative w-full rounded-xl overflow-hidden border border-slate-800 bg-slate-950" style="padding-top:56.25%;">
                <iframe
                  class="absolute inset-0 w-full h-full"
                  src="<?php echo esc_url($src); ?>"
                  title="<?php echo esc_attr($v['title']); ?>"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div>
            <?php endif; ?>

            <div class="mt-4 rounded-xl border border-slate-800 bg-slate-950 p-4" data-mini-quiz>
              <p class="text-sm font-semibold mb-2">Mini quiz</p>

              <?php foreach ($v['quiz'] as $qi => $q): $qid = $key . '_q' . $qi; ?>
                <div class="mb-3">
                  <p class="text-sm text-slate-200 mb-2"><?php echo esc_html($q['q']); ?></p>
                  <div class="grid sm:grid-cols-3 gap-2">
                    <?php foreach ($q['opts'] as $oi => $opt): ?>
                      <label class="cursor-pointer rounded-lg border border-slate-800 bg-slate-900/40 px-3 py-2 text-xs text-slate-200 hover:border-emerald-500/40 transition">
                        <input class="mr-2 align-middle" type="radio" name="<?php echo esc_attr($qid); ?>" value="<?php echo esc_attr($oi); ?>" data-answer="<?php echo esc_attr($q['a']); ?>">
                        <span class="align-middle"><?php echo esc_html($opt); ?></span>
                      </label>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endforeach; ?>

              <button type="button" class="kid-check inline-flex items-center rounded-full bg-emerald-400 px-4 py-2 text-xs font-semibold text-slate-950 hover:bg-emerald-300 transition">Check answers</button>
              <p class="kid-result mt-2 text-xs text-slate-300" aria-live="polite"></p>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <div class="mt-10 text-center">
      <a href="<?php echo esc_url($links['quizzes']); ?>" class="inline-flex items-center rounded-full border border-slate-700 px-5 py-2 text-sm text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition">🎮 Explore all quizzes</a>
    </div>

  </div>
</section>

<script>
(function(){
  function checkBlock(block){
    var inputs = block.querySelectorAll('input[type="radio"]');
    var byName = {};
    inputs.forEach(function(i){ (byName[i.name] = byName[i.name] || []).push(i); });

    var total = 0, correct = 0, answered = 0;
    Object.keys(byName).forEach(function(name){
      total++;
      var picked = byName[name].find(function(i){ return i.checked; });
      if (!picked) return;
      answered++;
      var answer = picked.getAttribute('data-answer');
      if (String(picked.value) === String(answer)) correct++;
    });

    var out = block.querySelector('.kid-result');
    if (!answered){ out.textContent = 'Pick at least one answer 🙂'; return; }
    out.textContent = 'Score: ' + correct + ' / ' + total + (correct === total ? ' ✅ Brilliant!' : ' — good try. Replay the bit you missed and go again!');
  }

  document.querySelectorAll('[data-mini-quiz]').forEach(function(block){
    var btn = block.querySelector('.kid-check');
    if (!btn) return;
    btn.addEventListener('click', function(){ checkBlock(block); });
  });
})();
</script>

<?php get_footer(); ?>
