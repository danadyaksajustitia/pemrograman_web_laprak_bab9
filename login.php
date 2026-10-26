
<?php
session_start();

if (isset($_SESSION["user"])) {
    header("Location: Lat3_4a.php");
    exit;
}

$pesan = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === "admin" && $password === "admin") {
        session_regenerate_id(true);
        $_SESSION["user"] = $username;

        header("Location: Lat3_4a.php");
        exit;
    } else {
        $pesan = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login Pengguna</h2>

    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>

    <p><?= htmlspecialchars($pesan) ?></p>
</body>
</html>
