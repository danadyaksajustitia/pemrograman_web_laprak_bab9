
<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

$cd = $_COOKIE["cd_order"] ?? "0";
$dvd = $_COOKIE["dvd_order"] ?? "0";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Order Form</title>
</head>
<body>
    <h2>Form Pemesanan CD/DVD</h2>

    <p>Login sebagai:
        <?= htmlspecialchars($_SESSION["user"]) ?>
    </p>

    <form action="Lat3_4b.php" method="post">
        <p>
            Order CD, amount:
            <input type="number" name="cd_order"
                   value="<?= htmlspecialchars($cd) ?>"
                   min="0" max="99" required>
        </p>

        <p>
            Order DVD, amount:
            <input type="number" name="dvd_order"
                   value="<?= htmlspecialchars($dvd) ?>"
                   min="0" max="99" required>
        </p>

        <button type="submit">Add To Cart</button>
    </form>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>
