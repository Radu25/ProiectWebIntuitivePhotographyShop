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

<!DOCTYPE html>
<html>

<head>
  <title>Admin Panel</title>
  <link rel="icon" href="../phpPagesForUsers/images/logo.ico">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> <!--bootstrap-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css"
    href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8"
    src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>

<body>

  <div class="container">
    <div class="col-lg-12">
      <br><br>
      <h1 class="text-warning text-center"> Admin Panel </h1>
      <br>
      <table id="tabledata" class=" table table-striped table-hover table-bordered">

        <tr class="bg-success text-white text-center">

          <th> Id </th>
          <th> Username </th>
          <th> Email </th>
          <th> Delete </th>
          <th> Update </th>

        </tr>

        <?php

 include 'conn.php'; 
 $q = "select * from users ";

 $query = mysqli_query($con,$q);
  


 while($res = mysqli_fetch_array($query)){
 ?>
        <tr class="text-center">
          <td>
            <?php echo $res['id'];  ?>
          </td>
          <td>
            <?php echo $res['username'];  ?>
          </td>
          <td>
            <?php echo $res['email'];  ?>
          </td>


          <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">
                Delete </a> </button> </td>
          <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">
                Update </a> </button> </td>

        </tr>

        <?php 
 }
  ?>

      </table>

    </div>
  </div>

  <script type="text/javascript">

    $(document).ready(function () {
      $('#tabledata').DataTable();
    })

  </script>

</body>

</html>