<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if ($name !== '' && $email !== '' && $message !== '') {
        // Simulasi sukses penyimpanan/pengiriman email
        echo json_encode([
            'status' => 'success',
            'message' => 'Pesan berhasil diterima'
        ]);
        exit;
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Semua kolom form wajib diisi!'
        ]);
        exit;
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Request method tidak valid'
    ]);
    exit;
}
