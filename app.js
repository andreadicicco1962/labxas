/**
 * XAS LAB Redesign - Modern Interactive Engine
 * Handles theme toggling, routing, filtering, copy-to-clipboard, modals, and dynamic data
 */

document.addEventListener('DOMContentLoaded', () => {
  initTheme();
  initNavigation();
  initTabs();
  initCopyButtons();
  initSearch();
  initLightbox();
  initBackToTop();
  initRestrictedModal();
});

/* ==========================================================================
   1. Theme Management (Light / Dark Mode)
   ========================================================================== */
function initTheme() {
  const themeToggleBtn = document.getElementById('theme-toggle-btn');
  const storedTheme = localStorage.getItem('xas_theme');
  const systemPrefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

  const currentTheme = storedTheme || (systemPrefersDark ? 'dark' : 'light');
  document.documentElement.setAttribute('data-theme', currentTheme);
  updateThemeIcon(currentTheme);

  if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', () => {
      const activeTheme = document.documentElement.getAttribute('data-theme');
      const nextTheme = activeTheme === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', nextTheme);
      localStorage.setItem('xas_theme', nextTheme);
      updateThemeIcon(nextTheme);
    });
  }
}

function updateThemeIcon(theme) {
  const icon = document.querySelector('#theme-toggle-btn i') || document.querySelector('#theme-toggle-btn span');
  if (icon) {
    if (theme === 'dark') {
      icon.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>`;
    } else {
      icon.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>`;
    }
  }
}

/* ==========================================================================
   2. Seamless View Navigation & Router
   ========================================================================== */
function initNavigation() {
  const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link, .route-link');
  const sections = document.querySelectorAll('.view-section');
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileDrawer = document.getElementById('mobile-drawer');

  // Handle Hash on page load
  const currentHash = window.location.hash || '#home';
  activateView(currentHash);

  window.addEventListener('hashchange', () => {
    activateView(window.location.hash || '#home');
  });

  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const targetHash = link.getAttribute('href');
      if (targetHash && targetHash.startsWith('#')) {
        e.preventDefault();
        history.pushState(null, null, targetHash);
        activateView(targetHash);
        if (mobileDrawer && mobileDrawer.classList.contains('open')) {
          mobileDrawer.classList.remove('open');
        }
      }
    });
  });

  if (mobileMenuBtn && mobileDrawer) {
    mobileMenuBtn.addEventListener('click', () => {
      mobileDrawer.classList.toggle('open');
    });
  }
}

function activateView(hash) {
  const cleanId = hash.replace('#', '') || 'home';
  const targetSection = document.getElementById(`view-${cleanId}`);

  if (targetSection) {
    document.querySelectorAll('.view-section').forEach(sec => {
      sec.style.display = 'none';
      sec.classList.remove('active');
    });

    targetSection.style.display = 'block';
    targetSection.classList.add('active');

    // Update active nav link classes
    document.querySelectorAll('.nav-link, .mobile-nav-link').forEach(link => {
      const href = link.getAttribute('href');
      if (href === `#${cleanId}`) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });

    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
}

/* ==========================================================================
   3. Tabbed Panels (Courses, Research Themes)
   ========================================================================== */
function initTabs() {
  document.querySelectorAll('.tabs-container').forEach(container => {
    const tabBtns = container.querySelectorAll('.tab-btn');
    const tabPanes = container.querySelectorAll('.tab-pane');

    tabBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const targetTab = btn.getAttribute('data-tab');

        tabBtns.forEach(b => b.classList.remove('active'));
        tabPanes.forEach(p => p.classList.remove('active'));

        btn.classList.add('active');
        const activePane = container.querySelector(`#${targetTab}`);
        if (activePane) {
          activePane.classList.add('active');
        }
      });
    });
  });
}

/* ==========================================================================
   4. Copy to Clipboard
   ========================================================================== */
function initCopyButtons() {
  document.querySelectorAll('.copy-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const codeBlock = btn.closest('.terminal-block').querySelector('code') || btn.closest('.terminal-block').querySelector('.terminal-body');
      if (codeBlock) {
        const textToCopy = codeBlock.innerText.replace(/^\$\s*/gm, '');
        navigator.clipboard.writeText(textToCopy).then(() => {
          const originalText = btn.innerText;
          btn.innerText = 'Copied!';
          btn.style.color = '#10b981';
          setTimeout(() => {
            btn.innerText = originalText;
            btn.style.color = '';
          }, 2000);
        }).catch(err => {
          console.error('Copy failed:', err);
        });
      }
    });
  });
}

