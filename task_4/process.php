<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = (int)$_POST['age'];
    $address = trim($_POST['address']);
    $browser = $_SERVER['HTTP_USER_AGENT'];

    if (!empty($_FILES['file']['name'])) {
        $file = $_FILES['file'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        if ($fileError === 0 && $fileType === 'txt' && $fileSize <= 2 * 1024 * 1024) {
            $fileContent = file_get_contents($fileTmpName);
            $fileLines = explode("\n", $fileContent);
        } else {
            die("File tidak valid.");
        }
    }

    session_start();
    $_SESSION['data'] = [
        'name' => $name,
        'email' => $email,
        'age' => $age,
        'address' => $address,
        'browser' => $browser,
        'fileContent' => $fileLines ?? []
    ];

    header("Location: result.php");
    exit;
}
?>
