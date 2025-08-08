<?php
// Memuat konfigurasi dasar untuk memulai sesi dan mendapatkan BASE_URL
require_once __DIR__ . '/config/config.php';

// Cek apakah pengguna sudah login atau belum
if (isset($_SESSION['user_id'])) {
    // Jika sudah, arahkan ke dashboard
    header("Location: " . BASE_URL . "pages/dashboard.php");
    exit();
} else {
    // Jika belum, arahkan ke halaman login
    header("Location: " . BASE_URL . "pages/login.php");
    exit();
}