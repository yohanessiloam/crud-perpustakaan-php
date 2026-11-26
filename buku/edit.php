<?php
require __DIR__ . '/../config/config.php';
require __DIR__ . '/../includes/functions.php';

$id = $_GET['id'] ?? '';
$stmt = $pdo->prepare("SELECT * FROM buku WHERE id_buku = ?");
$stmt->execute([$id]);
$buku = $stmt->fetch();
if (!$buku) {
    set_flash('warning', 'Buku tidak ditemukan.');
    redirect('index.php');
}
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $buku = ambil_input_buku($_POST);
    $buku['id_buku'] = $id;
    $errors = validasi_buku($buku);

    if (!$errors) {
        $sql = "UPDATE buku
                SET judul = :judul, pengarang = :pengarang, penerbit = :penerbit,
                    tahun_terbit = :tahun, stok = :stok
                WHERE id_buku = :id";
        $pdo->prepare($sql)->execute(param_buku($buku));
        set_flash('success', 'Data buku berhasil diperbarui.');
        redirect('index.php');
    }
}

$title = 'Edit Buku';
$mode = 'edit';
require __DIR__ . '/../includes/header.php';
require __DIR__ . '/_form.php';
require __DIR__ . '/../includes/footer.php';