<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Log in</title>
</head>
<body>
    <div class="theform">
    <h3>Log in</h3>
    <form action="login.php" method="post">
         <input type="text" name="email" placeholder="Email"><br>
         <input type="password" name="pass"  placeholder="Password">
         <p id="serverresponse" style="font-size:14px;color:red"></p>
        <input type="submit">
    </form>
    </div>
</body>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "none") header("Location: index.php?error=none");
            else echo "<script>document.querySelector('#serverresponse').innerText = 'Usernameul sau parola gresite';</script>";
        }
    ?>
</html>