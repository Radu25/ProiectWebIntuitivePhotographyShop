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

$db = mysqli_connect('localhost', 'root', '', 'project');
$user=$_SESSION['username'];
$admin='admin'; 
$user_check_query = "SELECT * FROM users WHERE username='$user' AND role='$admin'";
$result = mysqli_query($db, $user_check_query);
$role = mysqli_fetch_assoc($result);
?>

<!--Cart items details-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--pt a potrivi cand micsorez ecranul-->
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Account</title>
    <!--creez legatura cu fisierul style.css-->
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="account.php">Accont</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" alt="Error open imagine"></a>

            <img src="images/menu.png" class="menu-icon" alt="Error open imagine" onclick="menutoggle()">

        </div>
    </div>

    <!-----account page----->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" alt="error open image" width="100%">
                    <a href="AdminPanel.php" class="btn">AdminPanel &#8594;</a>
                    <?php  if ($role!=NULL) : ?>
                        <a href="../AdminPanel/display.php" class="btn">TheRealButton &#8594;</a>
                    <?php endif ?>

                </div>
            
                <div class="col-2">
                    <div class="form-container">
                    <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">

                        </div>
                        <form id="LoginForm" action="index.php" method="post">
                            <input type="text" placeholder="Username" name="Username">
                        <input type="password" placeholder="Password" name="Password">
                            <button type="submit" class="btn">Login</button>
                            <a onclick="myAlert('Ne pare rau, mai bine realizati un cont nou.')">Forgot password</a>
                            <br>
                            <br>
                            <a href="index.php" class="btn">Explore Now as Guest &#8594;</a>

                            <!--ancora-->
                        </form>
                        <form id="RegisterForm">
                            <input type="text" placeholder="Username" name="Username">
                            <input type="email" placeholder="Email" name="Email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            <input type="password" placeholder="Password" name="Password" pattern="(?=.*[a-z]).{8,}"
                                title="Your password is Low Security. Must contain at least 8 or more characters"
                                required>
                            <button type="submit" class="btn" onclick="addRow();">Register</button>
                            <br>
                            <br>
                            <a href="index.php" class="btn">Explore Now as Guest &#8594;</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------footer------>
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

                    <p text-align="center">O poza buna face cat o mie de cuvinte.</p>
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

    <!--js for toggle Form-->


<script src="myscript.js"></script>

</body>

</html>