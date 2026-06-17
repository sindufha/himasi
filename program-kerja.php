<?php include 'header.php'; ?>

<!-- Page Header -->
<section class="bg-brand-primary py-5 text-white position-relative overflow-hidden" style="min-height: 250px; background: linear-gradient(135deg, #002b5b, #0f345f);">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: radial-gradient(circle at top right, #ff698d 0%, transparent 30%); opacity: 0.15; pointer-events: none;"></div>
    <div class="container px-4 py-4 relative z-2" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="index.php" class="text-light text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-brand-orange" aria-current="page">Program Kerja</li>
            </ol>
        </nav>
        <h1 class="display-5 fw-bold mb-3">Program Kerja HIMASI</h1>
        <p class="lead text-light mb-0 max-w-2xl" style="line-height: 1.6;">
            Daftar kegiatan, seminar, kompetisi, dan program pemberdayaan mahasiswa yang diusung oleh divisi HIMASI ITM.
        </p>
    </div>
</section>

<!-- Filter & List Section -->
<section class="py-5 bg-white">
    <div class="container px-4 py-5">
        
        <?php
        $divisions = [
            'Semua',
            'Pendidikan & Riset',
            'Hubungan Masyarakat',
            'Minat & Bakat',
            'Komunikasi & Informasi'
        ];

        $programs = [
            [
                'title' => 'Workshop Data Science 101',
                'divisi' => 'Pendidikan & Riset',
                'description' => 'Pelatihan analisis data dasar menggunakan Python dan Pandas untuk melatih nalar data mahasiswa aktif ITM.',
                'status' => 'Done',
                'date' => '10 Mei 2026'
            ],
            [
                'title' => 'Mojosari Programming Camp',
                'divisi' => 'Pendidikan & Riset',
                'description' => 'Boot camp pemrograman intensif 2 minggu guna memperkuat kesiapan kompetisi nasional mahasiswa SI.',
                'status' => 'Upcoming',
                'date' => '12 Juli 2026'
            ],
            [
                'title' => 'Lomba Karya Tulis Ilmiah Nasional',
                'divisi' => 'Pendidikan & Riset',
                'description' => 'Kompetisi riset ilmiah bertema optimalisasi teknologi informasi untuk bisnis sirkular berkelanjutan.',
                'status' => 'Done',
                'date' => '24 Maret 2026'
            ],
            [
                'title' => 'Kunjungan Industri Tech Giant',
                'divisi' => 'Hubungan Masyarakat',
                'description' => 'Studi banding mahasiswa Sistem Informasi untuk melihat ekosistem kerja engineer dan analyst profesional secara langsung.',
                'status' => 'Done',
                'date' => '18 April 2026'
            ],
            [
                'title' => 'HIMASI Alumni Connect & Sharing',
                'divisi' => 'Hubungan Masyarakat',
                'description' => 'Temu alumni SI ITM untuk sharing peluang karir, tips review CV, dan tips lolos interview tech company.',
                'status' => 'Upcoming',
                'date' => '28 Juni 2026'
            ],
            [
                'title' => 'SI Cup: E-Sport & Futsal Tournament',
                'divisi' => 'Minat & Bakat',
                'description' => 'Turnamen olahraga internal futsal dan kompetisi e-sport antar angkatan mahasiswa Sistem Informasi IT Mojosari.',
                'status' => 'Done',
                'date' => '04 Februari 2026'
            ],
            [
                'title' => 'SI Entrepreneurship Day',
                'divisi' => 'Minat & Bakat',
                'description' => 'Bazaar dan pameran ide wirausaha digital kreatif mahasiswa SI untuk memicu jiwa mandiri wirausaha.',
                'status' => 'Upcoming',
                'date' => '15 Agustus 2026'
            ],
            [
                'title' => 'Media Branding & Podcast HIMASI',
                'divisi' => 'Komunikasi & Informasi',
                'description' => 'Pembuatan konten bincang seru seputar perkuliahan dan tips teknologi yang dirilis di YouTube dan Spotify.',
                'status' => 'Done',
                'date' => '20 Januari 2026'
            ],
            [
                'title' => 'Buletin Bulanan HIMASI',
                'divisi' => 'Komunikasi & Informasi',
                'description' => 'Distribusi buletin bulanan digital berisi rangkuman info akademik, tips pemrograman, dan rekap program kerja.',
                'status' => 'Upcoming',
                'date' => '30 Juni 2026'
            ]
        ];
        ?>

        <!-- Filter Bar -->
        <div class="d-flex flex-column gap-3 mb-5" data-aos="fade-up">
            <div class="d-flex align-items-center gap-2 text-uppercase fw-bold text-brand-primary" style="font-size: 14px; letter-spacing: 0.05em;">
                <i class="bi bi-filter-left text-brand-orange fs-5"></i>
                <span>Filter Berdasarkan Divisi</span>
            </div>

            <!-- Desktop Tabs -->
            <div class="d-none d-md-flex flex-wrap gap-2" id="divisiFilterTabs">
                <?php foreach ($divisions as $div): ?>
                    <button class="btn rounded-pill px-4 py-2 fw-bold fs-7 filter-btn <?php echo ($div === 'Semua') ? 'btn-brand-orange text-white' : 'btn-light text-muted border border-secondary border-opacity-10'; ?>" onclick="filterPrograms('<?php echo $div; ?>', this)">
                        <?php echo $div; ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Mobile Dropdown -->
            <div class="d-md-none">
                <select id="divisiFilterSelect" onchange="filterPrograms(this.value)" class="form-select bg-light border-0 py-3 px-4 rounded-4 fw-bold">
                    <?php foreach ($divisions as $div): ?>
                        <option value="<?php echo $div; ?>"><?php echo $div; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <!-- Program Cards Grid -->
        <div class="row g-4" id="programsGrid">
            <?php foreach ($programs as $index => $prog): ?>
                <?php $is_done = ($prog['status'] === 'Done'); ?>
                <!-- program-card has data-divisi attribute for Vanilla JS filtering -->
                <div class="col-md-6 col-lg-4 program-card" data-divisi="<?php echo $prog['divisi']; ?>" data-aos="fade-up" data-aos-delay="<?php echo ($index % 3) * 100; ?>">
                    <div class="card card-custom h-100 p-4 d-flex flex-column justify-content-between">
                        <div class="d-flex flex-column gap-3">
                            <!-- Status & Divisi Tag -->
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge <?php echo $is_done ? 'bg-success bg-opacity-10 text-success' : 'bg-warning bg-opacity-10 text-warning'; ?> px-3 py-1.5 rounded-pill fw-bold">
                                    <i class="bi <?php echo $is_done ? 'bi-check-circle-fill' : 'bi-clock-fill'; ?> me-1"></i>
                                    <?php echo $is_done ? 'Selesai' : 'Mendatang'; ?>
                                </span>
                                
                                <span class="text-brand-orange fw-bold text-uppercase fs-7 d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-tag-fill"></i>
                                    <?php echo $prog['divisi']; ?>
                                </span>
                            </div>

                            <!-- Title -->
                            <h4 class="fw-bold mb-0 text-brand-primary lh-base">
                                <?php echo $prog['title']; ?>
                            </h4>

                            <!-- Description -->
                            <p class="text-brand-gray mb-0 fs-6" style="line-height: 1.6;">
                                <?php echo $prog['description']; ?>
                            </p>
                        </div>

                        <!-- Schedule Bottom -->
                        <div class="mt-4 pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center gap-2 text-muted fs-7">
                            <i class="bi bi-calendar-check text-brand-orange"></i>
                            <span>Rencana Kegiatan: <?php echo $prog['date']; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- No results container -->
        <div class="text-center py-5 d-none" id="noResultsMessage">
            <i class="bi bi-journal-x text-muted display-4 mb-3 d-block"></i>
            <p class="text-secondary fs-5">Tidak ada program kerja untuk divisi ini saat ini.</p>
        </div>

    </div>
</section>

<!-- Vanilla JS client-side filtering (Instant like React, no page reload) -->
<script>
function filterPrograms(divisi, element = null) {
    const cards = document.querySelectorAll('.program-card');
    let visibleCount = 0;
    
    cards.forEach(card => {
        const cardDivisi = card.getAttribute('data-divisi');
        if (divisi === 'Semua' || cardDivisi === divisi) {
            card.classList.remove('d-none');
            // Re-trigger AOS animation
            card.classList.add('animate__animated', 'animate__fadeIn');
            visibleCount++;
        } else {
            card.classList.add('d-none');
            card.classList.remove('animate__animated', 'animate__fadeIn');
        }
    });
    
    // Toggle no results message
    const noResults = document.getElementById('noResultsMessage');
    if (visibleCount === 0) {
        noResults.classList.remove('d-none');
    } else {
        noResults.classList.add('d-none');
    }
    
    // Update active class on desktop buttons
    if (element) {
        const buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(btn => {
            btn.className = 'btn rounded-pill px-4 py-2 fw-bold fs-7 filter-btn btn-light text-muted border border-secondary border-opacity-10';
        });
        element.className = 'btn rounded-pill px-4 py-2 fw-bold fs-7 filter-btn btn-brand-orange text-white';
    }
    
    // Update mobile select if filtered from desktop
    const select = document.getElementById('divisiFilterSelect');
    if (select && select.value !== divisi) {
        select.value = divisi;
    }
}
</script>

<?php include 'footer.php'; ?>
