<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Pizza Heaven</title>
</head>
<body>
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
    <div class="section1">
        <div class="sec1-1">
        <h4 id="beforetitle">Enjoy our dishes</h4>
        <h2 id = "main_title">CLEARLY THE<br> BEST FOOD IN TOWN</h2>
        <p id="aftertitle"></p>
        <a class="btn1" href="menu.php">Browse menu</a>
        </div> 
    </div>
    <div class="section2">
        <div class="section2-1">
            <img src="img/pizzaicon1.png" style="width:64px;margin-top: 30px;">
            <h3>WHO ARE WE</h3>
            <p class="sec2sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Ipsa ducimus vel ratione incidunt?</p>
        </div>
        <div class="section2-2">
            <img src="img/pizzaicon2.png" style="width:64px;margin-top: 30px;">
            <h3>FAST DELIVERY</h3>
            <p class="sec2sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Ipsa ducimus vel ratione incidunt?</p>
        </div>
        <div class="section2-3">
            <img src="img/pizzaicon3.png" style="width:64px;margin-top: 30px;">
            <h3>FRESH FOOD</h3>
            <p class="sec2sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Ipsa ducimus vel ratione incidunt?</p>
        </div>
    </div>
    <div class="section3">
        <br>
        <div class="sec3-1">
            <img src="img/pizzaicon5.png" style="width:64px;">
            <p class="sec3title">Excelent Taste<br>Top Quality<p>
            <p class="sec3sub">We put 100% effort and dedication into our dishes</p>
        </div>
    </div>
    <div class="review">
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-text txt1">
                    <img src="img/nice_man.jpg">
                    <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, reprehenderit voluptas dolor, 
                        blanditiis in repudiandae aliquam ad neque iste et dolores similique praesentium sapiente ex ullam quis, ipsa qui laborum voluptatibus! 
                        Id perspiciatis expedita sequi voluptas, repellat ratione explicabo sunt!"</p>
                    <h4>Mikel Jordan</h3>
                </div>
                <div class="carousel-text txt2">
                    <img src="img/nice_man2.jpg">
                    <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, reprehenderit voluptas dolor, 
                        blanditiis in repudiandae aliquam ad neque iste et dolores similique praesentium sapiente ex ullam quis, ipsa qui laborum voluptatibus! 
                        Id perspiciatis expedita sequi voluptas, repellat ratione explicabo sunt!"</p>
                    <h4>Mikel Jordan</h3>
                </div>
                <div class="carousel-text txt3">
                    <img src="img/nice_man3.jpg">
                    <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, reprehenderit voluptas dolor, 
                        blanditiis in repudiandae aliquam ad neque iste et dolores similique praesentium sapiente ex ullam quis, ipsa qui laborum voluptatibus! 
                        Id perspiciatis expedita sequi voluptas, repellat ratione explicabo sunt!"</p>
                    <h4>Mikel Jordan</h3>
                </div>
                
                <div class="carousel-text txt4">
                    <img src="img/nice_man4.jpg">
                    <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, reprehenderit voluptas dolor, 
                        blanditiis in repudiandae aliquam ad neque iste et dolores similique praesentium sapiente ex ullam quis, ipsa qui laborum voluptatibus! 
                        Id perspiciatis expedita sequi voluptas, repellat ratione explicabo sunt!"</p>
                    <h4>Mikel Jordan</h3>
                </div>
                <div class="carousel-text txt5">
                    <img src="img/nice_man5.jpg">
                    <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, reprehenderit voluptas dolor, 
                        blanditiis in repudiandae aliquam ad neque iste et dolores similique praesentium sapiente ex ullam quis, ipsa qui laborum voluptatibus! 
                        Id perspiciatis expedita sequi voluptas, repellat ratione explicabo sunt!"</p>
                    <h4>Mikel Jordan</h3>
                </div>
                <div class="carousel-text txt6">
                    <img src="img/nice_man6.jpg">
                    <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, reprehenderit voluptas dolor, 
                        blanditiis in repudiandae aliquam ad neque iste et dolores similique praesentium sapiente ex ullam quis, ipsa qui laborum voluptatibus! 
                        Id perspiciatis expedita sequi voluptas, repellat ratione explicabo sunt!"</p>
                    <h4>Mikel Jordan</h3>
                </div>
            </div>
        </div>
        <div class="btn_prev"><img id="prev" style="width:20px" src="img/previcon.png"></div>
        <div class="btn_next"><img id="next" style="width:20px" src="img/nexticon.png"></div>
    </div>
    
    <div class="footer">
        <div class="footer-1">
            <div class="box">
                <p>Support</p>
                <a>Contact Us</a>
                <a>FAQ</a>
                <a>Product registration</a>
                <a>Pricing</a>
            </div>
        </div>
        <div class="footer-2">
            <div class="box">
                <p>Visit</p>
                <a>Pizza Heaven So. California</a>
                <a>4 East Canterbury</a>
                <a>St.Anaheim, CA 92801 USA</a>
            </div>
        </div>
        <div class="footer-3">
            <div class="box">
                <p>Support</p>
                <a>Contact Us</a>
                <a>FAQ</a>
                <a>Product registration</a>
                <a>Pricing</a>
            </div>
        </div>
        <div class="footer-4">
            <div class="box">
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
    <script>
        const movnav = document.querySelector(".mobile_nav");
        const navbar = document.querySelector(".navbar");
        function mobilenav(){
            movnav.classList.toggle("active");
            navbar.classList.toggle("activee");
            
        }
        const carousel = document.querySelector(".carousel");
        const len = carousel.childElementCount;
        const btn1 = document.querySelector("#prev");    
        const btn2 = document.querySelector("#next");
        let i=0;
        btn1.addEventListener("click",function(){
            i--;
            
            if(i==-1){
            document.querySelector(".btn_prev").style.visibility="hidden";  //ascund NEXT si PREV in timp ce dau slide
            document.querySelector(".btn_next").style.visibility="hidden";  //ascund NEXT si PREV in timp ce dau slide
            carousel.style.transition = "0.5s";
            carousel.style.marginLeft = -70 * (len-1) +"vw";
            i=len-1;
            }
            else{
                document.querySelector(".btn_prev").style.visibility="hidden";  //ascund NEXT si PREV in timp ce dau slide
                document.querySelector(".btn_next").style.visibility="hidden";  //ascund NEXT si PREV in timp ce dau slide
                carousel.style.transition = "0.8s";
                carousel.style.marginLeft= -70 * i + "vw";
            }
        }) 

        btn2.addEventListener("click",function(){
            i++;
            if(i==len){
            document.querySelector(".btn_prev").style.visibility="hidden";  //ascund NEXT si PREV in timp ce dau slide
            document.querySelector(".btn_next").style.visibility="hidden";  //ascund NEXT si PREV in timp ce dau slide
            carousel.style.transition = "0.5s";
            carousel.style.marginLeft = "0vw";
            i=0;
            }
            else{
                carousel.style.transition = "0.8s";
                document.querySelector(".btn_prev").style.visibility="hidden";  //ascund NEXT si PREV in timp ce dau slide
                document.querySelector(".btn_next").style.visibility="hidden";  //ascund NEXT si PREV in timp ce dau slide
                carousel.style.marginLeft = -70 * i + "vw";
            }
        })
        carousel.addEventListener('transitionend', function() {
            document.querySelector(".btn_prev").style.visibility="visible"; //fac visibil NEXT si PREV dupa ce se termina tranzitia
            document.querySelector(".btn_next").style.visibility="visible"; //fac visibil NEXT si PREV dupa ce se termina tranzitia
        });
    </script>
</body>

</html>