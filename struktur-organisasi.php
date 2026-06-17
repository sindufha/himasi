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
<section class="py-5 bg-white overflow-auto">
    <div class="container py-5" style="min-width: 1050px;">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-brand-orange fw-bold text-uppercase d-block mb-2" style="font-size: 14px; letter-spacing: 0.05em;">Bagan Kepengurusan</span>
            <h2 class="display-6 fw-bold text-brand-primary">Kabinet Sinergi Inovasi</h2>
            <div style="width: 80px; height: 6px; background: linear-gradient(to right, #002b5b, #0f345f);" class="rounded-pill mx-auto mt-3"></div>
        </div>

        <?php
        $db_data = json_decode(file_get_contents('database.json'), true);
        $st = $db_data['structure'];
        ?>

        <!-- CSS Tree Diagram Organigram -->
        <div class="organigram-tree d-flex justify-content-center py-4" data-aos="zoom-in">
            <ul>
                <li>
                    <!-- Level 1: Ketua Umum -->
                    <div class="member-node border-orange">
                        <div class="avatar-wrap">
                            <img src="<?php echo htmlspecialchars($st['ketua']['image']); ?>" alt="Ketua Umum">
                        </div>
                        <div class="member-info">
                            <h6 class="fw-bold mb-0"><?php echo htmlspecialchars($st['ketua']['name']); ?></h6>
                            <span class="role text-brand-orange"><?php echo htmlspecialchars($st['ketua']['role']); ?></span>
                        </div>
                    </div>
                    
                    <ul>
                        <li>
                            <!-- Level 2: Wakil Ketua Umum -->
                            <div class="member-node border-orange">
                                <div class="avatar-wrap">
                                    <img src="<?php echo htmlspecialchars($st['wakil']['image']); ?>" alt="Wakil Ketua Umum">
                                </div>
                                <div class="member-info">
                                    <h6 class="fw-bold mb-0"><?php echo htmlspecialchars($st['wakil']['name']); ?></h6>
                                    <span class="role text-brand-orange"><?php echo htmlspecialchars($st['wakil']['role']); ?></span>
                                </div>
                            </div>
                            
                            <ul>
                                <!-- Branch Left: Sekretaris -->
                                <li>
                                    <div class="member-node">
                                        <div class="avatar-wrap">
                                            <img src="<?php echo htmlspecialchars($st['sekretaris']['image']); ?>" alt="Sekretaris Umum">
                                        </div>
                                        <div class="member-info">
                                            <h6 class="fw-bold mb-0"><?php echo htmlspecialchars($st['sekretaris']['name']); ?></h6>
                                            <span class="role text-secondary"><?php echo htmlspecialchars($st['sekretaris']['role']); ?></span>
                                        </div>
                                    </div>
                                    
                                    <ul>
                                        <!-- Divisi 1 -->
                                        <li>
                                            <div class="member-node div-node">
                                                <div class="avatar-wrap">
                                                    <img src="<?php echo htmlspecialchars($st['div1']['image']); ?>" alt="Divisi 1">
                                                </div>
                                                <div class="member-info">
                                                    <h6 class="fw-bold mb-0"><?php echo htmlspecialchars($st['div1']['name']); ?></h6>
                                                    <span class="role text-muted"><?php echo htmlspecialchars($st['div1']['role']); ?></span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Divisi 2 -->
                                        <li>
                                            <div class="member-node div-node">
                                                <div class="avatar-wrap">
                                                    <img src="<?php echo htmlspecialchars($st['div2']['image']); ?>" alt="Divisi 2">
                                                </div>
                                                <div class="member-info">
                                                    <h6 class="fw-bold mb-0"><?php echo htmlspecialchars($st['div2']['name']); ?></h6>
                                                    <span class="role text-muted"><?php echo htmlspecialchars($st['div2']['role']); ?></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                
                                <!-- Branch Right: Bendahara -->
                                <li>
                                    <div class="member-node">
                                        <div class="avatar-wrap">
                                            <img src="<?php echo htmlspecialchars($st['bendahara']['image']); ?>" alt="Bendahara Umum">
                                        </div>
                                        <div class="member-info">
                                            <h6 class="fw-bold mb-0"><?php echo htmlspecialchars($st['bendahara']['name']); ?></h6>
                                            <span class="role text-secondary"><?php echo htmlspecialchars($st['bendahara']['role']); ?></span>
                                        </div>
                                    </div>
                                    
                                    <ul>
                                        <!-- Divisi 3 -->
                                        <li>
                                            <div class="member-node div-node">
                                                <div class="avatar-wrap">
                                                    <img src="<?php echo htmlspecialchars($st['div3']['image']); ?>" alt="Divisi 3">
                                                </div>
                                                <div class="member-info">
                                                    <h6 class="fw-bold mb-0"><?php echo htmlspecialchars($st['div3']['name']); ?></h6>
                                                    <span class="role text-muted"><?php echo htmlspecialchars($st['div3']['role']); ?></span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Divisi 4 -->
                                        <li>
                                            <div class="member-node div-node">
                                                <div class="avatar-wrap">
                                                    <img src="<?php echo htmlspecialchars($st['div4']['image']); ?>" alt="Divisi 4">
                                                </div>
                                                <div class="member-info">
                                                    <h6 class="fw-bold mb-0"><?php echo htmlspecialchars($st['div4']['name']); ?></h6>
                                                    <span class="role text-muted"><?php echo htmlspecialchars($st['div4']['role']); ?></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- CSS Organigram Tree Structure Styles -->
