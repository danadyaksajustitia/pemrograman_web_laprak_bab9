
<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
</head>
<body>
    <h2>Order Summary</h2>

    <p>Pengguna: <?= htmlspecialchars($_SESSION["user"]) ?></p>

    <?php
    if (isset($_COOKIE["cd_order"], $_COOKIE["dvd_order"])) {
        echo "Ordered CD: " .
            htmlspecialchars($_COOKIE["cd_order"]) . " pieces<br>";

        echo "Ordered DVD: " .
            htmlspecialchars($_COOKIE["dvd_order"]) . " pieces<br>";
    } else {
        echo "Data pesanan belum tersedia.";
    }
    ?>

    <p><a href="Lat3_4a.php">Edit Pesanan</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
