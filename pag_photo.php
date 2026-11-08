<?php
$currentPage = 'photo';
$pageTitle = 'Life of the Group & Photo Collection | XAS LAB • University of Camerino';
$pageDescription = 'Historical photo collection, international beamtime campaigns, conferences, and student gatherings of the UNICAM XAS Group.';
$pageDepth = 0;
require_once __DIR__ . '/includes/header.php';
?>

<div class="section-header">
  <div class="section-title-wrap">
    <span class="section-badge">Memories &amp; Expeditions</span>
    <h1 class="section-title">Life of the Group &amp; Historical Gallery</h1>
    <p class="section-desc">Four decades of international conferences, beamline shifts, lab life, and student reunions.</p>
  </div>
</div>

<!-- Gallery Grid -->
<div class="gallery-grid">
  <div class="gallery-item">
    <div class="gallery-img-wrap">
      <img src="<?= asset('assets/images/Stizza_Davoli_1986.jpg', $pageDepth) ?>" alt="XAFS 4 Fontevraud 1986" onerror="this.onerror=null; this.src='http://gnxas.unicam.it/pag_photo/pictures_conf/XAFS4_Fontevraud_07_1986_rej.png';">
    </div>
    <div class="gallery-info">
      <div class="gallery-caption">XAFS 4 Conference &bull; Fontevraud (Historic Photo)</div>
      <div class="gallery-year">July 1986</div>
    </div>
  </div>

  <div class="gallery-item">
    <div class="gallery-img-wrap">
      <img src="<?= asset('assets/images/lur_jul95disp.jpg', $pageDepth) ?>" alt="LURE High-T Oven" onerror="this.onerror=null; this.src='http://gnxas.unicam.it/pag_photo/pictures_sci/lure1995.jpg';">
    </div>
    <div class="gallery-info">
      <div class="gallery-caption">XAS High-T Furnace Operating at LURE Orsay</div>
      <div class="gallery-year">July 1995</div>
    </div>
  </div>

  <div class="gallery-item">
    <div class="gallery-img-wrap">
      <img src="<?= asset('assets/images/dci_oven_dw11_1.jpg', $pageDepth) ?>" alt="DCI DW11 Furnace" onerror="this.onerror=null; this.src='http://gnxas.unicam.it/pag_photo/pictures_sci/dci_dw11.jpg';">
    </div>
    <div class="gallery-info">
      <div class="gallery-caption">High Temperature Setup at DW11 / DCI</div>
      <div class="gallery-year">1996</div>
    </div>
  </div>

  <div class="gallery-item">
    <div class="gallery-img-wrap">
      <img src="<?= asset('assets/images/dci_oven_d44_1.jpg', $pageDepth) ?>" alt="BM29 Setup ESRF">
    </div>
    <div class="gallery-info">
      <div class="gallery-caption">L'Aquila &ndash; Camerino High-T Furnace at BM29 (ESRF)</div>
      <div class="gallery-year">Grenoble &bull; 2000</div>
    </div>
  </div>

  <div class="gallery-item">
    <div class="gallery-img-wrap">
      <img src="<?= asset('assets/images/img_1143.jpg', $pageDepth) ?>" alt="Alumni Dinner 2006">
    </div>
    <div class="gallery-info">
      <div class="gallery-caption">Di Cicco's Former Students and Collaborators Dinner</div>
      <div class="gallery-year">Camerino &bull; 18 Nov 2006</div>
    </div>
  </div>

  <div class="gallery-item">
    <div class="gallery-img-wrap">
      <img src="<?= asset('assets/images/ADiCicco_Dec2005.JPG', $pageDepth) ?>" alt="Prof. Andrea Di Cicco">
    </div>
    <div class="gallery-info">
      <div class="gallery-caption">Prof. Andrea Di Cicco</div>
      <div class="gallery-year">Camerino &bull; 2005</div>
    </div>
  </div>
</div>

<!-- Historical Milestones List -->
<div class="card" style="margin-top: 40px;">
  <h3 class="card-title" style="margin-bottom: 14px;">Historic Group Milestones</h3>
  <div class="grid-2" style="font-size: 0.88rem; color: var(--text-secondary);">
    <ul style="padding-left: 18px; display: flex; flex-direction: column; gap: 8px;">
      <li><strong>1986:</strong> First XAFS Conference attended in Fontevraud.</li>
      <li><strong>1995:</strong> LURE furnace beamtime experiments.</li>
      <li><strong>1997:</strong> Founding of the XAS Laboratory website.</li>
      <li><strong>2000:</strong> High-temperature BM29 station commissioning at ESRF.</li>
      <li><strong>2001:</strong> Undercooled liquid metal experiments.</li>
    </ul>
    <ul style="padding-left: 18px; display: flex; flex-direction: column; gap: 8px;">
      <li><strong>2006:</strong> Former students and collaborators reunion.</li>
      <li><strong>2009:</strong> 14th International Conference on XAFS (XAFS 14) hosted in Camerino.</li>
      <li><strong>2015:</strong> IXAS Edward Stern Prize awarded in Karlsruhe.</li>
      <li><strong>2018:</strong> XAFS 17 Plenary Lecture in Krakow.</li>
      <li><strong>2025:</strong> SILS Career Recognition Award in recognition of synchrotron achievements.</li>
    </ul>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
