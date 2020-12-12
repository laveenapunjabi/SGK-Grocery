<?php


include 'connection.php';

$servername='remotemysql.com';
$user='yL8dDuN9Va';
$password='wwOjztezvD';
$dbname = "yL8dDuN9Va";
$conn=mysqli_connect($servername,$user,$password,$dbname);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$mobile = $_SESSION['mobile'];
$address = $_SESSION['address'];

$result = mysqli_query($conn,"SELECT * FROM users WHERE name='$name'");

$row= mysqli_fetch_array($result);

if(isset($_POST['submit'])){
	
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $mobile = $_SESSION['mobile'];
    $address = $_SESSION['address'];

	$result1 = mysqli_query($conn, "UPDATE users SET name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]', address='$_POST[address]' WHERE name='$_POST[name]'");

	// $row1 = mysqli_fetch_array($result1);


}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .form_wrapper {
  width: 480px;
  height: 500px;
  /* this will help us center it*/
  margin: 5px 40px 100px 700px;
  margin-top: 70px;
  margin-right: 500px;
  right: 100px;
  float: right;
  background-color: black;
  border-radius: 50px;
  /* make it a grid container*/
  display: grid;
  /* with two columns of same width*/
  grid-template-columns: 1fr 1fr;
  /* with a small gap in between them*/
  grid-gap: 5vw;
  /* add some padding around */
  padding: 5vh 10px;
}


#form_right {
  margin-left: 35px;
  display: grid;
  grid-gap: 15px;
  padding: 10px 5px;
  width: 400px;
}

/* And this is the style for the input tags: */

.input_container {
  background-color: white;
  color: black;
  /* vertically align icon and text inside the div*/
  display: flex;
  align-items: center;
  padding-left: 20px;
}

.input_container:hover {
  background-color: white;
  color: blue;
}

.input_container,
#input_submit {
  height: 50px;
  /* make the borders more round */
  border-radius: 30px;
  width: 100%;
}

.input_field {
  /* customize the input tag with lighter font and some padding*/
  color: black;
  background-color: inherit;
  width: 85%;
  border: none;
  outline:none;
  font-size: 1.3rem;
  font-weight: 400;
  padding-left: 30px;
}

.input_field:hover,
.input_field:focus {
  /* remove the outline */
  outline: none;
}

#input_submit {
  /* submit button has a different color and different padding */
  background-color: #667eea;
  padding-left: 0;
  font-weight: bold;
  color: white;
  text-transform: uppercase;
}

#input_submit:hover {
  background-color: white;
  color: black;
  /* simple color transition on hover */
  transition: background-color,
      1s;
  cursor: pointer;
    </style>
    
    <!-- CSS Stylesheet link -->
    <link rel="stylesheet" href="nav.css">

    <!-- Google Fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

     <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>

  </head>
  <body>
    <nav>
    <div class="wrapper">
      <div class="logo"><a href="index.php">SGK</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fa fa-times"></i></label>
        <li>
          <a href="user_details.php" style="background-color: black; color: white; "><i class='fa fa-user-circle'></i></a>
        </li>
        <li>
          <a href="logout.php" class="desktop-item">Logout</a>
        </li>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="faqs.php">Faqs</a></li>

        <li>
          <a href="#" class="desktop-item">Categories</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Categories</label>
          <div class="mega-box">
            <div class="content">
            <div class="row">
                <header>Packed</header>
                <ul class="mega-links">
                  <li><a href="ip/Breakfast Cereals/index1.php">Breakfast Cereals</a></li>
                  <li><a href="ip/Bevarages/index1.php">Beverages</a></li>
                  <li><a href="ip/Pickles/index1.php">Pickels</a></li>
                  <li><a href="unallc.php">Other</a></li>
                  
                </ul>
              </div>
               <div class="row">
                <header>Personal</header>
                <ul class="mega-links">
                  <li><a href="ip/Hair care/index1.php">Hair care</a></li>
                  <li><a href="ip/Skin care/index1.php">Skin Care</a></li>
                  <li><a href="ip/Oral Care/index1.php">Oral care</a></li>
                  <li><a href="unallc.php">Other</a></li>
                  
                </ul>
              </div>
               <div class="row">
                <header>Food</header>
                <ul class="mega-links">
                  <li><a href="ip/dal/index1.php">Dal</a></li>
                  <li><a href="ip/Flours & Grains/index1.php">Flour</a></li>
                  <li><a href="ip/Cooking Oil/index1.php">Sunday Oil</a></li>
                  <li><a href="unallc.php">All Categories</a></li>
                  
                </ul>
              </div>
              
              
            </div>
          </div>
        </li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars"></i></label>
    </div>
  </nav>


    <section>
    	<div class="form_wrapper">

    			<form method="POST" action="#">
    			<div id="form_right">
            <h1 class="member-login" style="color: white; text-align: center;">MEMBER DETAILS</h1>
            <br>
            <div class="input_container">
            	
                <i class="fa fa-user"></i>
                <input name="name" id="field_email" value="<?php echo $row['name']; ?>" class='input_field'>
            </div>

            <div class="input_container">
                <i class="fa fa-envelope"></i>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" id="field_input" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-phone"></i>
                <input   type="contact" name="mobile" id="field_input" value="<?php echo $row['mobile']; ?>" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-address-card"></i>
                <input   type="address" name="address" id="field_input" value="<?php echo $row['address']; ?>" class='input_field'>
            </div>
            
            
            <input type="submit" value="Edit" id='input_submit' name="submit" class='input_field'>


    		
        </div>
   	</form>
    	
    </div>
    </section>

