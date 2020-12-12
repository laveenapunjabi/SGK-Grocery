<?php
include('connection.php');
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>

  <title>About Us</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Responsive Mega Menu | CodingNepal</title> -->

  <link rel="stylesheet" type="text/css" href="aboutus.css">
  <link rel="stylesheet" type="text/css" href="nav.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
   
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css" />


  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet">



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



<div class="container-fluid">
  <img src="shop.jpeg" class="center" alt="Responsive image">
</div>



  <div class="container">
    <img class="rounded-circle img1"  src="https://4.imimg.com/data4/RF/BD/MY-979637/address-verification-service-500x500.png">

    <img class="rounded-circle img2"  src="https://cdn4.iconfinder.com/data/icons/social-media-2097/94/phone-512.png">

    <img class="rounded-circle img3" src="https://icons-for-free.com/iconfiles/png/512/email+envelope+inbox+mail+message+send+icon-1320085879987098147.png">

    <h6 class="address"><b class="add"><u>ADDRESS</u></b> <br><br> PLOT NO 2A, <br> NEAR MTNL OFFICE,<br>KOPRI COLONY,<br>THANE(E), 400603,<br> MAHARASHTRA</h6>    

    <h3 class="phone"><b class="contact-no"><u>PHONE</u></b><br><br>+91 9867845860</h3>

    <h4 class="mail"><b class="id"><u>EMAIL</u></b> <br><br> <a style="font-size: 21px; margin-left: -90px;"> navinrohra2000@gmail.com</a></h4>

  </div>


<br><br><br>
<div class="map">
  <h1 class="location">LOCATION OF SHOP</h1>
  <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.3312056555296!2d72.9708647149029!3d19.180730987027843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8de8f4672ff%3A0x858aeef764faed4f!2sBhagat%20Kanwarram%20Rd%2C%20Sadhu%20Vaswani%20Nagar%2C%20Kopri%2C%20Thane%20East%2C%20Thane%2C%20Maharashtra%20400603!5e0!3m2!1sen!2sin!4v1605972998080!5m2!1sen!2sin" width="600" height="400" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>




 <footer class="footer-distributed" style="margin-top: 150px;">

      <div class="footer-left">
        <h3>About<span>SGK</span></h3>
      </div>

      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
            <p><span>Shop No 2A, Near MTNL Office, Kopri Colony</span>
            Thane (E), 400603</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91 9867845860</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:navinrohra2000@gmail.com">navinrohra2000@gmail.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the SHOP</span>
          We provide different types of quality chakki fresh atta. We also provide quality products which is used by everyone in daily needs such as dals, pulses, spices, tea, soaps and many more items.</p>
      </div>
    </footer>
</body>
</html>
