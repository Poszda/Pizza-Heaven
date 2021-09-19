<?php
//include 'logout.php';
include 'dbconnect.php';
$new_email = $_POST["email"];
$new_name = $_POST["nume"];
$new_pass = $_POST["pass"];
$new_repass = $_POST["repass"];
if(empty($new_email) || empty($new_pass) || empty($new_repass) || empty($new_name)){
  header("Location: index_signin.php?error=emptyvar");
  exit();
}
if(filter_var($new_email, FILTER_VALIDATE_EMAIL) == false){
  header("Location: index_signin.php?error=emailproblem");
  exit();
}
if($new_pass != $new_repass) { 
  header("Location: index_signin.php?error=passproblem");
  exit();
}
//check if the account already exists
$sql_check = "SELECT * from tabel1 WHERE Email = '$new_email';";
$result = mysqli_query($conn,$sql_check); // continut tabel
$ok = mysqli_num_rows($result);
if($ok > 0) {
  header("Location: index_signin.php?error=existent");
  exit();
}
else{
  $sql = "INSERT INTO tabel1 (ID, Email, Parola, Nume)
  VALUES ('NULL','$new_email','$new_pass','$new_name')";
  if (mysqli_query($conn, $sql)) { // se apeleaza si se pune in baza de date
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  header("Location: index_signin.php?error=none");
}
mysqli_close($conn);
?>