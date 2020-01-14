<?php session_start();
$usersession ='none';
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/portfolio.css">
<script src="assets/js/newloginValidate.js"></script>
<script src="assets/js/newuserValidate.js"></script>
</head>
<body class="indexbody">
<?php 
  if(isset($_SESSION['usersession']))
  {
	    $usersession = $_SESSION['usersession'];	
  }
  include "contactInfo.php";
?>


<div id="wrapper">
<div class="row">
	<div class="overflow">
  <div class="col left">
  <div class="logo">
  <!--<img src="assets/images/logo.png" class="center" alt="logo"/>-->
  <?php echo '<img src="data:image/JPEG;base64,'.$logo.'" class="center" alt="logo"/>'; ?>
  <h3 align="center"> Swati Thirunavakarasu </h3>
  <?php
  if($usersession != "none")
  {
  echo '<div align="center">';
  echo '<a  href="logout.php" class="bu">WELCOME '.$usersession.'</a>';
  echo '</div>';
  }
  ?>
  
  <!--<img src="assets/images/nombre.png"  class="center" alt="nombre"/>-->
  </div>
  <!--<h2 align="center" id="heading"> Swati Thirunavakarasu </h2>-->
<?php
  require('connectToDb.php');
  
 // $successLogin = "false";
  if(isset($_POST['login']))
  {
          
        $user_name = $_POST['name_text'];
        $password = $_POST['password_text'];
        $username_error = "";
        $password_error = "";
        $accesspage = "true";
        
        
        if(empty($user_name))
        {
          echo "<script>if(confirm('Field username cannot be empty')){document.location.href='index.php'};</script>";
         // echo "<script>alert('Field username cannot be empty');</script>"; 
          $username_error = "User name can not be empty(php)";  
        }
        else
        {
           $namematch = data_check($user_name);
           if (!preg_match("/^[a-z0-9_-]{3,15}$/",$namematch))
           {
           echo "<script>if(confirm('user name should have atleast 3 characters')){document.location.href='index.php'};</script>";
          // echo "<script>alert('user name should have atleast 3 characters');</script>";    
           $username_error = "user name should have atleast 3 characters";
           
           }
           else
           {
               $username_error = "";
           }
            
        }
        
        if(empty($password))
        {
          echo "<script>if(confirm('Field password cannot be empty')){document.location.href='index.php'};</script>";
          //echo "<script>alert('Field password cannot be empty');</script>"; 
          $password_error = "User name can not be empty(php)";  
        }
        else
        {
           $passwordmatch = data_check($password);
           if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/",$passwordmatch))
           {
           echo "<script>if(confirm('Password should contain a Uppercase,digit and a special character')){document.location.href='index.php'};</script>";
          // echo "<script>alert('Password should contain a Uppercase,digit and a special character');</script>";    
           $password_error = "user name should have atleast 3 characters";
           
           }
           else
           {
               $password_error = "";
           }
            
        }
        
        if($username_error == "" and $password_error =="")
        {
        //$username = $_POST['username'];
        //$password = $_POST['password'];
      
    	$getlogindetails = "SELECT * FROM login WHERE user_name = '$user_name' and password = '$password'";
	    $selectresult = mysqli_query($db,$getlogindetails);
        
    	$result= mysqli_fetch_assoc($selectresult);
    	$count = mysqli_num_rows($selectresult);
    	if($count == 1) {
    	    $_SESSION['usersession'] = $user_name;
    	    $usersession = $_SESSION['usersession'];
		if($user_name == 'swati')
		{
		   $usersession = $_SESSION['usersession'];
		   echo "<script>if(confirm('Admin $usersession has succesfully logged in')){document.location.href='adminpage.php'};</script>";
			
		}
		else
		{
		$usersession = $_SESSION['usersession'];
		echo "<script>if(confirm('Guest $usersession has succesfully logged in')){document.location.href='index.php'};</script>";
		}
		//	header("refresh:0;url=index.php");
		//echo $result['uname'] . " " . "has succesfully Logged in";
	}
	else
	{
	    //	echo "<script>alert('Enter valid Username and password');</script>";
			echo "<script>if(confirm('Enter valid Username and password')){document.location.href='index.php'};</script>";
	}
       /* $getlogindetails = "select l.user_name,l.password,u.admin_indicator from user u,login l where u.user_id = l.userid_fk and admin_indicator=1";
        $selectresult = mysqli_query($db,$getlogindetails);
    	$result= mysqli_fetch_assoc($selectresult);
    	if(mysqli_num_rows($selectresult)>0) {
    	    //echo $result['user_name'];
    	    //echo $result['password'];
    	    if($user_name == $result['user_name'])
    	    {
    	        $user_name ="";
    	        $password = "";
    	    header("refresh:0;url=adminpage.php");
    	    }
		    else
		    {
		    echo "<script>if(confirm('Guest has succesfully logged in')){document.location.href='index.php'};</script>";
		   // echo "<script>alert('Enter valid Username and password');</script>";  
		    }
	}
	else
	{
		echo "Invalid Username and Password. Please try again.";
	}*/
        }
        
  }
     function data_check($data)
      {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
  if(isset($_POST['close']))
	{
	     echo "<script>if(confirm('Do you want to close?')){document.location.href='index.php'};</script>";
	    
	}
      
  ?>  
<nav class="navbar">
    
   <?php
   if($usersession == 'none')
   {
   echo '<ul>';
   echo '<li><a href="index.php" class="bu">HOME</a></li>';
   echo '<li><a href="aboutme.php" class="bu">ABOUT</a></li>';
   echo '<li><a href="skill.php" class="bu">SKILLS</a></li>';
   echo '<li><a href="index.php" class="bu">RESUMES</a></li>';
   echo '<li><a href="index.php" class="bu">PORTFOLIO</a></li>';
   echo '<li><a href="index.php" class="bu">BLOG</a></li>';
   echo '<li><a href="index.php" class="bu">HIRE ME</a></li>';
   echo '<li><a href="#" class="bu" id="buttonlogin">LOGIN</a></li>';
   echo '<li><a href="#" class="bu" id="buttonsignup">SIGNUP</a></li>';
   echo '<li><a href="index.php" class="bu">REFERENCES</a></li>';
   echo '<div class="footer"><p><small>&copy; DiazApps ALL RIGHTS <br> RESERVED BY <font color="blue">&nbsp;&nbsp;Swati <br></font></small></p></div>';
   echo '</ul>';
   }
   else
   {
   
   echo '<ul>';
   echo '<li><a href="index.php" class="bu">HOME</a></li>';
   echo '<li><a href="aboutme.php" class="bu">ABOUT</a></li>';
   echo '<li><a href="skill.php" class="bu">SKILLS</a></li>';
   echo '<li><a href="resume.php" class="bu">RESUMES</a></li>';
   echo '<li><a href="portfolio.php" class="bu">PORTFOLIO</a></li>';
   echo '<li><a href="blog.php" class="bu">BLOG</a></li>';
   echo '<li><a href="hireme.php" class="bu">HIRE ME</a></li>';
   echo '<li><a href="#" class="bu" id="buttonlogin">LOGIN</a></li>';
   echo '<li><a href="#" class="bu" id="buttonsignup">SIGNUP</a></li>';
   echo '<li><a href="references.php" class="bu">REFERENCES</a></li>';
   echo '<div class="footer"><p><small>&copy; DiazApps ALL RIGHTS <br> RESERVED BY <font color="blue">&nbsp;&nbsp;Swati <br></font></small></p></div>';
   echo '</ul>';   
   }
   ?>
    
  </nav>
	
    </div>
  <div class="col right">
  <div class="container">
  <div class="vertical-center">
    <p class="normalindex">HELLO I'M </p>
	<p class="main_title"><strong>SWATI THIRUNAVAKARASU</strong></p>
	<p class="normalindex"><?= $role?></p>
    <div>
    <form method="GET">
	<button class ="gradientbutton">Download My CV <i class="fa fa-download"></i></button>
	</form>
	</div>
	  </div>
	
</div>
<div class="contain">
    <form id="loginForm" name="loginForm" method="POST" action="index.php">
    <div  class="popup">
	<div class="popup-content">
	<p id="log"> Log in </p> <img src="assets/images/cancel.jpg" alt="close" class="close">
	<hr class="hr-line">
	<div align="left" id="signupusername">
	<label id="labeluser"> User: </label>
	<input class ="signinin" type="text" id="name_text" name="name_text" minlength="3" maxlength="15" onblur="validateUserName()" required>
	</div>
	<div id="user_error"></div>
	<span class="error"><?= $username_error?></span>
	<div align="left" id="signupconfirmpassword">
	<label id="labeluser"> Password: </label>
	<input class ="signinin" type="password" id="password_text" name="password_text" onblur="validatePassword()" required>
	</div>
	<div id="password_error"></div>
	<span class="error"><?= $password_error?></span>
	<div align="right">
	<br>
	<hr class="hr-line">
	<button type="submit" class="buttoncancel" name="close">Close</button> <button class="buttonlogin" name="login">Get in</button>
	</div>

	</div>
	</div>
	</form>
	</div>
<div class="containsignup">
    <form id="signupForm" name="signupForm" action="index.php" method="POST">
	<div  class="popupsignup">
	<div class="popupsignup-content">
	<p class="log"> Check in </p> <img src="assets/images/cancel.jpg" alt="close" class="closesignup">
	<hr class="hr-line">
	<div align="left" id="signupusername">
	<label id="labeluser"> Name: </label>
	<input class ="signinin" type="text" id="signfirstname" name="signfirstname" minlength="3" maxlength="15" onblur="validateUserFirstName()" required>
	</div>
	<div id="firstname_error"></div>
	<div align="left" id="signuplastname">
	<label id="labeluser"> Last name: </label>
	<input class ="signinin" type="text" id="signlastname" name="signlastname" minlength="3" maxlength="20" onblur="validateUserLastName()" required>
	</div>
	<div id="lastname_error"></div>
	<div align="left" id="signupemail">
	<label id="labeluser"> Email: </label>
	<input class ="signinin" type="email" id="signemail" name="signemail" onblur="validateUserEmailName()" required>
	</div>
	<div id="email_error"></div>
	<div align="left" id="signupuser">
	<label id="labeluser"> User: </label>
	<input class ="signinin" type="text" id="signuser" name="signuser" minlength="3" maxlength="15" onblur="validateRegister()" required>
	</div>
	<div id="username_error"></div>
	<div align="left" id="signuppassword">
	<label id="labeluser"> Password: </label>
	<input class ="signinin" type="password" id="signRegPassword" name="signRegPassword" onblur="validateRegisterPassword()" required>
	</div>
	<div id="passwordreg_error"></div>
	<div align="left" id="signupconfirmpassword">
	<label id="labeluser"> Repeat password: </label>
	<input class ="signinin" type="password" id="confirmRegPassword" name="confirmRegPassword" onblur="validateRegisterConfirmPassword()" required>
	</div>
	<div id="confirmpasswordreg_error"></div>
	<div align="right">
	<br>
	<hr class="hr-line">
	<button name="closesignup" class="buttoncancel">Close</button> <button name="signup" class="buttonsignup">Save</button>
	</div>
	<?php
	require('connectToDb.php');
	if(isset($_POST['signup']))
	{
	    $firstName = $_POST['signfirstname'];
	    $lastName = $_POST['signlastname'];
	    $email = $_POST['signemail'];
	    $userName = $_POST['signuser'];
	    $password = $_POST['signRegPassword'];
	    $confirmpassword = $_POST['confirmRegPassword'];
	    $first_error="";
	    $last_error="";
	    $email_error="";
	    $username_error="";
	    $password_error="";
	  
     if(empty($firstName))
        {
          echo "<script>if(confirm('Field FirstName cannot be empty')){document.location.href='index.php'};</script>";
         // echo "<script>alert('Field username cannot be empty');</script>"; 
          $first_error = "User name can not be empty(php)";  
        }
        else
        {
           $firstnamematch = data_check($firstName);
           if (!preg_match("/^[a-z]{3,15}$/",$firstnamematch))
           {
           echo "<script>if(confirm('first name should have atleast 3 characters')){document.location.href='index.php'};</script>";
          // echo "<script>alert('user name should have atleast 3 characters');</script>";    
           $first_error = "first name should have 3 to 15 characters";
           
           }
           else
           {
               $first_error = "";
           }
            
        }
    if(empty($firstName))
        {
          echo "<script>if(confirm('Field FirstName cannot be empty')){document.location.href='index.php'};</script>";
         // echo "<script>alert('Field username cannot be empty');</script>"; 
          $first_error = "User name can not be empty(php)";  
        }
        else
        {
           $firstnamematch = data_check($firstName);
           if (!preg_match("/^[a-z]{3,15}$/",$firstnamematch))
           {
           echo "<script>if(confirm('first name should have atleast 3 characters')){document.location.href='index.php'};</script>";
          // echo "<script>alert('user name should have atleast 3 characters');</script>";    
           $first_error = "first name should have 3 to 15 characters";
           
           }
           else
           {
               $first_error = "";
           }
            
        }
        
    if(empty($email))
        {
          echo "<script>if(confirm('Field Email cannot be empty')){document.location.href='index.php'};</script>";
         // echo "<script>alert('Field username cannot be empty');</script>"; 
          $email_error = "email can not be empty(php)";  
        }
        else
        {
           $emailnamematch = data_check($email);
           if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$emailnamematch))
           {
           echo "<script>if(confirm('valid email address should be in format xxx@yyy.zzz')){document.location.href='index.php'};</script>";
          // echo "<script>alert('user name should have atleast 3 characters');</script>";    
           $email_error = "Enter valid email address";
           
           }
           else
           {
               $email_error = "";
           }
            
        }
        
    if(empty($userName))
        {
          echo "<script>if(confirm('Field username cannot be empty')){document.location.href='index.php'};</script>";
         // echo "<script>alert('Field username cannot be empty');</script>"; 
          $username_error = "User name can not be empty(php)";  
        }
        else
        {
           $usernamematch = data_check($userName);
           if (!preg_match("/^[a-z0-9_-]{3,15}$/",$usernamematch))
           {
           echo "<script>if(confirm('user name should have atleast 3 characters')){document.location.href='index.php'};</script>";
          // echo "<script>alert('user name should have atleast 3 characters');</script>";    
           $username_error = "user name should have atleast 3 characters";
           
           }
           else
           {
               $username_error = "";
           }
            
        }
        
    if(empty($password))
        {
          echo "<script>if(confirm('Field password cannot be empty')){document.location.href='index.php'};</script>";
          //echo "<script>alert('Field password cannot be empty');</script>"; 
          $password_error = "User name can not be empty(php)";  
        }
        else
        {
           $passwordnamematch = data_check($password);
           if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/",$passwordnamematch))
           {
           echo "<script>if(confirm('Password should contain a Uppercase,digit and a special character')){document.location.href='index.php'};</script>";
          // echo "<script>alert('Password should contain a Uppercase,digit and a special character');</script>";    
           $password_error = "user name should have atleast 3 characters";
           
           }
           else
           {
               $password_error = "";
           }
            
        }
     if( $first_error == "" and $last_error =="" and $email_error=="" and $username_error=="" and $password_error=="")
     {
     if($password == $confirmpassword)
     {
     $ins = "INSERT INTO user(first_name,last_name,email,admin_indicator) VALUES ('$firstName','$lastName','$email','0')";     
     $result = mysqli_query($db,$ins);
     $ret = "SELECT user_id FROM user WHERE email = '$email'";
     $retrive = mysqli_query($db,$ret);
     $row = mysqli_fetch_assoc($retrive);
     $new =  $row['user_id'];
     $insLogin = "INSERT INTO login(userid_fk,user_name,password) VALUES ('$new','$userName','$password')";
     $resLogin = mysqli_query($db,$insLogin);
    if($resLogin)
        {

           echo "<script>if(confirm('User is succesfully registered')){document.location.href='index.php'};</script>";
            mysqli_close($db);
            return true; // Success
        }
	 else
             {
               echo "<script>if(confirm('User is not succesfully registered')){document.location.href='index.php'};</script>";
                mysqli_close($db);
                return false; // Error somewhere
             }
	     //echo "<script>document.location.href='adminpage.php';</script>";
     }
     else
     {
       echo "<script>if(confirm('Password and Confirm passwords does not match')){document.location.href='index.php'};</script>";
     }
	}
	}
	if(isset($_POST['closesignup']))
	{
	     echo "<script>if(confirm('Do you want to close?')){document.location.href='index.php'};</script>";
	    
	}
	?>
	</div>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
<script>
	document.getElementById("buttonlogin").addEventListener("click",function(){
	document.querySelector(".popup").style.display = "flex";
	})
	document.querySelector(".close").addEventListener("click",function(){
	document.querySelector(".popup").style.display = "none";
	})
	document.querySelector(".buttoncancel").addEventListener("click",function(){
	document.querySelector(".popup").style.display = "none";
	})
	
	document.getElementById("buttonsignup").addEventListener("click",function(){
	document.querySelector(".popupsignup").style.display = "flex";
	})
	document.querySelector(".closesignup").addEventListener("click",function(){
	document.querySelector(".popupsignup").style.display = "none";
	})
	
	
	</script>
</div>
</body>
</html>
<!--https://stackoverflow.com/questions/21921665/how-to-make-hr-full-width-->