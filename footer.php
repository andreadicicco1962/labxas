<?php
/**
 * Global Footer Component (HTTPS Enforced & GNXAS Reintegrated)
 */
$pageDepth = $pageDepth ?? 0;
?>
  </main>

  <!-- Restricted Area Modal -->
  <div id="restricted-modal" class="modal-backdrop">
    <div class="modal-box" style="max-width: 480px;">
      <div class="modal-header">
        <h3 style="font-size: 1.1rem; font-weight: 700; color: #ef4444; display: flex; align-items: center; gap: 8px;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
          Restricted Area Access
        </h3>
        <button id="restricted-close" class="modal-close">&times;</button>
      </div>
      <div class="modal-body">
        <p style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 18px;">
          This internal partition is designated strictly for active research personnel, graduate thesis students, and collaborators of the XAS Laboratory at UNICAM.
        </p>

        <div style="background-color: var(--bg-tertiary); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 16px; margin-bottom: 20px;">
          <h4 style="font-size: 0.85rem; font-weight: 700; color: var(--text-primary); margin-bottom: 6px;">Authentication Required</h4>
          <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.5;">
            Access to beamtime raw data, proprietary calculation scripts, and internal laboratory server logs requires Apache HTTP Basic Authentication credentials over HTTPS.
          </p>
        </div>

        <div style="display: flex; justify-content: flex-end; gap: 10px;">
          <a href="https://gnxas.unicam.it/XASLABrestricted/pag_restricted.html" class="btn btn-primary" style="background: #ef4444;">
            Proceed to Server Login &rarr;
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Lightbox Modal -->
  <div id="lightbox-modal" class="modal-backdrop">
    <div class="modal-box" style="max-width: 900px; background: #000; border: none;">
      <div style="position: absolute; top: 12px; right: 12px; z-index: 10;">
        <button id="lightbox-close" class="modal-close" style="background: rgba(255,255,255,0.2); color:#fff;">&times;</button>
      </div>
      <div style="text-align: center; padding: 10px;">
        <img id="lightbox-img" src="" alt="Enlarged view" style="max-height: 70vh; margin: 0 auto; object-fit: contain;">
        <div id="lightbox-caption" style="color: #fff; padding: 14px 20px; font-size: 0.95rem;"></div>
      </div>
    </div>
  </div>

  <!-- Back to Top Button -->
  <button id="back-to-top-btn" class="back-to-top" title="Back to Top" aria-label="Back to Top">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15"></polyline></svg>
  </button>

  <!-- Modern Site Footer -->
  <footer class="site-footer">
    <div class="footer-container">
      <div class="footer-top">
        <div>
          <div class="brand-wrapper">
            <div class="brand-logo-icon">XAS</div>
            <div class="brand-text">
              <div class="brand-title">XAS LAB <span>UNICAM</span></div>
              <div class="brand-subtitle"><?= htmlspecialchars(SITE_UNIVERSITY) ?> &bull; Italy</div>
            </div>
          </div>
          <p class="footer-brand-desc">
            X-ray Absorption Spectroscopy Laboratory, <?= htmlspecialchars(SITE_DEPARTMENT) ?>, <?= htmlspecialchars(SITE_UNIVERSITY) ?>. Research in extreme conditions, GNXAS software suite, and energy materials.
          </p>
          <div style="margin-top: 14px;">
            <a href="https://gnxas.github.io/#intro" target="_blank" rel="noopener" class="badge badge-purple" style="font-size: 0.8rem; padding: 6px 12px; text-decoration: none;">
              GNXAS Official Portal &rarr; gnxas.github.io/#intro
            </a>
          </div>
        </div>

        <div>
          <h4 class="footer-col-title">Research &amp; Software</h4>
          <ul class="footer-links">
            <li><a href="<?= asset('pag_gnxas.php', $pageDepth) ?>" class="footer-link">GNXAS Software Overview</a></li>
            <li><a href="https://gnxas.github.io/#intro" target="_blank" rel="noopener" class="footer-link">GNXAS GitHub Portal &nearr;</a></li>
            <li><a href="<?= asset('pag_research.php', $pageDepth) ?>" class="footer-link">Matter Under Extreme Conditions</a></li>
            <li><a href="<?= asset('pag_research.php', $pageDepth) ?>" class="footer-link">Energy Nanomaterials &amp; Batteries</a></li>
            <li><a href="<?= asset('pag_research.php', $pageDepth) ?>" class="footer-link">PRIN 2022 E-ICES Project</a></li>
            <li><a href="<?= asset('pag_research.php', $pageDepth) ?>" class="footer-link">120 m&sup2; Lab Facilities</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Teaching &amp; Students</h4>
          <ul class="footer-links">
            <li><a href="<?= asset('pag_teaching.php', $pageDepth) ?>" class="footer-link">Struttura della Materia (9 CFU)</a></li>
            <li><a href="<?= asset('pag_teaching.php', $pageDepth) ?>" class="footer-link">Advanced Physics Lab (6 CFU)</a></li>
            <li><a href="<?= asset('pag_teaching.php', $pageDepth) ?>" class="footer-link">Bachelor &amp; Master Theses</a></li>
            <li><a href="<?= asset('pag_teaching.php', $pageDepth) ?>" class="footer-link">Erasmus+ Exchanges</a></li>
            <li><a href="https://didattica.unicam.it" target="_blank" rel="noopener" class="footer-link">Exam Booking Portal</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Directory</h4>
          <ul class="footer-links">
            <li><a href="<?= asset('pag_research/list_pub.php', $pageDepth) ?>" class="footer-link">Publications (250+ Papers)</a></li>
            <li><a href="<?= asset('pag_press_awards.php', $pageDepth) ?>" class="footer-link">IXAS Stern Prize 2015</a></li>
            <li><a href="<?= asset('pag_press_awards.php', $pageDepth) ?>" class="footer-link">SILS Career Award 2025</a></li>
            <li><a href="<?= asset('pag_map.php', $pageDepth) ?>" class="footer-link">Travel to Camerino</a></li>
            <li><a href="<?= asset('~dicicco/index.php', $pageDepth) ?>" class="footer-link">Prof. Andrea Di Cicco</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; 1996&ndash;<?= date('Y') ?> XAS Group, <?= htmlspecialchars(SITE_UNIVERSITY) ?>. Responsible: <?= htmlspecialchars(SITE_AUTHOR) ?>.
          <br>
          <span style="font-size:0.75rem;">Maintained at <?= htmlspecialchars(SITE_DEPARTMENT) ?>, <?= htmlspecialchars(SITE_ADDRESS) ?>. Advanced Security (HTTPS Enforced).</span>
        </div>
        <div class="footer-badges">
          <a href="https://www.unicam.it" target="_blank" rel="noopener" class="badge">UNICAM</a>
          <a href="https://fisica.unicam.it" target="_blank" rel="noopener" class="badge">Physics Division</a>
          <a href="https://gnxas.github.io/#intro" target="_blank" rel="noopener" class="badge badge-purple">GNXAS on GitHub</a>
          <a href="https://xrayabsorption.org" target="_blank" rel="noopener" class="badge">IXAS</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?= asset('js/app.js', $pageDepth) ?>"></script>
</body>
</html>
