<?php
$veelgesteldeVragen = [
  [
    'vraag' => 'Wanneer is de open dag?',
    'antwoord' => '19 november 2026',
  ],
  [
    'vraag' => 'Kan ik iemand meenemen?',
    'antwoord' => 'Ja, je kan je familie en vrienden meenemen.',
  ],
  [
    'vraag' => 'Wat moet ik voorbereiden?',
    'antwoord' => 'Nee, je hoeft niets voor te bereiden.',
  ],
];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ontdek Curio tijdens de open dag.">
  <title>Curio Open Dag</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <main>
    <div class="brand" aria-label="Curio">
      <img src="img/Logos/curio-01-zwart-logo-rgb.png" alt="Curio">
    </div>
    <section class="hero section-shell">
      <div class="hero-copy">
        <p class="eyebrow">Open dag · 19 november 2026</p>
        <h1>Ontdek waar jij<br><em>thuishoort.</em></h1>
        <p class="intro">Twijfel jij nog welke studie het beste bij jou past? Laat je op goede ideeën brengen tijdens een open dag op het mbo. Studenten en leraren vertellen je dan alles over hun opleiding. Kijk mee bij verschillende studies en stel al jouw vragen. Neem ook je ouders/verzorgers mee.</p>
      </div>
      <div class="hero-image">
        <img src="img/Fotos_locaties/Sanne Bas - Curio - Terheijdenseweg 350-2.jpg" alt="Studenten op een Curio-locatie">
      </div>
    </section>

    <section class="info-section section-shell department-vakken">
      <div class="section-copy">
        <p class="eyebrow">01 · Kies wat bij je past</p>
        <h2>De vakken</h2>
        <p>Op school heb ik verschillende vakken. Bij PRA en PRO leer ik vooral praktische dingen en leer ik door opdrachten te maken. Bij Native, Nederlands en Engels leer ik talen, zoals lezen, schrijven, spreken en luisteren. Bij DIV leer ik digitale vaardigheden. Bij Rekenen oefen ik met verschillende soorten sommen en berekeningen. Bij WEB leer ik hoe websites werken en hoe ik ermee kan werken. Elk vak is anders en ik leer er verschillende dingen die handig zijn voor later.</p>
      </div>
      <div class="section-image">
        <img src="img/Opleidingsoverzicht3.png" alt="Placeholder afbeelding van een opleiding">
      </div>
    </section>

    <section class="info-section section-shell section-reverse department-sfeer">
      <div class="section-copy">
        <p class="eyebrow">02 · Proef de sfeer</p>
        <h2>De sfeer</h2>
        <p>Op onze school hangt een gezellige en positieve sfeer. Leerlingen kunnen zichzelf zijn en er is veel ruimte om samen te werken en nieuwe dingen te leren. De docenten helpen je graag en zorgen ervoor dat je je snel thuis voelt. Tijdens een open dag kun je zelf de sfeer komen ervaren en ontdekken of onze school bij jou past!</p>
      </div>
      <div class="section-image">
        <img src="img/Fotos_locaties/Sanne Bas - Curio - Terheijdenseweg 350-1.jpg" alt="Placeholder afbeelding van een Curio-locatie">
      </div>
    </section>

    <section class="faq-section section-shell department-vragen">
      <div class="section-copy">
        <p class="eyebrow">03 · Handig om te weten</p>
        <h2>Vaakgestelde vragen</h2>
        <?php foreach ($veelgesteldeVragen as $veelgesteldeVraag): ?>
          <details>
            <summary><?php echo htmlspecialchars($veelgesteldeVraag['vraag'], ENT_QUOTES, 'UTF-8'); ?></summary>
            <p><?php echo htmlspecialchars($veelgesteldeVraag['antwoord'], ENT_QUOTES, 'UTF-8'); ?></p>
          </details>
        <?php endforeach; ?>
        <details class="schedule-details">
          <summary>Hoe ziet het rooster er uit?</summary>
          <div class="schedule-image-wrap">
            <button class="schedule-image-button" type="button" aria-label="Rooster van het eerste leerjaar vergroten" data-image="img/Rooster eerste leerjaar.png" data-alt="Rooster van het eerste leerjaar" data-title="Rooster eerste leerjaar">
              <img src="img/Rooster eerste leerjaar.png" alt="Rooster van het eerste leerjaar">
            </button>
          </div>
        </details>
        <details class="schedule-details">
          <summary>Hoe ziet de opleidingsoverzicht er uit?</summary>
          <div class="schedule-image-wrap">
            <button class="schedule-image-button" type="button" aria-label="Opleidingsoverzicht vergroten" data-image="img/Opleidingsoverzicht3.png" data-alt="Overzicht van de opleidingen bij Curio" data-title="Opleidingsoverzicht">
              <img src="img/Opleidingsoverzicht3.png" alt="Overzicht van de opleidingen bij Curio">
            </button>
          </div>
        </details>
      </div>
      <div class="faq-accent"><span>?</span></div>
    </section>

    <section class="offer-section section-shell department-aanbod">
      <div class="offer-copy">
        <p class="eyebrow">Jouw toekomst begint hier</p>
        <h2>Wat we<br><em>aanbieden</em></h2>
        <p>Bij de opleiding Software Developer leer je hoe je programma’s, websites en apps maakt. Je leert programmeren en werkt met verschillende programmeertalen en technieken. Ook leer je hoe je samenwerkt aan projecten en hoe je problemen kunt oplossen. Tijdens de opleiding doe je veel praktijkervaring op. Na de opleiding kun je bijvoorbeeld aan de slag als software developer, webdeveloper of programmeur.</p>
      </div>
      <div class="offer-image">
        <img src="img/Mbo/Mbo - techniek en technologie/Terheijdenseweg 350/IMG_9331.jpg" alt="Placeholder afbeelding voor het opleidingsaanbod">
      </div>
    </section>

    <section class="closing-slider section-shell" aria-label="Inspiratie">
      <div class="slider-track">
        <article class="slide active">
          <img src="img/Fotos_locaties/Sanne Bas - Curio - Terheijdenseweg 350-2.jpg" alt="Placeholder sfeerbeeld">
        </article>
        <article class="slide">
          <img src="img/Mbo/Mbo - techniek en technologie/Terheijdenseweg 350/IMG_9422.jpg" alt="Placeholder sfeerbeeld">
        </article>
        <article class="slide">
          <img src="img/Mbo/Mbo - techniek en technologie/Terheijdenseweg 350/IMG_9319.jpg" alt="Placeholder sfeerbeeld">
        </article>
      </div>
      <div class="slider-controls">
        <button type="button" class="slider-button" id="previous" aria-label="Vorige afbeelding">←</button>
        <div class="dots" aria-label="Kies afbeelding">
          <button class="dot active" type="button" aria-label="Afbeelding 1"></button>
          <button class="dot" type="button" aria-label="Afbeelding 2"></button>
          <button class="dot" type="button" aria-label="Afbeelding 3"></button>
        </div>
        <button type="button" class="slider-button" id="next" aria-label="Volgende afbeelding">→</button>
      </div>
    </section>
  </main>

  <dialog class="schedule-dialog" id="schedule-dialog" aria-labelledby="schedule-dialog-title">
    <div class="schedule-dialog-content">
      <button class="schedule-dialog-close" type="button" aria-label="Vergrote afbeelding sluiten">&times;</button>
      <h2 id="schedule-dialog-title"></h2>
      <img id="schedule-dialog-image" src="" alt="">
    </div>
  </dialog>

  <footer>
    <span>Curio Open Dag</span>
    <span>Placeholder contactgegevens · 2026</span>
  </footer>
  <script>
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;
    function showSlide(index) {
      currentSlide = (index + slides.length) % slides.length;

      slides.forEach((slide, slideIndex) => {
        slide.classList.toggle('active', slideIndex === currentSlide);
      });

      dots.forEach((dot, dotIndex) => {
        dot.classList.toggle('active', dotIndex === currentSlide);
      });
    }
    document.querySelector('#previous').addEventListener('click', () => showSlide(currentSlide - 1));
    document.querySelector('#next').addEventListener('click', () => showSlide(currentSlide + 1));
    dots.forEach((dot, index) => dot.addEventListener('click', () => showSlide(index)));

    const scheduleDialog = document.querySelector('#schedule-dialog');
    const scheduleDialogImage = document.querySelector('#schedule-dialog-image');
    const scheduleDialogTitle = document.querySelector('#schedule-dialog-title');
    const scheduleDialogClose = document.querySelector('.schedule-dialog-close');

    document.querySelectorAll('.schedule-image-button').forEach((button) => {
      button.addEventListener('click', () => {
        scheduleDialogImage.src = button.dataset.image;
        scheduleDialogImage.alt = button.dataset.alt;
        scheduleDialogTitle.textContent = button.dataset.title;
        scheduleDialog.showModal();
      });
    });

    scheduleDialogClose.addEventListener('click', () => scheduleDialog.close());
    scheduleDialog.addEventListener('click', (event) => {
      if (event.target === scheduleDialog) {
        scheduleDialog.close();
      }
    });

  </script>
</body>
</html>