<style>
    .organigram-tree ul {
        padding-top: 30px;
        position: relative;
        transition: all 0.5s;
        display: flex;
        justify-content: center;
        padding-left: 0;
        margin-bottom: 0;
    }
    .organigram-tree li {
        float: left;
        text-align: center;
        list-style-type: none;
        position: relative;
        padding: 30px 15px 0 15px;
        transition: all 0.5s;
    }
    
    /* Gunakan pseudo-element ::before dan ::after untuk menggambar garis konektor */
    .organigram-tree li::before, .organigram-tree li::after {
        content: '';
        position: absolute;
        top: 0;
        right: 50%;
        border-top: 2px solid rgba(0, 43, 91, 0.2);
        width: 50%;
        height: 30px;
    }
    .organigram-tree li::after {
        right: auto;
        left: 50%;
        border-left: 2px solid rgba(0, 43, 91, 0.2);
    }
    
    /* Hilangkan konektor untuk elemen tunggal/ujung */
    .organigram-tree li:only-child::after, .organigram-tree li:only-child::before {
        display: none;
    }
    .organigram-tree li:only-child {
        padding-top: 0;
    }
    .organigram-tree li:first-child::before, .organigram-tree li:last-child::after {
        border: 0 none;
    }
    .organigram-tree li:last-child::before {
        border-right: 2px solid rgba(0, 43, 91, 0.2);
        border-radius: 0 5px 0 0;
    }
    .organigram-tree li:first-child::after {
        border-radius: 5px 0 0 0;
    }
    
    /* Garis turun dari node parent */
    .organigram-tree ul ul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        border-left: 2px solid rgba(0, 43, 91, 0.2);
        width: 0;
        height: 30px;
    }
    
    /* Card Node Styling */
    .member-node {
        display: inline-flex;
        align-items: center;
        gap: 16px;
        background-color: #ffffff;
        border: 2px solid rgba(0, 43, 91, 0.1);
        border-radius: 20px;
        padding: 12px 24px;
        text-decoration: none;
        position: relative;
        z-index: 10;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    }
    .member-node:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(0, 43, 91, 0.1);
        border-color: var(--brand-primary);
    }
    .member-node.border-orange {
        border-color: rgba(234, 88, 12, 0.2);
    }
    .member-node.border-orange:hover {
        border-color: var(--brand-orange);
    }
    .member-node.div-node {
        padding: 10px 20px;
    }
    
    /* Avatar wrap */
    .avatar-wrap {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid #ffffff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        flex-shrink: 0;
    }
    .member-node.div-node .avatar-wrap {
        width: 55px;
        height: 55px;
    }
    .avatar-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    /* Text info */
    .member-info {
        text-align: left;
    }
    .member-info h6 {
        font-size: 15px;
        font-weight: 700;
        color: var(--brand-primary);
    }
    .member-node.div-node .member-info h6 {
        font-size: 14px;
    }
    .member-info .role {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        display: block;
        margin-top: 3px;
        letter-spacing: 0.03em;
    }
</style>

<?php include 'footer.php'; ?>
