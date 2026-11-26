# Sistem Informasi Perpustakaan (CRUD Dasar)

Project Praktikum Mata Kuliah Basis Data — Studi Kasus 1: Implementasi CRUD Sistem Informasi Perpustakaan menggunakan PHP Native.

## Identitas Mahasiswa
- **Nama:** [Isi Nama Lengkap Anda]
- **NIM:** [Isi NIM Anda]
- **Kelas:** [Isi Kelas Anda]
- **Teknologi:** PHP Native (PDO), MySQL / MariaDB, Bootstrap 5

## Fitur Aplikasi
1. **Modul Buku (CRUD Lengkap):**
   - Menampilkan daftar buku dan pencarian berdasarkan judul atau pengarang (`SELECT` + `LIKE`).
   - Menambah buku baru dengan validasi format ID `Bxxx` dan penanganan error duplikat `1062` (`INSERT`).
   - Mengubah data buku dengan mengunci kolom Primary Key `id_buku` (`UPDATE`).
   - Menghapus buku dengan proteksi *foreign key* apabila buku memiliki riwayat peminjaman (`DELETE`).
2. **Modul Peminjaman (CRUD dengan Relasi & Transaksi):**
   - Menampilkan riwayat peminjaman menggunakan `INNER JOIN`, filter status, dan perhitungan otomatis keterlambatan lebih dari 7 hari.
   - Mencatat transaksi peminjaman baru dan mengurangi stok buku secara atomik (`START TRANSACTION` + `SELECT ... FOR UPDATE`).
   - Memproses pengembalian buku dan memulihkan stok buku (`+1`).
   - Menghapus transaksi peminjaman serta mengembalikan stok buku jika status transaksi masih `dipinjam`.

## Struktur Folder Project
```text
perpus-php/
├── index.php
├── db_perpustakaan.sql
├── README.md
├── config/
│   └── config.php
├── includes/
│   ├── functions.php
│   ├── header.php
│   └── footer.php
├── assets/
│   └── css/
│       └── style.css
├── buku/
│   ├── index.php
│   ├── _form.php
│   ├── tambah.php
│   ├── edit.php
│   └── hapus.php
├── peminjaman/
│   ├── index.php
│   ├── tambah.php
│   ├── kembalikan.php
│   └── hapus.php
└── screenshots/