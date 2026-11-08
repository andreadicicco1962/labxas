<?php
$currentPage = 'dicicco';
$pageTitle = 'Prof. Andrea Di Cicco | Academic Profile • University of Camerino';
$pageDescription = 'Academic biography, research trajectory, dissertation archives, and distinctions of Prof. Andrea Di Cicco at UNICAM.';
$pageDepth = 1;
require_once dirname(__DIR__) . '/includes/header.php';
?>

<div class="section-header">
  <div class="section-title-wrap">
    <span class="section-badge">Academic Biography</span>
    <h1 class="section-title">Prof. Andrea Di Cicco</h1>
    <p class="section-desc">Condensed Matter Physics &bull; Synchrotron Radiation Spectroscopy &bull; Extreme Conditions</p>
  </div>
  <div style="display: flex; gap: 8px;">
    <a href="http://gnxas.unicam.it/~dicicco/AndreaDiCicco1pageCV.pdf" class="btn btn-primary" target="_blank" rel="noopener">
      1-Page CV (June 2025) &rarr;
    </a>
  </div>
</div>

<!-- Biography & Institutional Roles -->
<div class="grid-2" style="margin-bottom: 36px;">
  <div class="card">
    <div style="display: flex; gap: 18px; margin-bottom: 16px; align-items: flex-start;">
      <img src="<?= asset('assets/images/ADiCicco_Dec2005.JPG', $pageDepth) ?>" alt="Andrea Di Cicco" style="width: 110px; height: 110px; border-radius: var(--radius-md); object-fit: cover;">
      <div>
        <h3 style="font-size: 1.3rem; font-weight: 800;">Prof. Andrea Di Cicco</h3>
        <div style="font-size: 0.85rem; color: var(--brand-primary); font-weight: 600;">Born in Pistoia (Italy), 15-Aug-1962</div>
        <div style="font-size: 0.82rem; color: var(--text-muted); margin-top: 6px;">
          Full Professor in Condensed Matter Physics<br>
          Delegate for International Research Networks, UNICAM<br>
          Coordinator of Bachelor &amp; Master Physics Degrees (2015-2025)
        </div>
      </div>
    </div>

    <p style="font-size: 0.88rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 16px;">
      PhD in Physics (Sapienza University of Rome, 1988&ndash;1991). Researcher (1990), Associate Professor (2000), and Full Professor (2018). Author or co-author of over 250 peer-reviewed articles with 10,000+ citations (h-index 51). Recipient of the <strong>IXAS Edward Stern Prize (2015)</strong> and the <strong>SILS Career Recognition Award (2025)</strong>.
    </p>

    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
      <a href="https://scholar.google.it/citations?user=-fJdPiIAAAAJ&hl=it" target="_blank" rel="noopener" class="btn btn-secondary" style="font-size: 0.8rem;">Google Scholar Citations</a>
      <a href="https://www.researchgate.net/profile/Andrea_Cicco" target="_blank" rel="noopener" class="btn btn-secondary" style="font-size: 0.8rem;">ResearchGate</a>
      <a href="http://gnxas.unicam.it/~dicicco/curr_ADC_2021_ing.pdf" target="_blank" rel="noopener" class="btn btn-outline" style="font-size: 0.8rem;">Extended CV (EN)</a>
      <a href="http://gnxas.unicam.it/~dicicco/curr_ADC_2021.pdf" target="_blank" rel="noopener" class="btn btn-outline" style="font-size: 0.8rem;">Curriculum (IT)</a>
    </div>
  </div>

  <!-- Theses & Historical PDF Archive -->
  <div class="card">
    <h3 class="card-title" style="margin-bottom: 12px;">Dissertation &amp; Theses Repository</h3>
    <ul style="font-size: 0.85rem; color: var(--text-secondary); display: flex; flex-direction: column; gap: 10px; list-style: none;">
      <li>
        <strong>PhD Thesis (1991, 51 MB):</strong><br>
        <a href="http://gnxas.unicam.it/~dicicco/documents/TesiDottorato_ADiCicco1992_mres.pdf" target="_blank" rel="noopener"><em>"La spettroscopia di assorbimento di raggi X: sviluppo di un nuovo metodo di analisi e applicazioni"</em> &rarr;</a>
      </li>
      <li>
        <strong>Master Thesis (1987, 27 MB):</strong><br>
        <a href="http://gnxas.unicam.it/~dicicco/documents/TesiLaurea_AndreaDiCiccoGiugno1987_mres.pdf" target="_blank" rel="noopener"><em>"Role of multiple scattering in the XANES spectra of Silicon"</em> &rarr;</a>
      </li>
      <li>
        <strong>Liceo Diploma Thesis (1981, 18 MB):</strong><br>
        <a href="http://gnxas.unicam.it/~dicicco/documents/TesinaMaturitaADiCicco1981.pdf" target="_blank" rel="noopener"><em>"Progress in physical sciences due to quantum mechanics (1900-1930)"</em> &rarr;</a>
      </li>
      <li>
        <strong>Urbanistica di Roma 1870&ndash;1970 (1977, 7 MB):</strong><br>
        <a href="http://gnxas.unicam.it/~dicicco/documents/TesinagruppoLiceo1977_mres.pdf" target="_blank" rel="noopener"><em>Liceo Scientifico Group Project on Rome Urban Planning</em> &rarr;</a>
      </li>
      <li>
        <strong>Scuola Media Thesis (1976, 4 MB):</strong><br>
        <a href="http://gnxas.unicam.it/~dicicco/documents/TesiMedia_ADiCicco1976_mres.pdf" target="_blank" rel="noopener"><em>"Il futurismo"</em> &rarr;</a>
      </li>
    </ul>
  </div>
</div>

<!-- Personal & Cultural Heritage -->
<div class="card">
  <h3 class="card-title" style="margin-bottom: 12px;">Cultural Archives &amp; Musical Works</h3>
  <div class="grid-3" style="font-size: 0.85rem;">
    <div>
      <h4 style="font-weight: 700; margin-bottom: 4px;">Antonio Di Cicco Memorial</h4>
      <p style="color: var(--text-secondary); margin-bottom: 8px;">Literary work, didactics, unpublished writings, and bio-bibliography.</p>
      <a href="http://gnxas.unicam.it/~dicicco/antonio/" target="_blank" rel="noopener">Open Antonio Di Cicco Portal &rarr;</a>
    </div>
    <div>
      <h4 style="font-weight: 700; margin-bottom: 4px;">Elena Becchi Di Cicco</h4>
      <p style="color: var(--text-secondary); margin-bottom: 8px;">Memorial website and historical family recollections.</p>
      <a href="http://gnxas.unicam.it/~dicicco/elena/" target="_blank" rel="noopener">Open Elena Becchi Page &rarr;</a>
    </div>
    <div>
      <h4 style="font-weight: 700; margin-bottom: 4px;">Music &amp; Theater (1979&ndash;1980)</h4>
      <p style="color: var(--text-secondary); margin-bottom: 8px;">Original musical scores composed in Rome for theater productions.</p>
      <a href="http://gnxas.unicam.it/~dicicco/teatro19791980.html" target="_blank" rel="noopener">Explore Music Archive &rarr;</a>
    </div>
  </div>
</div>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
