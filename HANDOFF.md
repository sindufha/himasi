# HIMASI IT Mojosari Website Design & Implementation - Handoff

## Goal
To implement a modern, responsive web portal for the Himpunan Mahasiswa Sistem Informasi (HIMASI) at Institut Teknologi Mojosari (ITM). The site has been migrated to a lightweight stack: **HTML5, CSS3, PHP, Bootstrap 5, and Vanilla JS**. All dynamic, instant features and animations have been preserved without the need for Node.js.

## Completed Work

### 1. Workspace & Architecture
- **Stack**: Pure HTML5, CSS3, PHP (for layout templating and page logic), and Bootstrap 5 (via CDN).
- **Icons**: Loaded dynamically using Bootstrap Icons.
- **Layout Architecture**: Utilizes PHP `include` directives to reuse `header.php` and `footer.php` across all views.
- **Interactivity**: Powered by Vanilla JS client-side script blocks (no external heavy frameworks, no build steps).
- **Animations**: Entrance and scroll animations are powered by **AOS (Animate On Scroll)** and **Animate.css** via CDN.

### 2. Branding & Styling
- **Colors**:
  - Primary Background / Dark Navy: `#002b5b`
  - Accent Orange: `#ea580c`
  - Contrast Slate: `#3a4f66`
  - Light Neutral Background: `#f9fafb`
- **Typography**: The **Ubuntu** font family (loaded via Google Fonts).
- **Styling Method**: Custom variables and resets in `header.php`, structured utility classes from Bootstrap 5, and hover transitions.

### 3. Page Templates
- `header.php`: Global navigation navbar featuring the official ITM logo, dynamic active state checking based on the current page file name, responsive mobile toggle menu, and scrolling pad-shrink effect.
- `footer.php`: Unified site footer providing social links, contact coordinates, a newsletter subscription box, and AOS initializer scripts.
- `index.php`: Home page featuring scroll animations (AOS), a hero showcase banner, stats counters, division overview cards, latest news ticker, and registration CTA.
- `about.php`: Organization profile, Visi & Misi statement boards, and a structured cabinet staff grid.
- `program-kerja.php`: Full work programs log featuring **Instant Filtering** via Vanilla JavaScript. Clicking tabs filters programs immediately on the client-side without page reload.
- `berita.php`: Clean news index that supports **Realtime Instant Search & Category Filter** via Vanilla JavaScript. Typing in the search input or clicking categories filters cards immediately without page reload.
- `kontak.php`: Operational contact form that submits data via **AJAX (Fetch API)** to `proses-kontak.php`. Displays an instant success notification on submission without page reload.
- `proses-kontak.php`: Backend PHP processor that validates form fields and responds with JSON status for the AJAX form.

## Current File Structure
```
.
├── public/                  # Assets and favicon icons
├── header.php               # Reusable page header, meta tags, and global CSS
├── footer.php               # Reusable page footer, script bundles, and AOS
├── index.php                # Homepage with scroll animations
├── about.php                # About page
├── program-kerja.php        # Client-side instant filtered work programs log
├── berita.php               # Realtime searchable and filtered news index
├── kontak.php               # AJax contact form page
├── proses-kontak.php        # JSON form submit handler
├── .gitignore               # Ignored local config directories
└── HANDOFF.md               # Hand-off documentation
```

## How to Run & Collaborate
1. Ensure a local PHP server is installed (such as XAMPP, Laragon, or PHP CLI).
2. Start the local server inside the workspace root:
   ```bash
   php -S localhost:8000
   ```
3. Open `http://localhost:8000` in your browser.
4. To collaborate, check out the files, modify, and commit. No build step required!
