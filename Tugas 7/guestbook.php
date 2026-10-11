<?php
session_start();

require_once __DIR__ . '/GuestBook.php';

// Konfigurasi database
$host = 'localhost';
$dbname = 'buku_tamu_db';
$username = 'root';
$password = 'gabrieltan050106';

$errors = [];
$nama = '';
$email = '';
$pesan = '';
$dbError = null;

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    $bukuTamu = new GuestBook($pdo);

    // Memproses formulir
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = trim($_POST['nama'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $pesan = trim($_POST['pesan'] ?? '');
        $csrfToken = $_POST['csrf_token'] ?? '';

        // Validasi CSRF
        if (
            !is_string($csrfToken) ||
            !hash_equals($_SESSION['csrf_token'], $csrfToken)
        ) {
            $errors[] = 'Token keamanan tidak valid. Silakan muat ulang halaman.';
        }

        // Validasi nama
        if ($nama === '') {
            $errors[] = 'Nama wajib diisi.';
        } elseif (mb_strlen($nama) > 100) {
            $errors[] = 'Nama maksimal 100 karakter.';
        }

        // Validasi email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Format email tidak valid.';
        } elseif (strlen($email) > 255) {
            $errors[] = 'Email maksimal 255 karakter.';
        }

        // Validasi pesan
        if (mb_strlen($pesan) < 5) {
            $errors[] = 'Pesan harus terdiri dari minimal 5 karakter.';
        }

        // Simpan pesan jika valid
        if (empty($errors)) {
            $bukuTamu->tambahPesan($nama, $email, $pesan);

            // Mencegah pengiriman ulang formulir
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

            header('Location: GuestBookPage.php?success=1');
            exit;
        }
    }

    // Mengambil semua pesan
    $daftarPesan = $bukuTamu->ambilSemuaPesan();

} catch (PDOException $e) {
    $dbError = 'Koneksi atau operasi database gagal. Periksa konfigurasi database.';
}

// Sanitasi output HTML
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital</title>
</head>
<body>

    <h1>Buku Tamu Digital</h1>

    <?php if ($dbError !== null): ?>

        <p><?= e($dbError) ?></p>

    <?php else: ?>

        <?php if (isset($_GET['success'])): ?>
            <p>Pesan berhasil dikirim!</p>
        <?php endif; ?>

        <?php foreach ($errors as $error): ?>
            <p><?= e($error) ?></p>
        <?php endforeach; ?>

        <h2>Formulir Buku Tamu</h2>

        <form method="POST" action="GuestBookPage.php">
            <input
                type="hidden"
                name="csrf_token"
                value="<?= e($_SESSION['csrf_token']) ?>"
            >

            <label for="nama">Nama:</label><br>
            <input
                type="text"
                id="nama"
                name="nama"
                maxlength="100"
                value="<?= e($nama) ?>"
                required
            ><br><br>

            <label for="email">Email:</label><br>
            <input
                type="email"
                id="email"
                name="email"
                maxlength="255"
                value="<?= e($email) ?>"
                required
            ><br><br>

            <label for="pesan">Pesan:</label><br>
            <textarea
                id="pesan"
                name="pesan"
                required
            ><?= e($pesan) ?></textarea><br><br>

            <button type="submit">Kirim Pesan</button>
        </form>

        <h2>Daftar Pesan Pengunjung</h2>

        <?php if (empty($daftarPesan)): ?>

            <p>Belum ada pesan yang dikirim.</p>

        <?php else: ?>

            <table border="1" cellpadding="8" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Tanggal Kirim</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($daftarPesan as $item): ?>
                        <tr>
                            <td><?= e((string) $item['id']) ?></td>
                            <td><?= e($item['nama']) ?></td>
                            <td><?= e($item['email']) ?></td>
                            <td><?= e($item['pesan']) ?></td>
                            <td><?= e($item['tanggal_kirim']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>

    <?php endif; ?>

</body>
</html>