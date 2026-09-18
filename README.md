# Pemrograman Web

Repositori ini berisi kumpulan tugas, latihan, dan proyek yang saya kerjakan selama mengikuti mata kuliah Pemrograman Web.

## Identitas

- **Nama:** Gabriel Tan
- **NIM:** D121241071
- **Kelas:** B
- **Mata kuliah:** Pemrograman Web
- **Universitas:** Universitas Hasanuddin

## Daftar Tugas

| Folder  | Berkas                                                 | Deskripsi                                                                                                                               |
| ------- | ------------------------------------------------------ | --------------------------------------------------------------------------------------------------------------------------------------- |
| Tugas 1 | `porto.html`                                           | Portofolio pribadi menggunakan HTML.                                                                                                    |
| Tugas 1 | `01-tugas-arsitektur-dan-semantik.html`                | Halaman utama portal publikasi artikel ilmiah mahasiswa menggunakan HTML semantik.                                                      |
| Tugas 2 | `02-tugas-standardisasi-konten.html`                   | Daftar publikasi penelitian dosen Informatika Unhas dengan tabel kompleks, daftar bertingkat, diagram metodologi, dan entitas karakter. |
| Tugas 3 | `03-tugas-media-dan-css.html` dan `03-tugas-style.css` | Kartu multimedia responsif dengan sampul, video, audio, serta penerapan CSS dan pola BEM.                                               |
| Tugas 4 | `04-tugas-tata-letak.html` dan `04-tugas-style.css`    | Portal jurnal ilmiah dengan penerapan Flexbox, CSS Grid, Bootstrap 5, dan tata letak responsif.                                         |

## Struktur Repositori

```text
PemrogramanWeb/
├── README.md
├── Tugas 1/
│   ├── porto.html
│   └── 01-tugas-arsitektur-dan-semantik.html
├── Tugas 2/
│   ├── 02-tugas-standardisasi-konten.html
│   └── aset/
│       └── logo-unhas.png
├── Tugas 3/
│   ├── 03-tugas-media-dan-css.html
│   ├── 03-tugas-style.css
│   └── aset/
└── Tugas 4/
    ├── 04-tugas-tata-letak.html
    └── 04-tugas-style.css
```

Folder `aset` pada Tugas 3 berisi gambar sampul, poster, video, audio, dan takarir yang digunakan pada halaman.

## Tugas 1 — Arsitektur Web dan HTML Semantik

Tugas ini berfokus pada penyusunan halaman utama portal publikasi artikel ilmiah mahasiswa. Struktur halaman ditujukan agar konten mudah dibaca, dipahami mesin pencari, dan diakses oleh pengguna pembaca layar.

Ketentuan tugas meliputi:

- Struktur HTML5 yang valid tanpa error pada validator W3C.
- Penggunaan minimal satu `header`, satu `nav`, dan satu `main`.
- Minimal tiga `section`, masing-masing berisi minimal dua elemen `article`.
- Satu `aside` berisi daftar jurnal eksternal.
- Satu `footer` berisi informasi lisensi Creative Commons dan kontak.
- Penggunaan entitas HTML untuk karakter khusus.
- Tautan eksternal dengan atribut `rel` yang aman, seperti `rel="noopener noreferrer"` ketika menggunakan `target="_blank"`.

Berkas utama disimpan dengan nama `01-tugas-arsitektur-dan-semantik.html` di dalam folder `Tugas 1`. Folder ini juga memuat `porto.html` sebagai latihan portofolio pribadi.

Pesan commit yang ditentukan untuk penyelesaian tugas adalah:

```text
Selesaikan Tugas Mandiri modul 1
```

Tautan repositori dikumpulkan melalui Sikola dalam bentuk PDF.

## Tugas 2 — Standardisasi Kode dan Pengorganisasian Konten

Halaman ini menyajikan empat publikasi asli tahun 2024 yang melibatkan dosen Informatika Universitas Hasanuddin. Nama dosen ditampilkan beserta gelarnya, dan judul publikasi ditautkan melalui DOI untuk memudahkan penelusuran sumber.

### Penerapan HTML

- Struktur HTML5 dan elemen semantik.
- Tabel dengan `caption`, `colgroup`, `thead`, `tbody`, dan `tfoot`.
- Penggabungan sel menggunakan `colspan` dan `rowspan`.
- Atribut `scope` pada header tabel untuk memperjelas hubungan antarsel.
- Daftar bidang keahlian menggunakan `ol` dengan `ul` di dalam setiap `li`.
- Diagram alur umum penelitian menggunakan `figure`, `pre`, dan `figcaption`.
- Entitas karakter seperti `&quot;`, `&amp;`, `&lt;`, dan `&gt;`.
- Logo instansi dengan teks alternatif pada atribut `alt`.
- Penulisan tag dan atribut dengan huruf kecil, nilai atribut berkutip ganda, serta susunan elemen yang benar.

