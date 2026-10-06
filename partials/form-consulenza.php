<?php
// Componente unico del form di consulenza, incluso identico su tutte le 15 pagine.
// $formExtraClass (opzionale, definita PRIMA dell'include) aggiunge classi al <form>.
$formExtraClass = isset($formExtraClass) ? trim($formExtraClass . ' mt-8 lg:mt-12 mx-auto w-full max-w-lg rounded-2xl bg-white text-hevea-ink p-5 sm:p-8 shadow-card') : 'mt-8 lg:mt-12 mx-auto w-full max-w-lg rounded-2xl bg-white text-hevea-ink p-5 sm:p-8 shadow-card';
?>
<form id="formConsulenza" action="send-form.php" method="post" class="<?php echo htmlspecialchars($formExtraClass, ENT_QUOTES, 'UTF-8'); ?>" novalidate>
  <h3 class="text-xl serif">Lasciaci il tuo numero</h3>
  <p class="mt-1 text-sm text-hevea-muted">Ti richiama un nostro consulente per fissare l'appuntamento in showroom. Gratis e senza impegno.</p>

  <label class="block mt-6">
    <span class="text-xs font-semibold uppercase tracking-wide text-hevea-muted">Nome</span>
    <input type="text" name="nome" autocomplete="given-name" required maxlength="80" class="mt-1 w-full rounded-lg border border-hevea-line bg-white px-4 py-3 text-base text-hevea-ink placeholder-hevea-muted/60 focus:border-hevea-red focus:outline-none focus:ring-2 focus:ring-hevea-red/20 transition-colors" placeholder="Il tuo nome" />
  </label>

  <label class="block mt-3">
    <span class="text-xs font-semibold uppercase tracking-wide text-hevea-muted">Numero di telefono</span>
    <input type="tel" name="telefono" autocomplete="tel" inputmode="tel" required pattern="[0-9\+\(\)\s\.\-]{8,20}" title="Inserisci un numero di telefono valido (almeno 8 cifre)" class="mt-1 w-full rounded-lg border border-hevea-line bg-white px-4 py-3 text-base text-hevea-ink placeholder-hevea-muted/60 focus:border-hevea-red focus:outline-none focus:ring-2 focus:ring-hevea-red/20 transition-colors" placeholder="+39 ..." />
  </label>

  <label class="block mt-3">
    <span class="text-xs font-semibold uppercase tracking-wide text-hevea-muted">Dove ci vediamo</span>
    <select name="showroom" required class="mt-1 w-full rounded-lg border border-hevea-line bg-white px-4 py-3 text-base text-hevea-ink placeholder-hevea-muted/60 focus:border-hevea-red focus:outline-none focus:ring-2 focus:ring-hevea-red/20 transition-colors appearance-none bg-[length:1rem] bg-[right_1rem_center] bg-no-repeat" style="background-image:url(&quot;data:image/svg+xml;utf8,&lt;svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%236B5F57' stroke-width='2' stroke-linecap='round'&gt;&lt;path d='M6 9l6 6 6-6'/&gt;&lt;/svg&gt;&quot;)">
      <option value="" disabled selected>Scegli…</option>
      <option>Showroom Bari</option>
      <option>Showroom Foggia</option>
      <option>Showroom Andria</option>
    </select>
  </label>

  <fieldset class="mt-3">
    <legend class="text-xs font-semibold uppercase tracking-wide text-hevea-muted">Come preferisci essere contattato</legend>
    <div class="mt-1 grid grid-cols-2 gap-3">
      <div>
        <input type="radio" id="contatto-tel" name="contatto" value="Telefono" checked class="peer sr-only" />
        <label for="contatto-tel" class="flex items-center justify-center gap-2 rounded-lg border border-hevea-line bg-white px-4 py-3 text-sm font-medium text-hevea-ink cursor-pointer transition-colors hover:border-hevea-red/40 peer-checked:border-hevea-red peer-checked:bg-hevea-red/5 peer-checked:text-hevea-red peer-focus-visible:ring-2 peer-focus-visible:ring-hevea-red/30"><svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6A19.8 19.8 0 012.1 4.2 2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.4 1.8.7 2.7a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.4-1.2a2 2 0 012.1-.5c.9.3 1.8.6 2.7.7a2 2 0 011.7 2z"/></svg>Telefono</label>
      </div>
      <div>
        <input type="radio" id="contatto-wa" name="contatto" value="WhatsApp" class="peer sr-only" />
        <label for="contatto-wa" class="flex items-center justify-center gap-2 rounded-lg border border-hevea-line bg-white px-4 py-3 text-sm font-medium text-hevea-ink cursor-pointer transition-colors hover:border-hevea-red/40 peer-checked:border-hevea-red peer-checked:bg-hevea-red/5 peer-checked:text-hevea-red peer-focus-visible:ring-2 peer-focus-visible:ring-hevea-red/30"><svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15L2 22l5.2-1.4A10 10 0 1012 2zm0 18.2a8.2 8.2 0 01-4.2-1.2l-.3-.2-3.1.8.8-3-.2-.3A8.2 8.2 0 1112 20.2zm4.5-6.1c-.2-.1-1.4-.7-1.7-.8s-.4-.1-.5.1-.6.8-.7.9-.3.2-.5 0a6.7 6.7 0 01-2-1.2 7.4 7.4 0 01-1.4-1.7c-.1-.3 0-.4.1-.5l.4-.5.2-.4v-.4l-.7-1.7c-.2-.4-.4-.4-.5-.4h-.5a1 1 0 00-.7.3 3 3 0 00-.9 2.2A5.2 5.2 0 009.2 15c.1.2 1.5 2.3 3.7 3.2a12 12 0 001.2.5 3 3 0 001.4.1 2.3 2.3 0 001.5-1.1 1.9 1.9 0 00.1-1c0-.2-.2-.3-.4-.4z"/></svg>WhatsApp</label>
      </div>
    </div>
  </fieldset>

  <!-- Honeypot anti-spam: invisibile per una persona, spesso compilato dai bot -->
  <div class="absolute -left-[9999px]" aria-hidden="true">
    <label for="sito-web">Sito web</label>
    <input type="text" id="sito-web" name="sito_web" tabindex="-1" autocomplete="off" />
  </div>

  <button type="submit" class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded-full bg-hevea-red px-7 py-4 text-base font-semibold text-white hover:bg-hevea-dark transition-colors duration-200 cursor-pointer">
    <span class="btn-label">Scopri qual è il tuo</span>
    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
  </button>

  <p class="mt-3 text-xs text-hevea-muted text-center">Inviando accetti di essere contattato da Hevea per fissare la consulenza. Leggi la <a href="https://app.legalblink.it/api/documents/6a5983a02f46b500227e67dd/privacy-policy-per-siti-web-o-e-commerce-it" target="_blank" rel="noopener" class="underline hover:text-hevea-red">informativa privacy</a>.</p>
</form>
