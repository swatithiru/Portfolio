<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/portfolio.css">
<style>
body {
    
}
* {
  box-sizing: border-box;
}
span {
    display: inline;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 23.33%;
  padding: 0px;
  height: 30vh;
  margin-top: 60px;
  margin-left: 110px;
  margin-right: 0px;
  text-align: center; 
  border: 1px solid #e8e4c9;
  border-radius: 5px;  /* Should be removed. Only for demonstration */
}
.colbut {
  float: left;
  width: 23.33%;
  padding: 10px;
  margin-top: 10px;
  margin-left: 110px;
  margin-right: 0px;
  text-align: center; 
  border: 1px solid #e8e4c9;
  border-radius: 5px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	
	.aboutme {
	display:flex;
	justify-content: center;
	align-items: center;
	}
	hr {
	flex: 1;
	border: none;
	height: 1px;
	background: silver;
	
	}
	button {
	border: 1px solid #0000ff;
	background-color: white;
}
.buttonsignup {
	background: #0000FF;
	padding: 5px 5px;
	font-weight: bold;
	color: white;
	font-size: 16px;
	border-radius: 2px;
	box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
	margin-top: 30px;
	text-decoration: none;
	transition: 0.4s;
	text-align: right;
	margin-left: 5px;
}
.contactus {
	align: center;
	margin-top: 5px;
}
.setfont {
	color: gray;
}
#service {
	text-align: center;
	margin-top: 10px;
}

.displayrefimages {
 width: auto;
 height: 9vh;	
 border-radius: 50%;
}	
figure {
	margin-top: -30px;
	
}
figcaption {
	margin-top: 10px;
}
* {box-sizing: border-box}

/* Set height of body and the document to 100% */

/* Style tab links */
.tablink {
  background-color: #555;
  color: #77777;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #f5f5f5;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: black;
  display: none;
  padding: 100px 20px;
  height: 100%;
}
label {
  display: block;
  padding-left: 15px;
  text-indent: -15px;
}

#Home {background-color: #f5f5f5;height: 150vh;}
#News {background-color: #f5f5f5;height: 150vh;}
#Contact {background-color: #f5f5f5;height: 200vh;}
#About {
	text-align: center;
	background-color:#f5f5f5;
	height: 150vh;
	}
.inputBox {
	margin-top: 10px;
	text-align: center;
	border: 1px solid silver;
	}
	
	* {box-sizing: border-box;}

input[type=text] {
  width: 100%;
  padding: 12px;
  border: 1px solid #000;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color: blue;
}
input[type=file] {
  width: 100%;
  padding: 12px;
  border: 1px solid #000;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  background-color: white;
  resize: vertical;
  color: blue;
}
input[type=submit] {
  
 
  
    cursor: pointer;
    text-align: center;
    background: linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
	background-size: 200% auto;
	padding: 0px 35px;
	color:#777777;
	font-weight: bold;
	font-size: 17px;
	border-radius: 2px;
	box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
	text-decoration: none;
	transition: 0.4s;
	text-align: center;
	margin-left: 5px;
	width: 120px;
	 
}



.container {
  border-radius: 5px;
  background-color: #bdc9ea;
  padding: 20px;
  width: 50%;
  height: 60%;
  margin-left: 350px;
  text-align: left;
  color: #777777;
  font-size: 15px;
  font-weight: bold;
}

.spaceTop {
	margin-top: 10px;
}

#submitservice {
	text-align: center;
}
input[type=number] {
  width: 100%;
  padding: 12px;
  border: 1px solid #000;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color: blue;
}

</style>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
function marketDisplay(){
    if (document.getElementById('marketid').checked) 
        {document.getElementById("MarketK").style.display = 'block';
    }
    else
        document.getElementById("MarketK").style.display = 'none';
    }
function transferDisplay(){
    if (document.getElementById('transferid').checked) 
        {document.getElementById("transferK").style.display = 'block';
    }
    else
        document.getElementById("transferK").style.display = 'none';
    }
