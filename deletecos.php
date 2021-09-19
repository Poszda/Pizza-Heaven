<?php
include 'dbconnect.php';
session_start();
$email = $_SESSION["email"];

$sql = "UPDATE tabel1 SET Comanda='' WHERE Email='$email';";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: menu.php");
?>