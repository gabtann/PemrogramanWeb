# Perancangan ERD E-Library Kampus

## 1. Desain ERD Logis

Sistem E-Library Kampus dirancang untuk mengelola data mahasiswa, buku, penerbit, serta transaksi peminjaman dan pengembalian buku.

### Entitas

#### 1. Mahasiswa

Menyimpan data mahasiswa yang menggunakan layanan perpustakaan.

| Atribut | Keterangan |
|---|---|
| `mahasiswa_id` | **Primary Key** |
| `nim` | Nomor induk mahasiswa |
| `nama` | Nama lengkap mahasiswa |
| `email` | Alamat email mahasiswa |
| `program_studi` | Program studi mahasiswa |

#### 2. Penerbit

Menyimpan informasi penerbit yang menerbitkan buku.

| Atribut | Keterangan |
|---|---|
| `penerbit_id` | **Primary Key** |
| `nama_penerbit` | Nama penerbit |
| `alamat` | Alamat penerbit |
| `telepon` | Nomor telepon penerbit |

#### 3. Buku

Menyimpan informasi buku yang tersedia di perpustakaan.

| Atribut | Keterangan |
|---|---|
| `buku_id` | **Primary Key** |
| `isbn` | ISBN buku |
| `judul` | Judul buku |
| `tahun_terbit` | Tahun penerbitan buku |
| `stok` | Jumlah stok buku |
| `penerbit_id` | **Foreign Key** ke `Penerbit.penerbit_id` |

#### 4. Transaksi Peminjaman

Menyimpan riwayat peminjaman dan pengembalian buku oleh mahasiswa.

| Atribut | Keterangan |
|---|---|
| `transaksi_id` | **Primary Key** |
| `mahasiswa_id` | **Foreign Key** ke `Mahasiswa.mahasiswa_id` |
| `buku_id` | **Foreign Key** ke `Buku.buku_id` |
| `tanggal_peminjaman` | Tanggal buku dipinjam |
| `tanggal_jatuh_tempo` | Batas waktu pengembalian buku |
| `tanggal_pengembalian` | Tanggal buku dikembalikan |
| `status` | Status transaksi peminjaman |

### Relasi Antar Entitas

1. **Penerbit — Buku**
   - Satu penerbit dapat menerbitkan banyak buku.
   - Setiap buku diterbitkan oleh satu penerbit.
   - Kardinalitas: **1 : N**.

2. **Mahasiswa — Transaksi Peminjaman**
   - Satu mahasiswa dapat melakukan banyak transaksi peminjaman.
   - Setiap transaksi peminjaman dilakukan oleh satu mahasiswa.
   - Kardinalitas: **1 : N**.

3. **Buku — Transaksi Peminjaman**
   - Satu buku dapat muncul dalam banyak transaksi peminjaman pada waktu yang berbeda.
   - Setiap transaksi peminjaman berkaitan dengan satu buku.
   - Kardinalitas: **1 : N**.

Dengan demikian, `penerbit_id`, `mahasiswa_id`, dan `buku_id` digunakan sebagai foreign key untuk menghubungkan tabel-tabel yang saling berelasi.

## 2. Simulasi Normalisasi

Normalisasi dilakukan untuk mengurangi redundansi data dan memastikan setiap atribut bergantung pada kunci yang tepat. Proses normalisasi pada sistem E-Library dilakukan dari bentuk tidak ternormalisasi (UNF) hingga bentuk normal ketiga (3NF).

### 2.1 Unnormalized Form (UNF)

Pada kondisi awal, data peminjaman dapat disimpan dalam satu struktur yang mencampurkan data mahasiswa, buku, penerbit, dan transaksi.

Contoh data dalam bentuk UNF:

| ID Transaksi | NIM | Nama Mahasiswa | Buku | Penerbit | Tanggal Pinjam | Tanggal Jatuh Tempo | Tanggal Kembali |
|---|---|---|---|---|---|---|---|
| TRX001 | D121241071 | Gabriel Tan | Basis Data, Pemrograman Web | Informatika Press, Tech Publisher | 2026-09-20 | 2026-09-27 | 2026-09-26 |

Bentuk tersebut belum memenuhi 1NF karena satu transaksi dapat menyimpan lebih dari satu buku dan beberapa nilai dalam satu atribut.

### 2.2 First Normal Form (1NF)

Untuk mencapai 1NF, setiap atribut harus memiliki nilai yang atomik dan tidak boleh terdapat kelompok data berulang dalam satu kolom.

Data peminjaman dipecah sehingga setiap baris hanya mewakili satu buku yang dipinjam.

| ID Transaksi | NIM | Nama Mahasiswa | ID Buku | Judul Buku | Penerbit | Tanggal Pinjam | Tanggal Jatuh Tempo | Tanggal Kembali |
|---|---|---|---|---|---|---|---|---|
| TRX001 | D121241071 | Gabriel Tan | B001 | Basis Data | Informatika Press | 2026-09-20 | 2026-09-27 | 2026-09-26 |
| TRX002 | D121241071 | Gabriel Tan | B002 | Pemrograman Web | Tech Publisher | 2026-09-20 | 2026-09-27 | 2026-09-26 |

Dengan demikian, setiap nilai pada tabel sudah bersifat atomik. Namun, masih terdapat redundansi data karena informasi mahasiswa dan transaksi yang sama berulang pada beberapa baris.

### 2.3 Second Normal Form (2NF)

Untuk mencapai 2NF, tabel harus sudah memenuhi 1NF dan setiap atribut non-key harus bergantung sepenuhnya pada primary key.

