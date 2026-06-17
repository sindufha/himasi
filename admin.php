<?php
session_start();

// Validasi session login
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

$db_file = 'database.json';
$db = json_decode(file_get_contents($db_file), true);

$message = '';
$message_type = 'success';

// Handle Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header('Location: login.php');
    exit;
}

// 1. UPDATE STRUKTUR ORGANISASI
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_structure'])) {
    foreach ($_POST['structure'] as $key => $member) {
        if (isset($db['structure'][$key])) {
            $db['structure'][$key]['name'] = trim($member['name']);
            $db['structure'][$key]['image'] = trim($member['image']);
        }
    }
    
    if (file_put_contents($db_file, json_encode($db, JSON_PRETTY_PRINT))) {
        $message = 'Struktur organisasi berhasil diperbarui!';
    } else {
        $message = 'Gagal menyimpan perubahan struktur!';
        $message_type = 'danger';
    }
}

// 2. UPDATE/TAMBAH BERITA
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_article'])) {
    $id = isset($_POST['article_id']) ? intval($_POST['article_id']) : 0;
    $title = trim($_POST['title']);
    $date = trim($_POST['date']);
    $excerpt = trim($_POST['excerpt']);
    $category = trim($_POST['category']);
    $image = trim($_POST['image']);

    if ($id > 0) {
        // Edit Artikel yang ada
        foreach ($db['articles'] as &$art) {
            if ($art['id'] === $id) {
                $art['title'] = $title;
                $art['date'] = $date;
                $art['excerpt'] = $excerpt;
                $art['category'] = $category;
                $art['image'] = $image;
                break;
            }
        }
        $message = 'Berita berhasil diperbarui!';
    } else {
        // Tambah Artikel baru
        $new_id = 1;
        if (!empty($db['articles'])) {
            $ids = array_column($db['articles'], 'id');
            $new_id = max($ids) + 1;
        }
        
        $db['articles'][] = [
            'id' => $new_id,
            'title' => $title,
            'date' => $date,
            'excerpt' => $excerpt,
            'category' => $category,
            'image' => $image
        ];
        $message = 'Berita baru berhasil ditambahkan!';
    }

    if (!file_put_contents($db_file, json_encode($db, JSON_PRETTY_PRINT))) {
        $message = 'Gagal menyimpan data berita!';
        $message_type = 'danger';
    }
}

