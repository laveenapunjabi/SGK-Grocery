<?php  
include 'connection.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="nav.css">
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

</body>
</html>