<?php include 'header.php'; ?>

<!-- Page Header -->
<section class="bg-brand-primary py-5 text-white position-relative overflow-hidden" style="min-height: 250px; background: linear-gradient(135deg, #002b5b, #0f345f);">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: radial-gradient(circle at top right, #ff698d 0%, transparent 30%); opacity: 0.15; pointer-events: none;"></div>
    <div class="container px-4 py-4 relative z-2" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-brand-orange" aria-current="page">Berita & Artikel</li>
            </ol>
        </nav>
        <h1 class="display-5 fw-bold mb-3">Berita & Artikel</h1>
        <p class="lead text-white-50 mb-0 max-w-2xl" style="line-height: 1.6;">
            Temukan berita terkini seputar kegiatan kemahasiswaan, tips teknologi, prestasi, dan pengumuman resmi HIMASI ITM.
        </p>
    </div>
</section>

<!-- Filter & Search Bar Section -->
<?php
$categories = ['Semua', 'Akademik', 'Kompetisi', 'Kunjungan', 'Organisasi'];

$articles = [
    [
        'id' => 1,
        'title' => 'Workshop Data Science & Analytics Bersama Praktisi Industri Terkemuka',
        'date' => '15 Juni 2026',
        'excerpt' => 'HIMASI ITM menyelenggarakan pelatihan intensif data science bagi mahasiswa untuk menjawab tantangan industri analisis data di era modern.',
        'category' => 'Akademik',
        'image' => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=600&auto=format&fit=crop&q=80'
    ],
    [
        'id' => 2,
        'title' => 'HIMASI ITM Gelar Lomba Pemrograman Web Nasional Mojosari TechFest 2026',
        'date' => '02 Juni 2026',
        'excerpt' => 'Kompetisi web development berskala nasional ini diikuti oleh puluhan tim bertalenta dari berbagai perguruan tinggi di Indonesia.',
        'category' => 'Kompetisi',
        'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&auto=format&fit=crop&q=80'
    ],
    [
        'id' => 3,
        'title' => 'Kunjungan Industri Mahasiswa Sistem Informasi ke Unicorn Tech Jakarta',
        'date' => '20 Mei 2026',
        'excerpt' => 'Melihat langsung kultur kerja software engineer, product manager, dan system analyst profesional di salah satu tech startup terbesar.',
        'category' => 'Kunjungan',
        'image' => 'https://images.unsplash.com/photo-1542744094-3a31f103e35f?w=600&auto=format&fit=crop&q=80'
    ],
    [
        'id' => 4,
        'title' => 'PMB HIMASI 2026: Pendaftaran Anggota Baru Resmi Dibuka!',
        'date' => '10 Mei 2026',
        'excerpt' => 'Pendaftaran anggota baru Himpunan Mahasiswa Sistem Informasi telah dibuka. Persiapkan diri kalian untuk bergabung dalam kepengurusan.',
        'category' => 'Organisasi',
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&auto=format&fit=crop&q=80'
    ],
    [
        'id' => 5,
        'title' => 'Sharing Session Alumni: Kunci Sukses Karir System Analyst di Perusahaan Global',
        'date' => '28 April 2026',
        'excerpt' => 'Ikuti bincang hangat alumni berbagi roadmap belajar, tips review resume, dan pengalaman kerja di perusahaan IT multinasional.',
        'category' => 'Akademik',
        'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=600&auto=format&fit=crop&q=80'
    ],
    [
        'id' => 6,
        'title' => 'Selamat! Mahasiswa SI ITM Meraih Juara 1 UI/UX Design Competition',
        'date' => '15 April 2026',
        'excerpt' => 'Selamat kepada tim mahasiswa Sistem Informasi IT Mojosari atas prestasi membanggakan meraih medali emas kompetisi UI/UX nasional.',
        'category' => 'Kompetisi',
        'image' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=600&auto=format&fit=crop&q=80'
    ]
];
?>

<section class="py-4 bg-light border-bottom">
    <div class="container px-4">
        <div class="row g-3 align-items-center" data-aos="fade-up">
            <!-- Search Bar (Live instant search on keyup) -->
            <div class="col-lg-4 position-relative">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 text-muted rounded-start-4"><i class="bi bi-search"></i></span>
                    <input type="text" id="newsSearchInput" onkeyup="filterNews()" placeholder="Cari berita atau artikel..." class="form-control border-start-0 py-3 rounded-end-4 bg-white shadow-none">
                </div>
            </div>

            <!-- Category Filter Desktop -->
            <div class="col-lg-8 d-flex flex-wrap gap-2 justify-content-start justify-content-lg-end">
                <?php foreach ($categories as $cat): ?>
                    <button class="btn rounded-pill px-4 py-2 fw-bold fs-7 cat-filter-btn <?php echo ($cat === 'Semua') ? 'btn-brand-orange text-white' : 'btn-white bg-white text-muted border border-secondary border-opacity-10'; ?>" onclick="filterNewsCategory('<?php echo $cat; ?>', this)">
                        <?php echo $cat; ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 3. ARTICLES GRID -->
<section class="py-5 bg-white">
    <div class="container px-4 py-5">
        <div class="row g-4" id="articlesGrid">
            <?php foreach ($articles as $index => $article): ?>
                <!-- news-card has data-category for Vanilla JS filtering -->
                <div class="col-md-6 col-lg-4 news-card" data-category="<?php echo $article['category']; ?>" data-aos="fade-up" data-aos-delay="<?php echo ($index % 3) * 100; ?>">
                    <div class="card card-custom h-100 overflow-hidden">
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            <img src="<?php echo $article['image']; ?>" class="w-100 h-100 object-fit-cover" alt="<?php echo $article['title']; ?>">
                            <span class="badge bg-brand-primary position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill"><?php echo $article['category']; ?></span>
                        </div>
                        <div class="card-body p-4 d-flex flex-column gap-3">
                            <div class="d-flex align-items-center gap-2 text-muted fs-7" style="font-weight: 600;">
                                <i class="bi bi-calendar-event text-brand-orange"></i>
                                <span><?php echo $article['date']; ?></span>
                            </div>
                            <h5 class="fw-bold card-title text-brand-primary lh-base flex-grow-1 article-title">
                                <?php echo $article['title']; ?>
                            </h5>
                            <p class="text-brand-gray card-text article-excerpt" style="font-size: 14px; line-height: 1.6;">
                                <?php echo $article['excerpt']; ?>
                            </p>
                            <a href="#" onclick="event.preventDefault(); alert('Baca detail berita ini...');" class="text-brand-orange fw-bold text-decoration-none d-inline-flex align-items-center gap-1 mt-auto">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- No results container -->
        <div class="text-center py-5 d-none" id="noNewsResults">
            <i class="bi bi-journal-x text-muted display-4 mb-3 d-block"></i>
            <h4 class="fw-bold text-brand-primary">Artikel Tidak Ditemukan</h4>
            <p class="text-muted">Coba cari dengan kata kunci lain atau pilih kategori berbeda.</p>
        </div>
    </div>
</section>

<!-- Vanilla JS client-side realtime filtering (Instant like React, no page reload) -->
<script>
let activeCategory = 'Semua';

function filterNewsCategory(category, element) {
    activeCategory = category;
    
    // Update active class on filter buttons
    const buttons = document.querySelectorAll('.cat-filter-btn');
    buttons.forEach(btn => {
        btn.className = 'btn rounded-pill px-4 py-2 fw-bold fs-7 cat-filter-btn btn-white bg-white text-muted border border-secondary border-opacity-10';
    });
    element.className = 'btn rounded-pill px-4 py-2 fw-bold fs-7 cat-filter-btn btn-brand-orange text-white';
    
    // Apply filtering
    filterNews();
}

function filterNews() {
    const searchVal = document.getElementById('newsSearchInput').value.toLowerCase();
    const cards = document.querySelectorAll('.news-card');
    let visibleCount = 0;
    
    cards.forEach(card => {
        const title = card.querySelector('.article-title').textContent.toLowerCase();
        const excerpt = card.querySelector('.article-excerpt').textContent.toLowerCase();
        const category = card.getAttribute('data-category');
        
        const matchesCategory = (activeCategory === 'Semua' || category === activeCategory);
        const matchesSearch = (title.includes(searchVal) || excerpt.includes(searchVal));
        
        if (matchesCategory && matchesSearch) {
            card.classList.remove('d-none');
            card.classList.add('animate__animated', 'animate__fadeIn');
            visibleCount++;
        } else {
            card.classList.add('d-none');
            card.classList.remove('animate__animated', 'animate__fadeIn');
        }
    });
    
    // Toggle no results message
    const noResults = document.getElementById('noNewsResults');
    if (visibleCount === 0) {
        noResults.classList.remove('d-none');
    } else {
        noResults.classList.add('d-none');
    }
}
</script>

<?php include 'footer.php'; ?>
