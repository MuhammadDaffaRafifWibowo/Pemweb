<?php
session_start();
$data = $_SESSION['data'] ?? null;

if (!$data) {
    die("Tidak ada data yang dikirim.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hasil Pendaftaran</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <td><?= htmlspecialchars($data['name']) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($data['email']) ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><?= htmlspecialchars($data['age']) ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?= htmlspecialchars($data['address']) ?></td>
        </tr>
        <tr>
            <th>Browser</th>
            <td><?= htmlspecialchars($data['browser']) ?></td>
        </tr>
    </table>

    <h1>Isi File:</h2>
    <table border="1">
        <tr>
            <th>Baris</th>
            <th>Isi</th>
        </tr>
        <?php foreach ($data['fileContent'] as $lineNumber => $line): ?>
            <tr>
                <td><?= $lineNumber + 1 ?></td>
                <td><?= htmlspecialchars($line) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="form.php"><button>Kembali ke Form</button></a>
</body>
</html>