// 3. HAPUS BERITA
if (isset($_GET['action']) && $_GET['action'] === 'delete_article' && isset($_GET['id'])) {
    $delete_id = intval($_GET['id']);
    $new_articles = [];
    foreach ($db['articles'] as $art) {
        if ($art['id'] !== $delete_id) {
            $new_articles[] = $art;
        }
    }
    $db['articles'] = $new_articles;
    
    if (file_put_contents($db_file, json_encode($db, JSON_PRETTY_PRINT))) {
        $message = 'Berita berhasil dihapus!';
    } else {
        $message = 'Gagal menghapus berita!';
        $message_type = 'danger';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - HIMASI</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://itmnganjuk.ac.id/wp-content/uploads/2026/02/ITM-Nganjuk.png" />
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts: Ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-primary: #002b5b;
            --brand-orange: #ea580c;
        }
        body {
            font-family: 'Ubuntu', sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
        }
        .admin-sidebar {
            background-color: var(--brand-primary);
            min-height: 100vh;
            color: #ffffff;
        }
        .admin-nav-link {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-radius: 12px;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .admin-nav-link:hover, .admin-nav-link.active {
            color: #ffffff;
            background-color: rgba(255,255,255,0.08);
        }
        .admin-nav-link.active {
            border-left: 4px solid var(--brand-orange);
            border-radius: 0 12px 12px 0;
        }
        .card-dash {
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            background-color: #ffffff;
        }
        .form-control {
            border-radius: 10px;
            padding: 10px 14px;
            border: 1px solid rgba(0,0,0,0.1);
        }
        .form-control:focus {
            border-color: var(--brand-orange);
            box-shadow: none;
        }
        .btn-orange {
            background-color: var(--brand-orange);
            color: #ffffff;
            font-weight: 700;
            border-radius: 10px;
            border: none;
            padding: 10px 24px;
            transition: all 0.2s ease;
        }
        .btn-orange:hover {
            background-color: #cb5633;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 admin-sidebar d-flex flex-column justify-content-between">
                <div class="p-4 w-100">
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <img src="https://itmnganjuk.ac.id/wp-content/uploads/2026/02/ITM-Nganjuk.png" alt="Logo" style="height: 35px; width: auto;">
                        <h5 class="fw-bold mb-0">HIMASI</h5>
                    </div>
                    
                    <div class="nav flex-column gap-2">
                        <a href="admin.php?tab=berita" class="admin-nav-link <?php echo (!isset($_GET['tab']) || $_GET['tab'] === 'berita') ? 'active' : ''; ?>">
                            <i class="bi bi-newspaper"></i> Kelola Berita
                        </a>
                        <a href="admin.php?tab=struktur" class="admin-nav-link <?php echo (isset($_GET['tab']) && $_GET['tab'] === 'struktur') ? 'active' : ''; ?>">
                            <i class="bi bi-diagram-3"></i> Struktur Organisasi
                        </a>
                    </div>
                </div>

                <div class="p-4 w-100 border-top border-secondary border-opacity-25">
                    <div class="d-flex align-items-center gap-2 mb-2 text-white-50" style="font-size: 13px;">
                        <i class="bi bi-person-circle"></i> Login sebagai: <strong><?php echo htmlspecialchars($_SESSION['admin_username']); ?></strong>
                    </div>
                    <a href="admin.php?action=logout" class="btn btn-outline-light btn-sm w-100 rounded-3 mt-2"><i class="bi bi-box-arrow-left me-1"></i> Keluar</a>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-md-9 col-lg-10 p-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold m-0 text-brand-primary">Dashboard Admin</h2>
                    <a href="index.php" target="_blank" class="btn btn-outline-secondary rounded-pill px-4"><i class="bi bi-eye me-1"></i> Lihat Website</a>
                </div>

                <?php if ($message !== ''): ?>
                    <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show rounded-4 p-3 mb-4" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i> <?php echo $message; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php
                $tab = isset($_GET['tab']) ? $_GET['tab'] : 'berita';
                
                if ($tab === 'berita'):
                ?>
                    <!-- TAB KELOLA BERITA -->
                    <div class="card card-dash p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="fw-bold m-0 text-brand-primary"><i class="bi bi-newspaper me-2"></i>Daftar Berita</h4>
                            <button class="btn btn-orange" onclick="openAddModal()"><i class="bi bi-plus-lg me-1"></i> Tambah Berita</button>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light text-secondary">
                                    <tr>
                                        <th style="width: 80px;">Foto</th>
                                        <th>Judul Berita</th>
                                        <th style="width: 120px;">Kategori</th>
                                        <th style="width: 150px;">Tanggal</th>
                                        <th style="width: 150px;" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($db['articles'] as $art): ?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo htmlspecialchars($art['image']); ?>" class="rounded-3 object-fit-cover" style="width: 60px; height: 45px;" alt="Banner">
                                            </td>
                                            <td>
                                                <h6 class="fw-bold mb-0 text-brand-primary"><?php echo htmlspecialchars($art['title']); ?></h6>
                                                <small class="text-muted text-truncate d-block" style="max-width: 400px;"><?php echo htmlspecialchars($art['excerpt']); ?></small>
                                            </td>
                                            <td>
                                                <span class="badge bg-secondary px-2.5 py-1.5 rounded-pill"><?php echo htmlspecialchars($art['category']); ?></span>
                                            </td>
                                            <td>
                                                <small class="text-muted fw-bold"><?php echo htmlspecialchars($art['date']); ?></small>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-outline-primary rounded-3 me-1" onclick='openEditModal(<?php echo json_encode($art, JSON_HEX_APOS); ?>)'>
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <a href="admin.php?action=delete_article&id=<?php echo $art['id']; ?>" class="btn btn-sm btn-outline-danger rounded-3" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini secara permanen?')">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                <?php elseif ($tab === 'struktur'): ?>
                    <!-- TAB KELOLA STRUKTUR ORGANISASI -->
                    <div class="card card-dash p-4">
                        <h4 class="fw-bold mb-4 text-brand-primary"><i class="bi bi-diagram-3 me-2"></i>Ubah Kepengurusan</h4>
                        
                        <form method="POST" action="admin.php?tab=struktur">
                            <input type="hidden" name="update_structure" value="1">
                            
                            <div class="row g-4">
                                <?php foreach ($db['structure'] as $key => $member): ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card p-3 border rounded-4 bg-light">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <img src="<?php echo htmlspecialchars($member['image']); ?>" class="rounded-circle object-fit-cover" style="width: 50px; height: 50px; border: 2px solid var(--brand-orange);" alt="Avatar">
                                                <div>
                                                    <h6 class="fw-bold mb-0 text-brand-primary"><?php echo htmlspecialchars($member['role']); ?></h6>
                                                    <small class="text-muted" style="font-size: 11px;">ID Jabatan: <strong><?php echo $key; ?></strong></small>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label mb-1" style="font-size: 12px; font-weight: 600;">Nama Lengkap</label>
                                                <input type="text" name="structure[<?php echo $key; ?>][name]" value="<?php echo htmlspecialchars($member['name']); ?>" required class="form-control">
                                            </div>
                                            <div>
                                                <label class="form-label mb-1" style="font-size: 12px; font-weight: 600;">Link URL Foto</label>
                                                <input type="url" name="structure[<?php echo $key; ?>][image]" value="<?php echo htmlspecialchars($member['image']); ?>" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <button type="submit" class="btn btn-orange mt-4 py-2.5 px-4"><i class="bi bi-save me-1"></i> Simpan Seluruh Perubahan</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- MODAL POPUP EDIT/TAMBAH BERITA -->
    <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">
                <form method="POST" action="admin.php?tab=berita">
                    <input type="hidden" name="save_article" value="1">
                    <input type="hidden" id="article_id" name="article_id" value="0">
                    
                    <div class="modal-header border-bottom-0 p-4">
                        <h5 class="modal-title fw-bold text-brand-primary" id="articleModalLabel">Tambah Berita Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body p-4 pt-0">
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold" style="font-size: 13px;">Judul Berita</label>
                            <input type="text" id="title" name="title" required placeholder="Masukkan judul berita" class="form-control">
                        </div>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="category" class="form-label fw-bold" style="font-size: 13px;">Kategori</label>
                                <select id="category" name="category" required class="form-control form-select">
                                    <option value="Akademik">Akademik</option>
                                    <option value="Kompetisi">Kompetisi</option>
                                    <option value="Kunjungan">Kunjungan</option>
                                    <option value="Organisasi">Organisasi</option>
                                    <option value="Kerjasama">Kerjasama</option>
                                    <option value="KKN">KKN</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="date" class="form-label fw-bold" style="font-size: 13px;">Tanggal Terbit</label>
                                <input type="text" id="date" name="date" required placeholder="Contoh: 17 Juni 2026" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold" style="font-size: 13px;">Link URL Gambar</label>
                            <input type="url" id="image" name="image" required placeholder="https://domain.com/gambar.jpg" class="form-control">
                        </div>

                        <div class="mb-0">
                            <label for="excerpt" class="form-label fw-bold" style="font-size: 13px;">Deskripsi Singkat / Ringkasan</label>
                            <textarea id="excerpt" name="excerpt" required rows="4" placeholder="Tuliskan deskripsi singkat berita..." class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="modal-footer border-top-0 p-4 pt-0">
                        <button type="button" class="btn btn-light rounded-3 px-4 py-2" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-orange rounded-3 px-4 py-2">Simpan Berita</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let modalElement = document.getElementById('articleModal');
        let articleModal = new bootstrap.Modal(modalElement);

        function openAddModal() {
            document.getElementById('article_id').value = '0';
            document.getElementById('title').value = '';
            document.getElementById('category').value = 'Akademik';
            document.getElementById('date').value = '<?php echo date("d F Y"); ?>'; // Default current date
            document.getElementById('image').value = '';
            document.getElementById('excerpt').value = '';
            
            document.getElementById('articleModalLabel').textContent = 'Tambah Berita Baru';
            articleModal.show();
        }

        function openEditModal(article) {
            document.getElementById('article_id').value = article.id;
            document.getElementById('title').value = article.title;
            document.getElementById('category').value = article.category;
            document.getElementById('date').value = article.date;
            document.getElementById('image').value = article.image;
            document.getElementById('excerpt').value = article.excerpt;
            
            document.getElementById('articleModalLabel').textContent = 'Edit Berita';
            articleModal.show();
        }
    </script>
</body>
</html>