<?php include 'header.php'; ?>

<!-- Page Header -->
<section class="bg-brand-primary py-5 text-white position-relative overflow-hidden" style="min-height: 250px; background: linear-gradient(135deg, #002b5b, #0f345f);">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: radial-gradient(circle at top right, #ff698d 0%, transparent 30%); opacity: 0.15; pointer-events: none;"></div>
    <div class="container px-4 py-4 relative z-2" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="index.php" class="text-light text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-brand-orange" aria-current="page">Struktur Organisasi</li>
            </ol>
        </nav>
        <h1 class="display-5 fw-bold mb-3">Struktur Organisasi HIMASI</h1>
        <p class="lead text-light mb-0 max-w-2xl" style="line-height: 1.6;">
            Bagan kepengurusan Himpunan Mahasiswa Sistem Informasi Institut Teknologi Mojosari Periode 2026/2027.
        </p>
    </div>
</section>

<!-- Tree Structure Section -->
<section class="py-5 bg-white">
    <div class="container px-4 py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-brand-orange fw-bold text-uppercase d-block mb-2" style="font-size: 14px; letter-spacing: 0.05em;">Bagan Kepengurusan</span>
            <h2 class="display-6 fw-bold text-brand-primary">Kabinet Sinergi Inovasi</h2>
            <div style="width: 80px; height: 6px; background: linear-gradient(to right, #002b5b, #0f345f);" class="rounded-pill mx-auto mt-3"></div>
        </div>

        <!-- Visual Hierarchy Tree -->
        <div class="d-flex flex-column align-items-center justify-content-center my-5 position-relative">
            
            <!-- LEVEL 1: KETUA UMUM -->
            <div class="d-flex flex-column align-items-center position-relative mb-4" data-aos="zoom-in">
                <div class="card card-custom overflow-hidden text-center shadow" style="width: 260px;">
                    <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=400&auto=format&fit=crop&q=80" alt="Rizky Pratama" class="w-100 object-fit-cover" style="height: 200px;">
                    <div class="card-body p-3 bg-brand-primary text-white border-top border-secondary border-opacity-10">
                        <h6 class="fw-bold mb-1">Rizky Pratama</h6>
                        <span class="text-brand-orange fw-bold text-uppercase" style="font-size: 11px; letter-spacing: 0.05em;">Ketua Umum</span>
                    </div>
                </div>
                <!-- Connector Line Down -->
                <div class="tree-line-v"></div>
            </div>

            <!-- LEVEL 2: WAKIL KETUA UMUM -->
            <div class="d-flex flex-column align-items-center position-relative mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card card-custom overflow-hidden text-center shadow" style="width: 260px;">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&auto=format&fit=crop&q=80" alt="Dian Lestari" class="w-100 object-fit-cover" style="height: 200px;">
                    <div class="card-body p-3 bg-brand-primary text-white border-top border-secondary border-opacity-10">
                        <h6 class="fw-bold mb-1">Dian Lestari</h6>
                        <span class="text-brand-orange fw-bold text-uppercase" style="font-size: 11px; letter-spacing: 0.05em;">Wakil Ketua Umum</span>
                    </div>
                </div>
                <!-- Connector Line Down -->
                <div class="tree-line-v"></div>
            </div>

            <!-- Horizontal Connector Line Splitter for Level 3 -->
            <div class="tree-line-h-wrapper d-flex align-items-center justify-content-center w-100 position-relative mb-4" style="max-width: 600px;">
                <div class="tree-line-h-left"></div>
                <div class="tree-line-h-right"></div>
            </div>

            <!-- LEVEL 3: SEKRETARIS & BENDAHARA (Side by Side) -->
            <div class="row g-5 justify-content-center w-100 mb-4" style="max-width: 800px;">
                <!-- Sekretaris -->
                <div class="col-sm-6 d-flex flex-column align-items-center position-relative" data-aos="fade-right" data-aos-delay="200">
                    <div class="card card-custom overflow-hidden text-center shadow" style="width: 250px;">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&auto=format&fit=crop&q=80" alt="Aulia Rahma" class="w-100 object-fit-cover" style="height: 190px;">
                        <div class="card-body p-3 bg-light text-brand-primary border-top">
                            <h6 class="fw-bold mb-1 text-brand-primary">Aulia Rahma</h6>
                            <span class="text-secondary fw-bold text-uppercase" style="font-size: 11px; letter-spacing: 0.05em;">Sekretaris Umum</span>
                        </div>
                    </div>
                    <!-- Small Vertical line for children layout -->
                    <div class="tree-line-v-short"></div>
                </div>
                <!-- Bendahara -->
                <div class="col-sm-6 d-flex flex-column align-items-center position-relative" data-aos="fade-left" data-aos-delay="200">
                    <div class="card card-custom overflow-hidden text-center shadow" style="width: 250px;">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&auto=format&fit=crop&q=80" alt="Budi Santoso" class="w-100 object-fit-cover" style="height: 190px;">
                        <div class="card-body p-3 bg-light text-brand-primary border-top">
                            <h6 class="fw-bold mb-1 text-brand-primary">Budi Santoso</h6>
                            <span class="text-secondary fw-bold text-uppercase" style="font-size: 11px; letter-spacing: 0.05em;">Bendahara Umum</span>
                        </div>
                    </div>
                    <!-- Small Vertical line for children layout -->
                    <div class="tree-line-v-short"></div>
                </div>
            </div>

            <!-- Big Horizontal Connector Line Splitter for Level 4 (4 Divisions) -->
            <div class="tree-line-h-wrapper d-flex align-items-center justify-content-center w-100 position-relative mb-4" style="max-width: 950px;">
                <div class="tree-line-h-left-wide"></div>
                <div class="tree-line-h-right-wide"></div>
            </div>

            <!-- LEVEL 4: 4 DIVISION HEADS (Side by Side) -->
            <div class="row g-4 justify-content-center w-100">
                <!-- Divisi 1 -->
                <div class="col-sm-6 col-lg-3 d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-custom overflow-hidden text-center shadow" style="width: 210px;">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&auto=format&fit=crop&q=80" alt="Fajar Hidayat" class="w-100 object-fit-cover" style="height: 170px;">
                        <div class="card-body p-3 bg-light text-brand-primary border-top">
                            <h6 class="fw-bold mb-1" style="font-size: 14px;">Fajar Hidayat</h6>
                            <span class="text-muted text-uppercase d-block" style="font-size: 10px; font-weight: 600;">Kabid Pendidikan & Riset</span>
                        </div>
                    </div>
                </div>
                <!-- Divisi 2 -->
                <div class="col-sm-6 col-lg-3 d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="card card-custom overflow-hidden text-center shadow" style="width: 210px;">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&auto=format&fit=crop&q=80" alt="Siti Aminah" class="w-100 object-fit-cover" style="height: 170px;">
                        <div class="card-body p-3 bg-light text-brand-primary border-top">
                            <h6 class="fw-bold mb-1" style="font-size: 14px;">Siti Aminah</h6>
                            <span class="text-muted text-uppercase d-block" style="font-size: 10px; font-weight: 600;">Kabid Humas</span>
                        </div>
                    </div>
                </div>
                <!-- Divisi 3 -->
                <div class="col-sm-6 col-lg-3 d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="card card-custom overflow-hidden text-center shadow" style="width: 210px;">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&auto=format&fit=crop&q=80" alt="Aditya Nugraha" class="w-100 object-fit-cover" style="height: 170px;">
                        <div class="card-body p-3 bg-light text-brand-primary border-top">
                            <h6 class="fw-bold mb-1" style="font-size: 14px;">Aditya Nugraha</h6>
                            <span class="text-muted text-uppercase d-block" style="font-size: 10px; font-weight: 600;">Kabid Minat & Bakat</span>
                        </div>
                    </div>
                </div>
                <!-- Divisi 4 -->
                <div class="col-sm-6 col-lg-3 d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="card card-custom overflow-hidden text-center shadow" style="width: 210px;">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&auto=format&fit=crop&q=80" alt="Nabila Putri" class="w-100 object-fit-cover" style="height: 170px;">
                        <div class="card-body p-3 bg-light text-brand-primary border-top">
                            <h6 class="fw-bold mb-1" style="font-size: 14px;">Nabila Putri</h6>
                            <span class="text-muted text-uppercase d-block" style="font-size: 10px; font-weight: 600;">Kabid Kominfo</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Custom Styles for Connection Lines -->
<style>
    /* Vertical connecting lines */
    .tree-line-v {
        width: 2px;
        height: 50px;
        background-color: rgba(0, 43, 91, 0.25);
        position: absolute;
        bottom: -50px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
    }
    .tree-line-v-short {
        width: 2px;
        height: 25px;
        background-color: rgba(0, 43, 91, 0.25);
        position: absolute;
        bottom: -25px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
    }
    
    /* Horizontal lines for level 3 */
    .tree-line-h-left {
        width: 50%;
        height: 2px;
        background-color: rgba(0, 43, 91, 0.25);
        position: absolute;
        left: 25%;
        top: 0;
    }
    .tree-line-h-right {
        width: 50%;
        height: 2px;
        background-color: rgba(0, 43, 91, 0.25);
        position: absolute;
        right: 25%;
        top: 0;
    }

    /* Wide Horizontal lines for level 4 */
    .tree-line-h-left-wide {
        width: 75%;
        height: 2px;
        background-color: rgba(0, 43, 91, 0.25);
        position: absolute;
        left: 12.5%;
        top: 0;
    }
    .tree-line-h-right-wide {
        width: 75%;
        height: 2px;
        background-color: rgba(0, 43, 91, 0.25);
        position: absolute;
        right: 12.5%;
        top: 0;
    }
</style>

<?php include 'footer.php'; ?>
