<?php
/**
 * Global Header Component (HTTPS Enforced & GNXAS Reintegrated)
 */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config.php';
}

$pageDepth = $pageDepth ?? 0;
$currentPage = $currentPage ?? 'home';
$pageTitle = $pageTitle ?? (SITE_NAME . ' | ' . SITE_UNIVERSITY . ' - ' . SITE_TAGLINE);
$pageDescription = $pageDescription ?? 'X-ray Absorption Spectroscopy Laboratory at the University of Camerino (Prof. A. Di Cicco). Condensed matter physics, extreme conditions, GNXAS software suite, and energy materials research.';
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta name="keywords" content="EXAFS, XAS, GNXAS, XAFS, XRD, EDXD, synchrotron radiation, condensed matter, high-pressure, physics, Camerino, Andrea Di Cicco, Angela Trapananti">
  <meta name="author" content="<?= htmlspecialchars(SITE_AUTHOR) ?> - <?= htmlspecialchars(SITE_UNIVERSITY) ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://gnxas.unicam.it">

  <!-- Typography & Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= asset('css/modern.css', $pageDepth) ?>">
  <link rel="shortcut icon" href="https://gnxas.unicam.it/icons/XAS1.ico">
</head>
<body>

  <!-- Top Announcement Bar -->
  <aside class="announcement-bar" aria-label="Announcement">
    <span class="announcement-pill">XAS LAB</span>
    <span>Condensed Matter Physics Group &bull; <?= htmlspecialchars(SITE_UNIVERSITY) ?></span>
    <span style="opacity: 0.5;">|</span>
    <span>GNXAS Suite Official Documentation has moved to GitHub Pages:</span>
    <a href="https://gnxas.github.io/#intro" target="_blank" rel="noopener" style="font-weight: 700; text-decoration: underline;">gnxas.github.io/#intro &rarr;</a>
  </aside>

  <!-- Sticky Modern Header -->
  <header class="site-header">
    <div class="header-container">
      <a href="<?= asset('index.php', $pageDepth) ?>" class="brand-wrapper">
        <div class="brand-logo-icon">XAS</div>
        <div class="brand-text">
          <div class="brand-title">XAS LAB <span>UNICAM</span></div>
          <div class="brand-subtitle">Condensed Matter Physics &bull; Physics Division</div>
        </div>
      </a>

      <!-- Desktop Nav -->
      <nav class="main-nav" aria-label="Primary Navigation">
        <?php foreach ($navItems as $key => $item): ?>
          <a href="<?= asset($item['url'], $pageDepth) ?>" class="nav-link <?= isActiveNav($key, $currentPage) ?>">
            <?= htmlspecialchars($item['label']) ?>
            <?php if ($key === 'gnxas'): ?>
              <span class="badge badge-purple" style="font-size: 0.65rem; padding: 2px 6px; margin-left: 2px;">suite</span>
            <?php endif; ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <!-- Right Header Actions -->
      <div class="header-actions">
        <!-- Global Search Input -->
        <div class="search-container" style="max-width: 170px;">
          <svg class="search-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <input type="text" id="global-search" class="search-input" placeholder="Search..." aria-label="Global Search">
          <span class="search-badge-kbd">/</span>
        </div>

        <!-- Dark / Light Theme Toggle -->
        <button id="theme-toggle-btn" class="btn-icon" title="Toggle Theme" aria-label="Toggle dark/light theme">
          <span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
          </span>
        </button>

        <!-- Restricted Area -->
        <a href="https://gnxas.unicam.it/XASLABrestricted/pag_restricted.html" class="btn-restricted open-restricted-modal" title="Restricted Area">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
          Restricted
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button id="mobile-menu-btn" class="mobile-menu-btn" aria-label="Toggle mobile menu">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer -->
  <div id="mobile-drawer" class="mobile-drawer">
    <?php foreach ($navItems as $key => $item): ?>
      <a href="<?= asset($item['url'], $pageDepth) ?>" class="mobile-nav-link <?= isActiveNav($key, $currentPage) ?>">
        <span><?= htmlspecialchars($item['label']) ?></span> &rarr;
      </a>
    <?php endforeach; ?>
    <a href="https://gnxas.github.io/#intro" target="_blank" rel="noopener" class="mobile-nav-link" style="color: var(--brand-primary); font-weight: 700;">
      <span>GNXAS GitHub Portal (External)</span> ↗
    </a>
    <a href="https://gnxas.unicam.it/XASLABrestricted/pag_restricted.html" class="mobile-nav-link open-restricted-modal" style="color:#ef4444;">
      <span>Restricted Lab Area</span> &rarr;
    </a>
  </div>

  <main class="main-wrapper">
