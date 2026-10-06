<?php
header("HTTP/1.1 404 Not Found");
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pagina non trovata | Hevea Materassi</title>
  <meta name="description" content="La pagina che cerchi non esiste o è stata spostata. Trovi qui i nostri materassi e i contatti degli showroom di Bari, Foggia e Andria." />
  <link rel="icon" href="assets/icons/favicon.ico" sizes="any" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/icon-32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/icon-16.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/icon-180.png" />
  <meta name="theme-color" content="#C8102E" />

  <!-- Font in locale: Lora (serif, titoli) + Raleway (sans, testo) -->
  <link rel="stylesheet" href="fonts/fonts.css" />

  <!-- Tailwind (build compilata, purgata) -->
  <link rel="stylesheet" href="assets/css/tailwind.css" />

  <style>
    body { font-family: 'Raleway', system-ui, sans-serif; color: #2A211C; background: #FBF7F1; }
    h1,h2,.serif { font-family: 'Lora', Georgia, serif; }
    .container-x { max-width: 72rem; margin-left:auto; margin-right:auto; padding-left:1.5rem; padding-right:1.5rem; }
  </style>
</head>
<body class="antialiased">

  <!-- ================= NAVBAR ================= -->
  <header class="bg-hevea-cream/90 backdrop-blur border-b border-hevea-line">
    <div class="container-x flex items-center justify-between h-16 sm:h-20">
      <a href="/" class="flex items-center" aria-label="Hevea, home">
        <img src="logo-horizontal.webp" alt="Hevea, dormiteci sopra" class="h-9 sm:h-10 w-auto" width="210" height="40" />
      </a>
      <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-hevea-ink/80" aria-label="Navigazione principale">
        <a href="/" class="hover:text-hevea-red transition-colors duration-200">Home</a>
        <a href="materassi.php" class="hover:text-hevea-red transition-colors duration-200">Materassi</a>
        <a href="blog.php" class="hover:text-hevea-red transition-colors duration-200">Blog</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="py-16 sm:py-24">
      <div class="container-x text-center max-w-2xl">
        <p class="text-sm font-semibold uppercase tracking-widest text-hevea-red">Errore 404</p>
        <h1 class="mt-4 text-3xl sm:text-4xl leading-tight text-hevea-ink serif">
          Questa pagina non esiste, o è stata spostata.
        </h1>
        <p class="mt-4 text-base sm:text-lg leading-relaxed text-hevea-muted">
          Prova a ripartire dalla home, oppure dai un'occhiata alle nostre soluzioni.
        </p>

        <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
          <a href="/" class="inline-flex items-center justify-center gap-2 rounded-full bg-hevea-red px-6 py-3 text-[15px] font-semibold text-white hover:bg-hevea-dark transition-colors duration-200">
            Torna alla home
          </a>
          <a href="materassi.php" class="inline-flex items-center justify-center gap-2 rounded-full border border-hevea-line px-6 py-3 text-[15px] font-semibold text-hevea-ink hover:border-hevea-red hover:text-hevea-red transition-colors duration-200">
            Tutti i materassi
          </a>
        </div>

        <div class="mt-6 flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-sm text-hevea-muted">
          <a href="materassi-lattice.php" class="hover:text-hevea-red transition-colors">Lattice</a>
          <a href="materassi-memory.php" class="hover:text-hevea-red transition-colors">Memory</a>
          <a href="materassi-molle.php" class="hover:text-hevea-red transition-colors">Molle insacchettate</a>
        </div>
      </div>

      <div class="container-x mt-16">
        <p class="text-sm font-semibold uppercase tracking-widest text-hevea-muted text-center">I nostri showroom</p>
        <div class="mt-6 grid sm:grid-cols-3 gap-6 max-w-3xl mx-auto text-center">
          <div>
            <p class="font-semibold text-hevea-ink">Bari</p>
            <a href="tel:+390809146870" class="text-sm text-hevea-muted hover:text-hevea-red transition-colors">+39 080 914 6870</a>
          </div>
          <div>
            <p class="font-semibold text-hevea-ink">Foggia</p>
            <a href="tel:+390881313073" class="text-sm text-hevea-muted hover:text-hevea-red transition-colors">+39 0881 313073</a>
          </div>
          <div>
            <p class="font-semibold text-hevea-ink">Andria</p>
            <a href="tel:+390883253182" class="text-sm text-hevea-muted hover:text-hevea-red transition-colors">+39 0883 253182</a>
          </div>
        </div>
      </div>
    </section>
  </main>

</body>
</html>