Halaman dibuat tanpa CSS dan JavaScript. Diagram merupakan contoh alur umum penelitian pengembangan sistem, bukan salinan metode dari setiap artikel.

### Sumber Tugas 2

- PPT Modul 2: *Standardisasi Kode dan Pengorganisasian Konten Web*, sebagai acuan markup dan sumber logo.
- [Tim Pengajar Informatika Unhas](https://prodi.unhas.ac.id/sarjana-teknik-informatika/page/show/id/16), sebagai acuan nama, gelar, dan bidang keahlian dosen.
- Sumber publikasi yang ditautkan melalui DOI pada setiap judul artikel.

Pesan commit yang ditentukan untuk penyelesaian tugas adalah:

```text
Selesaikan tugas mandiri modul 2
```

## Tugas 3 — Rekayasa Media Digital dan Dasar CSS

Tugas ini berupa kartu multimedia responsif dengan tema **Mengenal Browser dan Media Web**. Halaman memuat ilustrasi sampul, video pengenalan browser, audio dari narasi video, serta rangkuman materi.

Berkas utama tugas ini adalah:

- `03-tugas-media-dan-css.html`
- `03-tugas-style.css`

### Penerapan HTML dan CSS

- Reset global menggunakan `box-sizing: border-box`, termasuk pada pseudo-element `::before` dan `::after`.
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

Selector `.lecture-card--featured .lecture-card__description` memiliki dua kelas, sehingga lebih spesifik daripada `.lecture-card__description` yang hanya memiliki satu kelas.

Aturan status tetap berlaku meskipun aturan dasar ditulis setelahnya. Perubahan ini diterapkan tanpa menggunakan `!important`.

### Media dan Sumber Tugas 3

- PPT Modul 3: *Rekayasa Media Digital dan Dasar CSS*, sebagai acuan pembelajaran.
- Video [What is a browser?](https://commons.wikimedia.org/wiki/File:What_is_a_browser-.webm) karya Google, berlisensi [CC BY 3.0](https://creativecommons.org/licenses/by/3.0/).
- Versi MP4 dibuat melalui konversi video sumber. Audio MP3 dan Ogg diambil dari narasi video yang sama.
- Poster pratinjau diambil dari salah satu frame video.
- Takarir bahasa Inggris bersumber dari [halaman takarir Wikimedia Commons](https://commons.wikimedia.org/wiki/TimedText:What_is_a_browser-.webm.en.srt). Kontribusi teks mengikuti lisensi [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/). Terjemahan bahasa Indonesia dibuat dengan bantuan AI dan menggunakan lisensi yang sama.
- Ilustrasi sampul dibuat untuk tugas ini dengan bantuan AI, dengan komposisi berbeda untuk ponsel dan desktop.

Video diterbitkan pada 2009 dan digunakan sebagai pengantar konsep browser. Beberapa contoh perangkat lunak dan tampilannya mencerminkan kondisi pada masa tersebut.

Audio memuat narasi yang sama dengan video, bukan rekaman materi terpisah. Sumber dan atribusi media juga dicantumkan pada halaman HTML.

Pesan commit yang ditentukan untuk penyelesaian tugas adalah:

```text
Selesaikan tugas mandiri modul 3
```

## Tugas 4 — Penskalaan Tata Letak Modern dengan Grid, Flexbox, dan Bootstrap

Tugas ini berupa prototipe portal jurnal ilmiah fakultas. Fokus utama tugas adalah penerapan tata letak modern menggunakan **Flexbox**, **CSS Grid**, dan **Bootstrap 5**, serta penerapan desain responsif untuk berbagai ukuran layar.

Berkas utama tugas ini adalah:

- `04-tugas-tata-letak.html`
- `04-tugas-style.css`

### Penerapan Flexbox

Navigasi utama menggunakan Flexbox untuk mengatur posisi logo dan menu navigasi.

Pada layar desktop dan tablet, menu ditampilkan secara horizontal. Pada layar ponsel, arah navigasi diubah menjadi vertikal menggunakan media query sehingga menu tetap mudah digunakan pada layar yang lebih sempit.

### Penerapan CSS Grid

Layout utama portal menggunakan CSS Grid dengan tiga bagian:

- Kolom kiri untuk kategori jurnal dengan lebar tetap `200px`.
- Kolom tengah untuk daftar publikasi yang menggunakan ruang fleksibel.
- Kolom kanan dengan lebar `220px` untuk artikel terbaru dan informasi.

Pada ukuran layar tablet, kolom kanan disembunyikan agar ruang untuk konten utama tetap cukup. Pada layar ponsel, layout berubah menjadi satu kolom.

### Micro Grid pada Kartu Artikel

Daftar publikasi menggunakan CSS Grid dengan:

```css
grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
```

Pengaturan ini memungkinkan jumlah kartu menyesuaikan dengan lebar ruang yang tersedia. Pada layar yang lebih kecil, kartu dapat tersusun menjadi satu kolom.

### Penerapan Bootstrap 5

Bootstrap 5 digunakan sebagai bagian dari tampilan kartu artikel dan tombol. Bootstrap dimuat melalui CDN dengan atribut `integrity` dan `crossorigin`.

Bootstrap digunakan bersama CSS buatan sendiri. CSS Grid dan Flexbox tetap digunakan untuk mengatur struktur utama halaman sesuai tujuan tugas.

### Responsivitas

Halaman diuji pada beberapa ukuran layar:

- **Desktop:** layout tiga kolom dengan sidebar kiri, daftar publikasi, dan sidebar kanan.
- **Tablet:** sidebar kanan disembunyikan sehingga layout menjadi dua kolom.
- **Ponsel:** navigasi menjadi vertikal dan layout utama berubah menjadi satu kolom.

Media query digunakan untuk menyesuaikan tata letak, jarak, dan ukuran elemen berdasarkan lebar layar.

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

- Menu **Beranda** mengarah ke bagian awal halaman.
- Menu **Jurnal** mengarah ke bagian publikasi.
- Menu **Penulis** mengarah ke informasi identitas pada bagian bawah halaman.
- Menu **Tentang** mengarah ke informasi institusi.
- Bagian **Artikel Terbaru** menyediakan tautan langsung menuju kartu publikasi yang sesuai.

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

- PPT Modul 4: *Penskalaan Tata Letak Modern dengan Grid, Flexbox, dan Bootstrap*, sebagai acuan penerapan Flexbox, CSS Grid, responsive layout, dan Bootstrap 5.
- Artikel jurnal pada Jurnal Teknologi Informasi dan Ilmu Komputer (JTIIK) sebagai sumber konten publikasi.
- Informasi artikel dicantumkan berdasarkan halaman publikasi dan sumber jurnal yang digunakan.

Pesan commit yang ditentukan untuk penyelesaian tugas adalah:

```text
Selesaikan tugas mandiri modul 4
```

## Cara Membuka

1. Clone atau unduh repositori ini.
2. Jika mengunduh ZIP, ekstrak terlebih dahulu.
3. Buka folder repositori menggunakan Visual Studio Code.
4. Untuk Tugas 1 dan Tugas 2, buka berkas HTML melalui browser.
5. Untuk Tugas 3, jalankan `03-tugas-media-dan-css.html` melalui ekstensi **Live Server** agar halaman dan takarir dimuat melalui server lokal.
6. Untuk Tugas 4, buka `04-tugas-tata-letak.html` melalui browser atau gunakan **Live Server** pada Visual Studio Code.
7. Pertahankan struktur folder agar jalur relatif menuju CSS dan seluruh aset tetap sesuai.

Pada Tugas 3:

- Gunakan kontrol pemutar untuk menjalankan video atau audio.
- Aktifkan takarir melalui menu yang tersedia pada pemutar video.
- Jeda video sebelum memutar audio agar suara tidak terdengar bersamaan.
- Ubah lebar jendela browser untuk melihat perubahan sampul dan tata letak.

Pada Tugas 4:

- Ubah lebar jendela browser untuk melihat perubahan tata letak.
- Pada desktop, perhatikan tiga kolom pada layout utama.
- Pada tablet, perhatikan perubahan menjadi dua kolom.
- Pada ponsel, perhatikan perubahan menjadi satu kolom dan navigasi yang tersusun vertikal.
- Gunakan menu navigasi dan bagian Artikel Terbaru untuk berpindah ke bagian halaman yang sesuai.

## Pengumpulan dan Riwayat Pengerjaan

Perubahan disimpan secara bertahap menggunakan commit yang menjelaskan pekerjaan pada setiap tahap. Pesan commit penyelesaian mengikuti ketentuan masing-masing modul.

Tugas 1, Tugas 2, Tugas 3, dan Tugas 4 dikumpulkan melalui Sikola dengan mencantumkan nama, NIM, dan tautan repositori. Format berkas pengumpulan mengikuti ketentuan masing-masing tugas.

Riwayat commit digunakan untuk mendokumentasikan proses pengerjaan, sehingga perubahan tidak hanya disimpan dalam satu commit pada akhir pengerjaan.

## Catatan

- Repositori ini dibuat untuk pembelajaran dan bukan situs resmi Universitas Hasanuddin.
- Hak atas publikasi, logo, dan media referensi mengikuti ketentuan pemilik serta lisensinya masing-masing.
- Konten artikel pada Tugas 4 digunakan sebagai sumber informasi untuk mengisi prototipe portal jurnal dan tidak berarti halaman tersebut merupakan bagian dari situs resmi JTIIK.
- Daftar tugas dan dokumentasi diperbarui sesuai perkembangan perkuliahan.