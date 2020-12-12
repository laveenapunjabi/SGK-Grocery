<?php
include('connection.php');
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width,user-scalable=no, initial-scale=1.0 , maximum-scale=1.0,
minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FAQS</title>

	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	
  <link rel="stylesheet" type="text/css" href="faq.css">
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


	<div class="container" style="height: 100px;">
 
  <h2>Frequently Asked Questions</h2>
 
  <div class="accordion">
    <div class="accordion-item">
      <a>How Cancel Items or Orders?</a>
      <div class="content">
        <p>Go to Your Orders and select the order you want to cancel.Select the check box next to each item you want to remove from the order. To cancel the entire order, select all of the items. Select Cancel checked items when finished.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How Change Your Order Information</a>
      <div class="content">
        <p>To change your order information: Go to Your Orders. Select Order Details link for the order you want to change. To edit orders shipped by Amazon, select Change next to the details you want to modify (delivery shipping address, payment method, gift options, etc.). Follow the on-screen instructions to change the desired information.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How can I get offer of bulk amounts?</a>
      <div class="content">
        <p>When you are logged in and you add products to shopping cart, you have the ability to send offer request to us using the shopping cart. 
You just need to add the products and quantities you are interested in and click “offer request”.
 We will send you an offer. Please note that this feature should only be used for bulk quantity price requests.
</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How can I retrieve my password?</a>
      <div class="content">
        <p>You can retrieve your password by clicking “forgot password?”. Instruction on password retrieval will be send to your email.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Can I get a refund for my shipping costs?</a>
      <div class="content">
        <p>We will refund your shipping costs if the product was received due to an error on our part. 
For change-of-mind returns, and any other return reason that is not due to an error on our part, we do not refund shipping charges.


</p>
      </div>
    </div>
  </div>
  
</div>
<div class="container" style="height: 100px; margin-top: -500px;">
 
  <h2>Frequently Asked Questions</h2>
 
  <div class="accordion" style="margin-left: 50px;">
    <div class="accordion-item">
      <a>Would I get compensation if the goods are damaged or lost in transit?</a>
      <div class="content">
        <p>Yes. When your products are damaged in transit, you can raise a claim under the Seller Protection Fund. The refund depends on the scenario and product</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How do I manage my orders on sgk?</a>
      <div class="content">
        <p>Through our seller dashboard, we make it really easy for you to manage your orders. Whenever a customer places an order, we send you an e-mail alert.
 You need to pack the order and keep it ready for dispatch within the time frame provided by you and inform us through the seller portal. 
This will alert our logistics partner to pick up the product from you.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What can I do if the balance in my wallet is not enough to pay for my order?</a>
      <div class="content">
        <p>You can pay part of the amount through your wallet and the remaining through any other prepaid payment modes like Credit/Debit Cards, Flipkart Gift Cards, and Netbanking.
</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Who all are eligible for the SuperCoins Exchange program?</a>
      <div class="content">
        <p>SuperCoins Exchange program can currently be availed only by SGK customers registered with Exchange Partners available as part of this program.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>.Why do I need to verify my mobile number or email address to log into my account?</a>
      <div class="content">
        <p>To make sure that your account details are always secure, verification by OTP (One Time Password) is important. This is a one-time process and you can log into your Flipkart account without any hassles once this is done.</p>
      </div>
    </div>
  </div>
  
</div>
 <div class="container" style="height: 100px; margin-top: -500px;">
 
  <h2 style="margin-left: -20px;">Frequently Asked Questions</h2>
 
  <div class="accordion">
    <div class="accordion-item">
      <a>Will my shipment be safe at the pickup store?</a>
      <div class="content">
        <p>Rest assured, your shipment is safe with our trusted partners at all pickup stores.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What can I write in product reviews?</a>
      <div class="content">
        <p>Customer reviews should be relevant to the product in question.
 The product review section on SGK is for you to share your opinion on the product & for other shoppers to have an informed buying decision.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How long do I have to pick up my shipment from the pick-up store?</a>
      <div class="content">
        <p>You can pick up your shipment within 5 days of the order arriving at the pick-up store. 
If you are on vacation, or can't pick it up within 5 days, you can contact our Customer Support to schedule the pickup at a later date.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Does a Gift Card expire?</a>
      <div class="content">
        <p>Yes, all Gift Cards have a validity of 1 year from the date of issue and will expire after that.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>If I cancel or return few items from my order and the order value drops below Rs. 100, will it impact the SuperCoins earned?</a>
      <div class="content">
        <p>There will be no SuperCoins earned for an order in case the overall order value drops below Rs. 100.</p>
      </div>
    </div>
  </div>
  
</div>
 
 
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

    

<script type="text/javascript">
  const items = document.querySelectorAll(".accordion a");
 
function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}
 
items.forEach(item => item.addEventListener('click', toggleAccordion));

</script>


</body>
</html>
