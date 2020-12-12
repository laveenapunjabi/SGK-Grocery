<?php
  include 'connection.php';

    if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $query = mysqli_query($conn,"select * from users where name='$name' && password='$password'");
    $rowcount = mysqli_num_rows($query);

    if($rowcount == True){
      session_start();
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION['mobile'] = $mobile;
      $_SESSION['address'] = $address;

      header("Location: index.php");
  }
  elseif (isset($_POST['submit'])){
    if($name == 'admin' && $password == 'admin'){
      header("Location: admin.php");
    }
    else{
      echo "<script>window.alert('Incorrect Credentials!')</script>";
  }
    
  }
  else{
      echo "<script>window.alert('Incorrect Credentials!')</script>";
  }
  }



?>


<!DOCTYPE html>
<html>
<head>

  <title>Log-In</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Responsive Mega Menu | CodingNepal</title> -->

  <link rel="stylesheet" type="text/css" href="login.css">
    
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css" />


  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet">

</head>


  <body>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#1ea7eb" fill-opacity="1" d="M0,160L48,186.7C96,213,192,267,288,277.3C384,288,480,256,576,218.7C672,181,768,139,864,149.3C960,160,1056,224,1152,229.3C1248,235,1344,181,1392,154.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>



  <form method="POST">
          <div id="form_right">
              <h1 class="member-login">LOG IN</h1>
              <div class="input_container">
                  <i class="fa fa-envelope"></i>
                  <input placeholder="Name" name="name" id="field_email" class='input_field'>
              </div>
              <div class="input_container">
                  <i class="fa fa-lock"></i>
                  <input  placeholder="Password" type="password" name="password" id="field_password" class='input_field'>
              </div>
              <input type="submit" value="Login"name="submit" class="log" >
              <span id="account">New User <a href="signin.php" class="create-account">Create your account ➡</a></span>
          </div>
          </form>


  </body>
  </html>