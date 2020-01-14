var loginName = document.getElementById('name_text');
var loginForm = document.getElementById('loginForm');
//var user_error = document.getElementById('user_error');
function validateUserName()
{
    var loginName = document.forms["loginForm"]["name_text"].value;
    
   
    if(loginName === "")
    {
        document.getElementById('user_error').innerHTML = 'name should not be empty';
        loginName.focus();
        return false;
        
    }
    
    if (/^[a-z0-9_-]{3,15}$/.test(loginName))
    {
      document.getElementById('user_error').innerHTML = '';  
      loginName.focus();
      return false;  
    }
    else
    {
      document.getElementById('user_error').innerHTML = 'user name should have atleast 3 characters';  
      loginName.focus();
      return false;
    }
    
}
function validatePassword()
{
     var loginPassword = document.forms["loginForm"]["password_text"].value;
     if(loginPassword === "")
     {
        document.getElementById('password_error').innerHTML = 'Field Password should not be empty';
        loginPassword.focus();
        return false;
         
     }
      if (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/.test(loginPassword))
     {
        document.getElementById('password_error').innerHTML = '';
        loginPassword.focus();
        return false;
     }
     else
     {
        document.getElementById('password_error').innerHTML = 'Password should contain a Uppercase,digit and a special character';
        loginPassword.focus();
        return false;  
     }
}
