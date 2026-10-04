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