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

<!--Cart items details-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--pt a potrivi cand micsorez ecranul-->
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Cart</title>
    <!--creez legatura cu fisierul style.css-->
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/logo.ico">
</head>

<body>
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
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.php">Accont</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" alt="Error open imagine"></a>

            <img src="images/menu.png" class="menu-icon" alt="Error open imagine" onclick="menutoggle()">

        </div>
    </div>

    <!--cart items detail-->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/product-1.jpg" alt="">
                        <!--div ma ajuta tare mult la aliniere-->
                        <div>
                            <p>Phineas&Ferb</p>
                            <small>Price:$50.00</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>

                <td><input type="number" value="1" readonly></td>
                <td>50.00$</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/product-2.jpg" alt="">
                        <!--div ma ajuta tare mult la aliniere-->
                        <div>
                            <p>Grapes</p>
                            <small>Price:$75.00</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>

                <td><input type="number" value="1" readonly></td>
                <td>75.00$</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/product-3.jpg" alt="">
                        <!--div ma ajuta tare mult la aliniere-->
                        <div>
                            <p>Flowers</p>
                            <small>Price:$60.00</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>

                <td><input type="number" value="1" readonly></td>
                <td>60.00$</td>
            </tr>
        </table>


        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$185.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$15.00</td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td>$200.00</td>
                </tr>
            </table>
        </div>

    </div>


    <div class="footer">
        <div class="contain">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App.</h3>

                    <div class="app-logo">
                        <a href="https://play.google.com/store/apps/details?id=com.duolingo&gl=RO"><img
                                src="images/play-store.png" alt="error img"></a>
                        <a href="https://www.apple.com/app-store/"><img src="images/app-store.png" alt="error img"></a>
                    </div>
                </div>
                <div class="footer-col-2">

                    <p>Pictorul construieste, fotograful evidentiaza.</p>
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

    <script src="myscript.js">
    </script>
</body>

</html>