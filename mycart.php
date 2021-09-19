<?php
session_start();
include 'dbconnect.php';
$email = $_SESSION["email"];
$sql_get = "SELECT Comanda from tabel1 WHERE Email = '$email';"; //iau din tabel valoarea veche
$result = mysqli_query($conn,$sql_get);
$result = mysqli_fetch_assoc($result);
//echo $result['Comanda'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>My Cart</title>
</head>
<body>
    <br><br><br><br>
    <div class="comanda">
<?php
    $token = strtok($result['Comanda'], "+");
    $i=0;
    echo "<table>";
    while ($token !== false)
        {
            $i++;
            echo "<tr><th>$i</th>
    	    <th>$token</th></tr>";
   
            $token = strtok("+");
        }
    echo "</table>";
?>
    </div>
    <br><br>
    <div class="butoane">
    <a  class="button" href="deletecos.php">Delete Cart</a>
    <a  class="button" id ="animation" href="" onclick="func2()">Comanda</a>
    <a  class="button" href="menu.php">Inapoi</a>
    </div>
</body>
<script>
    
    const x = document.querySelector("#animation");
    setInterval(func,1500); 
    function func(){
    if(x.style.backgroundColor == "gold") x.style.backgroundColor = "transparent";
    else x.style.backgroundColor="gold";
    }
    function func2(){
        alert("Acest buton este doar de design. Mai multe informatii in documentatie");
    }
</script>
</html>