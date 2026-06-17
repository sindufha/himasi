<?php include 'header.php'; ?>

<!-- Page Header -->
<section class="bg-brand-primary py-5 text-white position-relative overflow-hidden" style="min-height: 250px; background: linear-gradient(135deg, #002b5b, #0f345f);">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: radial-gradient(circle at top right, #ff698d 0%, transparent 30%); opacity: 0.15; pointer-events: none;"></div>
    <div class="container px-4 py-4 relative z-2" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="index.php" class="text-light text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-brand-orange" aria-current="page">Berita & Artikel</li>
            </ol>
        </nav>
        <h1 class="display-5 fw-bold mb-3">Berita & Artikel</h1>
        <p class="lead text-light mb-0 max-w-2xl" style="line-height: 1.6;">
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
        'title' => 'Kolaborasi Internasional! ITM Nganjuk Gandeng STIKES RS Baptis Kediri & California Baptist University Gelar Edukasi "Personal Hygiene"',
        'date' => '10 Juni 2026',
        'excerpt' => 'Dalam upaya mewujudkan lingkungan kampus yang sehat dan produktif, Institut Teknologi Mojosari menggelar kegiatan edukasi kolaboratif berskala internasional.',
        'category' => 'Akademik',
        'image' => 'https://itmnganjuk.ac.id/wp-content/uploads/2026/06/Kolaborasi-Internasional-ITM-Nganjuk-Gandeng-STIKES-RS-Baptis-Kediri-California-Baptist-University-Gelar-Edukasi-Personal-Hygiene.jpg'
    ],
    [
        'id' => 2,
        'title' => 'Perkuat Sinergi Lintas Disiplin, Institut Teknologi Mojosari Gandeng IPM dan STIEKMA dalam Kerjasama Tri Dharma',
        'date' => '14 Januari 2026',
        'excerpt' => 'Institut Teknologi Mojosari (ITM) Nganjuk menerima kunjungan istimewa dalam rangka penandatanganan Memorandum of Understanding (MoU) kerjasama Tri Dharma.',
        'category' => 'Organisasi',
        'image' => 'https://itmnganjuk.ac.id/wp-content/uploads/2026/01/Itm-nganjuk-gandeng-IPM-dan-STIEKMA.jpg'
    ],
    [
        'id' => 3,
        'title' => 'Penuh Haru, Camat Rejoso Sebut KKN Institut Teknologi Mojosari 2025 Terbaik dalam Pengemasan Program',
        'date' => '29 Agustus 2025',
        'excerpt' => 'Apresiasi mendalam mewarnai acara penutupan Kuliah Kerja Nyata (KKN) Mahasiswa IT Mojosari karena dinilai sukses mengemas program kerja pemberdayaan.',
        'category' => 'Kunjungan',
        'image' => 'https://itmnganjuk.ac.id/wp-content/uploads/2025/08/IMG_20250829_161945-scaled.jpg'
    ],
    [
        'id' => 4,
        'title' => 'Pendaftaran Seleksi Mandiri PTS Jalur Beasiswa KIP-K di ITM Nganjuk Resmi Dibuka',
        'date' => '17 Juni 2026',
        'excerpt' => 'Kabar gembira bagi calon mahasiswa baru! Jalur pendaftaran Seleksi Mandiri PTS melalui Beasiswa Kartu Indonesia Pintar Kuliah (KIP-K) resmi dibuka.',
        'category' => 'Organisasi',
        'image' => 'https://itmnganjuk.ac.id/wp-content/uploads/2026/06/Pendaftaran-Seleksi-Mandiri-PTS-Jalur-Beasiswa-KIP-K-di-ITM-Nganjuk-Resmi-Dibuka-768x961.jpeg'
    ],
    [
        'id' => 5,
        'title' => 'Perkuat Tata Kelola Mutu Kampus, Institut Teknologi Mojosari Lakukan Benchmarking ke BPM Universitas Kristen Petra',
        'date' => '11 Februari 2026',
        'excerpt' => 'ITM melaksanakan kunjungan studi banding (benchmarking) ke Badan Penjaminan Mutu (BPM) Universitas Kristen Petra di Surabaya guna meningkatkan standar mutu pendidikan.',
        'category' => 'Organisasi',
        'image' => 'https://itmnganjuk.ac.id/wp-content/uploads/2026/02/ITM-Benchmarking-ke-BPM-Universitas-Kristen-Petra-768x432.jpg'
    ],
    [
        'id' => 6,
        'title' => 'Bukan Sekadar Menghitung Uang, Mengenal "Akuntansi Bisnis Digital" di Institut Teknologi Mojosari',
        'date' => '04 Februari 2026',
        'excerpt' => 'Akuntansi Bisnis Digital hadir sebagai gabungan antara ilmu Akuntansi Keuangan, Teknologi Informasi, dan Manajemen Bisnis Modern untuk menjawab kebutuhan masa depan.',
        'category' => 'Akademik',
        'image' => 'https://itmnganjuk.ac.id/wp-content/uploads/2026/02/Akuntansi-bisnis-digital-768x514.jpg'
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
            <i class="bi bi-journal-x text-secondary display-4 mb-3 d-block"></i>
            <h4 class="fw-bold text-brand-primary">Artikel Tidak Ditemukan</h4>
            <p class="text-secondary">Coba cari dengan kata kunci lain atau pilih kategori berbeda.</p>
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
