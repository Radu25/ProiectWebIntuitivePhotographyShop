<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../login/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../login/login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--pt a potrivi cand micsorez ecranul-->
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Intuitive Photography Shop </title>
    <!--creez legatura cu fisierul style.css-->
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/logo.ico">

</head>

<body>

    <div class="header">

        <div class="container">
            <div class="NavigationBar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" width="125px"></a>
                    <!--logo-->
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products1.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="account.php">Accont</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" alt="Error open imagine"></a>
                <img src="images/menu.png" class="menu-icon" alt="Error open imagine" onclick="menutoggle()">

            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <h1 style="padding:80px;" >Pesemne e trucată <br> Că-l văd, în poză, clar,<br> Cu-o mână strecurată <br> În... propriu-i
                    buzunar.</h1>

                <br>

                <p></p>
                <!--pe viitor-->

            </div>
            <div class="col-2">
                <img src="images/image1.png" alt="Image1 dont work">
            </div>
        </div>

    </div>

    <!--featured categoried-->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg">
                </div>
            </div>
        </div>
    </div>

    <!--description-->
    <h2 class="title">Descriere</h2>
    <div class="about-section">
        <p style="font-size:50px;text-align: center;background-color: #474e5d;color: white;">
            Ideea acestui proiect a pornit de la o pasiune - fotografia. Sunt de parere ca o fotografie, oricat de
            neinsemnata, trece in eternitate un eveniment,
            o intamplare ce ne-a marcat de-a lungul vietii.
        </p>
        <br>
        <p style="font-size:50px;text-align: center;  background-color: #474e5d;color: white;">Fiecare poza, are o
            poveste! Și fiecare poza ascunde ceva în spate.</p>
        <br>
        <br>

    </div>

    <p style="text-align: center">

        <iframe width="1080" height="720" src="https://www.youtube.com/embed/unsBtHOu1nI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </p>

    <h2 class="title">CEO & Founder</h2>
    <div class="testimonial">
        <div class="small-container">
            <div class="r">
                <div class="col-3">
                    <h2 class="title">Ceo & Founder</h2>
                    <i class="fa fa-quote-left"></i>
                    <p>Per Aspera Ad Astra</p>
                    <img src="images/user-1.png" alt="error user-1.png">
                    <h3>Radu</h3>
                </div>
            </div>
        </div>
    </div>


    <h2 class="title">Sponsors</h2>
    <!--Brands-->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <a href="https://www.godrej.com">
                        <img src="images/logo-godrej.png" alt="">
                    </a>
                </div>
                <div class="col-5">
                    <a href="https://www.coca-cola.ro">
                        <img src="images/logo-coca-cola.png" alt="">
                    </a>
                </div>
                <div class="col-5">
                    <a href="https://www.oppo.com/ro/">
                        <img src="images/logo-oppo.png" alt="">
                    </a>
                </div>
                <div class="col-5">
                    <a href="https://www.paypal.com/ro/home">
                        <img src="images/logo-paypal.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->

    <div class="footer">
        <div class="contain">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App.</h3>
                    <p>Downdload APP.</p>
                    <div class="app-logo">
                        <a href="https://play.google.com/store/apps/details?id=com.duolingo&gl=RO"><img
                                src="images/play-store.png" alt="error img"></a>
                        <a href="https://www.apple.com/app-store/"><img src="images/app-store.png" alt="error img"></a>
                    </div>
                </div>
                <div class="footer-col-2">
                    <!-- <img src="" alt="error">-->
                    <p>Fotografia este o oglindă înzestrată cu memorie.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a style="color:rgb(255, 0, 221)" href="https://www.konkurs.ro">Cupons</a></li>
                        <li><a style="color:rgb(255, 136, 0)" href="https://blogfin25.blogspot.com">Blog Spot</a></li>
                        <li><a style="color:rgb(255, 255, 255)"
                                href="https://en.wikipedia.org/wiki/Product_return">Return Policy</a></li>
                        <li><a style="color:rgb(197, 244, 9)"
                                href="https://www.bani-online.ro/ghidul-complet-pentru-amazon-affiliate-program-in-romania/">Join
                                Affiliate</a></li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a style="color:rgb(62, 3, 239)" href="https://www.facebook.com">Facebook</a></li>
                        <li><a style="color:rgb(0, 153, 255)" href="https://twitter.com/tweeter">Twitter</a></li>
                        <li><a style="color:rgb(218, 9, 141)" href="https://www.instagram.com">Instagram</a></li>
                        <li><a style="color:rgb(255, 0, 0)"
                                href="https://www.youtube.com/watch?v=p1GQ-aVX4GM&ab_channel=SaraBănățană">Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="learn"> <a style="color:rgb(31, 108, 63)"
                    href="https://wiki.mta.ro/c/3/tw/start">TehnologiiWeb2022</a> </p>

        </div>
    </div>
    <!--folosesc un id pt a identifica MenuItems-->
    <script src="myscript.js">
    </script>
</body>

</html>