/* ==========================================================================
   5. Interactive Search & Publication Filtering
   ========================================================================== */
function initSearch() {
  const searchInput = document.getElementById('global-search');
  const pubSearchInput = document.getElementById('pub-search');
  const categoryFilters = document.querySelectorAll('.category-filter-btn');

  // Keyboard shortcut '/' to focus search
  window.addEventListener('keydown', (e) => {
    if (e.key === '/' && document.activeElement !== searchInput && document.activeElement !== pubSearchInput) {
      e.preventDefault();
      if (searchInput) searchInput.focus();
    }
  });

  if (pubSearchInput) {
    pubSearchInput.addEventListener('input', (e) => {
      filterPublications();
    });
  }

  if (categoryFilters) {
    categoryFilters.forEach(btn => {
      btn.addEventListener('click', () => {
        categoryFilters.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        filterPublications();
      });
    });
  }

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase().trim();
      if (query.length > 2) {
        if (query.includes('didattica') || query.includes('struttura') || query.includes('materia') || query.includes('exam')) {
          location.hash = '#teaching';
        } else if (query.includes('stern') || query.includes('award') || query.includes('prize')) {
          location.hash = '#awards';
        } else if (query.includes('research') || query.includes('lab') || query.includes('project')) {
          location.hash = '#research';
        } else if (query.includes('pub') || query.includes('paper')) {
          location.hash = '#publications';
        }
      }
    });
  }
}

function filterPublications() {
  const query = (document.getElementById('pub-search')?.value || '').toLowerCase().trim();
  const activeCategoryBtn = document.querySelector('.category-filter-btn.active');
  const activeCategory = activeCategoryBtn ? activeCategoryBtn.getAttribute('data-category') : 'all';

  const pubItems = document.querySelectorAll('.pub-item');
  let visibleCount = 0;

  pubItems.forEach(item => {
    const text = item.innerText.toLowerCase();
    const category = item.getAttribute('data-category') || 'general';

    const matchesQuery = query === '' || text.includes(query);
    const matchesCategory = activeCategory === 'all' || category === activeCategory;

    if (matchesQuery && matchesCategory) {
      item.style.display = 'block';
      visibleCount++;
    } else {
      item.style.display = 'none';
    }
  });

  const countBadge = document.getElementById('pub-count-badge');
  if (countBadge) {
    countBadge.innerText = `${visibleCount} publications shown`;
  }
}

/* ==========================================================================
   6. Lightbox Modal for Photo Gallery
   ========================================================================== */
function initLightbox() {
  const modal = document.getElementById('lightbox-modal');
  const modalImg = document.getElementById('lightbox-img');
  const modalCaption = document.getElementById('lightbox-caption');
  const closeBtn = document.getElementById('lightbox-close');

  if (!modal) return;

  document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('click', () => {
      const img = item.querySelector('img');
      const caption = item.querySelector('.gallery-caption')?.innerText || '';
      const year = item.querySelector('.gallery-year')?.innerText || '';

      if (img && modalImg) {
        modalImg.src = img.src;
        modalCaption.innerHTML = `<strong>${caption}</strong> <span style="color:var(--brand-primary); margin-left:8px;">${year}</span>`;
        modal.classList.add('open');
      }
    });
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      modal.classList.remove('open');
    });
  }

  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.remove('open');
    }
  });
}

/* ==========================================================================
   7. Back to Top Button
   ========================================================================== */
function initBackToTop() {
  const btn = document.getElementById('back-to-top-btn');
  if (!btn) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      btn.classList.add('visible');
    } else {
      btn.classList.remove('visible');
    }
  });

  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

/* ==========================================================================
   8. Restricted Area Modal
   ========================================================================== */
function initRestrictedModal() {
  const modal = document.getElementById('restricted-modal');
  const openBtns = document.querySelectorAll('.open-restricted-modal');
  const closeBtn = document.getElementById('restricted-close');

  if (!modal) return;

  openBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      modal.classList.add('open');
    });
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      modal.classList.remove('open');
    });
  }

  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.remove('open');
    }
  });
}
