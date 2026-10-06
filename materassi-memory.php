<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Materassi memory foam a Bari, Foggia e Andria | Hevea</title>
  <meta name="description" content="Materassi memory Hevea: accoglienza che si modella sul corpo, schiumati ad acqua traspiranti. Air Clean, Memory Sleep, Bugno Foam. Su misura con un esperto." />
  <link rel="canonical" href="https://www.heveamaterassi.it/materassi-memory.php" />
  <link rel="icon" href="assets/icons/favicon.ico" sizes="any" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/icon-32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/icon-16.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/icon-180.png" />
  <meta name="theme-color" content="#C8102E" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Hevea Materassi" />
  <meta property="og:locale" content="it_IT" />
  <meta property="og:url" content="https://www.heveamaterassi.it/materassi-memory.php" />
  <meta property="og:title" content="Materassi memory foam a Bari, Foggia e Andria | Hevea" />
  <meta property="og:description" content="Materassi memory Hevea: accoglienza che si modella sul corpo, schiumati ad acqua traspiranti. Air Clean, Memory Sleep, Bugno Foam. Su misura con un esperto." />
  <meta property="og:image" content="https://www.heveamaterassi.it/assets/icons/og-image.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Materassi memory foam a Bari, Foggia e Andria | Hevea" />
  <meta name="twitter:description" content="Materassi memory Hevea: accoglienza che si modella sul corpo, schiumati ad acqua traspiranti. Air Clean, Memory Sleep, Bugno Foam. Su misura con un esperto." />
  <meta name="twitter:image" content="https://www.heveamaterassi.it/assets/icons/og-image.png" />

    <?php include __DIR__ . '/partials/organization-jsonld.php'; ?>
    <?php include __DIR__ . '/partials/local-business-jsonld.php'; ?>

    <?php
    $breadcrumbs = [
    ['name' => 'Home', 'url' => 'https://www.heveamaterassi.it/'],
    ['name' => 'Materassi', 'url' => 'https://www.heveamaterassi.it/materassi.php'],
    ['name' => 'Memory', 'url' => 'https://www.heveamaterassi.it/materassi-memory.php']
    ];
    include __DIR__ . '/partials/breadcrumb-jsonld.php';
    ?>
  <link rel="stylesheet" href="fonts/fonts.css" />
  <link rel="stylesheet" href="assets/css/tailwind.css" />
  <style>
    html{scroll-behavior:smooth} body{font-family:'Raleway',system-ui,sans-serif;color:#2A211C;background:#FBF7F1}
    h1,h2,h3,.serif{font-family:'Lora',Georgia,serif}
    .container-x{max-width:72rem;margin:0 auto;padding-left:1.5rem;padding-right:1.5rem}
    .ph{position:relative;outline:2px dashed #C8102E;outline-offset:4px;border-radius:.5rem}
    .ph::before{content:"DA INSERIRE";position:absolute;top:-10px;left:10px;background:#C8102E;color:#fff;font-size:10px;font-weight:700;letter-spacing:.08em;padding:2px 8px;border-radius:999px;z-index:5;font-family:'Raleway',sans-serif}
  </style>
</head>
<body class="antialiased">

  <!-- NAVBAR -->
  <header class="sticky top-0 z-40 bg-hevea-cream/90 backdrop-blur border-b border-hevea-line">
    <div class="container-x flex items-center justify-between h-20">
      <a href="/" class="flex items-center" aria-label="Hevea, home">
        <img src="logo-horizontal.webp" alt="Hevea, dormiteci sopra" class="h-10 w-auto" width="210" height="40" />
      </a>

      <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-hevea-ink/80" aria-label="Navigazione principale">
        <a href="/" class="hover:text-hevea-red transition-colors duration-200">Home</a>
        <div class="relative" id="solDropdown">
          <button type="button" id="solTrigger" aria-expanded="false" aria-haspopup="true" class="inline-flex items-center gap-1 text-hevea-red font-semibold cursor-pointer" aria-current="page">Le nostre soluzioni
            <svg id="solChevron" class="w-3.5 h-3.5 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div id="solMenu" class="hidden absolute left-0 top-full pt-3 z-50">
            <div class="w-60 rounded-2xl border border-hevea-line bg-white shadow-card p-2">
              <a href="materassi.php" class="block rounded-xl px-3 py-2 font-semibold text-hevea-ink hover:bg-hevea-sand transition-colors">Materassi</a>
              <a href="materassi-lattice.php" class="block rounded-lg pl-6 pr-3 py-1.5 text-sm text-hevea-muted hover:text-hevea-red transition-colors">Lattice</a>
              <a href="materassi-memory.php" class="block rounded-lg pl-6 pr-3 py-1.5 text-sm text-hevea-muted hover:text-hevea-red transition-colors">Memory</a>
              <a href="materassi-molle.php" class="block rounded-lg pl-6 pr-3 py-1.5 text-sm text-hevea-muted hover:text-hevea-red transition-colors">Molle insacchettate</a>
            </div>
          </div>
        </div>
        <a href="/#fiducia" class="hover:text-hevea-red transition-colors duration-200">Chi siamo</a>
        <a href="/#showroom" class="hover:text-hevea-red transition-colors duration-200">Showroom</a>
        <a href="blog.php" class="hover:text-hevea-red transition-colors duration-200">Blog</a>
      </nav>
      <button id="menuBtn" class="md:hidden inline-flex items-center justify-center w-11 h-11 -mr-2 text-hevea-ink cursor-pointer" aria-label="Apri menu" aria-expanded="false" aria-controls="mobileMenu">
        <svg id="menuIconOpen" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
        <svg id="menuIconClose" class="w-7 h-7 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg>
      </button>

      <a href="#consulenza"
         class="hidden md:inline-flex items-center gap-2 rounded-full bg-hevea-red px-5 py-2.5 text-sm font-semibold text-white shadow-soft hover:bg-hevea-dark transition-colors duration-200 cursor-pointer">
        Scopri il tuo materasso
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </header>

  <!-- MENU MOBILE FULL-SCREEN -->
    <div id="mobileMenu" class="hidden translate-x-full transition-transform duration-300 ease-out flex-col fixed inset-0 z-[60] bg-white md:hidden">
      <!-- barra alto: logo + chiudi -->
      <div class="flex items-center justify-between h-20 px-6 border-b border-hevea-line shrink-0">
        <img loading="lazy" decoding="async" src="logo-horizontal.webp" alt="Hevea" class="h-9 w-auto" />
        <button type="button" id="menuClose" class="w-11 h-11 -mr-2 inline-flex items-center justify-center text-hevea-ink cursor-pointer" aria-label="Chiudi menu">
          <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg>
        </button>
      </div>
      <!-- contenuto scrollabile -->
      <div class="flex-1 overflow-hidden relative">
        <!-- pannello principale -->
        <nav id="menuMain" class="absolute inset-0 overflow-y-auto px-6 pt-2 pb-6 text-xl text-hevea-ink translate-x-0 transition-transform duration-300 ease-out" aria-label="Menu">
          <button type="button" data-drill="subMaterassi" class="flex items-center justify-between w-full py-4 text-left">Materassi
            <span class="flex items-center justify-center w-7 h-7 rounded-full bg-hevea-sand"><svg class="w-4 h-4 text-hevea-ink" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"/></svg></span>
          </button>
          <a href="/#fiducia" class="block py-3 mt-3 text-base text-hevea-muted">Chi siamo</a>
          <a href="/#showroom" class="block py-3 text-base text-hevea-muted">Showroom</a>
          <a href="blog.php" class="block py-3 text-base text-hevea-muted">Blog</a>
        </nav>
        <!-- sotto-pannello Materassi (drill) -->
        <nav id="subMaterassi" class="absolute inset-0 overflow-y-auto px-6 pt-2 pb-6 text-xl text-hevea-ink translate-x-full transition-transform duration-300 ease-out" aria-label="Materassi">
          <button type="button" data-back class="flex items-center gap-2 w-full py-4 text-left text-base font-medium text-hevea-muted"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 6l-6 6 6 6"/></svg> Materassi</button>
          <a href="materassi.php" class="block py-4 font-semibold">Tutti i materassi</a>
          <a href="materassi-lattice.php" class="block py-4">Lattice</a>
          <a href="materassi-memory.php" class="block py-4">Memory</a>
          <a href="materassi-molle.php" class="block py-4">Molle insacchettate</a>
        </nav>
      </div>
      <!-- barra CTA fissa in basso -->
      <a href="#consulenza" class="shrink-0 flex items-center justify-between gap-2 bg-hevea-ink text-white px-6 py-5 text-lg font-semibold">Scopri il tuo materasso
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>


  <main>
    <!-- breadcrumb -->
    <div class="container-x pt-8">
      <nav class="text-sm text-hevea-muted" aria-label="breadcrumb">
        <a href="materassi.php" class="hover:text-hevea-red transition-colors">Materassi</a>
        <span class="mx-2">/</span><span class="text-hevea-ink font-medium">Memory</span>
      </nav>
    </div>

    <!-- INTRO -->
    <section class="pt-8 pb-6 lg:pt-12">
      <div class="container-x">
        <p class="serif italic text-xl sm:text-2xl text-hevea-red leading-none">I nostri</p>
        <h1 class="mt-1 text-4xl sm:text-5xl leading-none text-hevea-ink">Materassi memory</h1>
        <p class="mt-5 max-w-2xl text-lg leading-relaxed text-hevea-muted">Accoglienza che si modella sul corpo. Memory e schiumati ad acqua, traspiranti.</p>
      </div>
    </section>

    <!-- GRIGLIA PRODOTTI (2-up) -->
    <section class="pt-2 pb-14">
      <div class="container-x">
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
          <a href="air-clean.php" class="group block rounded-2xl bg-white border border-hevea-line overflow-hidden shadow-soft hover:shadow-card hover:border-hevea-red/40 transition-all duration-200 cursor-pointer">
            <div class="aspect-[3/2] overflow-hidden"><img loading="lazy" decoding="async" src="air-clean-hero.webp" alt="Materasso Air Clean" class="w-full h-full object-cover" /></div>
            <div class="p-4 sm:p-5">
              <h3 class="text-lg sm:text-xl text-hevea-ink group-hover:text-hevea-red transition-colors duration-200">Air Clean</h3>
              <p class="mt-2 text-sm text-hevea-muted leading-relaxed">Super traspirante e fresco tutto l'anno.</p>
              <span class="mt-2 inline-flex items-center gap-1 text-sm font-semibold text-hevea-red group-hover:gap-2 transition-all duration-200">Scopri <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>
          <a href="memory-sleep.php" class="group block rounded-2xl bg-white border border-hevea-line overflow-hidden shadow-soft hover:shadow-card hover:border-hevea-red/40 transition-all duration-200 cursor-pointer">
            <div class="aspect-[3/2] overflow-hidden"><img loading="lazy" decoding="async" src="memory-sleep-hero.webp" alt="Materasso Memory Sleep" class="w-full h-full object-cover" /></div>
            <div class="p-4 sm:p-5">
              <h3 class="text-lg sm:text-xl text-hevea-ink group-hover:text-hevea-red transition-colors duration-200">Memory Sleep</h3>
              <p class="mt-2 text-sm text-hevea-muted leading-relaxed">Alte prestazioni in soli 22 cm.</p>
              <span class="mt-2 inline-flex items-center gap-1 text-sm font-semibold text-hevea-red group-hover:gap-2 transition-all duration-200">Scopri <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>
          <a href="bugno-foam.php" class="group block rounded-2xl bg-white border border-hevea-line overflow-hidden shadow-soft hover:shadow-card hover:border-hevea-red/40 transition-all duration-200 cursor-pointer">
            <div class="aspect-[3/2] overflow-hidden"><img loading="lazy" decoding="async" src="bugno-foam-hero.webp?v=4" alt="Materasso Bugno Foam" class="w-full h-full object-cover" /></div>
            <div class="p-4 sm:p-5">
              <h3 class="text-lg sm:text-xl text-hevea-ink group-hover:text-hevea-red transition-colors duration-200">Bugno Foam</h3>
              <p class="mt-2 text-sm text-hevea-muted leading-relaxed">Alte prestazioni, spesa davvero bassa.</p>
              <span class="mt-2 inline-flex items-center gap-1 text-sm font-semibold text-hevea-red group-hover:gap-2 transition-all duration-200">Scopri <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="py-16 lg:py-20">
      <div class="container-x">
        <div class="rounded-3xl bg-hevea-ink text-white px-8 py-14 sm:px-16 text-center">
          <h2 class="text-3xl sm:text-4xl leading-tight">Non sai se è il materasso giusto per te?</h2>
          <p class="mt-4 text-lg text-white/70 max-w-xl mx-auto">È normale: dipende da te. Rispondi a qualche domanda e te lo diciamo noi, poi lo provi in showroom.</p>
          <a href="#consulenza" class="mt-8 inline-flex items-center justify-center gap-2 rounded-full bg-hevea-red px-7 py-4 text-base font-semibold text-white hover:bg-hevea-dark transition-colors duration-200 cursor-pointer">Scopri il tuo materasso <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <section id="consulenza" class="py-10 lg:py-28 scroll-mt-24">
      <div class="container-x">
        <div class="relative overflow-hidden rounded-3xl bg-hevea-ink text-white px-6 py-8 sm:px-12 sm:py-14 lg:px-16 lg:py-20">
          <div aria-hidden="true" class="absolute -top-24 -right-24 h-72 w-72 rounded-full bg-hevea-red/30"></div>
          <div class="relative">
            <div class="text-left sm:text-center max-w-4xl mx-auto">
              <h2 class="text-2xl sm:text-4xl lg:text-5xl leading-tight"><span class="block">Non sai se il memory foam fa per te?</span><span class="block text-white/80 italic" style="text-wrap:balance">È normale.</span></h2>
              <p class="mt-4 text-white/70 max-w-xl sm:mx-auto">Fissa una consulenza, raccontaci come dormi, un esperto ti consiglierà il materasso giusto per te.</p>
            </div>

            <?php include __DIR__ . '/partials/form-consulenza.php'; ?>
          </div>
        </div>
      </div>
    </section>

  <footer class="bg-hevea-ink text-white/80">
    <div class="container-x py-16">
      <div class="grid lg:grid-cols-4 gap-10">
        <div class="lg:col-span-1"><img loading="lazy" decoding="async" src="logo-horizontal.webp" alt="Hevea, dormiteci sopra" class="h-12 w-auto bg-white rounded-xl px-4 py-3" /></div>
        <div><h3 class="text-sm font-semibold uppercase tracking-wide text-white mb-4">Showroom Bari</h3><p class="text-sm leading-relaxed text-white/70">Viale Papa Giovanni XXIII, 181<br>Bari (BA)<br><a href="tel:+390809146870" class="hover:text-white transition-colors">+39 080 914 6870</a><br><span class="text-white/45">Lun-Sab: 9:00-13:00, 16:30-20:30</span></p></div>
        <div><h3 class="text-sm font-semibold uppercase tracking-wide text-white mb-4">Showroom Foggia</h3><p class="text-sm leading-relaxed text-white/70">V.le Manfredi, 86<br>Foggia (FG)<br><a href="tel:+390881313073" class="hover:text-white transition-colors">+39 0881 313073</a><br><span class="text-white/45">Lun-Sab: 9:00-13:00, 16:30-20:30</span></p></div>
        <div><h3 class="text-sm font-semibold uppercase tracking-wide text-white mb-4">Showroom Andria</h3><p class="text-sm leading-relaxed text-white/70">Via Montegrappa, 117<br>Andria (BAT)<br><a href="tel:+390883253182" class="hover:text-white transition-colors">+39 0883 253182</a><br><span class="text-white/45">Lun-Sab: 9:00-13:00, 17:00-21:00</span></p></div>
      </div>
      <div class="mt-12 pt-8 border-t border-white/10"><p class="text-xs text-white/50">© 2026 Hevea: VE. MAT. srl · P.IVA IT07815390724 · Dispositivo medico CE · <a href="privacy.php" class="underline hover:text-white">Privacy Policy</a> · <a href="cookie-policy.php" class="underline hover:text-white">Cookie Policy</a> · <a href="#" class="lb-cs-settings-link underline hover:text-white">Preferenze cookie</a></p><p class="mt-1 text-xs text-white/50">Alcune immagini presenti nel sito sono generate o elaborate con intelligenza artificiale.</p></div>
    </div>
  </footer>
  <script>
    (function(){
      var b=document.getElementById('menuBtn'), m=document.getElementById('mobileMenu');
      var mc=document.getElementById('menuClose');
      var main=document.getElementById('menuMain'), sub=document.getElementById('subMaterassi');
      function resetPanels(){
        if(main){ main.classList.remove('-translate-x-full'); main.classList.add('translate-x-0'); }
        if(sub){ sub.classList.add('translate-x-full'); sub.classList.remove('translate-x-0'); }
      }
      function openM(){ if(!m) return; m.classList.remove('hidden'); m.classList.add('flex'); void m.offsetWidth; m.classList.remove('translate-x-full'); document.body.style.overflow='hidden'; if(b) b.setAttribute('aria-expanded','true'); }
      function closeM(){ if(!m) return; m.classList.add('translate-x-full'); document.body.style.overflow=''; if(b) b.setAttribute('aria-expanded','false');
        var onEnd=function(e){ if(e&&e.target!==m) return; m.classList.add('hidden'); m.classList.remove('flex'); resetPanels(); m.removeEventListener('transitionend', onEnd); };
        m.addEventListener('transitionend', onEnd);
      }
      if(b&&m){
        b.addEventListener('click', openM);
        if(mc) mc.addEventListener('click', closeM);
        m.querySelectorAll('[data-drill]').forEach(function(btn){ btn.addEventListener('click', function(){ var id=btn.getAttribute('data-drill'); if(main){ main.classList.add('-translate-x-full'); main.classList.remove('translate-x-0'); } var tg=document.getElementById(id); if(tg){ tg.classList.remove('translate-x-full'); tg.classList.add('translate-x-0'); } }); });
        m.querySelectorAll('[data-back]').forEach(function(btn){ btn.addEventListener('click', resetPanels); });
        m.querySelectorAll('a').forEach(function(a){ a.addEventListener('click', closeM); });
        document.addEventListener('keydown', function(e){ if(e.key==='Escape') closeM(); });
      }
      // desktop dropdown: click-toggle
      var dt=document.getElementById('solTrigger'), dm=document.getElementById('solMenu'), dc=document.getElementById('solChevron'), dd=document.getElementById('solDropdown');
      function dclose(){ if(dm){ dm.classList.add('hidden'); dt.setAttribute('aria-expanded','false'); if(dc) dc.style.transform=''; } }
      if(dt&&dm){
        dt.addEventListener('click', function(e){
          e.stopPropagation();
          var open=dm.classList.contains('hidden');
          dm.classList.toggle('hidden', !open);
          dt.setAttribute('aria-expanded', open?'true':'false');
          if(dc) dc.style.transform = open?'rotate(180deg)':'';
        });
        document.addEventListener('click', function(e){ if(!dm.classList.contains('hidden') && dd && !dd.contains(e.target)) dclose(); });
        document.addEventListener('keydown', function(e){ if(e.key==='Escape') dclose(); });
      }
    })();
  </script>
  <script src="assets/js/form-consulenza.js" defer></script>
  <script type="text/javascript" src="https://app.legalblink.it/api/scripts/lb_cs.js"></script>
  <script id="lb_cs" type="text/javascript">lb_cs("6a5983a02f46b500227e67e3");</script>
</body>
</html>
