<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/portfolio.css">
</head>
<body class="fontbody">
    
<div id="wrapper">
<div class="aboutmeres">
	<hr>
	<button class ="headertextcolor"><strong>RESUMES</strong></button>
	<hr>
</div>

<div class="rowres">
    <?php include "resumeInfo.php";?>
  <!--<div class="first-columnres">-->
    <!--<div align="left">
	<div class="company1res"> DiazApps</div>
	<div class="role1res"> Intern (July 2016 - present)</div>-->
	<!--</div>-->
<!--<br><br><br>
	<div align="left">
	<div class="company1res"> Polar Food CA</div>
	<div class="role1res"> Manager Web Development (Jan 2013 - Dec 2013)</div>
	</div>
<br><br><br>	
	<div align="left">
	<div class="company1res"> Government of the state of Lara </div>
	<div class="role1res"> Intern (July 2006 - Dec 2010)</div>
	</div> 
  </div>-->
  <!--<div class="second-columnres">
  <hr id="line">
  <p id="yearcolor">2016<p>
  <hr id="line">
  <p id="yearcolor"> 2014 <p>
  <hr id="line">
  <p id="yearcolor"> 2013 <p>
  <hr id="line">
  <p id="yearcolor"> 2012 <p>
  <hr id="line">
  <p id="yearcolor"> 2010 <p>
  <hr id="line">
   </div>-->
  <!--<div class="third-columnres">-->
  <!--<br><br><br><br>  
  <div align="left">
	<div class="companyres"> <?= $jobTitle?></div>
	<div class="roleres"> <?= $jobCompany?> (<?= $jobDuration?>)</div>
	</div>
	<br><br><br><br>
   <div align="left">
	<div class="companyres"> <?= $jobSecondTitle?></div>
	<div class="roleres"> <?= $jobSecondCompany?> (<?= $jobSecondDuration?>)</div>
	</div>-->
`	
  <!--</div>-->
</div>
<div align="right">
	<a href="index.php"><img id="arrowbutton" src="assets/images/arrowbutton.png" alt="back"></a>
	</div>
</div>
</body>
</html>
