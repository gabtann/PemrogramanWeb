<?php

declare(strict_types=1);

require_once 'Transaction.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];
    $amount = (float)$_POST['amount'];
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

        <label for="type">Jenis Transaksi</label>

        <select name="type" id="type">
            <option value="deposit">Deposit</option>
            <option value="withdrawal">Withdrawal</option>
        </select>

        <label for="amount">Jumlah</label>
        <input type="number" name="amount" id="amount" step="0.01" required>

        <button type="submit">Proses Transaksi</button>


    </form> 
</body>
</html>