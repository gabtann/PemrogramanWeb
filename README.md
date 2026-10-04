# Pemrograman Web

Repositori ini berisi kumpulan tugas dan latihan yang dikerjakan selama mengikuti mata kuliah **Pemrograman Web** di Universitas Hasanuddin.

## Identitas

- **Nama:** Gabriel Tan
- **NIM:** D121241071
- **Kelas:** B
- **Mata Kuliah:** Pemrograman Web
- **Universitas:** Universitas Hasanuddin

## Daftar Tugas

| Modul | Folder | Berkas Utama | Fokus |
|---|---|---|---|
| Tugas 1 | `Tugas 1/` | `porto.html`, `01-tugas-arsitektur-dan-semantik.html` | HTML5 semantik dan struktur portal artikel ilmiah |
| Tugas 2 | `Tugas 2/` | `02-tugas-standardisasi-konten.html` | Standardisasi konten HTML dan struktur publikasi penelitian |
| Tugas 3 | `Tugas 3/` | `03-tugas-media-dan-css.html`, `03-tugas-style.css` | Media web, CSS, responsivitas, dan BEM |
| Tugas 4 | `Tugas 4/` | `04-tugas-tata-letak.html`, `04-tugas-style.css` | Flexbox, CSS Grid, Bootstrap 5, dan responsive layout |
| Tugas 5 | `Tugas 5/` | `Transaction.php`, `finance.php` | PHP sisi server, OOP, session, validasi, dan keamanan |
| Tugas 6 | `Tugas 6/` | `06-tugas-pemodelan-database.md` | ERD, normalisasi basis data, tabel final, dan Mermaid |

## Struktur Repositori

```text
PemrogramanWeb/
├── README.md
│
├── Tugas 1/
│   ├── porto.html
│   └── 01-tugas-arsitektur-dan-semantik.html
│
├── Tugas 2/
│   ├── 02-tugas-standardisasi-konten.html
│   └── aset/
│       └── logo-unhas.png
│
├── Tugas 3/
│   ├── 03-tugas-media-dan-css.html
│   ├── 03-tugas-style.css
│   └── aset/
│
├── Tugas 4/
│   ├── 04-tugas-tata-letak.html
│   └── 04-tugas-style.css
│
├── Tugas 5/
│   ├── Transaction.php
│   └── finance.php
│
└── Tugas 6/
    └── 06-tugas-pemodelan-database.md
```

Folder `aset` pada Tugas 3 berisi media yang digunakan pada halaman, seperti gambar sampul, poster, video, audio, dan takarir.

---

## Tugas 1 — Tugas Praktik: Portal Artikel Ilmiah Berstandar W3C

Tugas 1 berfokus pada penyusunan halaman utama portal publikasi artikel ilmiah mahasiswa menggunakan HTML5 semantik. Struktur halaman dibuat agar konten mudah dibaca, dipahami mesin pencari, dan diakses oleh pengguna pembaca layar.

### Ketentuan dan Penerapan

- Struktur HTML5 yang valid tanpa error pada validator W3C.
- Penggunaan minimal satu `header`, satu `nav`, dan satu `main`.
- Minimal tiga `section`, masing-masing berisi minimal dua elemen `article`.
- Satu `aside` berisi daftar jurnal eksternal.
- Satu `footer` berisi informasi lisensi Creative Commons dan kontak.
- Penggunaan entitas HTML untuk karakter khusus.
- Tautan eksternal menggunakan atribut `rel` yang aman, seperti `rel="noopener noreferrer"` ketika menggunakan `target="_blank"`.

Berkas utama tugas adalah `01-tugas-arsitektur-dan-semantik.html`. Folder ini juga memuat `porto.html` sebagai latihan portofolio pribadi.

### Penyelesaian

Pesan commit yang ditentukan:

```text
Selesaikan Tugas Mandiri modul 1
```

Tautan repositori dikumpulkan melalui Sikola dalam bentuk PDF.

---

## Tugas 2 — Tugas Mandiri: Halaman Daftar Publikasi Penelitian Dosen