function languageDisplay(){
    if (document.getElementById('languageid').checked) 
        {document.getElementById("languageK").style.display = 'block';
    }
    else
        document.getElementById("languageK").style.display = 'none';
    }
function getDefault(){
    document.getElementById("defaultOpen").click();
}
</script>
</head>
<body onload="getDefault()" id="indexbody">
<div id="wrapper">
<button class="tablink" onclick="openPage('Home', this, '#bdc9ea')" id="defaultOpen">MY PROFILE</button>
<button class="tablink" onclick="openPage('News', this, '#bdc9ea')">MY EXPERIENCE</button>
<button class="tablink" onclick="openPage('Contact', this, '#bdc9ea')">MY SKILLS/ MY PORTFOLIO</button>
<button class="tablink" onclick="openPage('About', this, '#bdc9ea')">ADD NEW SERVICES</button>

<div id="Home" class="tabcontent" >
    <form method="POST" action="adminpage.php" enctype="multipart/form-data">
   <div class="container">
	<h3 align="center" style="font-family:Rajdhani;"> Modify My Profile </h3>
	<!--<form action="adminpage.php" enctype="multipart/form-data">-->
    
	<label  for="newservicetitle">Add new Address: </label>
    <input type="text" id="newservicetitle" name="insertadd" placeholder="Your address..">
	
	<label  for="newservicedescription">Add new role: </label>
    <input type="text" id="newservicedescription" name="insertrole" placeholder="Your role..">
	
	<label  for="newservicecharge">Add a new phone number: </label>
    <input type="text" id="newservicecharge" name="insertphone" placeholder="phone number" required>
	
	<label  for="newserviceImage">Add new website name: </label>
    <input type="text" id="newserviceImage" name="insertwebsite" placeholder="Your website name..">
    
    <label  for="newserviceImage">Add new skype name: </label>
    <input type="text" id="newserviceImage" name="insertskype" placeholder="Your skype name..">
    
    <label  for="newserviceImage">Add new cv: </label>
    <input type="text" id="newserviceImage" name="insertcv" placeholder="Your cv ..">
    
     <label  for="newserviceImage">Add new Image: </label>
     <input type="file" name="uploadImage" id="uploadImage" accept= "images/*" /><br>
     
     <label  for="newserviceImage">Add new Logo: </label>
     <input type="file" name="logoImage" id="logoImage" accept= "images/*" /><br>
     
     <label  for="newserviceImage">Add new Description: </label>
     <textarea rows="10" cols="50" name="addDescription" placeholder="Your Description"></textarea>

   
	<div id="submitservice">
    <button name="insProfile" value="Submit" class="buttonsignupcon">Insert</button> 
    <button name="delProfile" value="Delete" class="buttonsignupcon">Delete</button> 
    <button name="updProfile" value="Update" class="buttonsignupcon">Update</button> 
    
     <?php include "insertProfile.php";?>
     
	</div>
  </form>
</div>
</div>

<div id="News" class="tabcontent">
  <div class="container">
	<h3 align="center" style="font-family:Rajdhani;">Add a new job experience </h3>
	<form action="adminpage.php" method="POST">
    
	<label  for="newservicetitle">Job Title: </label>
    <input type="text" id="jobTitle" name="jobTitle" placeholder="My Job title..">
	
	<label  for="newservicedescription">Job Company: </label>
    <input type="text" id="jobCompany" name="jobCompany" placeholder="My Job Company..">
	
	<label  for="newservicecharge">Job Duration: </label>
    <input type="text" id="jobDuration" name="jobDuration" placeholder="My Job Duration">
    
    <label  for="newservicecharge">Job Year: </label>
    <input type="text" id="jobYear" name="jobYear" placeholder="My Job Year">
   <br>
	<div id="submitservice">
    <button name="jobSubmit" value="Submit" class="buttonsignupcon">Insert</button> 
    <button name="delJob" value="Delete" class="buttonsignupcon">Delete</button> 
    <button name="updJob" value="Update" class="buttonsignupcon">Update</button> 
    
   <?php include "insertJob.php";?>
	</div>
  </form>
