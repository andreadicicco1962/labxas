<?php
$currentPage = 'links';
$pageTitle = 'Synchrotron & Scientific Links | XAS LAB • University of Camerino';
$pageDescription = 'Global synchrotron radiation light sources, scientific societies, reference data portals, and physics directories.';
$pageDepth = 0;
require_once __DIR__ . '/includes/header.php';
?>

<div class="section-header">
  <div class="section-title-wrap">
    <span class="section-badge">Scientific Directory</span>
    <h1 class="section-title">Useful Synchrotron &amp; X-ray Links</h1>
    <p class="section-desc">Global synchrotron radiation light sources, scientific societies, and reference data.</p>
  </div>
</div>

<div class="grid-3">
  <!-- Synchrotrons -->
  <div class="card">
    <h3 class="card-title" style="margin-bottom: 12px;">Synchrotron Facilities</h3>
    <ul style="list-style: none; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem;">
      <li><a href="https://www.esrf.fr" target="_blank" rel="noopener">ESRF &mdash; European Synchrotron (Grenoble) &rarr;</a></li>
      <li><a href="https://www.elettra.eu" target="_blank" rel="noopener">ELETTRA &amp; FERMI FEL (Trieste) &rarr;</a></li>
      <li><a href="https://www.synchrotron-soleil.fr" target="_blank" rel="noopener">SOLEIL Synchrotron (Saint-Aubin, France) &rarr;</a></li>
      <li><a href="https://www.cells.es" target="_blank" rel="noopener">ALBA Synchrotron (Barcelona, Spain) &rarr;</a></li>
      <li><a href="https://www.diamond.ac.uk" target="_blank" rel="noopener">Diamond Light Source (Oxfordshire, UK) &rarr;</a></li>
      <li><a href="https://www.desy.de" target="_blank" rel="noopener">PETRA III / DESY (Hamburg, Germany) &rarr;</a></li>
      <li><a href="http://www.spring8.or.jp" target="_blank" rel="noopener">SPring-8 &amp; SACLA (Hyogo, Japan) &rarr;</a></li>
      <li><a href="https://www.aps.anl.gov" target="_blank" rel="noopener">APS &mdash; Advanced Photon Source (Argonne, USA) &rarr;</a></li>
      <li><a href="https://www.psi.ch/en/sls" target="_blank" rel="noopener">SLS &mdash; Swiss Light Source (Paul Scherrer Institut) &rarr;</a></li>
    </ul>
  </div>

  <!-- Societies -->
  <div class="card">
    <h3 class="card-title" style="margin-bottom: 12px;">Scientific Societies</h3>
    <ul style="list-style: none; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem;">
      <li><a href="https://xrayabsorption.org" target="_blank" rel="noopener">The International XAFS Society (IXAS) &rarr;</a></li>
      <li><a href="https://www.lucedisincrotrone.it/en/homepage/" target="_blank" rel="noopener">Societ&agrave; Italiana Luce di Sincrotrone (SILS) &rarr;</a></li>
      <li><a href="https://www.sif.it" target="_blank" rel="noopener">Societ&agrave; Italiana di Fisica (SIF) &rarr;</a></li>
      <li><a href="https://www.eps.org" target="_blank" rel="noopener">European Physical Society (EPS) &rarr;</a></li>
      <li><a href="https://www.aps.org" target="_blank" rel="noopener">American Physical Society (APS) &rarr;</a></li>
    </ul>
  </div>

  <!-- Tools & Portals -->
  <div class="card">
    <h3 class="card-title" style="margin-bottom: 12px;">Reference Data &amp; Portals</h3>
    <ul style="list-style: none; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem;">
      <li><a href="https://henke.lbl.gov/optical_constants/" target="_blank" rel="noopener">CXRO Berkeley X-ray Data Booklet &rarr;</a></li>
      <li><a href="https://physics.nist.gov/PhysRefData/contents.html" target="_blank" rel="noopener">NIST Physical Reference Data &rarr;</a></li>
      <li><a href="https://fisica.unicam.it" target="_blank" rel="noopener">UNICAM Physics Division Portal &rarr;</a></li>
      <li><a href="http://gnxas.unicam.it/TIMEX" target="_blank" rel="noopener">TIMEX Beamline Project Archive &rarr;</a></li>
      <li><a href="http://gnxas.unicam.it/~dicicco/antonio/" target="_blank" rel="noopener">Antonio Di Cicco Literary Memorial &rarr;</a></li>
      <li><a href="pag_map.php">Where is the XAS group? (Map) &rarr;</a></li>
    </ul>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
