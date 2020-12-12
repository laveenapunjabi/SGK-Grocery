<?php

$servername='remotemysql.com';
$user='yL8dDuN9Va';
$password='wwOjztezvD';
$dbname = "yL8dDuN9Va";

$conn=mysqli_connect($servername,$user,$password,$dbname);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

  

 
if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "insert into users (name, password, email, mobile, address)  values ('$name', '$password', '$email','$mobile', '$address')";
    $sql_u = "SELECT * FROM users WHERE name=' $name' ";
    $sql_e = "SELECT * FROM users WHERE email=' $email' ";
    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);

if(empty($name) || empty($password) ||  empty($email) || empty($mobile)){
      echo "Please Fill all the details!";
    }

    elseif(!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                echo "Only alphabets and white space are allowed";  
            }


    elseif(strlen($password) < 8){
      echo "Password should contain more than 8 characters!";
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                echo "Invalid email format";
    }

    elseif(!preg_match ("/^[0-9]*$/", $mobile) ) {  
            echo "Only numeric value is allowed.";  
            }  
    elseif (strlen ($mobile) != 10) {  
            echo "Mobile no must contain 10 digits.";  
            }  

    elseif(mysqli_num_rows($res_u) > 0){
       echo "Sorry... username already taken";
    }

    else if(mysqli_num_rows($res_e) > 0){
      echo "Sorry... email already taken"; 
    }

    elseif (!mysqli_query($conn,$sql)){

            die('Error: ' . mysqli_error($conn));
    }


    else{
          header("Location: login.php");
            }   
 
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>

  <title>Sign-In</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Responsive Mega Menu | CodingNepal</title> -->

  
    
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css" />


  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet">

<style>
  h1 {
  margin-top: -190px;
  text-align: center;
  font-size: 70px;
  font-family: Brush Script MT, Brush Script Std, cursive;
}

body {
  font-family: "Poppins", sans-serif;
  /*background-color: #ccc;*/
}

input {
  font-family: "Poppins", sans-serif;
}


.input-field input {
  margin-left: 20px;
  background: none;
  outline: none;
  border: none;
  line-height: 3;
  font-weight: 500;
  font-size: 1.2rem;
  color: #333;
}




.input-field input::placeholder {
  color: black;
  font-weight: 500;
}


.input-field {
  margin-left: 550px;
  max-width: 380px;
  width: 100%;
  background-color: #cbd0d1;
  margin-top: 15px;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
}

.input-field:hover {
  background-color: #a6d0de;
}

button {
  width: 150px;
  margin-top: 25px;
  border: none;
  border-radius:15px;
  margin-left: 670px;
  font-size: 25px;
  background-color: #2ca3de;
  padding: 5px;
}

.submit {
  margin-left: 700px;
  margin-top: 20px;
  font-size: 30px;
  background-color: rgb(30, 167, 235);
  border-radius: 10px;
}




 /*Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 1400px) {
   .col-75, input[type=submit] , input::placeholder {
  
  
  }
}


</style>

</head>


<body>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#1ea7eb" fill-opacity="1" d="M0,160L48,186.7C96,213,192,267,288,277.3C384,288,480,256,576,218.7C672,181,768,139,864,149.3C960,160,1056,224,1152,229.3C1248,235,1344,181,1392,154.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

<br><br><br>
<div class="container">
	<h1>Sign-In</h1>
  <form action="" method="POST">
    <div class="row input-field">
      <div class="col-75">
        <input type="name" id="name"  placeholder="Your name.." name="name">
      </div>
    </div>

    </div>
    <div class="row input-field">
      <div class="col-75">
        <input type="password" id="password"  placeholder="Password" name="password">
      </div>
    </div>

    </div>
    <div class="row input-field">
      <div class="col-75">
        <input type="email" id="email"  placeholder="Email Id" name="email">
      </div>
    </div>
    <div class="row input-field">
      <div class="col-75">
        <input type="contact" id="contact"  placeholder="Contact No" name="mobile">
      </div>
    </div>
    <div class="row input-field">
      <div class="col-75">
        <input type="address" id="address"  placeholder="Address" name="address">
      </div>
    </div>

    <div class="row">
      <input type="submit" value="submit" name="submit" class="submit" style="text-decoration: none; color: black;">
       <!-- <button type="submit" name="submit"  class=" trans" style="text-decoration: none; color: black;" >Submit</button> -->
    </div>
  </form>
</div>
 

<!-- <div class="container">
    <div class="title">
      <h1>Registration Form</h1>
    </div>
    <form action="register.php" method="POST">
      <div class="form">
       <div class="row input-field col-75">
          <label>Name</label>
          <input type="text" class="input" name="name">
       </div>  
       <div class="row input-field col-75">
          <label>Password</label>
          <input type="password" class="input" name="password">
       </div>  
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="mobile">
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="submit">
      </div>
    </div>
    </form>

</div>
 -->







</body>
</html>