Tugas 2 menyajikan empat publikasi asli tahun 2024 yang melibatkan dosen Informatika Universitas Hasanuddin. Nama dosen ditampilkan beserta gelarnya dan judul publikasi ditautkan melalui DOI.

### Penerapan HTML

- Struktur HTML5 dan elemen semantik.
- Tabel dengan `caption`, `colgroup`, `thead`, `tbody`, dan `tfoot`.
- Penggabungan sel menggunakan `colspan` dan `rowspan`.
- Atribut `scope` pada header tabel.
- Daftar bidang keahlian menggunakan `ol` dengan `ul` di dalam setiap `li`.
- Diagram alur umum penelitian menggunakan `figure`, `pre`, dan `figcaption`.
- Entitas karakter seperti `&quot;`, `&amp;`, `&lt;`, dan `&gt;`.
- Logo instansi dengan teks alternatif pada atribut `alt`.
- Penulisan tag dan atribut dengan huruf kecil, nilai atribut berkutip ganda, serta susunan elemen yang benar.

Halaman dibuat tanpa CSS dan JavaScript. Diagram yang digunakan merupakan contoh alur umum penelitian pengembangan sistem, bukan salinan metode dari setiap artikel.

### Sumber Tugas 2

- PPT Modul 2: *Standardisasi Kode dan Pengorganisasian Konten Web*.
- Tim Pengajar Informatika Unhas sebagai acuan nama, gelar, dan bidang keahlian dosen.
- Sumber publikasi yang ditautkan melalui DOI pada setiap judul artikel.

### Penyelesaian

```text
Selesaikan tugas mandiri modul 2
```

---

## Tugas 3 — Tugas Mandiri: Pemutar Media Kuliah Responsif

Tugas 3 berupa kartu multimedia responsif dengan tema **Mengenal Browser dan Media Web**. Halaman memuat ilustrasi sampul, video pengenalan browser, audio dari narasi video, serta rangkuman materi.

### Berkas Utama

- `03-tugas-media-dan-css.html`
- `03-tugas-style.css`

### Penerapan HTML dan CSS

- Reset global menggunakan `box-sizing: border-box`, termasuk pseudo-element `::before` dan `::after`.
- Elemen `picture` dengan minimal dua sumber WebP yang dipilih berdasarkan lebar layar.
- Art direction melalui komposisi sampul yang berbeda untuk ponsel dan desktop.
- Gambar JPG sebagai fallback pada elemen `img`.
- Pemutar video dengan poster pratinjau, kontrol pemutar, serta format WebM dan MP4.
- Pemutar audio dengan format MP3 dan Ogg.
- Takarir bahasa Indonesia dan Inggris menggunakan elemen `track`.
- Penamaan kelas mengikuti pola BEM.
- Kartu dengan margin terpusat, bayangan, sudut melengkung, dan transisi saat hover.
- Media query untuk menyesuaikan ukuran teks dan jarak pada layar kecil.
- Dukungan `prefers-reduced-motion` untuk mengurangi animasi sesuai pengaturan pengguna.

Halaman menggunakan HTML dan CSS tanpa JavaScript.

### Penamaan Kelas BEM

Contoh penamaan kelas yang digunakan:

- `lecture-card` sebagai block atau komponen utama.
- `lecture-card__title` sebagai element atau bagian dari kartu.
- `lecture-card--featured` sebagai modifier atau penanda status kartu.

Penamaan ini membantu mengelompokkan aturan CSS berdasarkan komponen dan fungsinya.

### Spesifisitas CSS

Kelas `lecture-card--featured` digunakan sebagai status tambahan pada kartu. Ketika kelas ini aktif, teks deskripsi berubah menjadi merah tua dan lebih tebal.

Selector `.lecture-card--featured .lecture-card__description` memiliki dua kelas sehingga lebih spesifik daripada `.lecture-card__description` yang hanya memiliki satu kelas.

Aturan status tetap berlaku tanpa menggunakan `!important`.

### Media dan Sumber Tugas 3