Pada data 1NF, setiap baris memiliki `ID Transaksi` yang unik sebagai primary key. Namun, data mahasiswa dan buku masih disimpan bersama data transaksi sehingga terjadi redundansi ketika mahasiswa melakukan beberapa transaksi atau buku yang sama dipinjam pada waktu berbeda.

Data kemudian dipisahkan menjadi:

**Tabel Mahasiswa**

| NIM | Nama Mahasiswa |
|---|---|
| D121241071 | Gabriel Tan |

**Tabel Buku**

| ID Buku | Judul Buku | Penerbit |
|---|---|---|
| B001 | Basis Data | Informatika Press |
| B002 | Pemrograman Web | Tech Publisher |

**Tabel Transaksi**

| ID Transaksi | NIM | ID Buku | Tanggal Pinjam | Tanggal Jatuh Tempo | Tanggal Kembali |
|---|---|---|---|---|---|
| TRX001 | D121241071 | B001 | 2026-09-20 | 2026-09-27 | 2026-09-26 |
| TRX002 | D121241071 | B002 | 2026-09-20 | 2026-09-27 | 2026-09-26 |

Pada tahap ini, atribut mahasiswa bergantung pada identitas mahasiswa, atribut buku bergantung pada identitas buku, sedangkan atribut peminjaman bergantung pada ID Transaksi.

### 2.4 Third Normal Form (3NF)

Untuk mencapai 3NF, tabel harus sudah memenuhi 2NF dan tidak boleh terdapat ketergantungan transitif, yaitu atribut non-key bergantung pada atribut non-key lainnya.

Pada tabel Buku, informasi penerbit dipisahkan ke dalam tabel tersendiri karena data penerbit merupakan entitas yang dapat digunakan oleh banyak buku.

**Tabel Penerbit**

| ID Penerbit | Nama Penerbit |
|---|---|
| P001 | Informatika Press |
| P002 | Tech Publisher |

**Tabel Buku**

| ID Buku | Judul Buku | ID Penerbit |
|---|---|---|
| B001 | Basis Data | P001 |
| B002 | Pemrograman Web | P002 |

Dengan pemisahan tersebut, `nama_penerbit` tidak lagi disimpan berulang pada tabel Buku. Informasi penerbit cukup disimpan satu kali pada tabel Penerbit dan dihubungkan melalui `penerbit_id`.

Hasil akhir normalisasi 3NF menghasilkan pemisahan data menjadi entitas:

- **Mahasiswa**
- **Penerbit**
- **Buku**
- **Transaksi Peminjaman**

Struktur tersebut mengurangi redundansi data dan memastikan setiap atribut berada pada entitas yang sesuai.

## 3. Struktur Tabel Final

Berdasarkan hasil normalisasi hingga 3NF, diperoleh empat tabel utama yang digunakan dalam sistem E-Library Kampus.

### 3.1 Tabel Mahasiswa

| Atribut | Tipe Data | Keterangan |
|---|---|---|
| mahasiswa_id | INT | Primary Key |
| nim | VARCHAR(20) | Nomor induk mahasiswa |
| nama | VARCHAR(100) | Nama mahasiswa |
| email | VARCHAR(100) | Email mahasiswa |
| program_studi | VARCHAR(100) | Program studi mahasiswa |

### 3.2 Tabel Penerbit

| Atribut | Tipe Data | Keterangan |
|---|---|---|
| penerbit_id | INT | Primary Key |
| nama_penerbit | VARCHAR(100) | Nama penerbit |
| alamat | VARCHAR(200) | Alamat penerbit |
| telepon | VARCHAR(20) | Nomor telepon penerbit |

### 3.3 Tabel Buku

| Atribut | Tipe Data | Keterangan |
|---|---|---|
| buku_id | INT | Primary Key |
| isbn | VARCHAR(20) | Nomor ISBN buku |
| judul | VARCHAR(200) | Judul buku |
| tahun_terbit | YEAR | Tahun terbit buku |
| stok | INT | Jumlah stok buku |
| penerbit_id | INT | Foreign Key ke Penerbit |

### 3.4 Tabel Transaksi Peminjaman

| Atribut | Tipe Data | Keterangan |
|---|---|---|
| transaksi_id | INT | Primary Key |
| mahasiswa_id | INT | Foreign Key ke Mahasiswa |
| buku_id | INT | Foreign Key ke Buku |
| tanggal_peminjaman | DATE | Tanggal buku dipinjam |
| tanggal_jatuh_tempo | DATE | Batas waktu pengembalian |
| tanggal_pengembalian | DATE | Tanggal buku dikembalikan |
| status | VARCHAR(20) | Status peminjaman |

### 3.5 Relasi Antar Tabel

```mermaid
erDiagram
    MAHASISWA ||--o{ TRANSAKSI_PEMINJAMAN : melakukan
    BUKU ||--o{ TRANSAKSI_PEMINJAMAN : dipinjam
    PENERBIT ||--o{ BUKU : menerbitkan

    MAHASISWA {
        INT mahasiswa_id PK
        VARCHAR nim
        VARCHAR nama
        VARCHAR email
        VARCHAR program_studi
    }

    PENERBIT {
        INT penerbit_id PK
        VARCHAR nama_penerbit
        VARCHAR alamat
        VARCHAR telepon
    }

    BUKU {
        INT buku_id PK
        VARCHAR isbn
        VARCHAR judul
        YEAR tahun_terbit
        INT stok
        INT penerbit_id FK
    }

    TRANSAKSI_PEMINJAMAN {
        INT transaksi_id PK
        INT mahasiswa_id FK
        INT buku_id FK
        DATE tanggal_peminjaman
        DATE tanggal_jatuh_tempo
        DATE tanggal_pengembalian
        VARCHAR status
    }
