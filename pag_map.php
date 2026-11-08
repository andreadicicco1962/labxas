<?php
$currentPage = 'location';
$pageTitle = 'Location & Visit | XAS LAB • University of Camerino';
$pageDescription = 'Location of the XAS Laboratory at the University of Camerino, Marche, Italy. Directions by air, train, and car.';
$pageDepth = 0;
require_once __DIR__ . '/includes/header.php';
?>

<div class="section-header">
  <div class="section-title-wrap">
    <span class="section-badge">How to Reach Us</span>
    <h1 class="section-title">Where is the XAS Group?</h1>
    <p class="section-desc">Visiting the laboratory at the University of Camerino campus in the Marche region, Italy.</p>
  </div>
</div>

<div class="grid-2" style="margin-bottom: 32px;">
  <div class="card">
    <h3 class="card-title" style="margin-bottom: 12px;">Laboratory &amp; Campus Address</h3>
    <p style="font-size: 0.95rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 18px;">
      <strong><?= htmlspecialchars(SITE_DEPARTMENT) ?></strong><br>
      <?= htmlspecialchars(SITE_UNIVERSITY) ?><br>
      <?= htmlspecialchars(SITE_ADDRESS) ?><br>
      <strong>Tel:</strong> <?= htmlspecialchars(SITE_PHONE) ?><br>
      <strong>GPS Coordinates:</strong> <?= htmlspecialchars(SITE_COORDINATES) ?>
    </p>

    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
      <a href="https://www.google.it/maps/place/43%C2%B008'23.7%22N+13%C2%B004'03.9%22E/@43.1395841,13.0665777,18z" target="_blank" rel="noopener" class="btn btn-primary">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        Open in Google Maps &rarr;
      </a>
      <a href="http://gnxas.unicam.it/pag_map.html" target="_blank" rel="noopener" class="btn btn-secondary">
        Original Campus Map View &rarr;
      </a>
    </div>
  </div>

  <div class="card">
    <h3 class="card-title" style="margin-bottom: 12px;">Transportation Guide</h3>
    <ul style="font-size: 0.88rem; color: var(--text-secondary); display: flex; flex-direction: column; gap: 12px; list-style: none;">
      <li>
        <strong>✈️ By Air:</strong> Ancona-Falconara "Raffaello Sanzio" Airport (AOI) is 80 km away. Rome Fiumicino (FCO) has direct train connections to Foligno and bus links to Camerino.
      </li>
      <li>
        <strong>🚆 By Train:</strong> Nearest railway station is <strong>Castelraimondo-Camerino</strong> (10 km away on the Civitanova Marche &ndash; Fabriano line). Regular Contram bus shuttles connect directly to the campus.
      </li>
      <li>
        <strong>🚗 By Car:</strong> From the A14 motorway, exit at Civitanova Marche and follow the SS77 expressway towards Foligno; take the <em>Camerino</em> exit.
      </li>
    </ul>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
