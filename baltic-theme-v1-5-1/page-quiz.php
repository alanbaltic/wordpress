<?php
/*
Template Name: Kids Zone – Quiz Arena
*/
get_header();

$links = [
  'kids'   => home_url('/kids-zone/'),
  'quizzes'=> home_url('/kids-zone/online-quizzes/'),
];
?>

<section class="border-b border-slate-800 bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">
    <div class="flex flex-wrap items-center gap-3 mb-4">
      <a href="<?php echo esc_url($links['quizzes']); ?>" class="text-xs text-slate-300 hover:text-emerald-400">← Back to Online Quizzes</a>
      <span class="inline-flex items-center rounded-full border border-emerald-500/40 bg-emerald-500/10 px-3 py-1 text-xs font-medium text-emerald-300">Quiz Arena</span>
    </div>

    <h1 class="text-3xl md:text-4xl font-semibold tracking-tight">⚡ Electricity Quiz Arena</h1>
    <p class="text-sm text-slate-300 max-w-2xl mt-3">
      Easy, medium or hard — plus <span class="text-emerald-300 font-semibold">150 levels</span> to keep it fresh.
      Beat your personal best time and unlock reward ideas.
    </p>

    <div class="mt-6 grid md:grid-cols-3 gap-6">
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h2 class="font-semibold text-lg mb-2">Difficulty</h2>
        <div class="flex flex-wrap gap-2" id="kzDiff">
          <button type="button" class="kz-btn" data-diff="easy">Easy</button>
          <button type="button" class="kz-btn" data-diff="medium">Medium</button>
          <button type="button" class="kz-btn" data-diff="hard">Hard</button>
        </div>
        <p class="text-xs text-slate-300 mt-3">Easy = ages ~6–8 • Medium = ~7–10 • Hard = ~9+ (still kid-friendly)</p>
      </div>

      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h2 class="font-semibold text-lg mb-2">Level</h2>
        <div class="flex items-center justify-between gap-3">
          <div class="text-3xl font-semibold tracking-tight" id="kzLevelLabel">1</div>
          <div class="text-sm text-slate-300" id="kzBest">Best: —</div>
        </div>
        <input id="kzLevel" type="range" min="1" max="150" value="1" class="mt-4 w-full accent-emerald-400">
        <p class="text-xs text-slate-400 mt-2">Tip: pick a level, hit Start, then try to beat your time.</p>
      </div>

      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h2 class="font-semibold text-lg mb-2">Timer</h2>
        <div class="flex items-center justify-between">
          <div class="text-3xl font-semibold tracking-tight" id="kzTimer">00:00.0</div>
          <div class="text-xs text-slate-300"><span class="text-emerald-300 font-semibold">10</span> questions</div>
        </div>
        <div class="mt-4 kid-track" aria-hidden="true">
          <div class="kid-car" id="kzCar">⚡</div>
          <div class="kid-finish">🏁</div>
        </div>
        <div class="mt-4 flex flex-wrap gap-2">
          <button type="button" class="inline-flex items-center rounded-full bg-emerald-400 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-emerald-300 transition" id="kzStart">Start</button>
          <button type="button" class="inline-flex items-center rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition" id="kzReset">Reset</button>
          <button type="button" class="inline-flex items-center rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition" id="kzGo">Go to this level</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">

    <div class="grid md:grid-cols-3 gap-6">
      <div class="md:col-span-2">
        <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
          <div class="flex items-start justify-between gap-4">
            <div>
              <p class="text-xs text-slate-400" id="kzCount">Question 1 of 10</p>
              <h2 class="text-xl font-semibold mt-1" id="kzQuestion">Press Start to begin.</h2>
              <p class="text-xs text-slate-300 mt-2" id="kzHint"></p>
            </div>
            <div class="text-xs rounded-full border border-slate-700 px-3 py-1 text-slate-300" id="kzTag">—</div>
          </div>

          <div class="mt-5 grid sm:grid-cols-2 gap-3" id="kzOptions"></div>

          <div class="mt-5 flex items-center justify-between gap-3">
            <p class="text-sm" id="kzFeedback" aria-live="polite"></p>
            <button type="button" class="inline-flex items-center rounded-full bg-emerald-400 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-emerald-300 transition" id="kzNext" hidden>Next</button>
          </div>
        </div>

        <div class="mt-6 hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-6" id="kzSummary" hidden>
          <div class="flex items-start justify-between gap-4">
            <div>
              <h3 class="text-xl font-semibold" id="kzSummaryTitle">Done!</h3>
              <p class="text-sm text-slate-200 mt-2" id="kzSummaryText"></p>
            </div>
            <div class="text-sm text-slate-300"><span class="text-emerald-300 font-semibold" id="kzScore">0</span>/10</div>
          </div>

          <div class="mt-4 rounded-xl border border-slate-800 bg-slate-950 p-4" id="kzRewards" hidden>
            <p class="text-sm font-semibold mb-2">🎁 Reward ideas (you beat your best!)</p>
            <ul class="text-xs text-slate-300 space-y-2 list-disc list-inside">
              <li>Pick the family dessert.</li>
              <li>Choose the next movie (PG).</li>
              <li>Extra 10 minutes of story time.</li>
              <li>Design a “Junior Sparky” badge and wear it today.</li>
            </ul>
          </div>
        </div>
      </div>

      <aside class="space-y-6">
        <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
          <h3 class="font-semibold mb-2">🛡️ Safety rule</h3>
          <p class="text-xs text-slate-300">If you ever feel unsure about anything electrical: stop, step back, and get an adult.</p>
        </div>
        <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
          <h3 class="font-semibold mb-2">🎯 How scoring works</h3>
          <p class="text-xs text-slate-300">We save your best time for each <span class="text-emerald-300 font-semibold">difficulty + level</span>.
          A new best needs the same score, but faster… or a higher score.</p>
        </div>
        <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
          <h3 class="font-semibold mb-2">📚 Want to learn first?</h3>
          <div class="flex flex-wrap gap-2">
            <a class="inline-flex items-center rounded-full border border-slate-700 px-4 py-2 text-xs text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition" href="<?php echo esc_url(home_url('/kids-zone/electricity-basics/')); ?>">⚡ Electricity basics</a>
            <a class="inline-flex items-center rounded-full border border-slate-700 px-4 py-2 text-xs text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition" href="<?php echo esc_url(home_url('/kids-zone/safety-first/')); ?>">🚫 Safety first</a>
          </div>
        </div>
      </aside>
    </div>

  </div>
