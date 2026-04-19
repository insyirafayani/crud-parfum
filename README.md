# CRUD Data Parfum (Laravel)

## Deskripsi

Project ini adalah aplikasi web sederhana yang dibuat menggunakan Laravel. Aplikasi ini digunakan untuk mengelola data parfum dengan fitur CRUD (Create, Read, Update, Delete).

Melalui aplikasi ini, pengguna bisa menambahkan data parfum, melihat data yang sudah tersimpan, mengubah data, dan juga menghapus data yang tidak diperlukan.

Aplikasi ini dibuat sebagai tugas pembelajaran untuk memahami dasar penggunaan Laravel, PHP, dan MySQL.

---

## Tujuan

Tujuan dari pembuatan project ini adalah:

* Memahami cara kerja CRUD pada aplikasi web
* Belajar menggunakan framework Laravel
* Mengetahui cara menghubungkan aplikasi dengan database
* Melatih pembuatan tampilan sederhana

---

## Fitur

Fitur yang tersedia dalam aplikasi ini:

* Menampilkan data parfum
* Menambahkan data parfum
* Mengedit data parfum
* Menghapus data parfum

---

## Teknologi yang Digunakan

Beberapa teknologi yang digunakan dalam project ini:

* PHP
* Laravel
* MySQL
* Laragon

---

## Struktur Database

Database yang digunakan adalah **db_parfum**.

Tabel yang dipakai yaitu `parfums`, dengan field:

* id
* nama
* merk
* harga
* deskripsi
* created_at
* updated_at

---

## Instalasi dan Menjalankan Aplikasi

Berikut langkah-langkah untuk menginstall sekaligus menjalankan aplikasi CRUD Parfum menggunakan Laravel di komputer lokal:

---

### 1. Clone Repository

Download project dari GitHub:

```bash
git clone https://github.com/insyirafayani/crud-parfum.git
```

Masuk ke folder project:

```bash
cd crud-parfum
```

---

### 2. Install Dependency

Install semua kebutuhan Laravel:

```bash
composer install
```

---

### 3. Konfigurasi Environment

Copy file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Kemudian buka file `.env` dan sesuaikan database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_parfum
DB_USERNAME=root
DB_PASSWORD=
```

Pastikan database **db_parfum** sudah dibuat di phpMyAdmin.

---

### 4. Generate Key Aplikasi

```bash
php artisan key:generate
```

---

### 5. Migrasi Database

```bash
php artisan migrate
```

Perintah ini akan membuat tabel di database sesuai struktur yang sudah dibuat.

---

### 6. Menjalankan Server

```bash
php artisan serve
```

---

### 7. Akses Aplikasi

Buka browser dan akses:

```text
http://127.0.0.1:8000/parfum
```

Jika menggunakan Laragon, bisa juga:

```text
http://parfum-app.test/parfum
```

---

### 8. Catatan

* Pastikan Laragon dalam kondisi **Running**
* Aktifkan Apache dan MySQL
* Jika terjadi error, jalankan:

```bash
php artisan config:clear
php artisan cache:clear
```

---

Dengan mengikuti langkah-langkah di atas, aplikasi dapat langsung dijalankan dan digunakan.


---

## Cara Penggunaan

* Klik tombol **Tambah Data** untuk menambahkan data parfum
* Isi form yang tersedia lalu klik **Simpan**
* Gunakan tombol **Edit** untuk mengubah data
* Gunakan tombol **Hapus** untuk menghapus data

---

## Catatan

Project ini masih sederhana dan bisa dikembangkan lagi, misalnya dengan menambahkan fitur upload gambar atau memperbaiki tampilan agar lebih menarik.

---

## Pembuat

Nama  : Insyira Fayani 
Kelas : A3