- PPT Modul 3: *Rekayasa Media Digital dan Dasar CSS*.
- Video *What is a browser?* karya Google dari Wikimedia Commons dengan lisensi CC BY 3.0.
- Versi MP4 dibuat melalui konversi video sumber.
- Audio MP3 dan Ogg diambil dari narasi video yang sama.
- Poster pratinjau diambil dari salah satu frame video.
- Takarir bahasa Inggris bersumber dari Wikimedia Commons.
- Terjemahan bahasa Indonesia dibuat dengan bantuan AI.
- Ilustrasi sampul dibuat untuk tugas dengan bantuan AI.

### Penyelesaian

```text
Selesaikan tugas mandiri modul 3
```

---

## Tugas 4 — Tugas Mandiri: Portal Jurnal Ilmiah Multi-Kolom

Tugas 4 berupa prototipe portal jurnal ilmiah fakultas. Fokus utama tugas adalah penerapan **Flexbox**, **CSS Grid**, **Bootstrap 5**, serta desain responsif untuk berbagai ukuran layar.

### Berkas Utama

- `04-tugas-tata-letak.html`
- `04-tugas-style.css`

### Penerapan Flexbox

Navigasi utama menggunakan Flexbox untuk mengatur posisi logo dan menu navigasi.

Pada layar desktop dan tablet, menu ditampilkan secara horizontal. Pada layar ponsel, arah navigasi diubah menjadi vertikal menggunakan media query.

### Penerapan CSS Grid

Layout utama portal menggunakan CSS Grid dengan tiga bagian:

- Kolom kiri untuk kategori jurnal dengan lebar tetap `200px`.
- Kolom tengah untuk daftar publikasi.
- Kolom kanan dengan lebar `220px` untuk artikel terbaru dan informasi.

Pada ukuran layar tablet, kolom kanan disembunyikan. Pada layar ponsel, layout berubah menjadi satu kolom.

Daftar publikasi menggunakan micro grid:

```css
grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
```

### Penerapan Bootstrap 5

Bootstrap 5 digunakan pada tampilan kartu artikel dan tombol. Bootstrap dimuat melalui CDN dengan atribut `integrity` dan `crossorigin`.

Bootstrap digunakan bersama CSS buatan sendiri. CSS Grid dan Flexbox tetap digunakan untuk mengatur struktur utama halaman.

### Responsivitas

- **Desktop:** layout tiga kolom.
- **Tablet:** layout dua kolom.
- **Ponsel:** layout satu kolom dengan navigasi vertikal.

### Konten Publikasi

Bagian publikasi menggunakan artikel jurnal yang diterbitkan pada **Jurnal Teknologi Informasi dan Ilmu Komputer (JTIIK)**.

Tiga artikel yang ditampilkan adalah:

1. **Penerapan Framework TOGAF ADM dalam Perancangan Arsitektur Enterprise di SMAN 17 Surabaya**
   - Penulis: Salma Nabila, Siti Mukaromah, Doddy Ridwandono
   - JTIIK, Vol. 12 No. 4, 2025
   - DOI: `10.25126/jtiik.124`

2. **Sistem Monitoring Budidaya Melon melalui Greenhouse Berbasis Internet of Things**
   - Penulis: Meyti Eka Apriyani, Ade Ismail, Amelia Widya Andini
   - JTIIK, Vol. 12 No. 1, 2025
   - DOI: `10.25126/jtiik.2025129164`

3. **Data Mining Pendidikan: Prediksi Gaya Belajar Mahasiswa Teknik Menggunakan Machine Learning**
   - Penulis: Sumarlin, Dewi Anggraini
   - JTIIK, Vol. 12 No. 3, 2025
   - DOI: `10.25126/jtiik.2025129190`

Setiap kartu artikel memiliki tombol **Baca Artikel** yang mengarah ke halaman artikel pada situs JTIIK.

### Navigasi Halaman

Portal memiliki beberapa bentuk navigasi:

- **Beranda** mengarah ke bagian awal halaman.
- **Jurnal** mengarah ke bagian publikasi.
- **Penulis** mengarah ke informasi identitas.
- **Tentang** mengarah ke informasi institusi.
- **Artikel Terbaru** menyediakan tautan menuju kartu publikasi yang sesuai.

