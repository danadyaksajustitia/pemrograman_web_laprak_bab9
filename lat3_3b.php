
<?php
session_start();

function faktorial($angka) {
    $hasil = 1;

    for ($i = 1; $i <= $angka; $i++) {
        $hasil *= $i;
    }

    return $hasil;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST"
    || !isset($_POST["angka"])
    || !is_numeric($_POST["angka"])) {
    exit("Masukkan angka yang valid melalui form.");
}

$angka = filter_var($_POST["angka"], FILTER_VALIDATE_INT);

if ($angka === false || $angka < 0 || $angka > 20) {
    exit("Angka harus berupa bilangan bulat antara 0 dan 20.");
}

$hasil = faktorial($angka);

$_SESSION["data"] = [
    "angka" => $angka,
    "faktorial" => $hasil,
    "nim" => "255150600111036",
    "nama" => "Rama"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Faktorial</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>

    <p>Angka: <?= $angka ?></p>
    <p>Faktorial: <?= $hasil ?></p>

    <a href="Lat3_3c.php">Lihat Data Session</a>
</body>
</html>
