# Pemrograman Web

Repositori ini berisi kumpulan tugas, latihan, dan proyek yang saya kerjakan selama mengikuti mata kuliah Pemrograman Web.

## Identitas

- **Nama:** Gabriel Tan
- **NIM:** D121241071
- **Kelas:** B
- **Mata kuliah:** Pemrograman Web
- **Universitas:** Universitas Hasanuddin

## Daftar Tugas

| Folder | Berkas | Deskripsi |
| --- | --- | --- |
| Tugas 1 | `porto.html` | Portofolio pribadi menggunakan HTML. |
| Tugas 1 | `01-tugas-arsitektur-dan-semantik.html` | Halaman utama portal publikasi artikel ilmiah mahasiswa menggunakan HTML semantik. |
| Tugas 2 | `02-tugas-standardisasi-konten.html` | Daftar publikasi penelitian dosen Informatika Unhas dengan tabel kompleks, daftar bertingkat, diagram metodologi, dan entitas karakter. |
| Tugas 3 | `03-tugas-media-dan-css.html` dan `03-tugas-style.css` | Kartu multimedia responsif dengan sampul, video, audio, serta penerapan CSS dan pola BEM. |

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
└── Tugas 3/
    ├── 03-tugas-media-dan-css.html
    ├── 03-tugas-style.css
    └── aset/
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

## Cara Membuka

1. Clone atau unduh repositori ini.
2. Jika mengunduh ZIP, ekstrak terlebih dahulu.
3. Buka folder repositori menggunakan Visual Studio Code.
4. Untuk Tugas 1 dan Tugas 2, buka berkas HTML melalui browser.
5. Untuk Tugas 3, jalankan `03-tugas-media-dan-css.html` melalui ekstensi **Live Server** agar halaman dan takarir dimuat melalui server lokal.
6. Pertahankan struktur folder agar jalur relatif menuju CSS dan seluruh aset tetap sesuai.

Pada Tugas 3:

- Gunakan kontrol pemutar untuk menjalankan video atau audio.
- Aktifkan takarir melalui menu yang tersedia pada pemutar video.
- Jeda video sebelum memutar audio agar suara tidak terdengar bersamaan.
- Ubah lebar jendela browser untuk melihat perubahan sampul dan tata letak.

## Pengumpulan dan Riwayat Pengerjaan

Perubahan disimpan secara bertahap menggunakan commit yang menjelaskan pekerjaan pada setiap tahap. Pesan commit penyelesaian mengikuti ketentuan masing-masing modul.

Untuk Tugas 2 dan Tugas 3, informasi pengumpulan melalui Sikola mencakup nama, NIM, dan tautan repositori.

## Catatan

- Repositori ini dibuat untuk pembelajaran dan bukan situs resmi Universitas Hasanuddin.
- Hak atas publikasi, logo, dan media referensi mengikuti ketentuan pemilik serta lisensinya masing-masing.
- Daftar tugas dan dokumentasi diperbarui sesuai perkembangan perkuliahan.