Navigasi artikel menggunakan `id` pada elemen HTML sehingga pengguna dapat langsung berpindah ke bagian yang dituju.

### Struktur Halaman

Halaman Tugas 4 terdiri atas:

- Header dan navigasi utama.
- Sidebar kategori.
- Bagian publikasi terbaru.
- Kartu-kartu artikel jurnal.
- Sidebar artikel terbaru dan informasi.
- Footer yang memuat identitas dan informasi halaman.

Halaman dibuat menggunakan HTML dan CSS dengan Bootstrap 5, tanpa JavaScript.

### Sumber Tugas 4

- PPT Modul 4: *Penskalaan Tata Letak Modern dengan Grid, Flexbox, dan Bootstrap*.
- Artikel jurnal pada Jurnal Teknologi Informasi dan Ilmu Komputer (JTIIK).
- Informasi artikel berdasarkan halaman publikasi dan sumber jurnal yang digunakan.

### Penyelesaian

```text
Selesaikan tugas mandiri modul 4
```

---

## Tugas 5 — Tugas Mandiri: Sistem Manajemen Keuangan Sederhana

Tugas 5 berupa prototipe **Sistem Manajemen Keuangan Sederhana** menggunakan PHP sebagai pemrograman sisi server.

Sistem menyediakan proses **deposit** dan **withdrawal**, menyimpan saldo serta riwayat transaksi menggunakan session, dan menerapkan validasi serta perlindungan keamanan dasar.

### Berkas Utama

- `Transaction.php`
- `finance.php`

### Penerapan PHP Modern

- `declare(strict_types=1)` untuk mengaktifkan strict typing.
- Constructor property promotion pada class `Transaction`.
- Encapsulation dengan properti `private`.
- `match` expression untuk menentukan jenis transaksi.
- Session untuk menyimpan saldo dan riwayat transaksi.
- Validasi data transaksi sebelum diproses.

### Class `Transaction`

Class `Transaction` digunakan untuk merepresentasikan transaksi keuangan.

Class memiliki properti:

- `id`
- `type`
- `amount`

Ketiga properti dibuat menggunakan constructor property promotion dan memiliki akses `private`.

Method `process()` digunakan untuk memproses transaksi berdasarkan jenis transaksi.

- **Deposit** menambahkan jumlah transaksi ke saldo.
- **Withdrawal** hanya dapat dilakukan jika saldo mencukupi.
- Transaksi yang berhasil disimpan ke dalam riwayat transaksi pada session.

### Validasi Transaksi

Form transaksi melakukan validasi:

- Jenis transaksi harus berupa `deposit` atau `withdrawal`.
- Jumlah transaksi harus lebih besar dari `0`.
- Withdrawal ditolak apabila saldo tidak mencukupi.

Validasi dilakukan pada sisi server.

### Session dan Manajemen State

Session digunakan untuk mempertahankan data selama pengguna berinteraksi dengan aplikasi.

Data yang disimpan dalam session meliputi:

- Saldo saat ini.
- Riwayat transaksi.
- Token CSRF.

### Keamanan

Tugas ini menerapkan:

- **CSRF protection** menggunakan token yang disimpan dalam session.
- Verifikasi token menggunakan `hash_equals()`.
- `htmlspecialchars()` untuk data yang ditampilkan kembali.
- Validasi input transaksi.

### Riwayat Transaksi

Setiap transaksi yang berhasil akan dicatat dalam session dan menampilkan:

- ID transaksi.
- Jenis transaksi.
- Jumlah transaksi.
- Saldo setelah transaksi.

Transaksi withdrawal yang gagal karena saldo tidak mencukupi tidak ditambahkan ke riwayat.

### Pengujian

Aplikasi diuji dengan beberapa skenario:

- Deposit berhasil menambah saldo.
- Beberapa deposit dapat dilakukan secara berurutan.
- Withdrawal berhasil apabila saldo mencukupi.
- Withdrawal ditolak apabila saldo tidak mencukupi.
- Riwayat transaksi menampilkan transaksi yang berhasil.
- Validasi jumlah transaksi menolak nilai nol atau negatif.