</div>
</div>

<div id="Contact" class="tabcontent">
   <div class="container">
	<h3 align="center" style="font-family:Rajdhani;">Add new skills </h3>
	<form action="adminpage.php" method="POST">
 
  Choose a skill Type: <select name="skillType">
  <option value="managerialSkills">MANAGERIAL SKILLS</option>
  <option value="transferableSkills">TRANSFERABLE SKILLS</option>
  <option value="languageSkills">LANGUAGE SKILLS</option>
</select>
<br>
<br>
Add a Skill Name:  <input type="text" name="skillName" id="skillName" placeholder= "Enter Skill Name" />
Add a Skill Percentage:  <input type="text" name="skillPercentage" id="skillPercentage" placeholder= "Enter Skill Percentage" />
Add a Skill Color:  <input type="text" name="skillColor" id="skillColor" placeholder= "Enter Skill Color" />
Add a Skill Icon:  <input type="text" name="skillIcon" id="skillIcon" placeholder= "Enter Skill Icon" />

<br>
<button name="skillsubmit" value="Submit" class="buttonsignupcon">Insert</button> 
<button name="delSkill" value="Delete" class="buttonsignupcon">Delete</button> 
<button name="updSkill" value="Update" class="buttonsignupcon">Update</button> 
 <?php include "insertSkill.php";?>
  </form>
 
  
  
  <div align="left">
 <form method="POST" action="adminpage.php" enctype="multipart/form-data">
  <h3 align="center" style="font-family:Rajdhani;">Add Portfolio Images </h3>
  Choose a portfolio Option: <select name="portfolioType">
  <option value="website">Websites</option>
  <option value="app">Apps</option>
  <option value="design">Design</option>
  <option value="photography">photography</option>
</select>
<br>
<br>
Add a Porfolio Image:  <input type="file" name="portfolioImage" id="portfolioImage" accept= "images/*" />
Add a Portfolio Title: <input type="text" name="portfolio_name" id="portfolio_name">
<button name="portfoliosubmit" value="Submit" class="buttonsignupcon">Insert</button> 
<button name="delPortfolio" value="Delete" class="buttonsignupcon">Delete</button> 
<button name="updPortfolio" value="Update" class="buttonsignupcon">Update</button> 
 <?php include "insertPortfolio.php";?>
  </form>
</div>

</div>
</div>

<div id="About" class="tabcontent">
 
     <div class="container">
	<h3 align="center" style="font-family:Rajdhani;">Add a new Service for the customers </h3>
	<form action="adminpage.php" enctype="multipart/form-data" method="POST">
    
	<label  for="newservicetitle">Add new Service Title: </label>
    <input type="text" id="newservicetitle" name="newservicetitle" placeholder="Your title..">
	
	<label  for="newservicedescription">Add new Service Description: </label>
    <input type="text" id="newservicedescription" name="newservicedescription" placeholder="Your description..">
	
	<label  for="newservicecharge">Add new Service charge: </label>
    <input type="text" id="newservicecharge" name="newservicecharge" placeholder="$1000">
	
	<label  for="newserviceImage">Add new Service Image: </label>
    <input type="file" id="newserviceImage" name="newserviceImage" placeholder="Your Image..">

   <br>
	<div id="submitservice">
    <button name="addService" value="Submit" class="buttonsignupcon">Insert</button> 
    <button name="delService" value="Delete" class="buttonsignupcon">Delete</button> 
    <button name="updService" value="Update" class="buttonsignupcon">Update</button> 
    <?php include "insertService.php";?>
	</div>
	</form>
	</div>

</div>
<div align="right">
	<a href="index.php"><img id="arrowbutton" src="assets/images/arrowbutton.png" alt="back"></a>
</div>
</div>
</body>
</html> 
