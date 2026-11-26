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
2. Import file `db_perpustakaan.sql` ke **phpMyAdmin**. Skrip ini otomatis membuat database `db_perpustakaan`, tabel, data contoh, sekaligus pengguna MySQL `perpus`.
3. Letakkan folder project di `C:\xampp\htdocs\perpus-php`.
4. Konfigurasi koneksi ada di `config/config.php`:
   - Host: `127.0.0.1`
   - Database: `db_perpustakaan`
   - User: `perpus` / Password: `perpus123`
   - (Jika memakai user lain, ubah nilainya di file tersebut.)
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

Berikut tangkapan layar hasil pengujian aplikasi, disusun sesuai alur pengujian.

| | | |
|:---:|:---:|:---:|
| ![Daftar Buku](screenshots/Skenario%201.png)<br>**1. Daftar Buku (Read)** | ![Pencarian](screenshots/Skenario%202.png)<br>**2. Pencarian Buku** | ![Form Tambah](screenshots/Skenario%203a.png)<br>**3a. Form Tambah Buku** |
| ![Berhasil Ditambah](screenshots/Skenario%203b.png)<br>**3b. Buku Berhasil Ditambahkan** | ![Duplikat](screenshots/Skenario%204.png)<br>**4. ID Buku Duplikat Ditolak (1062)** | ![Validasi](screenshots/Skenario%205.png)<br>**5. Validasi Format ID (Bxxx)** |
| ![Form Edit](screenshots/Skenario%206a.png)<br>**6a. Form Edit Buku** | ![Diperbarui](screenshots/Skenario%206b.png)<br>**6b. Data Buku Diperbarui** | ![Konfirmasi Hapus](screenshots/Skenario%207a.png)<br>**7a. Konfirmasi Hapus Buku** |
| ![Dihapus](screenshots/Skenario%207b.png)<br>**7b. Buku Berhasil Dihapus** | ![Konfirmasi Hapus Riwayat](screenshots/Skenario%208a.png)<br>**8a. Konfirmasi Hapus Buku Beriwayat** | ![Ditolak FK](screenshots/Skenario%208b.png)<br>**8b. Hapus Ditolak (Foreign Key 1451)** |
| ![Data Peminjaman](screenshots/Skenario%209.png)<br>**9. Daftar Peminjaman (JOIN)** | ![Filter](screenshots/Skenario%2010.png)<br>**10. Filter Status Dipinjam** | ![Form Pinjam](screenshots/Skenario%2011a.png)<br>**11a. Form Pinjam Buku** |
| ![Dicatat](screenshots/Skenario%2011b.png)<br>**11b. Peminjaman Berhasil Dicatat** | ![Dikembalikan](screenshots/Skenario%2012.png)<br>**12. Buku Berhasil Dikembalikan** | ![Form Pinjam](screenshots/Skenario%2013a.png)<br>**13a. Form Pinjam Buku** |
| ![Dicatat](screenshots/Skenario%2013b.png)<br>**13b. Peminjaman Berhasil Dicatat** | ![Form Pinjam](screenshots/Skenario%2013c.png)<br>**13c. Form Pinjam Buku** | ![Dicatat](screenshots/Skenario%2013d.png)<br>**13d. Peminjaman Berhasil Dicatat** |
| ![Pilihan Buku](screenshots/Skenario%2013e.png)<br>**13e. Pilihan Buku (Stok Tersedia)** | ![Konfirmasi Hapus Transaksi](screenshots/Skenario%2014a.png)<br>**14a. Konfirmasi Hapus Transaksi** | ![Transaksi Dihapus](screenshots/Skenario%2014b.png)<br>**14b. Transaksi Berhasil Dihapus** |