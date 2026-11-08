<?php
/**
 * XAS LAB - University of Camerino
 * Configuration & Core Settings (HTTPS / Advanced Security)
 */

// Advanced Security Settings (HTTPS Enforced)
if (function_exists('ini_set')) {
    @ini_set('session.cookie_httponly', '1');
    @ini_set('session.cookie_secure', '1');
    @ini_set('session.use_only_cookies', '1');
    @ini_set('session.cookie_samesite', 'Strict');
}

// Basic Site Information
define('SITE_NAME', 'XAS LAB');
define('SITE_UNIVERSITY', 'University of Camerino');
define('SITE_DEPARTMENT', 'Sezione di Fisica, Scuola di Scienze e Tecnologie');
define('SITE_TAGLINE', 'Condensed Matter Physics & X-ray Absorption Spectroscopy');
define('SITE_AUTHOR', 'Prof. Andrea Di Cicco');
define('SITE_EMAIL', 'andrea.dicicco@unicam.it');
define('SITE_PHONE', '+39-0737-402535');
define('SITE_ADDRESS', 'Via Madonna delle Carceri, 9, I-62032 Camerino (MC), Italy');
define('SITE_COORDINATES', '43°08\'23.7"N 13°04\'03.9"E');

// Official Portals
define('SITE_URL', 'https://gnxas.unicam.it');
define('GNXAS_GITHUB_URL', 'https://gnxas.github.io/#intro');

// HTTPS Enforced Base URL
$protocol = "https://";
$host = $_SERVER['HTTP_HOST'] ?? 'gnxas.unicam.it';
$scriptDir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
$baseDir = rtrim(str_replace('\\', '/', $scriptDir), '/');
if (basename($baseDir) === 'pag_research' || basename($baseDir) === '~dicicco' || basename($baseDir) === '%7Edicicco') {
    $baseDir = dirname($baseDir);
}
$baseDir = rtrim($baseDir, '/');
define('BASE_URL', $baseDir);

// Navigation Structure
$navItems = [
    'home'         => ['label' => 'Home',          'url' => 'index.php'],
    'research'     => ['label' => 'Research',      'url' => 'pag_research.php'],
    'gnxas'        => ['label' => 'GNXAS',         'url' => 'pag_gnxas.php', 'external' => 'https://gnxas.github.io/#intro'],
    'teaching'     => ['label' => 'Teaching',      'url' => 'pag_teaching.php'],
    'publications' => ['label' => 'Publications',  'url' => 'pag_research/list_pub.php'],
    'awards'       => ['label' => 'Press & Awards','url' => 'pag_press_awards.php'],
    'photo'        => ['label' => 'Life & Photos', 'url' => 'pag_photo.php'],
    'location'     => ['label' => 'Location',      'url' => 'pag_map.php'],
    'links'        => ['label' => 'Links',         'url' => 'pag_links.php'],
    'dicicco'      => ['label' => 'Prof. Di Cicco','url' => '~dicicco/index.php']
];

/**
 * Generate a correct relative path to an asset from any page level
 */
function asset($path, $pageDepth = 0) {
    $prefix = str_repeat('../', $pageDepth);
    return $prefix . ltrim($path, '/');
}

/**
 * Check if a menu item is active
 */
function isActiveNav($key, $currentPage = '') {
    return ($key === $currentPage) ? 'active' : '';
}
?>