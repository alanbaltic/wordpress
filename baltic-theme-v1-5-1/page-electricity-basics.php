<?php
/*
Template Name: Kids Zone – Electricity Basics
*/
get_header();

$links = [
  'kids'   => home_url('/kids-zone/'),
  'quizzes'=> home_url('/kids-zone/online-quizzes/'),
  'arena'  => home_url('/kids-zone/quiz/?difficulty=easy&level=1'),
  'safety' => home_url('/kids-zone/safety-first/'),
];

$videos = [
  [
    'id' => '3Wl-5w1yCh4',
    'title' => 'How electricity works (Spooky Science)',
    'by' => 'BBC Teach',
    'blurb' => 'What a circuit is, and why you need a complete loop.',
    'quiz' => [
      [ 'q' => 'A circuit needs to be…', 'a' => 0, 'opts' => ['A complete loop', 'A wiggly line', 'Full of water'] ],
      [ 'q' => 'What happens if a circuit has a gap?', 'a' => 1, 'opts' => ['The bulb gets brighter', 'The bulb won\'t work', 'It turns into a battery'] ],
      [ 'q' => 'Electricity usually travels through…', 'a' => 2, 'opts' => ['Rubber', 'Wood', 'Metal'] ],
    ],
  ],
  [
    'id' => 'HOFp8bHTN30',
    'title' => 'The Power of Circuits!',
    'by' => 'SciShow Kids',
    'blurb' => 'Power source → wires → device → back again.',
    'quiz' => [
      [ 'q' => 'In a torch, the power source is usually…', 'a' => 0, 'opts' => ['A battery', 'A potato', 'A spoon'] ],
      [ 'q' => 'A circuit is like a…', 'a' => 1, 'opts' => ['One-way street', 'Loop / path', 'Pillow'] ],
      [ 'q' => 'When you press a switch, you are…', 'a' => 2, 'opts' => ['Making a gap', 'Turning off gravity', 'Closing the circuit'] ],
    ],
  ],
  [
    'id' => 'ENbFKEhiqlM',
    'title' => 'How is electricity made?',
    'by' => 'BBC Teach (Curious Cat)',
    'blurb' => 'From power stations to your plug socket (the safe, kid version!).',
    'quiz' => [
      [ 'q' => 'Electricity can be made in a…', 'a' => 1, 'opts' => ['Washing machine', 'Power station', 'Lunchbox'] ],
      [ 'q' => 'Why do we send electricity through big cables?', 'a' => 0, 'opts' => ['To carry it to homes', 'To feed pigeons', 'To cool it down'] ],
      [ 'q' => 'Which is a renewable way to make electricity?', 'a' => 2, 'opts' => ['Coal', 'Gas', 'Wind'] ],
    ],
  ],
  [
    'id' => 'UQITaS1hEnE',
    'title' => 'How do solar panels work?',
    'by' => 'YouTube',
    'blurb' => 'Sunlight → solar panels → electricity (no moving parts needed).',
    'quiz' => [
      [ 'q' => 'Solar panels make electricity using…', 'a' => 0, 'opts' => ['Sunlight', 'Rain', 'Noise'] ],
      [ 'q' => 'Solar panels usually go on a…', 'a' => 2, 'opts' => ['Carpet', 'Window', 'Roof'] ],
      [ 'q' => 'Solar power is…', 'a' => 1, 'opts' => ['Dirty', 'Renewable', 'Made of cheese'] ],
    ],
  ],
];
?>

<section class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <div class="flex flex-wrap items-center gap-3 mb-4">
      <a href="<?php echo esc_url($links['kids']); ?>" class="text-xs text-slate-300 hover:text-emerald-400">← Back to Kids Zone</a>
      <span class="inline-flex items-center rounded-full border border-emerald-500/40 bg-emerald-500/10 px-3 py-1 text-xs font-medium text-emerald-300">Electricity Basics</span>
    </div>

    <h1 class="text-3xl md:text-4xl font-semibold tracking-tight">Electricity basics (the fun way)</h1>
    <p class="text-sm text-slate-300 max-w-2xl mt-3">
      Watch a short video, answer a mini-quiz, and unlock the next idea.
      Everything here is about learning safely — no tools, no sockets, no messing about.
    </p>

    <div class="mt-6 flex flex-wrap gap-3">
      <a href="<?php echo esc_url($links['arena']); ?>" class="inline-flex items-center rounded-full bg-emerald-400 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-emerald-300 transition">🏁 Start the Quiz Arena</a>
      <a href="<?php echo esc_url($links['safety']); ?>" class="inline-flex items-center rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition">🚫 Go to Safety First</a>
    </div>
  </div>
</section>

<section class="bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <div class="grid md:grid-cols-2 gap-6">

      <?php foreach ($videos as $i => $v): $src = function_exists('baltic_youtube_embed_src') ? baltic_youtube_embed_src($v['id']) : ''; $key = 'bz' . ($i+1); ?>
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

    <div class="mt-10 grid md:grid-cols-3 gap-6">
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h3 class="font-semibold mb-2">🕵️‍♂️ Safe activity: Switch hunt</h3>
        <p class="text-xs text-slate-300">With an adult, walk around the house and spot switches that control lights or fans. Make a list of what each one does.</p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h3 class="font-semibold mb-2">🔋 Battery vs mains</h3>
        <p class="text-xs text-slate-300">Find 5 things that use batteries and 5 things that plug in. Which ones can you take outside?</p>
      </div>
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h3 class="font-semibold mb-2">✏️ Draw a circuit</h3>
        <p class="text-xs text-slate-300">Draw a battery, a bulb and a switch. Can you draw a “gap” circuit and a “closed” circuit?</p>
      </div>
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
    if (!answered){
      out.textContent = 'Pick at least one answer 🙂';
      return;
    }

    out.textContent = 'Score: ' + correct + ' / ' + total + (correct === total ? ' ✅ Brilliant!' : ' — nice try, watch again and have another go!');
  }

  document.querySelectorAll('[data-mini-quiz]').forEach(function(block){
    var btn = block.querySelector('.kid-check');
    if (!btn) return;
    btn.addEventListener('click', function(){ checkBlock(block); });
  });
})();
</script>

<?php get_footer(); ?>
