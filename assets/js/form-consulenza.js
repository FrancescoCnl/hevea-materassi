// Componente unico: invio del form consulenza, condiviso da tutte le pagine.
(function () {
  var f = document.getElementById('formConsulenza');
  if (!f) return;

  var submitBtn = f.querySelector('button[type="submit"]');
  var btnLabel = f.querySelector('.btn-label');

  function digitCount(value) {
    return (value.match(/\d/g) || []).length;
  }

  function buildSuccessMessage(nome) {
    var wrap = document.createElement('div');
    wrap.className = 'text-center py-6';
    wrap.setAttribute('role', 'status');
    wrap.setAttribute('aria-live', 'polite');
    wrap.setAttribute('tabindex', '-1');

    var iconWrap = document.createElement('div');
    iconWrap.className = 'mx-auto flex items-center justify-center w-14 h-14 rounded-full bg-hevea-green/10 text-hevea-green';
    iconWrap.innerHTML = '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>';

    var h3 = document.createElement('h3');
    h3.className = 'mt-4 text-2xl serif text-hevea-ink';
    h3.textContent = 'Grazie' + (nome ? (', ' + nome) : '') + '!'; // textContent: nessun HTML interpretato, niente XSS

    var p = document.createElement('p');
    p.className = 'mt-3 text-hevea-muted leading-relaxed';
    p.textContent = 'Abbiamo ricevuto la tua richiesta. Ti ricontattiamo entro 24 ore lavorative per fissare la consulenza. Gratis e senza impegno.';

    wrap.appendChild(iconWrap);
    wrap.appendChild(h3);
    wrap.appendChild(p);
    return wrap;
  }

  function buildErrorMessage() {
    var wrap = document.createElement('p');
    wrap.className = 'mt-3 text-sm text-hevea-red';
    wrap.setAttribute('role', 'alert');
    wrap.textContent = 'Non siamo riusciti a inviare la richiesta. Riprova tra poco o chiamaci direttamente.';
    return wrap;
  }

  f.addEventListener('submit', function (e) {
    e.preventDefault();

    var telefonoInput = f.telefono;
    if (telefonoInput && digitCount(telefonoInput.value) < 8) {
      telefonoInput.setCustomValidity('Inserisci un numero di telefono con almeno 8 cifre.');
    } else if (telefonoInput) {
      telefonoInput.setCustomValidity('');
    }

    if (!f.checkValidity()) {
      f.reportValidity();
      return;
    }

    var nome = (f.nome && f.nome.value || '').trim();
    var existingError = f.querySelector('[role="alert"]');
    if (existingError) existingError.remove();

    if (submitBtn) submitBtn.disabled = true;
    if (btnLabel) btnLabel.textContent = 'Invio in corso…';

    fetch(f.action, {
      method: 'POST',
      headers: { 'Accept': 'application/json' },
      body: new FormData(f)
    })
      .then(function (res) { return res.json().catch(function () { return { ok: false }; }); })
      .then(function (data) {
        if (!data || !data.ok) throw new Error('send-failed');

        var msg = buildSuccessMessage(nome);
        f.replaceWith(msg);
        msg.scrollIntoView({ behavior: 'smooth', block: 'center' });
        msg.focus();
      })
      .catch(function () {
        if (submitBtn) submitBtn.disabled = false;
        if (btnLabel) btnLabel.textContent = 'Scopri qual è il tuo';
        f.appendChild(buildErrorMessage());
      });
  });
})();
