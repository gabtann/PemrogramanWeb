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
| Tugas 2 | `02-tugas-standardisasi-konten.html` | Halaman daftar publikasi penelitian dosen Informatika Unhas menggunakan tabel kompleks, daftar bertingkat, diagram metodologi, dan entitas karakter. |

## Struktur Repositori

```text
PemrogramanWeb/
├── README.md
├── Tugas 1/
│   ├── porto.html
│   └── 01-tugas-arsitektur-dan-semantik.html
└── Tugas 2/
    ├── 02-tugas-standardisasi-konten.html
    └── aset/
        └── logo-unhas.png
```

## Tugas 2 — Standardisasi Kode dan Pengorganisasian Konten

Halaman ini menyajikan empat publikasi asli tahun 2024 yang melibatkan dosen Informatika Universitas Hasanuddin. Nama dosen ditampilkan beserta gelarnya, dan judul publikasi ditautkan melalui DOI untuk memudahkan penelusuran sumber.

Penerapan HTML pada tugas ini meliputi:

- Struktur HTML5 dan elemen semantik.
- Tabel dengan `caption`, `colgroup`, `thead`, `tbody`, dan `tfoot`.
- Penggabungan sel menggunakan `colspan` dan `rowspan`, serta atribut `scope` pada header tabel.
- Daftar bidang keahlian menggunakan `ol` dengan `ul` di dalam setiap `li`.
- Diagram alur umum penelitian menggunakan `figure`, `pre`, dan `figcaption`.
- Entitas karakter seperti `&quot;`, `&amp;`, `&lt;`, dan `&gt;`.
- Logo instansi dengan teks alternatif pada atribut `alt`.
- Penulisan tag dan atribut lowercase, nilai atribut berkutip ganda, serta nesting yang benar.

Halaman dibuat tanpa CSS dan JavaScript. Diagram merupakan contoh alur umum penelitian pengembangan sistem, bukan salinan metode dari setiap artikel.

### Sumber

- PPT Modul 2: *Standardisasi Kode dan Pengorganisasian Konten Web*, sebagai acuan markup dan sumber logo.
- [Tim Pengajar Informatika Unhas](https://prodi.unhas.ac.id/sarjana-teknik-informatika/page/show/id/16), sebagai acuan nama, gelar, dan bidang keahlian dosen.
- Sumber publikasi yang ditautkan melalui DOI pada setiap judul artikel.

## Cara Membuka

1. Clone atau unduh repositori ini.
2. Jika mengunduh ZIP, ekstrak terlebih dahulu.
3. Buka berkas `.html` pada folder tugas melalui browser.
4. Pertahankan struktur folder agar gambar dengan jalur relatif tetap dapat dimuat.

Berkas juga dapat dibuka menggunakan Visual Studio Code untuk mempelajari atau mengubah kodenya.

## Catatan

Repositori ini dibuat untuk pembelajaran dan bukan situs resmi Universitas Hasanuddin. Hak atas publikasi dan logo tetap milik pihak terkait.

Daftar tugas dan petunjuk penggunaan akan diperbarui sesuai perkembangan perkuliahan.