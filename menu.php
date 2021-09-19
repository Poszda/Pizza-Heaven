<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Menu</title>
</head>
<body>
    <!-- navigation bar -->
    <div class="navbar">
        <div class="logo"><img src="img/logo.png" style="width: 180px; " alt="logo"></div>
        <div class="mobile_nav" onclick="mobilenav()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <?php
                if(isset($_SESSION['email'])) echo "<a href='logout.php'>Log Out</a><a href='mycart.php'>My Cart</a>";
                else echo "<a href='index_signin.php'>Sign In</a><a href='index_login.php'>Log in</a>";
            ?>
        </div>
    </div>
    <!--intro-->
    <div class="menu">
        <h2>Menu Category</h2>
    </div>
    <br><br>
   <div class="container">
       <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/pizza6.jpg">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza Quatro Formaggi</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
        <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/pizza4.jpg">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza Margerita</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
        <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/pizza3.jpg">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza Diavolo</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
        <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/pizza5.jpeg">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza Delicatio</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
        <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/pizza8.jpg">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza Penne</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
        <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/pizza7.jpg">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza Casei</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
        <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/1.jpg">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza Unos</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
        <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/pizza9.jfif">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza cu Cirese</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
        <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/pizza2.jpg">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza Anubis</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
        <form action="adaugacos.php" method="post">
       <div class="box">
            <div class="box-img">
                <div class="whitediv"><button class="addcart" onclick="addtocart(this)" type="submit">Add to cart</button></div>
                <img src="img/pizza4.jpg">
           </div>
           <div class="box-text">
               <p style="font-size: 14px;">Pizza</p>
               <p style="font-size: 18px;">Pizza Buna</p>
               <p style="font-size: 16px; font-weight: 700;">$20</p>
           </div>
       </div>
       <input type="text" name="product_name">
        </form>
    </div>
<!-- foooter -->
    <div class="footer">
        <div class="footer-1">
            <div class="footer-box">
                <p>Support</p>
                <a>Contact Us</a>
                <a>FAQ</a>
                <a>Product registration</a>
                <a>Pricing</a>
            </div>
        </div>
        <div class="footer-2">
            <div class="footer-box">
                <p>Visit</p>
                <a>Pizza Heaven So. California</a>
                <a>4 East Canterbury</a>
                <a>St.Anaheim, CA 92801 USA</a>
            </div>
        </div>
        <div class="footer-3">
            <div class="footer-box">
                <p>Support</p>
                <a>Contact Us</a>
                <a>FAQ</a>
                <a>Product registration</a>
                <a>Pricing</a>
            </div>
        </div>
        <div class="footer-4">
            <div class="footer-box">
                <p>Social</p>
                <a>Blog</a>
                <a>Twitter</a>
                <a>Youtube</a>
                <a>Facebook</a>
            </div>
        </div>
    </div>
    <div class="footer-end">
        <p>Copyright ©2021. All rights reserved.</p>
    </div>
</body>
<script>
    const movnav = document.querySelector(".mobile_nav");
    const navbar = document.querySelector(".navbar");
    function mobilenav(){
        movnav.classList.toggle("active");
        navbar.classList.toggle("activee");  
    }
    
    function addtocart(elem){
        let x = elem.parentElement.parentElement.parentElement.parentElement;
        console.log(x);
        let inp0 = x.querySelector("input[name='product_name']");
        //let inp1 = x.querySelector("input[name='product_price']");
        //let inp2 = x.querySelector("input[name='product_image']");
        let p = x.querySelector(".box-text").children;
        inp0.value = p[1].innerText;
        //inp1.value = p[2].innerText;
        //inp2.value = p[2].innerText;
    }

    </script>
</html>