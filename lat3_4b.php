
<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST"
    && isset($_POST["cd_order"], $_POST["dvd_order"])) {

    $cd = filter_var($_POST["cd_order"], FILTER_VALIDATE_INT);
    $dvd = filter_var($_POST["dvd_order"], FILTER_VALIDATE_INT);

    if ($cd === false || $dvd === false ||
        $cd < 0 || $dvd < 0 || $cd > 99 || $dvd > 99) {
        exit("Jumlah pesanan tidak valid.");
    }

    setcookie("cd_order", (string)$cd, time() + 3600, "/");
    setcookie("dvd_order", (string)$dvd, time() + 3600, "/");

    header("Location: Lat3_4c.php");
    exit;
}

header("Location: Lat3_4a.php");
exit;
?>
