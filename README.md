# Sistem Informasi Perpustakaan (CRUD Dasar)

Project Praktikum Mata Kuliah Basis Data — Studi Kasus 1: Implementasi CRUD Sistem Informasi Perpustakaan menggunakan PHP Native.

## Identitas Mahasiswa
- **Nama:** Yohanes Siloam Wicaksono Utomo
- **NIM:** 26091397137
- **Kelas:** 2026D


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

## Cara Menjalankan
1. Pastikan **XAMPP** (Apache + MySQL) sudah berjalan.
2. Import file `db_perpustakaan.sql` ke **phpMyAdmin** (buat database terlebih dahulu, lalu import).
3. Letakkan folder project di `C:\xampp\htdocs\perpus-php`.
4. Sesuaikan konfigurasi koneksi database di `config/config.php` jika perlu (host, username, password, nama database).
5. Buka browser dan akses `http://localhost/perpus-php/`.

## Struktur Folder Project
```text
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
```

## Screenshot Hasil Aplikasi

Berikut beberapa tangkapan layar hasil pengujian aplikasi.

| Skenario 1 | Skenario 2 | Skenario 3a |
|:---:|:---:|:---:|
| ![Skenario 1](screenshots/Skenario%201.png) | ![Skenario 2](screenshots/Skenario%202.png) | ![Skenario 3a](screenshots/Skenario%203a.png) |

| Skenario 4 | Skenario 5 | Skenario 6a |
|:---:|:---:|:---:|
| ![Skenario 4](screenshots/Skenario%204.png) | ![Skenario 5](screenshots/Skenario%205.png) | ![Skenario 6a](screenshots/Skenario%206a.png) |

| Skenario 7a | Skenario 8a | Skenario 9 |
|:---:|:---:|:---:|
| ![Skenario 7a](screenshots/Skenario%207a.png) | ![Skenario 8a](screenshots/Skenario%208a.png) | ![Skenario 9](screenshots/Skenario%209.png) |

| Skenario 10 | Skenario 11a | Skenario 12 |
|:---:|:---:|:---:|
| ![Skenario 10](screenshots/Skenario%2010.png) | ![Skenario 11a](screenshots/Skenario%2011a.png) | ![Skenario 12](screenshots/Skenario%2012.png) |

| Skenario 13a | Skenario 13b | Skenario 13c |
|:---:|:---:|:---:|
| ![Skenario 13a](screenshots/Skenario%2013a.png) | ![Skenario 13b](screenshots/Skenario%2013b.png) | ![Skenario 13c](screenshots/Skenario%2013c.png) |

| Skenario 13d | Skenario 13e | Skenario 14a |
|:---:|:---:|:---:|
| ![Skenario 13d](screenshots/Skenario%2013d.png) | ![Skenario 13e](screenshots/Skenario%2013e.png) | ![Skenario 14a](screenshots/Skenario%2014a.png) |

| Skenario 14b | Skenario 3b | Skenario 6b |
|:---:|:---:|:---:|
| ![Skenario 14b](screenshots/Skenario%2014b.png) | ![Skenario 3b](screenshots/Skenario%203b.png) | ![Skenario 6b](screenshots/Skenario%206b.png) |

| Skenario 7b | Skenario 8b | Skenario 11b |
|:---:|:---:|:---:|
| ![Skenario 7b](screenshots/Skenario%207b.png) | ![Skenario 8b](screenshots/Skenario%208b.png) | ![Skenario 11b](screenshots/Skenario%2011b.png) |