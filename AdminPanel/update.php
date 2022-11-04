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

  if($role==NULL) 
  {
    $_SESSION['msg'] = "You must to be admin";
  	header('location: ../phpPagesForUsers/account.php');
  }
?>

<?php

include 'conn.php';

if (isset($_POST['done'])) {

    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = " update users set id=$id, username='$username', password='$password' where id=$id  ";

    $query = mysqli_query($con, $q);

    header('location:display.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="icon" href="../phpPagesForUsers/images/logo.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="col-lg-6 m-auto">

        <form method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Operation </h1>
                </div><br>

                <label> Username: </label>
                <input type="text" name="username" class="form-control"> <br>

                <label> Email: </label>
                <input type="text" name="email" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

            </div>
        </form>
    </div>
</body>

</html>