</section>

<style>
  .kz-btn{
    display:inline-flex; align-items:center; justify-content:center;
    border-radius:9999px; padding:.5rem 1rem;
    border:1px solid rgba(51,65,85,1);
    background:rgba(15,23,42,.45);
    color:rgba(226,232,240,1);
    font-size:.875rem;
    transition:transform 150ms ease, border-color 150ms ease, background-color 150ms ease;
  }
  .kz-btn:hover{ transform:translateY(-1px); border-color:rgba(52,171,73,.5); }
  .kz-btn[aria-pressed="true"]{ background:rgba(52,171,73,.15); border-color:rgba(52,171,73,.55); color:rgba(187,247,208,1); }

  .kid-track{ position:relative; height:56px; border-radius:9999px; border:1px solid rgba(51,65,85,1); background:linear-gradient(90deg, rgba(15,23,42,.8), rgba(2,6,23,.8)); overflow:hidden; }
  .kid-car{ position:absolute; left:10px; top:50%; transform:translateY(-50%); font-size:26px; transition:left 80ms linear; }
  .kid-finish{ position:absolute; right:12px; top:50%; transform:translateY(-50%); font-size:22px; }

  .kz-opt{
    border:1px solid rgba(51,65,85,1);
    background:rgba(15,23,42,.55);
    color:rgba(226,232,240,1);
    border-radius:16px;
    padding:14px 14px;
    text-align:left;
    font-size:14px;
    transition:transform 150ms ease, border-color 150ms ease, background-color 150ms ease;
  }
  .kz-opt:hover{ transform:translateY(-1px); border-color:rgba(52,171,73,.45); background:rgba(15,23,42,.75); }
  .kz-opt:disabled{ opacity:.55; cursor:not-allowed; transform:none; }
