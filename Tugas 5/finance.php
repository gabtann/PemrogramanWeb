<?php

declare(strict_types=1);

require_once 'Transaction.php';

session_start();

if (!isset($_SESSION['balance'])) {
    $_SESSION['balance'] = 0;
}

if (!isset($_SESSION['transactions'])) {
    $_SESSION['transactions'] = [];
}

$success = false;

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !isset($_POST['csrf_token']) ||
        !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
    ) {
        die('Token CSRF tidak valid.');
    }

    $type = $_POST['type'];
    if (!in_array($type, ['deposit', 'withdrawal'])) {
        die('Jenis transaksi tidak valid.');
    }
    $amount = (float)$_POST['amount'];
    if ($amount <= 0) {
        die('Jumlah harus lebih besar dari 0.');
    }

    $transaction = new Transaction(uniqid(), $type, $amount);
    $success = $transaction->process();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Keuangan</title>
</head>
<body>
    <form method="POST">

        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">

        <label for="type">Jenis Transaksi</label>

        <select name="type" id="type">
            <option value="deposit">Deposit</option>
            <option value="withdrawal">Withdrawal</option>
        </select>

        <label for="amount">Jumlah</label>
        <input type="number" name="amount" id="amount" step="0.01" required>

        <button type="submit">Proses Transaksi</button>


    </form> 

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        
        <?php if ($success): ?>
            <p>Transaksi berhasil! Saldo saat ini: <?= htmlspecialchars((string)$_SESSION['balance']) ?></p>
        <?php else: ?>
            <p>Transaksi gagal! Saldo tidak mencukupi.</p>
        <?php endif; ?>

    <?php endif; ?>

    <h2>Riwayat Transaksi</h2>

    <?php foreach ($_SESSION['transactions'] as $transaction): ?>
            <p>ID: <?= htmlspecialchars($transaction['id']) ?></p>
            <p>Jenis: <?= htmlspecialchars($transaction['type']) ?></p>
            <p>Jumlah: <?= htmlspecialchars((string)$transaction['amount']) ?></p>
            <p>Saldo Setelah Transaksi: <?= htmlspecialchars((string)$transaction['balance_after']) ?></p>
    <?php endforeach; ?>

    
</body>
</html>