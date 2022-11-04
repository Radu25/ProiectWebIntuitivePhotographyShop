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
<html>

<head>
    <title>Admin Panel</title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/logo.ico">
</head>

<body>

    <!-- Main Data Table -->
    <div class="mainTable">
        <h1>Admin Dashboard</h1>
        <table id="table">

            <tr>
                <th>Index</th>
                <th>Username</th>
                <th>Email</th>
                <th>Parola</th>
                <th>Tip Cont</th>
                <th>Sterge User</th>

            </tr>

            <tr>
                <td>1</td>
                <td>Michael </td>
                <td>1@gmail.com</td>
                <td>123</td>
                <td>admin</td>
                <td><input type="button" style="padding:0px;" value="Del" onclick="deleteRow(this)"></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Jim </td>
                <td>2@gmail.com</td>
                <td>123</td>
                <td>user</td>
                <td><input type="button" value="Del" onclick="deleteRow(this)"></td>
            </tr>

            <tr>
                <td>3</td>
                <td>Tom </td>
                <td>3@gmail.com</td>
                <td>123</td>
                <td>admin</td>
                <td><input type="button" value="Del" onclick="deleteRow(this)"></td>
            </tr>

            <tr>
                <td>4</td>
                <td>Peter </td>
                <td>4@gmail.com</td>
                <td>123</td>
                <td>admin</td>
                <td><input type="button" value="Del" onclick="deleteRow(this)"></td>
            </tr>

            <tr>
                <td>5</td>
                <td>Edward </td>
                <td>5@gmail.com</td>
                <td>123</td>
                <td>user</td>
                <td><input type="button" value="Del" onclick="deleteRow(this)"></td>
            </tr>

            <tr>
                <td>6</td>
                <td>Jeck </td>
                <td>6@gmail.com</td>
                <td>123</td>
                <td>user</td>
                <td><input type="button" value="Del" onclick="deleteRow(this)"></td>
            </tr>

            <tr>
                <td>7</td>
                <td>David </td>
                <td>7@gmail.com</td>
                <td>123</td>
                <td>user</td>
                <td><input type="button" value="Del" onclick="deleteRow(this)"></td>
            </tr>

            <tr>
                <td>8</td>
                <td>Luis </td>
                <td>8@gmail.com</td>
                <td>123</td>
                <td>user</td>
                <td><input type="button" value="Del" onclick="deleteRow(this)"></td>
            </tr>

            <tr>
                <td>9</td>
                <td>Thomas </td>
                <td>9@gmail.com</td>
                <td>123</td>
                <td>user</td>
                <td><input type="button" value="Del" onclick="deleteRow(this)"></td>
            </tr>
        </table>


    </div>


    <!-- Update Button -->
    <div class="updateBtn">
        <button onclick="editTableDisplay()">Update data</button>
    </div>

    <!-- Edit table UPDATE -->
    <div class="editTable">
        <div class="left">Username: </div>
        <div class="right"><input type="text" name="username" id="username"></div><br><br>
        <div class="left">Email: </div>
        <div class="right"><input type="email" name="email" id="email"></div><br><br>
        <div class="left">Parola: </div>
        <div class="right"><input type="password" name="parola" id="parola"></div><br><br>
        <div class="left">Tip Cont: </div>
        <div class="right"><input type="text" name="tipcont" id="tipcont"></div><br><br>
        <button onclick="editRow();" class="editRowBtn">Update</button><br><br>
    </div>

    <div class="updateBtn">
        <button onclick="insertTableDisplay()">Insert data</button>
    </div>
    <!--Edit table Insert-->
    <div class="insertTable">
        <div class="left">Username: </div>
        <div class="right"><input type="text" name="usernamei" id="usernamei"></div><br><br>
        <div class="left">Email: </div>
        <div class="right"><input type="email" name="emaili" id="emaili"></div><br><br>
        <div class="left">Parola: </div>
        <div class="right"><input type="password" name="parolai" id="parolai"></div><br><br>
        <div class="left">Tip Cont: </div>
        <div class="right"><input type="text" name="tipconti" id="tipconti"></div><br><br>
        <button onclick="addRow();" class="editRowBtn">Insert</button><br><br>
    </div>

    <!-- link JavaScript -->
    <script src="panelscript.js"></script>
</body>

</html>