<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <div class = "container">
        <h1>Form Pendaftaran</h1>
        <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required minlength="3" maxlength="50">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="age">Umur:</label>
            <input type="number" id="age" name="age" required min="1" max="150">

            <label for="address">Alamat:</label>
            <textarea id="address" name="address" required minlength="10" maxlength="200"></textarea>

            <label for="file">Unggah File (Teks):</label>
            <input type="file" id="file" name="file" accept=".txt" required>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
