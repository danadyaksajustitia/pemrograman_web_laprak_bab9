
<?php
session_start();

$_SESSION["nama"] = $_POST["nama"];

header("Location: Lat3_2c.php");
exit;
?>
