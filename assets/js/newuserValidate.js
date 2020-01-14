function validateUserFirstName()
{
    var firstName = document.forms["signupForm"]["signfirstname"].value;
    
   
    if(firstName === "")
    {
        document.getElementById('firstname_error').innerHTML = 'First Name should not be empty';
        firstName.focus();
        return false;
        
    }
    
    if (/^[a-z]{3,15}$/.test(firstName))
    {
      document.getElementById('firstname_error').innerHTML = '';  
      firstName.focus();
      return false;  
    }
    else
    {
      document.getElementById('firstname_error').innerHTML = 'First Name should have atleast 3 to atmost 15 characters';  
      firstName.focus();
      return false;
    }
    
}
function validateUserLastName()
{
    var lastName = document.forms["signupForm"]["signlastname"].value;
    
   
    if(lastName === "")
    {
        document.getElementById('lastname_error').innerHTML = 'Last Name should not be empty';
        lastName.focus();
        return false;
        
    }
    
    if (/^[a-z]{3,20}$/.test(lastName))
    {
      document.getElementById('lastname_error').innerHTML = '';  
      lastName.focus();
      return false;  
    }
    else
    {
      document.getElementById('lastname_error').innerHTML = 'First Name should have atleast 3 to atmost 20 characters';  
      lastName.focus();
      return false;
    }
    
}
function validateUserEmailName()
{
 var userEmail = document.forms["signupForm"]["signemail"].value;
    
   
    if(userEmail === "")
    {
        document.getElementById('email_error').innerHTML = 'Email should not be empty';
        lastName.focus();
        return false;
        
    }
    
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(userEmail))
    {
      document.getElementById('email_error').innerHTML = '';  
      userEmail.focus();
      return false;  
    }
    else
    {
      document.getElementById('email_error').innerHTML = 'A valid email address should be in format xxx@yyy.zzz';  
      userEmail.focus();
      return false;
    }   
}
function validateRegister()
{
    var userName = document.forms["signupForm"]["signuser"].value;
    
   
    if(userName === "")
    {
        document.getElementById('username_error').innerHTML = 'User Name should not be empty';
        userName.focus();
        return false;
        
    }
    
    if (/^[a-z0-9_-]{3,15}$/.test(userName))
    {
      document.getElementById('username_error').innerHTML = '';  
      userName.focus();
      return false;  
    }
    else
    {
      document.getElementById('username_error').innerHTML = 'user name should have atleast 3 to atmost 15 lowercase characters';  
      userName.focus();
      return false;
    }
    
}
function validateRegisterPassword()
{
    var registerPassword = document.forms["signupForm"]["signRegPassword"].value;
     if(registerPassword === "")
     {
        document.getElementById('passwordreg_error').innerHTML = 'Password should not be empty';
        registerPassword.focus();
        return false;
         
     }
      if (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/.test(registerPassword))
     {
        document.getElementById('passwordreg_error').innerHTML = '';
        registerPassword.focus();
        return false;
     }
     else
     {
        document.getElementById('passwordreg_error').innerHTML = 'Password should contain a Uppercase,digit and a special character';
        registerPassword.focus();
        return false;  
     }
}
function validateRegisterConfirmPassword()
{
   var regPassword = document.forms["signupForm"]["signRegPassword"].value;
   var confirmPassword = document.forms["signupForm"]["confirmRegPassword"].value;
     if(confirmPassword === "")
     {
        document.getElementById('confirmpasswordreg_error').innerHTML = 'Confirm Password should not be empty';
        confirmPassword.focus();
        return false;
         
     }
      if (regPassword==confirmPassword)
     {
        document.getElementById('confirmpasswordreg_error').innerHTML = '';
        confirmPassword.focus();
        return false;
     }
     else
     {
        document.getElementById('confirmpasswordreg_error').innerHTML = 'Password and Confirm Password does not match';
        confirmPassword.focus();
        return false;  
     } 
}
