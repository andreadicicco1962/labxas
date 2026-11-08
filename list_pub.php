<?php
$currentPage = 'publications';
$pageTitle = 'Publications & Highlights | XAS LAB • University of Camerino';
$pageDescription = 'Camerino XAS Group scientific publications, journal papers, reviews, and conference plenary lectures.';
$pageDepth = 1;
require_once dirname(__DIR__) . '/includes/header.php';
?>

<div class="section-header">
  <div class="section-title-wrap">
    <span class="section-badge">Scientific Output</span>
    <h1 class="section-title">Camerino XAS Group Publications &amp; Highlights</h1>
    <p class="section-desc">
      More than 250 peer-reviewed papers cited over 10,000 times (h-index 51).
    </p>
  </div>
  <div>
    <a href="http://gnxas.unicam.it/~dicicco/list_pub_dic.html" class="btn btn-primary" target="_blank" rel="noopener">
      Original Chronological Index (610 Works) &rarr;
    </a>
  </div>
</div>

<!-- Search & Filter Controls -->
<div style="background-color: var(--bg-card); border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 18px 24px; margin-bottom: 24px;">
  <div style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: space-between; align-items: center; margin-bottom: 14px;">
    <div class="search-container" style="max-width: 420px;">
      <svg class="search-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
      <input type="text" id="pub-search" class="search-input" placeholder="Filter publications by title, author, year, journal...">
    </div>
    <div id="pub-count-badge" class="badge badge-purple" style="font-size: 0.85rem; padding: 6px 14px;">
      Interactive filter active
    </div>
  </div>

  <div style="display: flex; flex-wrap: wrap; gap: 8px;">
    <button class="btn btn-secondary category-filter-btn active" data-category="all" style="padding: 6px 14px; font-size: 0.8rem;">All Topics</button>
    <button class="btn btn-secondary category-filter-btn" data-category="energy" style="padding: 6px 14px; font-size: 0.8rem;">Energy &amp; Batteries</button>
    <button class="btn btn-secondary category-filter-btn" data-category="extreme" style="padding: 6px 14px; font-size: 0.8rem;">High Pressure &amp; Temp</button>
    <button class="btn btn-secondary category-filter-btn" data-category="liquids" style="padding: 6px 14px; font-size: 0.8rem;">Liquids &amp; Disordered</button>
    <button class="btn btn-secondary category-filter-btn" data-category="recent" style="padding: 6px 14px; font-size: 0.8rem;">Recent (2022-2026)</button>
  </div>
</div>

