<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/portfolio.css">
<style>


	
</style>
</head>
<body class="fontbody">
 <?php include "contactInfo.php";?>
<div id="wrapper">
<div class="aboutmeabt">
<hr>
<button class ="headertextcolor"><strong>ABOUT ME</strong></button>
<hr>
</div>
<div class="rowabt">
  <div class="colabt leftabt" style="background-color:#FFFFFF;">
  <!--<img src="assets/images/mypic.jpeg" class="displayimageabt" alt="pic" align="top" border="2">-->
  <?php echo '<img src="data:image/JPEG;base64,'.$image.'" class="displayimageabt" alt="pic" align="top" border="2"/>'; ?>
  <p class="centerabt"> <?= $role?><p>
    </div>
  <div class="colabt rightabt" style="background-color:#FFFFFF;">
  <div class="rowabt">
  <div class="columnabt lefabt">
    <div align="left">
	<img src="assets/images/manC.jpg" class="imgabt" align="left">
	<span>Name</span>
	<br/>
	<p>Swati Thirunavakarasu</p>
	</div>
	<br>
	<div align="left">
	<img src="assets/images/phoneC.jpg" class="imgabt" align="left">
	<span>Phone</span>
	<br/>
	<p><?= $phone?></p>
	</div>
	<br>
	
	<div align="left">
	<img src="assets/images/addC.jpg" class="imgabt" align="left">
	<span>Address</span>
	<br/>
	<p><?= $address?></p>
	</div>
	
  </div>
  <div class="columnabt rigabt">
    <div align="left">
	<img src="assets/images/emailC.jpg" class="imgabt" align="left">
	<span>Email</span>
	<br/>
	<p>Swatithirunavakarasu@gmail.com</p>
	</div>
	<br>
	<div align="left">
	<img src="assets/images/calC.jpg" class="imgabt" align="left">
	<span>Date Of Birthday</span>
	<br/>
	<p><?= $DOB?></p>
	</div>
	<br>
	<div align="left">
	<img src="assets/images/nation.jpg" class="imgabt" align="left">
	<span>Nationality</span>
	<br/>
	<p>Indian</p>
	</div>
	
  </div>
</div>
	<div align="left">
	<p>Social Profiles </p> <i class="fa fa-facebook-square fa-2x"></i> <i class="fa fa-twitter-square fa-2x"></i> <i class="fa fa-linkedin-square fa-2x"></i> <i class="fa fa-pinterest-square fa-2x"></i> <i class="fa fa-google-plus-square fa-2x"></i> <i class="fa fa-opera fa-2x"></i>
	<div class="contentabt">
	<p><?= $description?></p>
	</div>
	<div class="contentabt">
	<p>Yours Sincreley,</p><br>
	<img src="assets/images/sign.png" class="signabt" align="left">
	</div>
	
	</div>
	
	</div>
	 
	</div>
	<div align="right">
	<a href="index.php"><img id="arrowbutton" src="assets/images/arrowbutton.png" alt="back"></a>
	</div>
</div>
</body>
</html>
<!--
https://stackoverflow.com/questions/36718805/how-to-insert-a-button-in-the-middle-of-a-hr -->