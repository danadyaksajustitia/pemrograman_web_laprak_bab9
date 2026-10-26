
<?php
session_start();

if (empty($_SESSION["nama"])) {
    echo "Maaf, anda belum memasukkan nama";
} else {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hello, <?php echo htmlspecialchars($_SESSION["nama"]); ?></title>
</head>
<body>
    Selamat datang
    <?php echo htmlspecialchars($_SESSION["nama"]); ?>,
    <br>
    Anda bisa masuk halaman ini karena anda telah menulis nama.

    <form method="post" action="Lat3_2d.php">
        <input type="submit" value="Keluar">
    </form>
</body>
</html>
<?php
}
?>