</style>

<script>
(function(){
  // ---------- helpers ----------
  function clamp(n, a, b){ return Math.max(a, Math.min(b, n)); }
  function fmt(ms){
    ms = Math.max(0, ms);
    var t = ms/1000;
    var m = Math.floor(t/60);
    var s = (t % 60);
    var ss = Math.floor(s);
    var tenths = Math.floor((s-ss)*10);
    return String(m).padStart(2,'0') + ':' + String(ss).padStart(2,'0') + '.' + tenths;
  }
  function mulberry32(seed){
    return function(){
      var t = seed += 0x6D2B79F5;
      t = Math.imul(t ^ (t >>> 15), t | 1);
      t ^= t + Math.imul(t ^ (t >>> 7), t | 61);
      return ((t ^ (t >>> 14)) >>> 0) / 4294967296;
    };
  }
  function qs(name){
    try { return new URLSearchParams(window.location.search).get(name); } catch(e){ return null; }
  }
  function bestKey(diff, lvl){ return 'kzBest:' + diff + ':' + lvl; }

  // ---------- state ----------
  var diff = (qs('difficulty') || 'easy').toLowerCase();
  if (!['easy','medium','hard'].includes(diff)) diff = 'easy';
  var level = clamp(parseInt(qs('level') || '1', 10) || 1, 1, 150);

  var diffIndex = { easy:0, medium:1, hard:2 }[diff];
  var complexity = level + diffIndex * 40;

  var total = 10;
  var qIndex = 0;
  var score = 0;
  var running = false;
  var startTime = null;
  var raf = null;
  var questions = [];
  var current = null;

  // ---------- question pool ----------
  var pool = [
    // Basics
    { id:'circuit_loop', tag:'Basics', min:1, max:60, q:'A circuit needs to be…', opts:['A complete loop','A triangle','A cloud'], a:0, hint:'Think “round trip”.' },
    { id:'gap', tag:'Basics', min:1, max:70, q:'If a circuit has a gap, the bulb will…', opts:['Still light up','Not light up','Turn into a battery'], a:1, hint:'Electricity can’t jump a break.' },
    { id:'switch', tag:'Basics', min:1, max:90, q:'A switch is used to…', opts:['Make a circuit open/close','Make water boil','Paint a wall'], a:0, hint:'On/off.' },
    { id:'battery', tag:'Basics', min:1, max:90, q:'In a torch, the power source is usually…', opts:['A battery','A spoon','A shoe'], a:0, hint:'The thing you replace.' },
    { id:'conductor', tag:'Materials', min:10, max:120, q:'Which material is usually a good conductor?', opts:['Metal','Plastic','Rubber'], a:0, hint:'Think: wires.' },
    { id:'insulator', tag:'Materials', min:10, max:120, q:'Which material is usually an insulator?', opts:['Rubber','Copper','Aluminium'], a:0, hint:'Insulators help keep us safe.' },
    { id:'static', tag:'Basics', min:20, max:150, q:'A tiny “zap” from a trampoline or jumper is called…', opts:['Static electricity','Melted electricity','Sticky electricity'], a:0, hint:'Crackly sparks.' },

    // Solar / renewables
    { id:'solar_sun', tag:'Solar', min:1, max:110, q:'Solar panels make electricity using…', opts:['Sunlight','Rain','Noise'], a:0, hint:'Bright days help.' },
    { id:'renewable', tag:'Energy', min:25, max:150, q:'Which is a renewable energy source?', opts:['Wind','Coal','Oil'], a:0, hint:'Keeps coming back.' },
    { id:'ev', tag:'EVs', min:30, max:150, q:'An EV charger is used to…', opts:['Charge an electric car','Make toast','Water plants'], a:0, hint:'EV = electric vehicle.' },

    // Home safety
    { id:'wet_hands', tag:'Safety', min:1, max:150, q:'If your hands are wet, you should…', opts:['Dry them first','Touch a socket quickly','Hold a plug under a tap'], a:0, hint:'Water + electricity = no.' },
    { id:'broken_plug', tag:'Safety', min:1, max:150, q:'If a plug, cable or charger looks broken, you…', opts:['Tell an adult','Keep using it','Chew it'], a:0, hint:'Adults can replace it safely.' },
    { id:'hot_plug', tag:'Safety', min:30, max:150, q:'If a plug feels hot or smells strange, you…', opts:['Tell an adult straight away','Hide it','Keep using it'], a:0, hint:'Heat is a warning sign.' },
    { id:'socket_rule', tag:'Safety', min:1, max:150, q:'The #1 rule for kids and sockets is…', opts:['Never put anything in them','Try to fix them','See what fits'], a:0, hint:'Hands off.' },
    { id:'overload', tag:'Safety', min:35, max:150, q:'Overloading sockets can cause…', opts:['Overheating / fire','Ice','More Wi‑Fi'], a:0, hint:'Too much power in one place.' },
    { id:'pull_cable', tag:'Safety', min:20, max:150, q:'The safest way to unplug something is…', opts:['Hold the plug body','Pull the cable','Kick it out'], a:0, hint:'No yanking.' },
    { id:'adult_help', tag:'Safety', min:1, max:150, q:'If you are unsure about anything electrical, you…', opts:['Get an adult','Guess','Try harder'], a:0, hint:'Smart kids ask for help.' },
    { id:'outside_broken', tag:'Outdoor', min:40, max:150, q:'If you see something electrical outside that looks broken, you…', opts:['Go closer','Touch it with a stick','Stay back and tell an adult'], a:2, hint:'Distance keeps you safe.' },
    { id:'down_cable', tag:'Outdoor', min:60, max:150, q:'If a cable is on the ground outside, you should…', opts:['Step on it','Keep away and warn others','Pick it up'], a:1, hint:'Never touch.' },

    // Numbers (harder)
    { id:'mains_voltage', tag:'Safety', min:120, max:150, q:'UK home electricity is about…', opts:['230 volts','12 volts','1 volt'], a:0, hint:'It\'s powerful, so we treat it seriously.' },
    { id:'battery_voltage', tag:'Basics', min:90, max:150, q:'A small AA battery is about…', opts:['1.5 volts','230 volts','500 volts'], a:0, hint:'Much smaller than mains.' },
    { id:'fuse_reason', tag:'Safety', min:130, max:150, q:'A fuse is there to…', opts:['Help keep things safe','Make things louder','Charge phones faster'], a:0, hint:'Safety part.' },

    // Bonus: energy saving
    { id:'turn_off', tag:'Energy', min:20, max:150, q:'To save energy, it helps to…', opts:['Turn off lights when you leave','Leave everything on','Open the fridge door'], a:0, hint:'Simple habits.' },
  ];

  var materials = [
    { name:'copper', type:'conductor' },
    { name:'aluminium', type:'conductor' },
    { name:'steel', type:'conductor' },
    { name:'plastic', type:'insulator' },
    { name:'rubber', type:'insulator' },
    { name:'wood', type:'insulator' },
  ];

  function genMaterialQuestion(rng){
    var pick = materials[Math.floor(rng()*materials.length)];
    var askConductor = rng() > 0.5;
    var correct = askConductor ? (pick.type === 'conductor') : (pick.type === 'insulator');
    var q = askConductor
      ? ('Is ' + pick.name + ' usually a conductor or an insulator?')
      : ('Is ' + pick.name + ' usually an insulator or a conductor?');

    var opts = askConductor ? ['Conductor','Insulator','Not sure'] : ['Insulator','Conductor','Not sure'];
    var a = correct ? 0 : 1;
    if (!askConductor) a = correct ? 0 : 1;

    return { id:'mat_' + pick.name + '_' + (askConductor?'c':'i'), tag:'Materials', min:20, max:150, q:q, opts:opts, a:a, hint:'Wires = conductors. Coatings = insulators.' };
  }

  function genCircuitQuestion(rng){
    var things = [
      { q:'A circuit with no breaks is called…', opts:['Closed','Open','Bendy'], a:0, hint:'It can work.' },
      { q:'A circuit with a break is called…', opts:['Open','Closed','Happy'], a:0, hint:'It won\'t work.' },
      { q:'A simple circuit often needs a power source like a…', opts:['Battery','Book','Biscuit'], a:0, hint:'Power source.' },
    ];
    var pick = things[Math.floor(rng()*things.length)];
    return { id:'gen_circuit_' + Math.floor(rng()*99999), tag:'Basics', min:1, max:120, q:pick.q, opts:pick.opts, a:pick.a, hint:pick.hint };
  }

  function buildQuestions(){
    var seed = (level * 1000) + (diffIndex * 100) + 17;
    var rng = mulberry32(seed);

    var allowed = pool.filter(function(q){ return complexity >= q.min && complexity <= q.max; });

    // Always sprinkle in a couple of generated questions for variety
    var picked = [];
    picked.push(genCircuitQuestion(rng));
    if (complexity >= 20) picked.push(genMaterialQuestion(rng));

    // Shuffle allowed
    for (var i = allowed.length - 1; i > 0; i--){
      var j = Math.floor(rng() * (i + 1));
      var tmp = allowed[i]; allowed[i] = allowed[j]; allowed[j] = tmp;
    }

    for (var k = 0; k < allowed.length && picked.length < total; k++){
      if (!picked.some(function(p){ return p.id === allowed[k].id; })) picked.push(allowed[k]);
    }

    // If pool is tiny, just repeat with new seed (rare)
    while (picked.length < total) picked.push(genCircuitQuestion(rng));

    return picked.slice(0, total);
  }

  // ---------- UI ----------
  var elDiff = document.getElementById('kzDiff');
  var elLevel = document.getElementById('kzLevel');
  var elLevelLabel = document.getElementById('kzLevelLabel');
  var elBest = document.getElementById('kzBest');

  var elTimer = document.getElementById('kzTimer');
  var elCar = document.getElementById('kzCar');

  var elStart = document.getElementById('kzStart');
  var elReset = document.getElementById('kzReset');
  var elGo = document.getElementById('kzGo');

  var elCount = document.getElementById('kzCount');
  var elQuestion = document.getElementById('kzQuestion');
  var elHint = document.getElementById('kzHint');
  var elTag = document.getElementById('kzTag');
  var elOpts = document.getElementById('kzOptions');
  var elFeedback = document.getElementById('kzFeedback');
  var elNext = document.getElementById('kzNext');

  var elSummary = document.getElementById('kzSummary');
  var elSumTitle = document.getElementById('kzSummaryTitle');
  var elSumText = document.getElementById('kzSummaryText');
  var elScore = document.getElementById('kzScore');
  var elRewards = document.getElementById('kzRewards');

  function updateBest(){
    var best = null;
    try { best = JSON.parse(localStorage.getItem(bestKey(diff, level)) || 'null'); } catch(e){ best = null; }
    if (!best) { elBest.textContent = 'Best: —'; return; }
    elBest.textContent = 'Best: ' + fmt(best.time) + ' (' + best.score + '/10)';
  }

  function setDiffButtons(){
    elDiff.querySelectorAll('[data-diff]').forEach(function(btn){
      btn.setAttribute('aria-pressed', btn.getAttribute('data-diff') === diff ? 'true' : 'false');
    });
  }

  function setLevelUI(){
    elLevel.value = String(level);
    elLevelLabel.textContent = String(level);
  }

  function setCar(ms){
    var target = 60000; // 60s target track
    var pct = clamp(ms / target, 0, 1);
    var left = 10 + Math.floor(pct * (elCar.parentElement.clientWidth - 60));
    elCar.style.left = left + 'px';
  }

  function tick(){
    if (!running) return;
    var ms = performance.now() - startTime;
    elTimer.textContent = fmt(ms);
    setCar(ms);
    raf = requestAnimationFrame(tick);
  }

  function renderQuestion(){
    elSummary.hidden = true;
    elRewards.hidden = true;
    elNext.hidden = true;
    elFeedback.textContent = '';
    elFeedback.className = 'text-sm text-slate-300';

    current = questions[qIndex];
    elCount.textContent = 'Question ' + (qIndex + 1) + ' of ' + total;
    elQuestion.textContent = current.q;
    elHint.textContent = current.hint || '';
    elTag.textContent = current.tag || 'Quiz';

    elOpts.innerHTML = '';
    current.opts.forEach(function(opt, i){
      var b = document.createElement('button');
      b.type = 'button';
      b.className = 'kz-opt';
      b.textContent = opt;
      b.addEventListener('click', function(){ choose(i); });
      elOpts.appendChild(b);
    });
  }

  function choose(i){
    if (!running) return;
    elOpts.querySelectorAll('button').forEach(function(b){ b.disabled = true; });

    var correct = (i === current.a);
    if (correct){
      score++;
      elFeedback.className = 'text-sm text-emerald-300';
      elFeedback.textContent = 'Correct ✅';
    } else {
      elFeedback.className = 'text-sm text-rose-300';
      elFeedback.textContent = 'Not quite — the answer was: ' + current.opts[current.a] + '.';
    }

    elNext.hidden = false;
  }

  function next(){
    if (!running) return;
    qIndex++;
    if (qIndex >= total){
      finish();
      return;
    }
    renderQuestion();
  }

  function start(){
    running = true;
    score = 0;
    qIndex = 0;
    questions = buildQuestions();

    elTimer.textContent = '00:00.0';
    elCar.style.left = '10px';

    startTime = performance.now();
    if (raf) cancelAnimationFrame(raf);
    tick();

    renderQuestion();
  }

  function reset(){
    running = false;
    if (raf) cancelAnimationFrame(raf);

    elTimer.textContent = '00:00.0';
    elCar.style.left = '10px';

    elCount.textContent = 'Question 1 of 10';
    elQuestion.textContent = 'Press Start to begin.';
    elHint.textContent = '';
    elTag.textContent = '—';
    elOpts.innerHTML = '';
    elFeedback.textContent = '';
    elNext.hidden = true;

    elSummary.hidden = true;
    elRewards.hidden = true;
  }

  function finish(){
    running = false;
    if (raf) cancelAnimationFrame(raf);

    var time = performance.now() - startTime;
    elTimer.textContent = fmt(time);
    setCar(time);

    var best = null;
    try { best = JSON.parse(localStorage.getItem(bestKey(diff, level)) || 'null'); } catch(e){ best = null; }

    var isPB = !best || (score > best.score) || (score === best.score && time < best.time);
    if (isPB) localStorage.setItem(bestKey(diff, level), JSON.stringify({ time: time, score: score }));

    updateBest();

    elSummary.hidden = false;
    elScore.textContent = String(score);
    elSumTitle.textContent = isPB ? '🎉 New personal best!' : '✅ Quiz complete!';
    elSumText.textContent = 'You scored ' + score + ' / ' + total + ' in ' + fmt(time) + '. ' + (isPB ? 'Reward unlocked below.' : 'Try again to beat your time!');

    elRewards.hidden = !isPB;
  }

  // ---------- events ----------
  setDiffButtons();
  setLevelUI();
  updateBest();

  elLevel.addEventListener('input', function(){
    level = clamp(parseInt(elLevel.value, 10) || 1, 1, 150);
    complexity = level + diffIndex * 40;
    elLevelLabel.textContent = String(level);
    updateBest();
  });

  elDiff.querySelectorAll('[data-diff]').forEach(function(btn){
    btn.addEventListener('click', function(){
      diff = btn.getAttribute('data-diff');
      diffIndex = { easy:0, medium:1, hard:2 }[diff];
      complexity = level + diffIndex * 40;
      setDiffButtons();
      updateBest();
    });
  });

  elGo.addEventListener('click', function(){
    var url = new URL(window.location.href);
    url.searchParams.set('difficulty', diff);
    url.searchParams.set('level', String(level));
    window.location.href = url.toString();
  });

  elStart.addEventListener('click', start);
  elReset.addEventListener('click', reset);
  elNext.addEventListener('click', next);

})();
</script>

<?php get_footer(); ?>