### Menjalankan Tugas 5

Masuk ke folder Tugas 5:

```text
cd "Tugas 5"
```

Jalankan PHP built-in development server:

```text
php -S localhost:8000
```

Buka halaman berikut pada browser:

```text
http://localhost:8000/finance.php
```

### Penyelesaian

```text
Selesaikan tugas mandiri modul 5
```

### Riwayat Commit Tugas 5

Pengerjaan Tugas 5 dilakukan secara bertahap melalui lima commit:

1. `Tambah class Transaction`
2. `Tambah proses transaksi`
3. `Tambah halaman finance`
4. `Tambah validasi dan keamanan transaksi`
5. `Selesaikan tugas mandiri modul 5`

---

## Tugas 6 — Tugas Mandiri: Perancangan ERD E-Library Kampus

Tugas 6 berfokus pada perancangan basis data untuk sistem **E-Library Kampus**.

Perancangan mencakup:

- ERD logis.
- Identifikasi atribut.
- Primary key dan foreign key.
- Simulasi normalisasi UNF hingga 3NF.
- Struktur tabel final beserta tipe data.
- Visualisasi relasi menggunakan Mermaid.

### Berkas Utama

```text
Tugas 6/
└── 06-tugas-pemodelan-database.md
```

### Desain ERD Logis

ERD terdiri atas empat entitas utama:

- **Mahasiswa**, untuk menyimpan identitas mahasiswa.
- **Penerbit**, untuk menyimpan informasi penerbit buku.
- **Buku**, untuk menyimpan informasi buku dan penerbitnya.
- **Transaksi Peminjaman**, untuk mencatat aktivitas peminjaman buku oleh mahasiswa.

Relasi antarentitas:

- Satu **Penerbit** dapat menerbitkan banyak **Buku**.
- Satu **Mahasiswa** dapat memiliki banyak **Transaksi Peminjaman**.
- Satu **Buku** dapat muncul pada banyak **Transaksi Peminjaman**.

### Normalisasi

Normalisasi dilakukan secara bertahap:

- **UNF:** data peminjaman masih memiliki nilai yang belum atomik.
- **1NF:** setiap atribut dibuat bernilai atomik dan data peminjaman dipisahkan menjadi baris individual.
- **2NF:** `ID Transaksi` merupakan primary key tunggal. Karena tidak menggunakan primary key gabungan, tidak terdapat ketergantungan parsial. Dengan demikian, struktur 1NF sudah memenuhi 2NF.
- **3NF:** data mahasiswa, penerbit, dan buku dipisahkan menjadi entitas masing-masing untuk mengurangi redundansi dan menghindari ketergantungan transitif.

### Struktur Tabel Final

Struktur akhir terdiri atas:

- **Mahasiswa** dengan `mahasiswa_id` sebagai primary key.
- **Penerbit** dengan `penerbit_id` sebagai primary key.
- **Buku** dengan `buku_id` sebagai primary key dan `penerbit_id` sebagai foreign key.
- **Transaksi Peminjaman** dengan `transaksi_id` sebagai primary key serta `mahasiswa_id` dan `buku_id` sebagai foreign key.

Tipe data setiap atribut dicantumkan dalam tabel Markdown pada berkas tugas.

### Visualisasi Mermaid

Relasi antar tabel divisualisasikan menggunakan **Mermaid ER Diagram** langsung di dalam berkas Markdown.

Diagram menunjukkan hubungan:

```text
Penerbit 1 ─── N Buku
Mahasiswa 1 ─── N Transaksi Peminjaman
Buku 1 ─── N Transaksi Peminjaman
```

Tidak diperlukan gambar terpisah karena visualisasi ditulis dalam bentuk blok kode Mermaid pada file Markdown.

### Riwayat Commit Tugas 6

Pengerjaan Tugas 6 dilakukan secara bertahap melalui empat commit:

1. `Tambah desain ERD E-Library`
2. `Tambah simulasi normalisasi E-Library`
3. `Tambah tabel final dan relasi Mermaid`
4. `Selesaikan tugas mandiri modul 6`

