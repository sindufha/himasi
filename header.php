<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMASI IT Mojosari</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://itmnganjuk.ac.id/wp-content/uploads/2026/02/ITM-Nganjuk.png" />
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- AOS (Animate On Scroll) CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts: Ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- Custom CSS variables and styles matching React's theme -->
    <style>
        :root {
            --brand-primary: #002b5b;
            --brand-pinkStart: #002b5b;
            --brand-pinkEnd: #0f345f;
            --brand-orange: #ea580c;
            --brand-navy: #0f345f;
            --brand-gray: #2d3748; /* Digelapkan untuk kontras yang jauh lebih tinggi dan mudah dibaca */
            --brand-lightBg: #f9fafb;
        }
        body {
            font-family: 'Ubuntu', sans-serif;
            background-color: var(--brand-lightBg);
            color: var(--brand-primary);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }
        /* Styling links & custom buttons */
        .bg-brand-primary { background-color: var(--brand-primary) !important; }
        .text-brand-primary { color: var(--brand-primary) !important; }
        .bg-brand-orange { background-color: var(--brand-orange) !important; }
        .text-brand-orange { color: var(--brand-orange) !important; }
        .text-brand-gray { color: var(--brand-gray) !important; }
        
        .btn-brand-orange {
            background-color: var(--brand-orange);
            color: #ffffff;
            border: none;
            border-radius: 50px;
            padding: 12px 28px;
            font-weight: 700;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-brand-orange:hover {
            background-color: #cb5633;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(234, 88, 12, 0.25);
        }
        .btn-brand-outline {
            border: 2px solid #ffffff;
            background-color: transparent;
            color: #ffffff;
            border-radius: 50px;
            padding: 12px 28px;
            font-weight: 700;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-brand-outline:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            transform: translateY(-2px);
        }
        .btn-brand-outline-primary {
            border: 2px solid var(--brand-primary);
            background-color: transparent;
            color: var(--brand-primary);
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: 700;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-brand-outline-primary:hover {
            background-color: var(--brand-primary);
            color: #ffffff;
            transform: translateY(-2px);
        }
        
        /* Navbar navigation links */
        .nav-link {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #ffffff !important;
            transition: color 0.2s ease;
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 8px;
            background-color: #f2996a;
            transition: width 0.2s ease;
        }
        .nav-link:hover::after, .nav-link.active::after {
            width: calc(100% - 16px);
        }
        .nav-link:hover, .nav-link.active {
            color: #f2996a !important;
        }
        
        /* Layout structures */
        .navbar {
            transition: all 0.3s ease;
        }
        .navbar.scrolled {
            padding-top: 10px !important;
            padding-bottom: 10px !important;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        }
        .hero-section {
            background-color: var(--brand-primary);
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, #ff698d 0%, transparent 45%);
            opacity: 0.2;
            pointer-events: none;
        }
        .card-custom {
            background-color: #ffffff;
            border: 1px solid rgba(58, 79, 102, 0.1);
            border-radius: 32px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-custom:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px rgba(58, 79, 102, 0.08);
        }
        .footer {
            background-color: var(--brand-primary);
            color: #ffffff;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            border-top-left-radius: 40px;
            border-top-right-radius: 40px;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- Header Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg bg-brand-primary border-bottom border-white-10 sticky-top py-4">
        <div class="container px-4">
            <a class="navbar-brand d-flex align-items-center gap-3" href="index.php">
                <img src="https://itmnganjuk.ac.id/wp-content/uploads/2026/02/ITM-Nganjuk.png" alt="ITM Logo" style="height: 40px; width: auto;">
                <div class="d-flex flex-column text-white">
                    <span class="fs-5 fw-bold mb-0">HIMASI</span>
                    <span style="font-size: 11px; opacity: 0.95; letter-spacing: 0.02em;">Institut Teknologi Mojosari</span>
                </div>
            </a>
            <button class="navbar-toggler text-white border-white-10 bg-white-5 p-2 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid rgba(255,255,255,0.1);">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-3 mt-3 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" href="about.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'program-kerja.php') ? 'active' : ''; ?>" href="program-kerja.php">Program Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'berita.php') ? 'active' : ''; ?>" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'kontak.php') ? 'active' : ''; ?>" href="kontak.php">Kontak</a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a href="kontak.php" class="btn-brand-orange text-decoration-none">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
