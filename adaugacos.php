<?php
include 'dbconnect.php';
echo $_POST["product_name"];
session_start();
$updated = $_POST["product_name"];
$email = $_SESSION["email"];
$sql_get = "SELECT Comanda from tabel1 WHERE Email = '$email';"; //iau din tabel valoarea veche
$result = mysqli_query($conn,$sql_get);
$result = mysqli_fetch_assoc($result);
//var_dump($result);
//echo $result['Comanda'];
if($result['Comanda']=="") $updated = $_POST["product_name"];
else  $updated = $result['Comanda']."+".$_POST["product_name"];
$sql = "UPDATE tabel1 SET Comanda='$updated' WHERE Email='$email';";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: menu.php");
?>