<!-- Publications List -->
<div id="publications-list">
  <!-- 2026 Recent Articles -->
  <div class="pub-item" data-category="recent energy">
    <span class="badge badge-success" style="float: right;">2026</span>
    <h3 class="pub-title">Advanced characterization of nanostructured energy materials and interface dynamics</h3>
    <div class="pub-authors">S. Javad Rezvani, <strong>Andrea Di Cicco</strong>, Angela Trapananti, et al.</div>
    <div class="pub-meta">
      <span>Adv. Sci. 13, e24386 (2026)</span> &bull; 
      <span>J. Phys. Chem. C 130, 3040 (2026)</span> &bull; 
      <span>Phys. Rev. B 113, 115143 (2026)</span>
    </div>
    <div class="pub-actions">
      <a href="https://doi.org/10.1002/advs.202524386" target="_blank" rel="noopener" class="btn btn-outline" style="font-size: 0.78rem; padding: 4px 10px;">Electronic Journal</a>
      <a href="mailto:andrea.dicicco@unicam.it?subject=Reprint%20Request%202026" class="btn btn-secondary" style="font-size: 0.78rem; padding: 4px 10px;">Request Reprint PDF</a>
    </div>
  </div>

  <!-- 2022 Sydney Video Lecture -->
  <div class="pub-item" data-category="recent liquids">
    <span class="badge" style="float: right;">2022</span>
    <h3 class="pub-title">10 minutes talk about our research at the XAFS int. conference (Sydney, July 2022)</h3>
    <div class="pub-authors"><strong>Andrea Di Cicco</strong></div>
    <div class="pub-meta">
      <span>XAFS International Conference &bull; Sydney, Australia</span>
    </div>
    <div class="pub-actions">
      <a href="https://youtu.be/mNK_Iru3bzM" target="_blank" rel="noopener" class="btn btn-primary" style="font-size: 0.78rem; padding: 4px 10px;">
        Watch Video Lecture (YouTube) &rarr;
      </a>
    </div>
  </div>

  <!-- 2018 Krakow Plenary Lecture -->
  <div class="pub-item" data-category="liquids extreme">
    <span class="badge badge-purple" style="float: right;">Plenary Lecture &bull; 2018</span>
    <h3 class="pub-title">X-ray Absorption Spectroscopy investigations of disordered matter</h3>
    <div class="pub-authors"><strong>Andrea Di Cicco</strong></div>
    <div class="pub-meta">
      <span>XAFS 2018 International Conference &bull; Auditorium Maximum, Krakow, Poland</span> &bull;
      <span>IXAS Research Review 15, 2016</span>
    </div>
    <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 6px;">
      Plenary lecture delivered to 1,200 delegates presenting modern multiple-scattering methodologies and structural determination of disordered and extreme matter.
    </p>
    <div class="pub-actions">
      <a href="http://gnxas.unicam.it/immagini/Krakow_ADC_final.pdf" target="_blank" rel="noopener" class="btn btn-outline" style="font-size: 0.78rem; padding: 4px 10px;">View Talk Slides (PDF)</a>
      <a href="http://gnxas.unicam.it/XASLABpapers_free/IXAS_review_15_2016.pdf" target="_blank" rel="noopener" class="btn btn-secondary" style="font-size: 0.78rem; padding: 4px 10px;">IXAS Review Paper</a>
    </div>
  </div>

  <!-- 2017 ACS AMI Battery SEI -->
  <div class="pub-item" data-category="energy">
    <span class="badge badge-success" style="float: right;">Highlight &bull; 2017</span>
    <h3 class="pub-title">Is the Solid Electrolyte Interphase an Extra-Charge Reservoir in Li-Ion Batteries?</h3>
    <div class="pub-authors">S. Javad Rezvani, Roberto Gunnella, Agnieszka Witkowska, Franziska Mueller, Marta Pasqualini, Francesco Nobili, Stefano Passerini, and <strong>Andrea Di Cicco</strong></div>
    <div class="pub-meta">
      <span>ACS Appl. Mater. Interfaces, 9 (5), pp 4570–4576 (2017)</span> &bull;
      <span>DOI: 10.1021/acsami.6b13289</span>
    </div>
    <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 6px;">
      Demonstration of reversible alkyl lithium carbonate formation at the SEI surface, fundamentally expanding the understanding of extra storage capacity in conversion/alloying anodes.
    </p>
    <div class="pub-actions">
      <a href="https://doi.org/10.1021/acsami.6b13289" target="_blank" rel="noopener" class="btn btn-outline" style="font-size: 0.78rem; padding: 4px 10px;">Electronic Journal</a>
      <a href="http://gnxas.unicam.it/XASLABpapers/ACSAMI_9_4570_2017.pdf" target="_blank" rel="noopener" class="btn btn-secondary" style="font-size: 0.78rem; padding: 4px 10px;">Download PDF</a>
    </div>
  </div>

  <!-- 2016 ELETTRA Top Story -->
  <div class="pub-item" data-category="energy">
    <span class="badge badge-warning" style="float: right;">ELETTRA Top Story &bull; 2016</span>
    <h3 class="pub-title">Depth Profiling of the Solid Electrolyte Interphase on Lithium-Ion Electrodes</h3>
    <div class="pub-authors">S. J. Rezvani, R. Gunnella, A. Witkowska, F. Mueller, M. Pasqualini, F. Nobili, S. Passerini, <strong>A. Di Cicco</strong></div>
    <div class="pub-meta">
      <span>ACS Appl. Mater. Interfaces 8, 46, 31654–31660 (2016)</span> &bull;
      <span>DOI: 10.1021/acsami.6b12408</span>
    </div>
    <div class="pub-actions">
      <a href="https://doi.org/10.1021/acsami.6b12408" target="_blank" rel="noopener" class="btn btn-outline" style="font-size: 0.78rem; padding: 4px 10px;">Electronic Journal</a>
      <a href="https://www.elettra.trieste.it/science/top-stories/depth-profiling-of-the-solid-electrolyte-interphase-in-li-ion-electrodes.html" target="_blank" rel="noopener" class="btn btn-primary" style="font-size: 0.78rem; padding: 4px 10px;">ELETTRA Top Story &rarr;</a>
    </div>
  </div>

  <!-- 2015 Nature Sci Rep -->
  <div class="pub-item" data-category="extreme liquids">
    <span class="badge badge-purple" style="float: right;">Nature Sci Rep &bull; 2015</span>
    <h3 class="pub-title">Local structure and short-range order in deeply supercooled and liquid metals</h3>
    <div class="pub-authors">F. Iesari, <strong>A. Di Cicco</strong>, A. Trapananti, et al.</div>
    <div class="pub-meta">
      <span>Sci. Rep. 5, 10188 (2015)</span> &bull;
      <span>Best Poster Award at XAFS 16 (Dr. Fabio Iesari)</span>
    </div>
    <div class="pub-actions">
      <a href="https://doi.org/10.1038/srep10188" target="_blank" rel="noopener" class="btn btn-outline" style="font-size: 0.78rem; padding: 4px 10px;">Nature Scientific Reports</a>
      <a href="http://gnxas.unicam.it/XASLABpapers/ElettraHL2015_21.126.130.pdf" target="_blank" rel="noopener" class="btn btn-secondary" style="font-size: 0.78rem; padding: 4px 10px;">Elettra Highlights 2015</a>
    </div>
  </div>

  <!-- 2014 ESRF Highlights -->
  <div class="pub-item" data-category="extreme">
    <span class="badge" style="float: right;">ESRF Highlight &bull; 2014</span>
    <h3 class="pub-title">High-pressure structural phase transitions in compressed materials</h3>
    <div class="pub-authors"><strong>A. Di Cicco</strong>, A. Trapananti, et al.</div>
    <div class="pub-meta">
      <span>ESRF Highlights 2014, pp. 26-27</span> &bull;
      <span>BM29 Beamline Experiments</span>
    </div>
    <div class="pub-actions">
      <a href="http://www.esrf.eu/Apache_files/Highlights/HL2014.pdf" target="_blank" rel="noopener" class="btn btn-secondary" style="font-size: 0.78rem; padding: 4px 10px;">ESRF Highlights Report</a>
    </div>
  </div>

  <!-- 2003 PRL -->
  <div class="pub-item" data-category="liquids">
    <span class="badge badge-success" style="float: right;">PRL Highlight &bull; 2003</span>
    <h3 class="pub-title">Is there icosahedral ordering in liquid and undercooled metals?</h3>
    <div class="pub-authors"><strong>A. Di Cicco</strong>, A. Trapananti, S. Faggioni, and A. Filipponi</div>
    <div class="pub-meta">
      <span>Phys. Rev. Lett. 91, 135505 (2003)</span> &bull;
      <span>Highlighted on Physical Review Focus 12, 10</span>
    </div>
    <div class="pub-actions">
      <a href="http://dx.doi.org/10.1103/PhysRevLett.91.135505" target="_blank" rel="noopener" class="btn btn-outline" style="font-size: 0.78rem; padding: 4px 10px;">Physical Review Focus</a>
      <a href="http://gnxas.unicam.it/~dicicco/Focus_stampa.html" target="_blank" rel="noopener" class="btn btn-secondary" style="font-size: 0.78rem; padding: 4px 10px;">Press Review</a>
    </div>
  </div>
</div>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
