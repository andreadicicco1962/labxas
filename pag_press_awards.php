<?php
$currentPage = 'awards';
$pageTitle = 'Press, Media & Awards | XAS LAB • University of Camerino';
$pageDescription = 'International distinctions including IXAS Edward Stern Prize (2015), SILS Career Recognition Award (2025), and national press coverage.';
$pageDepth = 0;
require_once __DIR__ . '/includes/header.php';
?>

<div class="section-header">
  <div class="section-title-wrap">
    <span class="section-badge">Distinctions</span>
    <h1 class="section-title">International Honors &amp; Press Features</h1>
    <p class="section-desc">Recognition of laboratory members and discoveries across major scientific platforms and media.</p>
  </div>
</div>

<!-- Awards Cards Grid -->
<div class="grid-2" style="margin-bottom: 40px;">
  <div class="card" style="border: 2px solid rgba(245, 158, 11, 0.4);">
    <div class="card-header">
      <div>
        <span class="badge badge-warning" style="margin-bottom: 8px;">Highest Field Honor &bull; 2015</span>
        <h3 class="card-title">IXAS Edward Stern Prize</h3>
        <div class="card-subtitle">Awarded to Prof. Andrea Di Cicco</div>
      </div>
      <div style="font-size: 2.2rem;">🏆</div>
    </div>
    <p class="card-body">
      The <strong>International X-ray Absorption Society's (IXAS) Edward Stern Prize</strong> is the highest recognition for outstanding lifetime achievements in the field of XAFS. Bestowed upon Prof. Andrea Di Cicco during the 16th International Conference on XAFS in Karlsruhe (August 2015) before 550 delegates, honoring seminal contributions to spectroscopy of disordered and extreme matter.
    </p>
    <div class="card-footer">
      <a href="http://www.ixasportal.net" target="_blank" rel="noopener">IXAS Official Portal &rarr;</a>
      <span class="badge">Karlsruhe 2015</span>
    </div>
  </div>

  <div class="card" style="border: 2px solid rgba(16, 185, 129, 0.4);">
    <div class="card-header">
      <div>
        <span class="badge badge-success" style="margin-bottom: 8px;">Career Award &bull; September 2025</span>
        <h3 class="card-title">SILS Career Recognition Award</h3>
        <div class="card-subtitle">Italian Synchrotron Radiation Society</div>
      </div>
      <div style="font-size: 2.2rem;">🎖️</div>
    </div>
    <p class="card-body">
      Awarded by the <strong>Societ&agrave; Italiana Luce di Sincrotrone (SILS)</strong> in September 2025 in recognition of lifelong distinguished leadership in synchrotron experiments, instrumentation development, and educational mentorship.
    </p>
    <div class="card-footer">
      <a href="https://www.lucedisincrotrone.it" target="_blank" rel="noopener">SILS Portal &rarr;</a>
      <span class="badge">September 2025</span>
    </div>
  </div>
</div>

<!-- Dr. Fabio Iesari Award -->
<div class="card" style="margin-bottom: 40px;">
  <div class="card-header">
    <div>
      <span class="badge badge-purple" style="margin-bottom: 6px;">Young Scientist Recognition &bull; 2015</span>
      <h3 class="card-title">Best Poster Award to Dr. Fabio Iesari</h3>
    </div>
  </div>
  <p class="card-body">
    Dr. Fabio Iesari, while carrying out his PhD in our laboratory, was awarded the Best Poster Award at the international XAFS 16 conference in Karlsruhe (August 2015) for novel Reverse Monte Carlo modeling of disordered nanomaterials.
  </p>
</div>

<!-- Media Press Coverage -->
<section class="section">
  <div class="section-header">
    <div class="section-title-wrap">
      <span class="section-badge">Media Features</span>
      <h2 class="section-title">Press Reviews &amp; Interviews</h2>
    </div>
  </div>

  <div class="grid-3">
    <div class="card">
      <h4 style="font-weight: 700; margin-bottom: 6px;">Il Sole 24 Ore</h4>
      <p style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
        National financial and cultural daily reporting on the breakthrough study of icosahedral order in liquid metals.
      </p>
      <a href="http://gnxas.unicam.it/~dicicco/Sole24ore.pdf" class="btn btn-outline" target="_blank" rel="noopener">Read Article (PDF) &rarr;</a>
    </div>

    <div class="card">
      <h4 style="font-weight: 700; margin-bottom: 6px;">Le Scienze</h4>
      <p style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
        Feature review in the Italian edition of Scientific American highlighting synchrotron extreme condition experiments.
      </p>
      <a href="http://gnxas.unicam.it/~dicicco/Lescienze_focus.pdf" class="btn btn-outline" target="_blank" rel="noopener">Read Article (PDF) &rarr;</a>
    </div>

    <div class="card">
      <h4 style="font-weight: 700; margin-bottom: 6px;">SIRBATT Video Story</h4>
      <p style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">
        Documentary video produced for the European Commission on new battery materials and SEI stabilization.
      </p>
      <a href="https://youtu.be/mNK_Iru3bzM" class="btn btn-primary" target="_blank" rel="noopener">Watch Video &rarr;</a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
