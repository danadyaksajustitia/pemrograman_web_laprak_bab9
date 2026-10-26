
<?php
session_start();

if (!isset($_SESSION["data"])) {
    exit("Data session tidak ditemukan.");
}

$data = $_SESSION["data"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Session</title>
</head>
<body>
    <h2>Data yang Tersimpan</h2>

    <p>Angka: <?= htmlspecialchars((string)$data["angka"]) ?></p>
    <p>Faktorial: <?= htmlspecialchars((string)$data["faktorial"]) ?></p>
    <p>NIM: <?= htmlspecialchars($data["nim"]) ?></p>
    <p>Nama: <?= htmlspecialchars($data["nama"]) ?></p>
</body>
</html>

<?php
$_SESSION = [];
session_destroy();
?>
