<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/portfolio.css">
<script src="assets/js/contactMeValidate.js"></script>
</head>
<body class="fontbody">
    <?php include "contactInfo.php";?>
    <?php include "contactMeValidate.php";?>
<form method="post" name="validateForm" action="<?= $_SERVER['PHP_SELF']?>">
<div id = "wrapper">
<div class="aboutmecon">
<hr>
<button class ="headertextcolor"><strong>CONTACT ME</strong></button>
<hr>
</div>
    <div class="contactrowcon">
  <div class="contactcolumncon contactleftcon">
  <div align="left" id="contactme">
  <p>CONTACT ADDRESS</p>
  </div>
   <div align="left" id="contactme">
	<img src="assets/images/address.png" class="imgcon" align="left">
	<span><strong>Address:</strong></span><p> <?= $address?></p>
	</div>
	
	<div align="left" id="contactme">
	<img src="assets/images/telephone.jpg" class="imgcon" align="left">
	<span><strong>Phone: +</strong></span><p> <?= $phone?></p>
	</div>
	
	<div align="left" id="contactme">
	<img src="assets/images/whatsap.png" class="imgcon" align="left">
	<span><strong>Whatsapp: +</strong></span><p> <?= $whatsap?></p>
	</div>
	
	
	<div align="left" id="contactme">
	<img src="assets/images/skype.png" class="imgcon" align="left">
	<span><strong>Skype:</strong></span><p> <?= $skype?></p>
	</div>
	
	<div align="left" id="contactme">
	<img src="assets/images/letter.png" class="imgcon" align="left">
	<span><strong>Email:</strong></span><p id="textcolorcon"> swati.thirunavakarasu@gmail.com</p>
	</div>

	<div align="left" id="contactme">
	<img src="assets/images/website.png" class="imgcon" align="left">
	<span><strong>Website:</strong></span><p id="textcolorcon"> <?= $website?></p>
	</div>
	
	<div align="left" class="iconsizescon">
	<i class="fa fa-facebook-square fa-2x"></i> &nbsp; <i class="fa fa-twitter-square fa-2x"></i> &nbsp; <i class="fa fa-linkedin-square fa-2x"></i> &nbsp; <i class="fa fa-pinterest-square fa-2x"></i> &nbsp; <i class="fa fa-google-plus-square fa-2x"></i> &nbsp; <i class="fa fa-opera fa-2x"></i>
	</div>
	
	 </div>
  <div class="contactcolumncon contactrightcon"> 
 <div align="left" id="fun">
 <p>LET'S HAVE A FUN</p>
 </div>
  <div align="left" id="contactme">
  <input type="text" class= "inputcon" id="yourname" name="yourname" placeholder="Your Name" minlength="5" maxlength="20" onblur="validateMsgUserName()" required>
  <div id="msguser_error"></div>
  <span class="error"><?= $name_error ?></span>
  </div>
  
   <div align="left" id="contactme">
  <input type="email" class= "inputcon" id="email" name="email" placeholder="Email" onblur="validateMsgEmail()" required>
  <div id="msgemail_error"></div>
  <span class="error"><?= $email_error ?></span>        
  </div>
  
  <div align="left" id="contactme">
  <input type="tel" class= "inputcon" id="phone" name="phone" placeholder="Phone" maxlength="10" onblur="validateMsgPhone()" required>
   <div id="msgphone_error"></div>
  <span class="error"><?= $phone_error ?></span>        
  </div>
  <div align="left" id="contactme">
  <textarea rows="4" cols="50" id="comment" name="comment" placeholder="Your Message" minlength="5" onblur="validateMsgComment()" required></textarea>
  <div id="msgcomment_error"></div>
  <span class="error"><?= $message_error ?></span>   
  </div>
   <div align="left" id="contactme">
	<button class="buttonsignupcon" name="send">Send Now</button>
  </div>
  <div align="left" id="contactme">
	<span class="error"><?= $database_error ?></span>
  </div>
  
   </div>
 </div>
</div>
<div align="right">
	<a href="index.php"><img id="arrowbutton" src="assets/images/arrowbutton.png" alt="back"></a>
</div>

</div>
</form>
</body>
</html>
<!--
https://stackoverflow.com/questions/36718805/how-to-insert-a-button-in-the-middle-of-a-hr 
https://codepen.io/ingomc/pen/ZLQORM-->