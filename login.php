<?php
session_start();

// Jika sudah login, langsung alihkan ke admin.php
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: admin.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($username !== '' && $password !== '') {
        $db_file = 'database.json';
        if (file_exists($db_file)) {
            $db_data = json_decode(file_get_contents($db_file), true);
            
            if ($username === $db_data['admin']['username'] && 
                password_verify($password, $db_data['admin']['password_hash'])) {
                
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_username'] = $username;
                header('Location: admin.php');
                exit;
            } else {
                $error = 'Username atau Password salah!';
            }
        } else {
            $error = 'Database tidak ditemukan!';
        }
    } else {
        $error = 'Semua kolom wajib diisi!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - HIMASI</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://itmnganjuk.ac.id/wp-content/uploads/2026/02/ITM-Nganjuk.png" />
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts: Ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
            background-color: #f9fafb;
            color: #002b5b;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-login {
            border: 1px solid rgba(0, 43, 91, 0.1);
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(0, 43, 91, 0.05);
            max-width: 420px;
            width: 100%;
            background-color: #ffffff;
        }
        .btn-login {
            background-color: #ea580c;
            color: #ffffff;
            font-weight: 700;
            border-radius: 12px;
            padding: 12px;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background-color: #cb5633;
            color: #ffffff;
        }
        .form-control {
            border-radius: 12px;
            padding: 12px;
            background-color: #f9fafb;
            border: 1px solid rgba(0, 43, 91, 0.1);
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #ea580c;
            background-color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="card card-login p-5">
        <div class="text-center mb-4">
            <img src="https://itmnganjuk.ac.id/wp-content/uploads/2026/02/ITM-Nganjuk.png" alt="ITM Logo" style="height: 60px; width: auto;" class="mb-3">
            <h4 class="fw-bold mb-1">Admin Panel</h4>
            <p class="text-muted" style="font-size: 14px;">Masuk untuk mengelola website HIMASI</p>
        </div>

        <?php if ($error !== ''): ?>
            <div class="alert alert-danger rounded-3 p-3 mb-4" role="alert" style="font-size: 14px;">
                <i class="bi bi-exclamation-triangle-fill me-2"></i> <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div class="mb-3">
                <label for="username" class="form-label fw-bold" style="font-size: 13px;">Username</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0" style="border-radius: 12px 0 0 12px; border: 1px solid rgba(0, 43, 91, 0.1); border-right: none;"><i class="bi bi-person text-muted"></i></span>
                    <input type="text" id="username" name="username" required placeholder="Masukkan username" class="form-control border-start-0" style="border-radius: 0 12px 12px 0; border: 1px solid rgba(0, 43, 91, 0.1);">
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label fw-bold" style="font-size: 13px;">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0" style="border-radius: 12px 0 0 12px; border: 1px solid rgba(0, 43, 91, 0.1); border-right: none;"><i class="bi bi-lock text-muted"></i></span>
                    <input type="password" id="password" name="password" required placeholder="Masukkan password" class="form-control border-start-0" style="border-radius: 0 12px 12px 0; border: 1px solid rgba(0, 43, 91, 0.1);">
                </div>
            </div>

            <button type="submit" class="btn btn-login w-100 py-3 mt-2">Masuk Ke Panel <i class="bi bi-box-arrow-in-right ms-1"></i></button>
        </form>
    </div>

</body>
</html>