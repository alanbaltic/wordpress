<?php
/*
Template Name: Kids Zone – Math Race
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
      <span class="inline-flex items-center rounded-full border border-emerald-500/40 bg-emerald-500/10 px-3 py-1 text-xs font-medium text-emerald-300">Math Race</span>
    </div>

    <h1 class="text-3xl md:text-4xl font-semibold tracking-tight">🏁 20‑Question Math Race</h1>
    <p class="text-sm text-slate-300 max-w-2xl mt-3">
      Addition + subtraction for around age 7. Beat your time, earn silly rewards, repeat.
    </p>
  </div>
</section>

<section class="bg-slate-950">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-14">

    <div class="grid md:grid-cols-3 gap-6">
      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h2 class="font-semibold text-lg mb-2">Choose difficulty</h2>
        <div class="flex flex-wrap gap-2" id="mrDiff">
          <button type="button" data-diff="easy" class="mr-btn">Easy</button>
          <button type="button" data-diff="medium" class="mr-btn">Medium</button>
          <button type="button" data-diff="hard" class="mr-btn">Hard</button>
        </div>
        <p class="text-xs text-slate-300 mt-3">Easy: numbers up to 20 • Medium: up to 50 • Hard: up to 100</p>
      </div>

      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h2 class="font-semibold text-lg mb-2">Timer</h2>
        <div class="flex items-center justify-between">
          <div class="text-3xl font-semibold tracking-tight" id="mrTimer">00:00.0</div>
          <div class="text-sm text-slate-300" id="mrBest">Best: —</div>
        </div>
        <div class="mt-4 kid-track" aria-hidden="true">
          <div class="kid-car" id="mrCar">🚗</div>
          <div class="kid-finish">🏁</div>
        </div>
        <p class="text-xs text-slate-400 mt-3">Tip: go steady. Accuracy first, then speed.</p>
      </div>

      <div class="hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
        <h2 class="font-semibold text-lg mb-2">Rewards if you beat your time</h2>
        <ul class="text-xs text-slate-300 space-y-2 list-disc list-inside">
          <li>Pick the next family game.</li>
          <li>Choose the dinner side (chips, salad, rice…).</li>
          <li>Extra 10 minutes bedtime story.</li>
          <li>Win a “Junior Maths Racer” badge (paper sticker).</li>
        </ul>
      </div>
    </div>

    <div class="mt-10 hover-card rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
      <div class="flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-xl font-semibold">Race</h2>
        <div class="flex flex-wrap gap-2">
          <button type="button" class="inline-flex items-center rounded-full bg-emerald-400 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-emerald-300 transition" id="mrStart">Start</button>
          <button type="button" class="inline-flex items-center rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200 hover:border-emerald-500/40 hover:text-emerald-300 transition" id="mrReset">Reset</button>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 gap-6 items-start">
        <div>
          <p class="text-sm text-slate-300" id="mrProgress">Press Start to begin.</p>

          <div class="mt-4 rounded-2xl border border-slate-800 bg-slate-950 p-5" id="mrQuestion" hidden>
            <div class="text-xs text-slate-400 mb-2" id="mrCount">Question 1 of 20</div>
            <div class="text-3xl font-semibold" id="mrPrompt">7 + 5 = ?</div>

            <div class="mt-4 flex gap-3">
              <input type="number" inputmode="numeric" class="w-40 rounded-xl border border-slate-700 bg-slate-900/50 px-4 py-3 text-lg text-slate-100 focus:outline-none focus:ring-2 focus:ring-emerald-500/40" id="mrAnswer" placeholder="Answer" />
              <button type="button" class="inline-flex items-center rounded-xl bg-emerald-400 px-5 py-3 text-sm font-semibold text-slate-950 hover:bg-emerald-300 transition" id="mrSubmit">Go</button>
            </div>

            <p class="mt-3 text-sm" id="mrFeedback" aria-live="polite"></p>
          </div>
        </div>

        <div class="rounded-2xl border border-slate-800 bg-slate-950 p-5">
          <h3 class="font-semibold mb-2">How it works</h3>
          <ul class="text-xs text-slate-300 space-y-2 list-disc list-inside">
            <li>20 questions: addition and subtraction mixed.</li>
            <li>Your timer starts when the first question appears.</li>
            <li>Finish all 20 with good accuracy — then try to beat your time.</li>
          </ul>
          <div class="mt-4">
            <p class="text-xs text-slate-400">Pro tip: If you get stuck, skip the stress — try a slower round and beat your time next go.</p>
          </div>
        </div>
      </div>

      <div class="mt-6" id="mrSummary" hidden>
        <div class="rounded-2xl border border-emerald-500/30 bg-emerald-500/10 p-5">
          <p class="text-sm font-semibold" id="mrSummaryTitle">Nice!</p>
          <p class="text-sm text-slate-200" id="mrSummaryText"></p>
        </div>
      </div>

    </div>

  </div>
</section>

<style>
  .mr-btn{
    display:inline-flex; align-items:center; justify-content:center;
    border-radius:9999px; padding:.5rem 1rem;
    border:1px solid rgba(51,65,85,1);
    background:rgba(15,23,42,.45);
    color:rgba(226,232,240,1);
    font-size:.875rem;
    transition:transform 150ms ease, border-color 150ms ease, background-color 150ms ease;
  }
  .mr-btn:hover{ transform:translateY(-1px); border-color:rgba(52,171,73,.5); }
  .mr-btn[aria-pressed="true"]{ background:rgba(52,171,73,.15); border-color:rgba(52,171,73,.55); color:rgba(187,247,208,1); }

  .kid-track{ position:relative; height:56px; border-radius:9999px; border:1px solid rgba(51,65,85,1); background:linear-gradient(90deg, rgba(15,23,42,.8), rgba(2,6,23,.8)); overflow:hidden; }
  .kid-car{ position:absolute; left:10px; top:50%; transform:translateY(-50%); font-size:28px; transition:left 80ms linear; }
  .kid-finish{ position:absolute; right:12px; top:50%; transform:translateY(-50%); font-size:22px; }
</style>

<script>
(function(){
  var diff = 'easy';
  var total = 20;
  var idx = 0;
  var startTime = null;
  var raf = null;
  var running = false;
  var correct = 0;
  var current = null;

  var elTimer = document.getElementById('mrTimer');
  var elBest = document.getElementById('mrBest');
  var elCar = document.getElementById('mrCar');
  var elStart = document.getElementById('mrStart');
  var elReset = document.getElementById('mrReset');
  var elProg = document.getElementById('mrProgress');
  var elBox = document.getElementById('mrQuestion');
  var elCount = document.getElementById('mrCount');
  var elPrompt = document.getElementById('mrPrompt');
  var elAns = document.getElementById('mrAnswer');
  var elSubmit = document.getElementById('mrSubmit');
  var elFb = document.getElementById('mrFeedback');
  var elSummary = document.getElementById('mrSummary');
  var elSumTitle = document.getElementById('mrSummaryTitle');
  var elSumText = document.getElementById('mrSummaryText');

  function fmt(ms){
    var s = ms/1000;
    var m = Math.floor(s/60);
    var r = s - m*60;
    var sec = Math.floor(r);
    var d = Math.floor((r-sec)*10);
    return String(m).padStart(2,'0') + ':' + String(sec).padStart(2,'0') + '.' + String(d);
  }

  function bestKey(){ return 'balticMathRaceBest:' + diff; }
  function loadBest(){
    var v = localStorage.getItem(bestKey());
    if (!v){ elBest.textContent = 'Best: —'; return; }
    try {
      var data = JSON.parse(v);
      elBest.textContent = 'Best: ' + fmt(data.time) + ' (' + data.correct + '/' + total + ')';
    } catch(e){ elBest.textContent = 'Best: —'; }
  }

  function setDiff(newDiff){
    diff = newDiff;
    document.querySelectorAll('#mrDiff [data-diff]').forEach(function(b){
      b.setAttribute('aria-pressed', b.getAttribute('data-diff')===diff ? 'true' : 'false');
    });
    loadBest();
  }

  document.querySelectorAll('#mrDiff [data-diff]').forEach(function(btn){
    btn.addEventListener('click', function(){ setDiff(btn.getAttribute('data-diff')); });
  });
  setDiff('easy');

  function randInt(min, max){ return Math.floor(Math.random()*(max-min+1))+min; }

  function makeQuestion(){
    var max;
    if (diff==='easy') max = 20;
    else if (diff==='medium') max = 50;
    else max = 100;

    var add = Math.random() < 0.55; // slightly more addition
    var a = randInt(0, max);
    var b = randInt(0, max);

    if (!add){
      // Keep it friendly (no negatives) by ordering.
      var hi = Math.max(a,b), lo = Math.min(a,b);
      a = hi; b = lo;
    }

    return {
      a: a,
      b: b,
      op: add ? '+' : '-',
      ans: add ? (a+b) : (a-b)
    };
  }

  function setCar(elapsedMs){
    // Target time is just a fun guide (not a limit).
    var target = diff==='easy' ? 90000 : diff==='medium' ? 120000 : 150000;
    var pct = Math.max(0, Math.min(1, elapsedMs/target));
    var track = elCar.parentElement;
    var leftMin = 10;
    var leftMax = track.clientWidth - 60;
    elCar.style.left = (leftMin + (leftMax-leftMin)*pct) + 'px';
  }

  function tick(){
    if (!running) return;
    var now = performance.now();
    var elapsed = now - startTime;
    elTimer.textContent = fmt(elapsed);
    setCar(elapsed);
    raf = requestAnimationFrame(tick);
  }

  function showQ(){
    elSummary.hidden = true;
    elBox.hidden = false;
    elFb.textContent = '';
    elAns.value = '';
    elAns.focus();

    current = makeQuestion();
    elCount.textContent = 'Question ' + (idx+1) + ' of ' + total;
    elPrompt.textContent = current.a + ' ' + current.op + ' ' + current.b + ' = ?';
    elProg.textContent = 'Go! Answer as fast as you can — but keep it accurate.';
  }

  function start(){
    if (running) return;
    idx = 0; correct = 0;
    running = true;
    startTime = performance.now();
    elTimer.textContent = '00:00.0';
    elCar.style.left = '10px';
    showQ();
    if (raf) cancelAnimationFrame(raf);
    tick();
  }

  function finish(){
    running = false;
    if (raf) cancelAnimationFrame(raf);
    var time = performance.now() - startTime;
    elTimer.textContent = fmt(time);
    setCar(time);

    var best = null;
    try { best = JSON.parse(localStorage.getItem(bestKey()) || 'null'); } catch(e){ best = null; }

    var isPB = !best || (correct > best.correct) || (correct === best.correct && time < best.time);
    if (isPB) {
      localStorage.setItem(bestKey(), JSON.stringify({ time: time, correct: correct }));
      loadBest();
    }

    elBox.hidden = true;
    elSummary.hidden = false;

    var title = isPB ? '🎉 New personal best!' : '✅ Race complete!';
    var msg = 'You got ' + correct + ' / ' + total + ' correct in ' + fmt(time) + '.';
    if (isPB) msg += ' Reward unlocked: pick one fun treat from the list above!';
    else msg += ' Try again and beat your best!';

    elSumTitle.textContent = title;
    elSumText.textContent = msg;
    elProg.textContent = 'Nice work. Want another round?';
  }

  function submit(){
    if (!running) return;
    var val = elAns.value;
    if (val === '' || val === null) return;
    var n = Number(val);
    var ok = (n === current.ans);
    if (ok) {
      correct++;
      elFb.className = 'mt-3 text-sm text-emerald-300';
      elFb.textContent = 'Correct ✅';
    } else {
      elFb.className = 'mt-3 text-sm text-rose-300';
      elFb.textContent = 'Close! The answer was ' + current.ans + '.';
    }

    idx++;
    if (idx >= total) {
      setTimeout(finish, 350);
    } else {
      setTimeout(showQ, 300);
    }
  }

  elStart.addEventListener('click', start);
  elReset.addEventListener('click', function(){
    running = false;
    if (raf) cancelAnimationFrame(raf);
    idx = 0; correct = 0;
    elTimer.textContent = '00:00.0';
    elCar.style.left = '10px';
    elBox.hidden = true;
    elSummary.hidden = true;
    elProg.textContent = 'Press Start to begin.';
  });
  elSubmit.addEventListener('click', submit);
  elAns.addEventListener('keydown', function(e){ if (e.key === 'Enter') submit(); });

  loadBest();
})();
</script>

<?php get_footer(); ?>
