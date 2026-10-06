<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Materassi personalizzati a Bari, Foggia e Andria | Hevea Materassi</title>
  <meta name="description" content="Non compri un materasso a caso: capiamo come dormi e ti diciamo qual è quello giusto per te. Dispositivo medico detraibile. Showroom a Bari, Foggia e Andria." />
  <link rel="canonical" href="https://www.heveamaterassi.it/" />
  <link rel="preload" as="image" href="hero-home.webp" fetchpriority="high" />
  <link rel="icon" href="assets/icons/favicon.ico" sizes="any" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/icon-32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/icon-16.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/icon-180.png" />
  <meta name="theme-color" content="#C8102E" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Hevea Materassi" />
  <meta property="og:locale" content="it_IT" />
  <meta property="og:url" content="https://www.heveamaterassi.it/" />
  <meta property="og:title" content="Materassi personalizzati a Bari, Foggia e Andria | Hevea Materassi" />
  <meta property="og:description" content="Non compri un materasso a caso: capiamo come dormi e ti diciamo qual è quello giusto per te. Dispositivo medico detraibile. Showroom a Bari, Foggia e Andria." />
  <meta property="og:image" content="https://www.heveamaterassi.it/assets/icons/og-image.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Materassi personalizzati a Bari, Foggia e Andria | Hevea Materassi" />
  <meta name="twitter:description" content="Non compri un materasso a caso: capiamo come dormi e ti diciamo qual è quello giusto per te. Dispositivo medico detraibile. Showroom a Bari, Foggia e Andria." />
  <meta name="twitter:image" content="https://www.heveamaterassi.it/assets/icons/og-image.png" />

    <?php include __DIR__ . '/partials/organization-jsonld.php'; ?>
    <?php include __DIR__ . '/partials/local-business-jsonld.php'; ?>
    <?php include __DIR__ . '/partials/home-faq-jsonld.php'; ?>

  <!-- Font in locale: Lora (serif, titoli) + Raleway (sans, testo) -->
  <link rel="stylesheet" href="fonts/fonts.css" />

  <!-- Tailwind (build compilata, purgata) -->
  <link rel="stylesheet" href="assets/css/tailwind.css" />

  <style>
    html { scroll-behavior: smooth; }
    body { font-family: 'Raleway', system-ui, sans-serif; color: #2A211C; background: #FBF7F1; }
    h1,h2,h3,.serif { font-family: 'Lora', Georgia, serif; }
    .container-x { max-width: 72rem; margin-left:auto; margin-right:auto; padding-left:1.5rem; padding-right:1.5rem; }

    /* Marcatore PLACEHOLDER, contenuto in attesa di materiale reale dal cliente */
    .ph { position: relative; outline: 2px dashed #C8102E; outline-offset: 4px; border-radius: 0.5rem; }
    .ph::before {
      content: "DA INSERIRE";
      position: absolute; top: -10px; left: 10px;
      background: #C8102E; color: #fff; font-size: 10px; font-weight: 700;
      letter-spacing: .08em; padding: 2px 8px; border-radius: 999px; z-index: 5;
      font-family: 'Raleway', sans-serif;
    }
    .ph-note { color:#C8102E; font-size:.72rem; font-weight:600; letter-spacing:.03em; }

    /* Omino annotato: sagoma + pill/frecce, fade ipersoft al reveal */
    .omino-wrap { position: relative; }
    .omino-leader { fill:none; stroke:#C8102E; stroke-width:2; stroke-linecap:round; opacity:0; vector-effect:non-scaling-stroke; transition: opacity 1.1s ease; }
    .omino-dot { fill:#C8102E; opacity:0; filter:drop-shadow(0 1px 2px rgba(42,33,28,0.35)); transition: opacity 1.1s ease; }
    .omino-pill {
      position:absolute; display:inline-flex; align-items:center; gap:.5rem;
      background:#fff; border:1px solid #E7DCD0; border-radius:999px;
      padding:.45rem .85rem; font-size:12.5px; font-weight:600; color:#2A211C;
      box-shadow:0 10px 30px -12px rgba(42,33,28,0.18);
      white-space:nowrap; transform:translate(-50%,0); font-family:'Raleway',sans-serif;
      opacity:0; transition: opacity 1.1s ease;
    }
    .omino-pill-dot { width:7px; height:7px; border-radius:999px; background:#C8102E; flex:none; }

    .reveal.in .omino-leader { opacity:.8; }
    .reveal.in .omino-dot { opacity:1; }
    .reveal.in .omino-pill { opacity:1; }
    .reveal.in .og2 .omino-leader, .reveal.in .og2 .omino-dot { transition-delay:.08s; }
    .reveal.in .og3 .omino-leader, .reveal.in .og3 .omino-dot { transition-delay:.16s; }
    .reveal.in .og4 .omino-leader, .reveal.in .og4 .omino-dot { transition-delay:.24s; }
    .reveal.in .omino-p2 { transition-delay:.08s; }
    .reveal.in .omino-p3 { transition-delay:.16s; }
    .reveal.in .omino-p4 { transition-delay:.24s; }

    @media (prefers-reduced-motion: no-preference) {
      .reveal { opacity: 0; transform: translateY(14px); transition: opacity .6s ease, transform .6s ease; }
      .reveal.in { opacity: 1; transform: none; }
    }

    /* Sotto lg la colonna non ha piu il margine laterale: la pill di sinistra
       si ancora col bordo al punto invece che col centro, altrimenti esce dallo schermo. */
    .omino-p1 { transform: translate(0, 0); }
    .omino-p3 { transform: translate(-100%, 0); }
    .omino-p2 { transform: translate(0, 0); }

    /* Carosello recensioni: auto-scroll orizzontale lento e continuo */
    @keyframes hevea-marquee { from { transform: translate3d(0,0,0); } to { transform: translate3d(-50%,0,0); } }
    .marquee-track { width: max-content; }
    /* Auto-scroll SOLO da desktop (c'è l'hover per fermarlo). Su mobile: swipe manuale. */
    @media (min-width: 1024px) {
      .marquee-track { animation: hevea-marquee 50s linear infinite; will-change: transform; }
      .marquee-track:hover { animation-play-state: paused; }
    }
    @media (prefers-reduced-motion: reduce) { .marquee-track { animation: none; } }
    /* Nasconde la scrollbar del carosello touch mantenendo lo scroll */
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .no-scrollbar::-webkit-scrollbar { display: none; }
  </style>
</head>

<body class="antialiased">

  <!-- ================= NAVBAR ================= -->
  <header class="sticky top-0 z-40 bg-hevea-cream/90 backdrop-blur border-b border-hevea-line">
    <div class="container-x flex items-center justify-between h-16 sm:h-20">
      <a href="#top" class="flex items-center" aria-label="Hevea, home">
        <img src="logo-horizontal.webp" alt="Hevea, dormiteci sopra" class="h-9 sm:h-10 w-auto" width="210" height="40" />
      </a>

      <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-hevea-ink/80" aria-label="Navigazione principale">
        <a href="/" class="text-hevea-red font-semibold" aria-current="page">Home</a>
        <div class="relative" id="solDropdown">
          <button type="button" id="solTrigger" aria-expanded="false" aria-haspopup="true" class="inline-flex items-center gap-1 hover:text-hevea-red transition-colors duration-200 cursor-pointer">Le nostre soluzioni
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
        <a href="#fiducia" class="hover:text-hevea-red transition-colors duration-200">Chi siamo</a>
        <a href="#showroom" class="hover:text-hevea-red transition-colors duration-200">Showroom</a>
        <a href="blog.php" class="hover:text-hevea-red transition-colors duration-200">Blog</a>      </nav>
        <button id="menuBtn" class="md:hidden inline-flex items-center justify-center w-11 h-11 -mr-2 text-hevea-ink cursor-pointer" aria-label="Apri menu" aria-expanded="false" aria-controls="mobileMenu">
          <svg id="menuIconOpen" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
          <svg id="menuIconClose" class="w-7 h-7 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg>
        </button>

      <a href="#consulenza"
         class="hidden md:inline-flex items-center gap-2 rounded-full bg-hevea-red px-5 py-2.5 text-sm font-semibold text-white hover:bg-hevea-dark transition-colors duration-200 cursor-pointer">
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

  <main id="top">

    <!-- ================= 1. HERO ================= -->
    <section class="relative overflow-hidden">
      <!-- onda decorativa di sfondo (richiama il logo) -->
      <div aria-hidden="true" class="absolute inset-0 -z-10">
        <div class="absolute -top-20 -right-24 h-72 w-72 rounded-full bg-hevea-sand opacity-50 md:opacity-100 md:-top-32 md:-right-40 md:h-[34rem] md:w-[34rem]"></div>
        <div class="absolute top-24 -right-24 h-72 w-72 rounded-full bg-hevea-red/5 hidden md:block"></div>
      </div>

      <div class="container-x grid lg:grid-cols-2 gap-8 lg:gap-12 items-center py-8 sm:py-12 lg:py-20">
        <div>
          <h1 class="text-xs font-semibold uppercase tracking-widest text-hevea-muted/80">
            Materassi a Bari, Foggia e Andria
          </h1>
          <p class="mt-3 sm:mt-4 text-[2rem] sm:text-[2.6rem] lg:text-[2.6rem] leading-[1.1] font-semibold text-hevea-ink serif" style="text-wrap: balance">
            Scegliere un materasso è difficile.
          </p>
          <p class="mt-2 text-[1.5rem] sm:text-[1.6rem] lg:text-[1.6rem] leading-[1.25] text-hevea-red italic serif max-w-xl" style="text-wrap: balance">
            Quello che va bene a un altro può non andare bene a te.
          </p>

          <p class="mt-5 sm:mt-6 text-base sm:text-lg leading-relaxed text-hevea-muted max-w-xl">
            Per questo partiamo analizzando come dormi, quanto pesi, se hai problemi fisici. E solo quando il quadro è chiaro, ti diciamo qual è il materasso giusto per te, e ti spieghiamo perché.
          </p>

          <div class="mt-7 sm:mt-9 flex flex-col items-center">
            <a href="#consulenza"
               class="inline-flex items-center justify-center gap-2 rounded-full bg-hevea-red px-6 py-3 text-[15px] font-semibold text-white hover:bg-hevea-dark transition-colors duration-200 cursor-pointer">
              Scopri il tuo materasso
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
            <p class="mt-3 text-xs text-hevea-muted text-center">Consulenza gratuita e senza impegno · <span class="text-hevea-red">★</span> <span class="font-semibold text-hevea-ink">4,7</span> su Google</p>
          </div>
        </div>

        <!-- Visual hero -->
        <div>
          <img src="hero-home.webp" alt="Consulente del riposo che spiega a un cliente le differenze tra i materiali dei materassi per fargli prendere una scelta consapevole e logica" fetchpriority="high" width="1600" height="1200" class="aspect-[4/3] lg:aspect-[4/3] w-full rounded-3xl object-cover" />
        </div>
      </div>

    </section>

    <!-- ================= 2. ALLINEAMENTO ================= -->
    <section class="py-10 lg:py-28 bg-hevea-sand">
      <div class="container-x grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
        <!-- grafica SX (solo desktop, mobile resta testo puro) -->
        <div class="reveal order-2 lg:order-1">
          <div class="relative w-full rounded-3xl overflow-hidden bg-hevea-cream border border-hevea-line shadow-soft">
            <img loading="lazy" decoding="async" src="scelta-classica-materasso.webp" alt="Un uomo pensieroso, con la mano al mento, osserva indeciso le tante file di materassi in uno showroom" class="w-full h-auto block" />
          </div>
        </div>
        <!-- testo DX (centrato su mobile, a sinistra-colonna su desktop) -->
        <div class="reveal order-1 lg:order-2 text-left">
          <p class="text-sm font-semibold uppercase tracking-widest text-hevea-red">Come si sceglie, di solito</p>
          <h2 class="mt-4 text-[1.75rem] sm:text-4xl leading-tight text-hevea-ink">
            Comprare un materasso è una scommessa.
          </h2>

          <ul class="mt-6 space-y-3 text-base sm:text-lg leading-relaxed text-hevea-muted">
            <li class="flex gap-3">
              <span class="mt-[0.6em] w-1.5 h-1.5 rounded-full bg-hevea-red shrink-0"></span>
              <span>Chiedi a chi si è trovato bene, ma è il suo corpo, non il tuo.</span>
            </li>
            <li class="flex gap-3">
              <span class="mt-[0.6em] w-1.5 h-1.5 rounded-full bg-hevea-red shrink-0"></span>
              <span>Leggi le recensioni, ma nessuno scrive davvero quanto pesa o come dorme.</span>
            </li>
            <li class="flex gap-3">
              <span class="mt-[0.6em] w-1.5 h-1.5 rounded-full bg-hevea-red shrink-0"></span>
              <span>Vai in negozio e lo provi, ma per pochi minuti, da sveglio e vestito.</span>
            </li>
          </ul>

          <p class="mt-6 text-base sm:text-lg leading-relaxed font-semibold text-hevea-ink">
            Nessuna ti dice come starà il tuo corpo dopo otto ore.
          </p>

          <p class="mt-4 text-base sm:text-lg leading-relaxed text-hevea-muted">
            Se hai scelto male lo senti. Ma a un materasso nuovo ci si abitua, dicono, quindi aspetti. Aspetti, e non succede. Ormai è tuo.
          </p>
        </div>
      </div>
    </section>

    <!-- ================= 3. SOTTOSTANTE + DOLORE ================= -->
    <section class="py-10 lg:py-28">
      <div class="container-x grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
        <div class="reveal order-2 lg:pl-10 flex flex-col justify-center">
          <div class="omino-wrap aspect-square w-full">
            <img loading="lazy" decoding="async" src="sagoma-omino.webp" alt="Sagoma di una persona sdraiata di fianco su un materasso, con annotati i punti che contano per scegliere il materasso giusto: peso, posizione, distanza collo-spalla, larghezza bacino" class="absolute inset-0 w-full h-full object-contain" width="1400" height="1400" />
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
              <g class="og1"><path class="omino-leader" d="M 5 12.7 C 3.5 26, 4.5 40, 23 46"/><circle class="omino-dot" cx="23" cy="46" r="0.9"/></g>
              <g class="og2"><path class="omino-leader" d="M 31.7 30.7 C 31.8 34.5, 31.9 38.3, 32 42"/><circle class="omino-dot" cx="32" cy="42" r="0.9"/></g>
              <g class="og3"><path class="omino-leader" d="M 79.7 12.7 C 76.1 23.1, 65.3 34.6, 54 45"/><circle class="omino-dot" cx="54" cy="45" r="0.9"/></g>
              <g class="og4"><path class="omino-leader" d="M 46 88 C 46.3 77.6, 48.6 66.4, 54 58"/><circle class="omino-dot" cx="54" cy="58" r="0.9"/></g>
            </svg>
            <div class="omino-pill omino-p1" style="left:0%; top:2%;">Distanza collo-spalla</div>
            <div class="omino-pill omino-p2" style="left:12%; top:20%;">Larghezza spalla</div>
            <div class="omino-pill omino-p3" style="left:100%; top:2%;">Larghezza bacino</div>
            <div class="omino-pill omino-p4" style="left:46%; top:88%;">Peso e altezza</div>
          </div>
          <p class="mt-2 text-center text-sm text-hevea-muted">…e altre ancora.</p>
        </div>
        <div class="reveal order-1">
          <p class="text-sm font-semibold uppercase tracking-widest text-hevea-red">Cosa conta davvero</p>
          <h2 class="mt-4 text-[1.75rem] sm:text-4xl leading-tight text-hevea-ink">
            Un materasso non si sceglie a sensazione. Si misura.
          </h2>
          <p class="mt-6 text-base sm:text-lg leading-relaxed text-hevea-muted">
            Tre cose decidono se un materasso è giusto per te: quanto ti sostiene, quanto si adatta alla tua forma, quanto regge nel tempo. In tecnico: portanza, elasticità, densità.
          </p>
          <p class="mt-4 text-base sm:text-lg leading-relaxed text-hevea-muted">
            Non si scelgono a occhio. Si calcolano dalle tue caratteristiche fisiche e dai problemi che hai.
          </p>
          
        </div>
      </div>
    </section>

    <!-- ================= 4. IL METODO ================= -->
    <section id="metodo" class="py-10 lg:py-28 bg-hevea-sand">
      <div class="container-x">
        <div class="max-w-2xl reveal">
          <p class="text-sm font-semibold uppercase tracking-widest text-hevea-red">La soluzione</p>
          <h2 class="mt-4 text-[1.75rem] sm:text-4xl leading-tight text-hevea-ink">
            Per questo nasce il metodo Hevea.
          </h2>
          <p class="mt-6 text-base sm:text-lg leading-relaxed text-hevea-muted">
            Lo usiamo da venticinque anni, in tre showroom tra Bari, Foggia e Andria. Funziona così.
          </p>
        </div>

        <!-- I 4 passi del metodo -->
        <!-- MOBILE: timeline verticale -->
        <ol class="mt-8 lg:hidden relative pl-2">
          <li class="reveal relative flex gap-5 pb-8">
            <span aria-hidden="true" class="absolute left-[18px] top-10 bottom-0 w-px bg-hevea-line"></span>
            <div class="relative z-10 -mt-1 flex items-center justify-center w-9 h-9 shrink-0 rounded-full bg-white border-2 border-hevea-red text-hevea-red font-bold serif text-base">1</div>
            <div class="pt-1">
              <h3 class="text-lg text-hevea-ink leading-tight">Analizziamo</h3>
              <p class="mt-1.5 text-base text-hevea-muted leading-relaxed">Che materasso hai ora, che problemi ti dà, perché lo cambi. Poi le misure: peso, posizione, schiena.</p>
            </div>
          </li>
          <li class="reveal relative flex gap-5 pb-8">
            <span aria-hidden="true" class="absolute left-[18px] top-10 bottom-0 w-px bg-hevea-line"></span>
            <div class="relative z-10 -mt-1 flex items-center justify-center w-9 h-9 shrink-0 rounded-full bg-white border-2 border-hevea-red text-hevea-red font-bold serif text-base">2</div>
            <div class="pt-1">
              <h3 class="text-lg text-hevea-ink leading-tight">Selezioniamo</h3>
              <p class="mt-1.5 text-base text-hevea-muted leading-relaxed">L'analisi dà una risposta sola: di cosa ha bisogno il tuo corpo. Poi ti mostriamo i modelli che ci arrivano, e cosa cambia tra uno e l'altro.</p>
            </div>
          </li>
          <li class="reveal relative flex gap-5 pb-9">
            <span aria-hidden="true" class="absolute left-[18px] top-10 bottom-2 w-px bg-hevea-line"></span>
            <div class="relative z-10 -mt-1 flex items-center justify-center w-9 h-9 shrink-0 rounded-full bg-white border-2 border-hevea-red text-hevea-red font-bold serif text-base">3</div>
            <div class="pt-1">
              <h3 class="text-lg text-hevea-ink leading-tight">Adattiamo</h3>
              <p class="mt-1.5 text-base text-hevea-muted leading-relaxed">Sul modello che scegli tariamo densità e portanza, per costruirlo intorno al tuo corpo.</p>
            </div>
          </li>
          <li class="reveal relative flex gap-5">
            <div class="relative z-10 -mt-1 flex items-center justify-center w-9 h-9 shrink-0 rounded-full bg-hevea-red text-white font-bold serif text-base shadow-card">4</div>
            <div>
              <h3 class="text-lg text-hevea-red leading-tight">Monitoriamo</h3>
              <p class="mt-1.5 text-base text-hevea-muted leading-relaxed">Restiamo in contatto. Se qualcosa non va, per un anno modelliamo il materasso finché non è giusto, <strong class="text-hevea-ink font-semibold">gratis</strong>.</p>
            </div>
          </li>
        </ol>

        <!-- DESKTOP: 4 card in riga -->
        <div class="mt-14 hidden lg:grid grid-cols-4 gap-4">
          <div class="reveal relative rounded-2xl border border-hevea-line bg-white p-6 shadow-soft">
            <div class="absolute -top-3 -left-3 flex items-center justify-center w-10 h-10 rounded-full bg-hevea-red text-white font-bold serif text-lg shadow-card">1</div>
            <h3 class="text-lg text-hevea-ink">Analizziamo</h3>
            <p class="mt-3 text-sm text-hevea-muted leading-relaxed">Che materasso hai ora, che problemi ti dà, perché lo cambi. Poi le misure: peso, posizione, schiena.</p>
          </div>
          <div class="reveal relative rounded-2xl border border-hevea-line bg-white p-6 shadow-soft">
            <div class="absolute -top-3 -left-3 flex items-center justify-center w-10 h-10 rounded-full bg-hevea-red text-white font-bold serif text-lg shadow-card">2</div>
            <h3 class="text-lg text-hevea-ink">Selezioniamo</h3>
            <p class="mt-3 text-sm text-hevea-muted leading-relaxed">L'analisi dà una risposta sola: di cosa ha bisogno il tuo corpo. Poi ti mostriamo i modelli che ci arrivano, e cosa cambia tra uno e l'altro.</p>
          </div>
          <div class="reveal relative rounded-2xl border border-hevea-line bg-white p-6 shadow-soft">
            <div class="absolute -top-3 -left-3 flex items-center justify-center w-10 h-10 rounded-full bg-hevea-red text-white font-bold serif text-lg shadow-card">3</div>
            <h3 class="text-lg text-hevea-ink">Adattiamo</h3>
            <p class="mt-3 text-sm text-hevea-muted leading-relaxed">Sul modello che scegli tariamo densità e portanza, per costruirlo intorno al tuo corpo.</p>
          </div>
          <div class="reveal relative rounded-2xl border-2 border-hevea-red/30 bg-white p-6 shadow-soft">
            <div class="absolute -top-3 -left-3 flex items-center justify-center w-10 h-10 rounded-full bg-hevea-red text-white font-bold serif text-lg shadow-card">4</div>
            <h3 class="text-lg text-hevea-ink">Monitoriamo</h3>
            <p class="mt-3 text-sm text-hevea-muted leading-relaxed">Restiamo in contatto. Se qualcosa non va, per un anno modelliamo il materasso finché non è giusto, <strong class="text-hevea-ink font-semibold">gratis</strong>.</p>
          </div>
        </div>

        <div class="max-w-2xl mt-12 reveal">
          <p class="text-base sm:text-lg leading-relaxed text-hevea-muted">
            E lo facciamo <strong class="text-hevea-ink font-semibold">per ogni budget</strong>: dormire bene è un diritto, non un lusso.
          </p>
        </div>

        <div class="mt-10 text-center reveal">
          <a href="#consulenza"
             class="inline-flex items-center justify-center gap-2 rounded-full bg-hevea-red px-6 py-3 text-[15px] font-semibold text-white hover:bg-hevea-dark transition-colors duration-200 cursor-pointer">
            Scopri il tuo materasso
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- ================= 5. PERCHÉ FIDARTI (Expertise + Prova) ================= -->
    <section id="fiducia" class="pt-16 pb-10 lg:py-28">
      <div class="container-x">
        <div class="max-w-2xl reveal">
          <h2 class="text-3xl sm:text-4xl leading-tight text-hevea-ink">Chi ti dice qual è il tuo materasso.</h2>
        </div>

        <!-- Expertise: Saverio -->
        <div class="mt-12 grid lg:grid-cols-2 gap-12 items-stretch">
          <!-- DESKTOP: foto grande a sinistra -->
          <div class="reveal hidden lg:block">
            <div class="h-full w-full rounded-3xl overflow-hidden bg-hevea-sand border border-hevea-line shadow-soft">
              <img loading="lazy" decoding="async" src="saverio-framed.webp" alt="Saverio, fondatore di Hevea" class="w-full h-full object-cover object-center" width="1297" height="1297" />
            </div>
          </div>
          <div class="reveal">
            <div class="lg:p-5">
              <!-- header: su mobile foto tonda piccola accanto al nome, su desktop solo nome -->
              <div class="flex items-center gap-4">
                <img loading="lazy" decoding="async" src="saverio-framed.webp" alt="Saverio, fondatore di Hevea" class="lg:hidden w-32 h-32 rounded-2xl object-cover object-center shrink-0 border border-hevea-line bg-white" width="1297" height="1297" />
                <h3 class="text-xl sm:text-2xl text-hevea-ink">Saverio, fondatore di Hevea</h3>
              </div>
              <p class="mt-4 text-base sm:text-lg leading-relaxed text-hevea-muted">
                Ho iniziato come venditore. Ma più andavo avanti, più capivo che non stavo vendendo materassi: stavo aiutando delle persone a dormire.
              </p>
              <p class="mt-4 text-base sm:text-lg leading-relaxed text-hevea-muted">
                Il mio lavoro non è vendere il primo che capita: è trovarti la soluzione giusta: non la più cara, non la più facile da vendere. Anche se ci vuole tempo.
              </p>
            </div>

            <!-- Trust badges reali (dalla brochure) -->
            <div class="mt-8 grid grid-cols-2 gap-3 sm:gap-4">
              <div class="rounded-xl border border-hevea-line bg-white p-4">
                <p class="text-3xl font-bold text-hevea-red serif"><span class="countup" data-to="25">25</span></p>
                <p class="text-xs uppercase tracking-wide text-hevea-muted mt-0.5">anni di esperienza</p>
              </div>
              <div class="rounded-xl border border-hevea-line bg-white p-4">
                <p class="text-3xl font-bold text-hevea-red serif"><span class="countup" data-to="100000" data-prefix="+" data-sep="1">+100.000</span></p>
                <p class="text-xs uppercase tracking-wide text-hevea-muted mt-0.5">clienti soddisfatti</p>
              </div>
              <div class="flex items-start gap-3 rounded-xl border border-hevea-line bg-white p-4">
                <svg class="w-6 h-6 text-hevea-red shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6l8-4z"/><path d="M9 12l2 2 4-4"/></svg>
                <div><p class="font-semibold text-hevea-ink text-sm">Dispositivo medico CE</p><p class="text-xs text-hevea-muted mt-0.5">Classe 1, antidecubito, anatomico</p></div>
              </div>
              <div class="flex items-start gap-3 rounded-xl border border-hevea-line bg-white p-4">
                <svg class="w-6 h-6 text-hevea-red shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <div><p class="font-semibold text-hevea-ink text-sm">3 showroom in Puglia</p><p class="text-xs text-hevea-muted mt-0.5">Bari · Foggia · Andria, provi di persona</p></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Prova sociale (slot estensibile) -->
        <div class="mt-20">
          <div class="text-center reveal">
            <h3 class="text-2xl text-hevea-ink">Non crederci sulla parola. Credi a loro.</h3>
            <div class="mt-5 inline-flex items-center gap-3 rounded-full border border-hevea-line bg-white px-5 py-2.5 shadow-soft">
              <span class="text-2xl font-bold serif text-hevea-ink">4,7</span>
              <span class="flex gap-0.5 text-hevea-red text-lg leading-none" aria-hidden="true">★★★★★</span>
              <span class="text-sm text-hevea-muted">su <span class="font-semibold text-hevea-ink">Google</span> · 59 recensioni</span>
            </div>
          </div>
          <div class="mt-10 relative overflow-x-auto lg:overflow-hidden snap-x snap-mandatory no-scrollbar">
            <div class="marquee-track flex">
              <!-- recensioni reali (Google) -->
              <figure class="snap-start w-80 shrink-0 mr-6 rounded-2xl bg-white border border-hevea-line p-7 shadow-soft">
                <div class="flex gap-1 text-hevea-red mb-4" aria-hidden="true">★★★★★</div>
                <blockquote class="text-hevea-muted leading-relaxed">"Ci ha dato tutte le informazioni che nessuno ci aveva dato fino a quel momento. Veramente, trovare negozi così non è facile."</blockquote>
                <figcaption class="mt-5 text-sm font-semibold text-hevea-ink">Gianluigi <span class="font-normal text-hevea-muted">· Foggia</span></figcaption>
              </figure>
              <figure class="snap-start w-80 shrink-0 mr-6 rounded-2xl bg-white border border-hevea-line p-7 shadow-soft">
                <div class="flex gap-1 text-hevea-red mb-4" aria-hidden="true">★★★★★</div>
                <blockquote class="text-hevea-muted leading-relaxed">"Ci ha permesso di provare e riprovare le varie soluzioni, trattenendosi gentilmente anche oltre l'orario di chiusura, e ci ha fatto comprendere bene ogni caratteristica."</blockquote>
                <figcaption class="mt-5 text-sm font-semibold text-hevea-ink">Cliente Hevea <span class="font-normal text-hevea-muted">· Bari</span></figcaption>
              </figure>
              <figure class="snap-start w-80 shrink-0 mr-6 rounded-2xl bg-white border border-hevea-line p-7 shadow-soft">
                <div class="flex gap-1 text-hevea-red mb-4" aria-hidden="true">★★★★★</div>
                <blockquote class="text-hevea-muted leading-relaxed">"Maura ha saputo consigliarci un sistema di riposo adattandolo alle nostre esigenze: la qualità del sonno è decisamente migliorata."</blockquote>
                <figcaption class="mt-5 text-sm font-semibold text-hevea-ink">Cliente Hevea <span class="font-normal text-hevea-muted">· Bari</span></figcaption>
              </figure>
              <!-- set duplicato per loop continuo -->
              <figure class="snap-start w-80 shrink-0 mr-6 rounded-2xl bg-white border border-hevea-line p-7 shadow-soft" aria-hidden="true">
                <div class="flex gap-1 text-hevea-red mb-4">★★★★★</div>
                <blockquote class="text-hevea-muted leading-relaxed">"Ci ha dato tutte le informazioni che nessuno ci aveva dato fino a quel momento. Veramente, trovare negozi così non è facile."</blockquote>
                <figcaption class="mt-5 text-sm font-semibold text-hevea-ink">Gianluigi <span class="font-normal text-hevea-muted">· Foggia</span></figcaption>
              </figure>
              <figure class="snap-start w-80 shrink-0 mr-6 rounded-2xl bg-white border border-hevea-line p-7 shadow-soft" aria-hidden="true">
                <div class="flex gap-1 text-hevea-red mb-4">★★★★★</div>
                <blockquote class="text-hevea-muted leading-relaxed">"Ci ha permesso di provare e riprovare le varie soluzioni, trattenendosi gentilmente anche oltre l'orario di chiusura, e ci ha fatto comprendere bene ogni caratteristica."</blockquote>
                <figcaption class="mt-5 text-sm font-semibold text-hevea-ink">Cliente Hevea <span class="font-normal text-hevea-muted">· Bari</span></figcaption>
              </figure>
              <figure class="snap-start w-80 shrink-0 mr-6 rounded-2xl bg-white border border-hevea-line p-7 shadow-soft" aria-hidden="true">
                <div class="flex gap-1 text-hevea-red mb-4">★★★★★</div>
                <blockquote class="text-hevea-muted leading-relaxed">"Maura ha saputo consigliarci un sistema di riposo adattandolo alle nostre esigenze: la qualità del sonno è decisamente migliorata."</blockquote>
                <figcaption class="mt-5 text-sm font-semibold text-hevea-ink">Cliente Hevea <span class="font-normal text-hevea-muted">· Bari</span></figcaption>
              </figure>
            </div>
            <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 left-0 w-10 sm:w-20 bg-gradient-to-r from-hevea-cream to-transparent"></div>
            <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 right-0 w-10 sm:w-20 bg-gradient-to-l from-hevea-cream to-transparent"></div>
          </div>
          <p class="mt-5 text-center text-sm text-hevea-muted">Recensioni reali da Google · scorri per leggerle tutte</p>
          <div class="mt-12 text-center reveal">
            <a href="#consulenza" class="inline-flex items-center justify-center gap-2 rounded-full bg-hevea-red px-6 py-3 text-[15px] font-semibold text-white hover:bg-hevea-dark transition-colors duration-200 cursor-pointer">
              Scopri il tuo materasso
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= 6. FAQ ================= -->
    <section id="faq" class="py-10 lg:py-28 bg-hevea-sand">
      <div class="container-x max-w-2xl">
        <div class="text-center reveal">
          <p class="text-sm font-semibold uppercase tracking-widest text-hevea-red">Prima di decidere</p>
          <h2 class="mt-4 text-3xl sm:text-4xl leading-tight text-hevea-ink">Gli ultimi dubbi, sciolti</h2>
        </div>

        <div class="mt-8 lg:mt-12 space-y-2.5 lg:space-y-4">
          <details class="group reveal rounded-xl lg:rounded-2xl bg-white border border-hevea-line p-4 lg:p-6 lg:shadow-soft">
            <summary class="flex items-center justify-between cursor-pointer list-none font-semibold text-hevea-ink">
              La consulenza è gratis?
              <svg class="w-5 h-5 text-hevea-red transition-transform duration-200 group-open:rotate-45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
            </summary>
            <p class="mt-3 lg:mt-4 text-hevea-muted leading-relaxed">Sì, completamente gratis e senza impegno. Ci racconti come dormi, capiamo di cosa hai bisogno, e finiamo il lavoro insieme a un esperto, in showroom.</p>
          </details>

          <details class="group reveal rounded-xl lg:rounded-2xl bg-white border border-hevea-line p-4 lg:p-6 lg:shadow-soft">
            <summary class="flex items-center justify-between cursor-pointer list-none font-semibold text-hevea-ink">
              Devo per forza venire in negozio?
              <svg class="w-5 h-5 text-hevea-red transition-transform duration-200 group-open:rotate-45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
            </summary>
            <p class="mt-3 lg:mt-4 text-hevea-muted leading-relaxed">Il materasso giusto si prova: in showroom lo finiamo su misura con te. Se non puoi venire subito, parli prima con un esperto al telefono o su WhatsApp.</p>
          </details>

          <details class="group reveal rounded-xl lg:rounded-2xl bg-white border border-hevea-line p-4 lg:p-6 lg:shadow-soft">
            <summary class="flex items-center justify-between cursor-pointer list-none font-semibold text-hevea-ink">
              È davvero personalizzato o è solo marketing?
              <svg class="w-5 h-5 text-hevea-red transition-transform duration-200 group-open:rotate-45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
            </summary>
            <p class="mt-3 lg:mt-4 text-hevea-muted leading-relaxed">Davvero. Alcuni materassi li componiamo strato per strato e ne tariamo densità e portanza fisicamente, in base al tuo corpo e a come dormi.</p>
          </details>

          <details class="group reveal rounded-xl lg:rounded-2xl bg-white border border-hevea-line p-4 lg:p-6 lg:shadow-soft">
            <summary class="flex items-center justify-between cursor-pointer list-none font-semibold text-hevea-ink">
              Quanto ci vuole per abituarsi a un materasso nuovo?
              <svg class="w-5 h-5 text-hevea-red transition-transform duration-200 group-open:rotate-45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
            </summary>
            <p class="mt-3 lg:mt-4 text-hevea-muted leading-relaxed">Qualche settimana: il corpo deve adattarsi, ed è normale. Il punto è distinguere l'assestamento da un materasso sbagliato, e da solo è difficile. Per questo restiamo in contatto: se passate le prime settimane qualcosa non va, per un anno lo modelliamo finché non è giusto.</p>
          </details>

          <details class="group reveal rounded-xl lg:rounded-2xl bg-white border border-hevea-line p-4 lg:p-6 lg:shadow-soft">
            <summary class="flex items-center justify-between cursor-pointer list-none font-semibold text-hevea-ink">
              C'è una prova o una garanzia?
              <svg class="w-5 h-5 text-hevea-red transition-transform duration-200 group-open:rotate-45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
            </summary>
            <p class="mt-3 lg:mt-4 text-hevea-muted leading-relaxed">Il metodo Hevea serve esattamente a non arrivarci: a non avere problemi dopo l'acquisto, e a dare a ognuno il materasso giusto per il suo corpo e per la sua situazione. Per questo analizziamo prima come dormi, quanto pesi, che problemi fisici hai: così la scelta è giusta fin da subito. Capita molto di rado di doverci tornare.</p>
            <p class="mt-3 text-hevea-muted leading-relaxed">Ma può succedere. E se succede, per il primo anno dalla data di consegna lo sistemiamo gratis: cambiamo strati, topper o portanza, tutte le volte che serve, finché non dormi bene. Non è un cambio di modello: è la messa a punto di quello che hai scelto.</p>
            <p class="mt-3 text-hevea-muted leading-relaxed">Dal secondo anno si può ancora modificare, se serve evolverlo o aggiornarlo per cambi di peso o problemi fisici, ma a pagamento.</p>
          </details>

          <details class="group reveal rounded-xl lg:rounded-2xl bg-white border border-hevea-line p-4 lg:p-6 lg:shadow-soft">
            <summary class="flex items-center justify-between cursor-pointer list-none font-semibold text-hevea-ink">
              Quanto costa? Avete soluzioni per ogni budget?
              <svg class="w-5 h-5 text-hevea-red transition-transform duration-200 group-open:rotate-45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
            </summary>
            <p class="mt-3 lg:mt-4 text-hevea-muted leading-relaxed">Sì. Il giusto per te non è il più caro: è quello che risponde a come dormi. Lavoriamo su ogni budget, e in più i nostri materassi sono dispositivi medici detraibili.</p>
          </details>

          <details class="group reveal rounded-xl lg:rounded-2xl bg-white border border-hevea-line p-4 lg:p-6 lg:shadow-soft">
            <summary class="flex items-center justify-between cursor-pointer list-none font-semibold text-hevea-ink">
              Devo per forza comprare dopo la consulenza?
              <svg class="w-5 h-5 text-hevea-red transition-transform duration-200 group-open:rotate-45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
            </summary>
            <p class="mt-3 lg:mt-4 text-hevea-muted leading-relaxed">No. La consulenza serve a capire qual è il materasso giusto per te. Poi decidi tu, coi tuoi tempi. Niente telefonate insistenti, niente pressioni: esci anche solo con le idee più chiare.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- ================= 7. CTA FINALE, prenotazione consulenza ================= -->
    <section id="consulenza" class="py-10 lg:py-28 scroll-mt-24">
      <div class="container-x">
        <div class="relative overflow-hidden rounded-3xl bg-hevea-ink text-white px-6 py-8 sm:px-12 sm:py-14 lg:px-16 lg:py-20 reveal">
          <div aria-hidden="true" class="absolute -top-24 -right-24 h-72 w-72 rounded-full bg-hevea-red/30"></div>
          <div class="relative">
            <div class="text-left sm:text-center max-w-4xl mx-auto">
              <h2 class="text-2xl sm:text-4xl lg:text-5xl leading-tight"><span class="block">Il materasso giusto per te <br class="hidden sm:inline" />ti sta aspettando.</span><span class="block text-white/80 italic" style="text-wrap:balance">Scopri qual è.</span></h2>
              
              
            </div>

            <?php include __DIR__ . '/partials/form-consulenza.php'; ?>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ================= FOOTER ================= -->
  <footer id="showroom" class="bg-hevea-ink text-white/80">
    <div class="container-x py-16">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8 lg:gap-10">
        <div class="col-span-2 lg:col-span-1">
          <img loading="lazy" decoding="async" src="logo-horizontal.webp" alt="Hevea, dormiteci sopra" class="h-12 w-auto bg-white rounded-xl px-4 py-3" width="252" height="48" />
        </div>

        <!-- 3 showroom (dati reali dalla brochure) -->
        <div id="showroom-bari">
          <h3 class="text-sm font-semibold uppercase tracking-wide text-white mb-4">Showroom Bari</h3>
          <p class="text-sm leading-relaxed text-white/70">Viale Papa Giovanni XXIII, 181<br>Bari (BA)<br><a href="tel:+390809146870" class="inline-block py-1 hover:text-white transition-colors">+39 080 914 6870</a><br><span class="text-white/45">Lun-Sab: 9:00-13:00, 16:30-20:30</span><br><a href="https://www.google.com/maps/search/?api=1&query=Viale+Papa+Giovanni+XXIII+181,+Bari" target="_blank" rel="noopener" class="inline-flex items-center mt-1 py-1.5 text-white/90 underline underline-offset-2 decoration-white/40 hover:text-white hover:decoration-white transition-colors">Indicazioni →</a></p>
        </div>
        <div id="showroom-foggia">
          <h3 class="text-sm font-semibold uppercase tracking-wide text-white mb-4">Showroom Foggia</h3>
          <p class="text-sm leading-relaxed text-white/70">V.le Manfredi, 86<br>Foggia (FG)<br><a href="tel:+390881313073" class="inline-block py-1 hover:text-white transition-colors">+39 0881 313073</a><br><span class="text-white/45">Lun-Sab: 9:00-13:00, 16:30-20:30</span><br><a href="https://www.google.com/maps/search/?api=1&query=Viale+Manfredi+86,+Foggia" target="_blank" rel="noopener" class="inline-flex items-center mt-1 py-1.5 text-white/90 underline underline-offset-2 decoration-white/40 hover:text-white hover:decoration-white transition-colors">Indicazioni →</a></p>
        </div>
        <div id="showroom-andria">
          <h3 class="text-sm font-semibold uppercase tracking-wide text-white mb-4">Showroom Andria</h3>
          <p class="text-sm leading-relaxed text-white/70">Via Montegrappa, 117<br>Andria (BAT)<br><a href="tel:+390883253182" class="inline-block py-1 hover:text-white transition-colors">+39 0883 253182</a><br><span class="text-white/45">Lun-Sab: 9:00-13:00, 17:00-21:00</span><br><a href="https://www.google.com/maps/search/?api=1&query=Via+Montegrappa+117,+Andria" target="_blank" rel="noopener" class="inline-flex items-center mt-1 py-1.5 text-white/90 underline underline-offset-2 decoration-white/40 hover:text-white hover:decoration-white transition-colors">Indicazioni →</a></p>
        </div>
      </div>

      <div class="mt-12 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
        <p class="text-xs text-white/50">© <span id="year"></span> Hevea: VE. MAT. srl · P.IVA IT07815390724 · Dispositivo medico CE · <a href="privacy.php" class="underline hover:text-white">Privacy Policy</a> · <a href="cookie-policy.php" class="underline hover:text-white">Cookie Policy</a> · <a href="#" class="lb-cs-settings-link underline hover:text-white">Preferenze cookie</a></p>
        <div class="flex items-center gap-4">
          <a href="https://www.facebook.com/heveamaterassidormitecisopra" target="_blank" rel="noopener" aria-label="Facebook Hevea Materassi" class="inline-flex items-center justify-center w-11 h-11 -m-1.5 text-white/60 hover:text-white transition-colors">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg>
          </a>
          <a href="https://www.instagram.com/hevea.materassi/" target="_blank" rel="noopener" aria-label="Instagram @hevea.materassi" class="inline-flex items-center justify-center w-11 h-11 -m-1.5 text-white/60 hover:text-white transition-colors">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.8.3 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1 .4 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .4-2.2.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.3-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.3-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2zm0 1.8c-3.1 0-3.5 0-4.7.1-1.1.1-1.7.2-2.1.4-.5.2-.9.4-1.3.8-.4.4-.6.8-.8 1.3-.2.4-.3 1-.4 2.1C2.6 9.9 2.6 10.3 2.6 12s0 2.1.1 3.3c.1 1.1.2 1.7.4 2.1.2.5.4.9.8 1.3.4.4.8.6 1.3.8.4.2 1 .3 2.1.4 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c1.1-.1 1.7-.2 2.1-.4.5-.2.9-.4 1.3-.8.4-.4.6-.8.8-1.3.2-.4.3-1 .4-2.1.1-1.2.1-1.6.1-3.3s0-2.1-.1-3.3c-.1-1.1-.2-1.7-.4-2.1-.2-.5-.4-.9-.8-1.3-.4-.4-.8-.6-1.3-.8-.4-.2-1-.3-2.1-.4-1.2-.1-1.6-.1-4.7-.1zm0 3.1a4.9 4.9 0 110 9.8 4.9 4.9 0 010-9.8zm0 8.1a3.2 3.2 0 100-6.4 3.2 3.2 0 000 6.4zm6.3-8.3a1.1 1.1 0 11-2.3 0 1.1 1.1 0 012.3 0z"/></svg>
          </a>
        </div>
      </div>
      <p class="mt-4 text-xs text-white/50">Alcune immagini presenti nel sito sono generate o elaborate con intelligenza artificiale.</p>
    </div>
  </footer>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();

    // reveal on scroll
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
  </script>
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
  <script>
    (function(){
      var els = document.querySelectorAll('.countup');
      if(!els.length) return;
      function fmt(n, sep, prefix){
        var s = sep ? Math.round(n).toLocaleString('it-IT') : String(Math.round(n));
        return (prefix||'') + s;
      }
      var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      function animate(el){
        if(reduce){ el.textContent = fmt(parseFloat(el.dataset.to), el.dataset.sep, el.dataset.prefix); return; }
        var to = parseFloat(el.dataset.to), dur = 1500, t0 = null;
        function step(ts){
          if(!t0) t0 = ts;
          var p = Math.min((ts - t0)/dur, 1);
          var eased = 1 - Math.pow(1 - p, 3); // ease-out
          el.textContent = fmt(to * eased, el.dataset.sep, el.dataset.prefix);
          if(p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
      }
      var io2 = new IntersectionObserver(function(entries){
        entries.forEach(function(e){ if(e.isIntersecting){ animate(e.target); io2.unobserve(e.target); } });
      }, { threshold: 0.6 });
      // Il valore reale è nel markup (per crawler/no-JS): azzeriamo qui, prima che l'utente lo raggiunga scrollando
      els.forEach(function(el){ el.textContent = fmt(0, el.dataset.sep, el.dataset.prefix); io2.observe(el); });
    })();
  </script>
  <script src="assets/js/form-consulenza.js" defer></script>
  <script type="text/javascript" src="https://app.legalblink.it/api/scripts/lb_cs.js"></script>
  <script id="lb_cs" type="text/javascript">lb_cs("6a5983a02f46b500227e67e3");</script>
</body>
</html>
