<?php
include 'dbconnect.php';
$email = $_POST["email"];
$pass = $_POST["pass"];
//check if the account exists
$sql_check = "SELECT * from tabel1 WHERE Email = '$email';";
$result = mysqli_query($conn,$sql_check); // continut tabel
$ok = mysqli_num_rows($result);
if($ok>0){
    $row = mysqli_fetch_assoc($result);
    
    if($email == $row['Email'] && $pass == $row['Parola']){
        session_start();
        $_SESSION["email"] = $row['Email']; 
        $_SESSION["pass"] = $row['Parola']; 
        header("Location: index_login.php?error=none");
        exit();
    }
    else{
        header("Location: index_login.php?error=loginerror");
        exit();
    }
}
else {
    header("Location: index_login.php?error=loginerror");
    exit();
}

?>