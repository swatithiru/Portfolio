function validateUserFirstName()
{
    var firstName = document.forms["signupForm"]["signfirstname"].value;
    
   
    if(firstName === "")
    {
        document.getElementById('firstname_error').innerHTML = 'Field First Name should not be empty';
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
      document.getElementById('firstname_error').innerHTML = 'User Name should have atleast 3 characters';  
      firstName.focus();
      return false;
    }
    
}
function validateUserLastName()
{
    var lastName = document.forms["signupForm"]["signlastname"].value;
    
   
    if(lastName === "")
    {
        document.getElementById('lastname_error').innerHTML = 'Field Last Name should not be empty';
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
      document.getElementById('lastname_error').innerHTML = 'Enter valid user Name';  
      lastName.focus();
      return false;
    }
    
}
function validateUserEmailName()
{
 var userEmail = document.forms["signupForm"]["signemail"].value;
    
   
    if(userEmail === "")
    {
        document.getElementById('email_error').innerHTML = 'Field Email should not be empty';
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
      document.getElementById('email_error').innerHTML = 'Enter valid email address';  
      userEmail.focus();
      return false;
    }   
}
function validateRegister()
{
    var userName = document.forms["signupForm"]["signuser"].value;
    
   
    if(userName === "")
    {
        document.getElementById('username_error').innerHTML = 'Field Name should not be empty';
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
      document.getElementById('username_error').innerHTML = 'Enter valid user Name';  
      userName.focus();
      return false;
    }
    
}
function validateRegisterPassword()
{
    var registerPassword = document.forms["signupForm"]["signRegPassword"].value;
     if(registerPassword === "")
     {
        document.getElementById('passwordreg_error').innerHTML = 'Field Password should not be empty';
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
        document.getElementById('passwordreg_error').innerHTML = 'Enter Valid Password';
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
        document.getElementById('confirmpasswordreg_error').innerHTML = 'Field Confirm Password should not be empty';
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
