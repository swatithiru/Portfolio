<?php
  require('connectToDb.php');
  if(isset($_POST['send']))
  {
      $name_error = "";
      $email_error = "";
      $phone_error = "";
      $message_error = "";
      $database_error = "";
      $name = $_POST['yourname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $subject = "You have received an email from " .$name;
      $message = $_POST['comment'];
      
      if (empty($name))
      {
        $name_error = "name can not be empty";
      }
      else
      {
           $namematch = data_check($name);
           if (!preg_match("/^[a-zA-Z ].{5,20}$/",$namematch))
           {
           $name_error = "Only letters of length 5 to 20 allowed";
           
           }
           else
           {
               $name_error = "";
           }
          
      }
      
       if (empty( $phone))
      {
        $phone_error = "phone number can not be empty";
      }
      else
      {
           $phonematch = data_check($phone);
           if (!preg_match("/^[0-9]{3}[0-9]{3}[0-9]{4}$/",$phonematch))
           {
           
            $phone_error = "Invalid phone Format";
           }
           else
           {
               $phone_error = "";
           }
          
      }
      if (empty( $email))
      {
        $email_error = "email can not be empty";
      }
      else
      {
           $emailmatch = data_check($email);
           if (!filter_var($emailmatch,FILTER_VALIDATE_EMAIL))
           {
            $email_error = "A valid Email Format is xxx@yyy.zzz";
           }
          else
           {
               $email_error = "";
           }
      }
       if (empty( $message))
      {
        $message_error = "message can not be empty";
      }
      else
      {
           $messagematch = data_check($message);
         if (!preg_match("/^.{5,}$/",$messagematch))
           {
             $message_error = "Message should contain atleast 5 characters";
           }
           else
           {
               $message_error = "";
           }
          
      }
      if ($name_error == "" and $email_error == "" and $phone_error == "" and $message_error == "")
      {
          $insertContact ="INSERT INTO message(name,email,phone,message,user_userid) VALUES ('$name','$email','$phone','$message','1')";
          $resultContact=mysqli_query($db,$insertContact);
          if($resultContact)
          {
            $result = mail($email, $subject,$message);
          if($result)
          {
            //echo "Email is successfully sent to" ." " .$email;
            $database_error = "Email is successfully sent to" ." " .$email;
             mysqli_close($db);
          }
          else
          {
             //echo "Email has not been sent. Please try again"; 
             $database_error = "Email has not been sent. Please try again"; 
              mysqli_close($db);
          }
              
          }
          else
          {
             die("Connection failed!".mysqli_connect_error());
          }
          
      }
     
   
  }
  
   function data_check($data)
      {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
      
  ?>