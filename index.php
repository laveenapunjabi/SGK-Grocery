<?php
//include auth.php file on all secure pages
include("auth.php");
?>


<!DOCTYPE html>
<html>
<head>

  <title>SGK</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link rel="stylesheet" type="text/css" href="footer.css">
    <!-- <title>Responsive Mega Menu | CodingNepal</title> -->

  <style type="text/css">
    @media screen and (max-width:1500px){
  .video {
    height: 720px;
    width: 70%;
    border-radius: 15px;
  }
  iframe {
    margin-top: 50px;
    margin-right: 60px;
  }
}
  @media screen and (max-width:930px){
  .video {
    margin-left: 80px;
    height: 400px;
    width: 700px;
    border-radius: 15px;
    font-size: 10px;
  }
  .benefits{
    float: left;
    font-size: 15px;
    margin-top: 120px;  
  }
  iframe {
    float: right;
    margin-top: 50px;
    margin-right: 60px;
    width: 300px;
    height: 200px;
  }
}
 @media screen and (max-width:850px){
  .video {
    margin-left: 50px;
    height: 300px;
    width: 500px;
    border-radius: 15px;
    /*font-size: 8px;*/
  }
  .benefits{
    margin-left: 10px;
    float: left;
    font-size: 10px;
    margin-top: 50px;  
  }
  iframe {
    float: right;
    margin-top: 10px;
    margin-right: 30px;
    width: 250px;
    height: 150px;
  }
}
@media screen and (max-width:1350px){
  .feedback{
    height: 500px;
    width: 70%;
  }
  .f3 {
    float: left;
    margin-left: 280px;
  }
}
@media screen and (max-width:1160px){
  .feedback{
    height: 700px;
    width: 70%;
  }
  .f3 {
    float: left;
    margin-left: 190px;
  }
  .f1 {
    margin-left: 190px;
  }
   
}
@media screen and (max-width:800px){
  .feedback{
    float: left;
    height: 700px;
  }
  .footer-distributed{
    margin-top: 100px;
  }
  
}
@media screen and (max-width:500px){
  .feedback{
    float: left;
    height: 700px;
  }
  .footer-distributed{
    margin-top: 900px;
  }
}
  </style>
    
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




  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://img2.exportersindia.com/product_images/bc-full/dir_174/5198785/wheat-flour-1508737546-3410055.jpeg" style="width:50%;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://img.etimg.com/thumb/msid-74452389,width-1200,height-900,imgsize-573232,overlay-etmarkets/photo.jpg" style="width:50%;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://wallpaperaccess.com/full/1463517.jpg" style="width:50%;">
  
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://3.imimg.com/data3/UX/RI/MY-18798756/rice-flakes-1069786-500x500.jpg" style="width:50%;">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>  
</div>

  <div class="container">
  
      <div class="box bg1">
        <button class="btn-prod"><a href="ip/Flours & Grains/index1.php" class="prod">Aata</a></button>
      </div>
  
      <div class="box bg2">
        <button class="btn-prod"><a href="ip/dal/index1.php " class="prod">Dal</a></button>
      </div>

      <div class="box bg3">
        <button class="btn-prod"><a href="ip/Cooking Oil/index1.php" class="prod">Oil</a></button>
      </div>

      <div class="box bg4">
        <button class="btn-prod"><a href="ip/Rice & Rice Products/index1.php" class="prod">Rice</a></button>
      </div>

      <div class="box bg5">
        <button class="btn-prod"><a href="ip/Jam & Spreads/index1.php" class="prod">Kissan Jam</a></button>
      </div>

      <!-- <div class="box bg6">
      	<img style="width: 50px;" src="rambanduchilli.jpg">
        <button class="btn-prod"><a href="ip/Pickles/index1.php" class="prod">Pickle</a></button>
      </div> -->

      <div class="box bg7">
        <button class="btn-prod"><a href="ip/Masalas & Spices/index1.php" class="prod">Masala</a></button>
      </div>

      <div class="box bg8">
        <button class="btn-prod"><a href="ip/Skin care/index1.php" class="prod">Personal Care</a></button>
      </div>


  </div>


  <div class="video">
    <h1 style="text-align: center; padding-top: 45px; font-family: Courier, monospace; color: white; font-size: 50px;">Video</h1>
    <p class="benefits">BENEFITS OF ONLINE GROCERY SHOPPING</p>
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2DT3ibTVS-8?rel=0" allowfullscreen></iframe>
    <!-- <iframe  src="https://youtu.be/2DT3ibTVS-8" style=" margin-left:500px; width: 500px; height: 400px;" allowfullscreen></iframe> -->
    <!-- <iframe width="420" height="315" src="https://youtu.be/2DT3ibTVS-8" frameborder="0" allowfullscreen></iframe> -->
</iframe>
  </div>


  <div class="feedback">
    <h1 style="text-align: center; padding-top: 30px; font-family: Courier, monospace">HAPPY CLIENTS & FEEDBACKS</h1>
    <div class="f1">
      <i class="fa fa-star stars" style="margin-left: 25px; margin-top: 30px;"></i>
      <i class="fa fa-star stars"></i>
      <i class="fa fa-star stars" ></i>
      <i class="fa fa-star stars"></i>
      <i class="fa fa-star"></i>
      <h5 style="margin-left: 25px; font-size: 22px;">Laveena Punjabi</h5><br>
      <h6 style="font-size: 15px; margin-top: 5px; text-align: center;">It was very nice Experience to donate someone.Thankful for this great Opportunity</h6>
    </div>
    <div class="f2">
      <i class="fa fa-star stars" style="margin-left: 25px; margin-top: 30px;"></i>
      <i class="fa fa-star stars"></i>
      <i class="fa fa-star stars" ></i>
      <i class="fa fa-star stars"></i>
      <i class="fa fa-star"></i>
      <h5 style="margin-left: 25px; font-size: 22px;">Navin Rohra</h5><br>
      <h6 style="font-size: 15px; margin-top: 5px; text-align: center;">It was very nice Experience to donate someone.Thankful for this great Opportunity</h6>
    </div>
    <div class="f3">
      <i class="fa fa-star stars" style="margin-left: 25px; margin-top: 30px;"></i>
      <i class="fa fa-star stars"></i>
      <i class="fa fa-star stars" ></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <h5 style="margin-left: 25px; font-size: 22px;">Bhavesh Bhatia</h5><br>
      <h6 style="font-size: 15px; margin-top: 5px; text-align: center;">It was very nice Experience to donate someone.Thankful for this great Opportunity</h6>
    </div>
  </div>
  

  <br><br><br>
    <footer class="footer-distributed">

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

    

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</body>

</html>
