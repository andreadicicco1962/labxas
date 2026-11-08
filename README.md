# XAS LAB Website Redesign (PHP Web Server Edition)

Modern, accessible, responsive, and modular redesign of the official **XAS LAB website** ([gnxas.unicam.it](http://gnxas.unicam.it)), fully adapted for a modern **PHP Web Server** (Apache with PHP 7.4+ / PHP 8.x).

Maintained for **Prof. Andrea Di Cicco** and the Condensed Matter Physics group at the University of Camerino (UNICAM).

---

## 🌟 Key Features & PHP Architecture

1. **Modular PHP Component Architecture**:
   - Central configuration in [`config.php`](config.php) managing site constants, dynamic base URL detection, and centralized navigation registry.
   - Global layout components: [`includes/header.php`](includes/header.php) and [`includes/footer.php`](includes/footer.php).
   - Reusable `asset($path, $pageDepth)` helper for seamless relative asset resolution from root and subdirectories.

2. **Full Scope Without GNXAS Software Subsection**:
   - Centers the website squarely on the **XAS Laboratory**: scientific research, active grants, university teaching, publications, international distinctions, group life, and Prof. Di Cicco's academic profile.
   - All GNXAS software download packages, registration forms, and sub-manuals have been excluded as requested.

3. **Apache `.htaccess` Rewrites & Backward Compatibility**:
   - Automatic rewriting of legacy `.html` requests to corresponding `.php` scripts so external bookmarks and search engine links continue working without 404s.
   - Friendly 301 redirection of legacy `pag_gnxas.*` links directly to `pag_research.php`.
   - Security headers (`X-Content-Type-Options`, `X-Frame-Options`, `Referrer-Policy`) and performance caching rules.

4. **Publications & Research Highlights Explorer**:
   - Interactive live search and filter by category: *Energy & Batteries*, *High Pressure & Extreme Conditions*, *Liquids & Disordered*, and *Recent (2022–2026)*.
   - Highlights showcase (Krakow 2018 Plenary Lecture, ACS AMI 2017 Battery SEI paper, Sydney 2022 Video Lecture, Physical Review Letters liquid metals discovery).
   - Direct DOI and reprint request triggers.

5. **Research, Facilities & Grants**:
   - Dedicated sections for active grants: **PRIN 2022 E-ICES** (190 k€), **PNRR VITALITY** (Spoke 9), **PNRR NQSTI** (Spoke 5), and European FP7 **SIRBATT**.
   - Tour of the **120 m² in-house laboratory** (Diamond Anvil Cells, Paris-Edinburgh press, high-T furnaces, powder XRD, microRaman, FE-SEM).
   - Beamline experimental reports archive (LURE, ESRF BM29, ELETTRA).

6. **Teaching (Attività Didattica)**:
   - Complete 8-part syllabus for **Struttura della Materia** (Laurea Triennale in Fisica, 9 CFU).
   - Hands-on modules for **Advanced Physics Laboratory** (Master Degree in Physics, 6 credits in English).
   - Thesis proposals (Bachelor, Master, PhD) and Erasmus+ exchange information.

7. **Press, Awards & Photo Collection**:
   - Highlighting the **IXAS Edward Stern Prize (2015)** and the **SILS Career Recognition Award (2025)** to Prof. Andrea Di Cicco.
   - Best Poster Award to Dr. Fabio Iesari.
   - National press coverage (*Il Sole 24 Ore*, *Le Scienze*, *Il Secolo XIX*, *Corriere Adriatico*).
   - Interactive photo gallery with lightbox modal for historic conference photos and synchrotron beamlines.

8. **Prof. Andrea Di Cicco Academic Profile**:
   - Modern academic curriculum vitae, citations (10,000+ citations, h-index 51), and institutional roles.
   - PDF downloads of historical theses (PhD 1991, Master 1987, Liceo 1981, Middle school 1976).
   - Cultural archives: Antonio Di Cicco literary portal, Elena Becchi Di Cicco memorial, and theater music recordings (1979–1980).

---

## 📁 Directory Structure

```text
gnxas-redesign/
├── .htaccess                       # Apache rewrites (.html -> .php), legacy redirects, security headers
├── config.php                      # Core site settings, dynamic base URL detection, nav registry
├── includes/
│   ├── header.php                  # Global HTML <head>, navbar, theme switch, search, mobile drawer
│   └── footer.php                  # Global footer, dynamic year, modals (restricted & lightbox), app.js
├── index.php                       # PHP Portal Home: Hero, metrics, research lines, team, sponsors
├── pag_research.php                # PHP Research Page: 3 scientific pillars, PRIN/PNRR grants, 120 m² lab
├── pag_teaching.php                # PHP Teaching Page: Struttura della Materia syllabus, Advanced Lab
├── pag_press_awards.php            # PHP Press & Awards: Stern Prize, SILS Award, press reviews
├── pag_photo.php                   # PHP Photo Collection: Historical conferences & beamline campaigns
├── pag_map.php                     # PHP Location Guide: Campus directions, travel info, GPS coordinates
├── pag_links.php                   # PHP Links Directory: Global synchrotrons, societies, databases
├── pag_research/
│   └── list_pub.php                # PHP Publications: Filterable 250+ papers, DOIs, slides, videos
├── ~dicicco/
│   └── index.php                   # PHP Academic Profile: Prof. Di Cicco CVs, historical theses repository
├── css/
│   └── modern.css                  # Responsive design system with Light and Dark modes
├── js/
│   └── app.js                      # Client interactive logic (Theme toggle, filter, lightbox, drawer)
└── assets/
    └── images/                     # Local photo assets and figures
```

---

## 🚀 Deployment to the Production PHP Server

To deploy to `srv-fisica-web.unicam.it`:

### 1. Direct Transfer via `rsync`
```bash
rsync -avz --exclude='.git' /home/dicicco/.gemini/antigravity/scratch/gnxas-redesign/ dicicco@srv-fisica-web.unicam.it:/var/www/html/gnxas/
```

### 2. Tarball Deployment
```bash
cd /home/dicicco/.gemini/antigravity/scratch/gnxas-redesign
tar -czvf /home/dicicco/gnxas_php_redesign.tar.gz .
```
Upload `gnxas_php_redesign.tar.gz` and extract into the web root directory of the server.
