<?php
  require('connectToDb.php');
 // $successLogin = "false";
  if(isset($_POST['login']))
  {
          
        $user_name = $_POST['name_text'];
        $password = $_POST['password_text'];
        $username_error = "";
        $password_error = "";
        $success = 'true';
        
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
		session_start();                
		$_SESSION['user_name'] = $user_name;
		if($user_name == 'swati')
		{
			echo "<script>if(confirm('Admin has succesfully logged in')){document.location.href='adminpage.php'};</script>";
			$successLogin = "true";
		}
		else
		{
		echo "<script>if(confirm('Guest has succesfully logged in')){document.location.href='index.php'};</script>";
			$successLogin = "true";
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