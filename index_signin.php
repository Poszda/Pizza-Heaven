<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Sign in</title>
</head>
<body>
<div class="theform">
    <h3>Sign in</h3>
    <form action="signin.php" method="post">
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="nume" placeholder="Name"><br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input type="password" name="repass"placeholder="Re-type password">
    <p id="serverresponse" style="font-size:14px;color:red"></p>
    <input type="submit">
    </form>
</div>
</body>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "none") echo "<script>document.querySelector('#serverresponse').innerText = 'Contul s-a creat cu succes';
            document.querySelector('#serverresponse').style.color='green'</script>";
            else if($_GET["error"] == "emptyvar") echo "<script>document.querySelector('#serverresponse').innerText = 'Exista un camp gol';</script>";
            else if($_GET["error"] == "emailproblem") echo "<script>document.querySelector('#serverresponse').innerText = 'Nu ati introdus un email valid';</script>";
            else if($_GET["error"] == "passproblem") echo "<script>document.querySelector('#serverresponse').innerText = 'Parolele nu coincid';</script>";
            else if($_GET["error"] == "existent") echo "<script>document.querySelector('#serverresponse').innerText = 'Utilizatorul exista deja in baza de date';</script>";
            else echo "A aparut o eroare la crearea contului";
        }
        if(isset($_SESSION['email'])){
            echo "<a href='logout.php'>Log Out</a>";
        }
    ?>
</html>