Commit terakhir mencakup review, koreksi normalisasi, dan penyelesaian akhir tugas.

---

## Cara Membuka

1. Clone atau unduh repositori ini.
2. Jika mengunduh ZIP, ekstrak terlebih dahulu.
3. Buka folder repositori menggunakan Visual Studio Code.
4. Untuk **Tugas 1 dan Tugas 2**, buka berkas HTML melalui browser.
5. Untuk **Tugas 3**, jalankan `03-tugas-media-dan-css.html` menggunakan Live Server agar halaman multimedia dan takarir dimuat melalui server lokal.
6. Untuk **Tugas 4**, buka `04-tugas-tata-letak.html` melalui browser atau gunakan Live Server.
7. Untuk **Tugas 5**, pastikan PHP sudah terpasang dan dapat dijalankan melalui terminal.
8. Untuk **Tugas 6**, buka `06-tugas-pemodelan-database.md` menggunakan editor Markdown yang mendukung Mermaid.

---

## Catatan Penggunaan

### Tugas 3

- Gunakan kontrol pemutar untuk menjalankan video atau audio.
- Aktifkan takarir melalui menu yang tersedia pada pemutar video.
- Jeda video sebelum memutar audio agar suara tidak terdengar bersamaan.
- Ubah lebar jendela browser untuk melihat perubahan sampul dan tata letak.

### Tugas 4

- Ubah lebar jendela browser untuk melihat perubahan tata letak.
- Pada desktop, perhatikan tiga kolom pada layout utama.
- Pada tablet, perhatikan perubahan menjadi dua kolom.
- Pada ponsel, perhatikan perubahan menjadi satu kolom dan navigasi vertikal.
- Gunakan menu navigasi dan bagian Artikel Terbaru untuk berpindah ke bagian halaman.

### Tugas 5

- Pastikan PHP dapat dijalankan melalui terminal.
- Jalankan server lokal dari folder `Tugas 5`.
- Buka `http://localhost:8000/finance.php`.
- Coba transaksi deposit untuk menambah saldo.
- Coba withdrawal dengan saldo yang mencukupi.
- Coba withdrawal dengan jumlah yang melebihi saldo.
- Periksa riwayat transaksi setelah melakukan transaksi.

### Tugas 6

- Buka `06-tugas-pemodelan-database.md`.
- Gunakan editor atau platform yang mendukung Mermaid untuk melihat diagram ERD secara visual.
- Perhatikan hubungan antara Mahasiswa, Buku, Penerbit, dan Transaksi Peminjaman.

---

## Pengumpulan dan Riwayat Pengerjaan

Perubahan disimpan secara bertahap menggunakan commit yang menjelaskan pekerjaan pada setiap tahap. Riwayat Git digunakan untuk mendokumentasikan proses pengerjaan sehingga perubahan tidak hanya disimpan dalam satu commit pada akhir pengerjaan.

Tugas dikumpulkan melalui Sikola dengan mencantumkan nama, NIM, dan tautan repositori sesuai ketentuan masing-masing modul.

### Riwayat Commit Tugas 6

```text
31700ca Tambah desain ERD E-Library
efbf076 Tambah simulasi normalisasi E-Library
b421698 Tambah tabel final dan relasi Mermaid
2bb9f5c Selesaikan tugas mandiri modul 6
```

---

## Catatan

- Repositori ini dibuat untuk pembelajaran dan bukan situs resmi Universitas Hasanuddin.
- Hak atas publikasi, logo, dan media referensi mengikuti ketentuan pemilik serta lisensinya masing-masing.
- Konten artikel pada Tugas 4 digunakan sebagai sumber informasi untuk mengisi prototipe portal jurnal dan tidak berarti halaman tersebut merupakan bagian dari situs resmi JTIIK.
- Aplikasi pada Tugas 5 merupakan prototipe pembelajaran dan bukan aplikasi layanan keuangan nyata.
- Dokumentasi repositori diperbarui sesuai perkembangan tugas pada mata kuliah Pemrograman Web.