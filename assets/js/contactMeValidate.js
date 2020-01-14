function validateMsgUserName()
{
    var msgName = document.forms["validateForm"]["yourname"].value;
    
   
    if(msgName === "")
    {
        document.getElementById('msguser_error').innerHTML = 'Name should not be empty';
        msgName.focus();
        return false;
        
    }
    
    if (/^[a-zA-Z ].{5,20}$/.test(msgName))
    {
      document.getElementById('msguser_error').innerHTML = '';  
      msgName.focus();
      return false;  
    }
    else
    {
      document.getElementById('msguser_error').innerHTML = 'The name can contain only letters of length 5 to 20';  
      msgName.focus();
      return false;
    }
    
}

function validateMsgEmail()
{
   var msgEmail = document.forms["validateForm"]["email"].value; 
    if(msgEmail === "")
    {
        document.getElementById('msgemail_error').innerHTML = 'Email should not be empty';
        msgEmail.focus();
        return false;
        
    }
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(msgEmail))
    {
      document.getElementById('msgemail_error').innerHTML = '';  
      msgEmail.focus();
      return false;  
    }
    else
    {
      document.getElementById('msgemail_error').innerHTML = 'Email address should be in format xxx@yyy.zzz';  
      msgEmail.focus();
      return false;
    }   
}

function validateMsgComment()
{
  var msgComment = document.forms["validateForm"]["comment"].value; 
    if(msgComment === "")
    {
        document.getElementById('msgcomment_error').innerHTML = 'Message should not be empty';
        msgComment.focus();
        return false;
        
    }
    if (/^.{5,}$/.test(msgComment))
    {
      document.getElementById('msgcomment_error').innerHTML = '';  
      msgComment.focus();
      return false;  
    }
    else
    {
      document.getElementById('msgcomment_error').innerHTML = 'The message should contain a minimum of 5 characters';  
      msgComment.focus();
      return false;
    }
}
function validateMsgPhone()
{
  var msgPhone = document.forms["validateForm"]["phone"].value; 
    if(msgPhone === "")
    {
        document.getElementById('msgphone_error').innerHTML = 'Phone number cannot not be empty';
        msgPhone.focus();
        return false;
        
    }
    if (/^[0-9]{3}[0-9]{3}[0-9]{4}$/.test(msgPhone))
    {
      document.getElementById('msgphone_error').innerHTML = '';  
      msgPhone.focus();
      return false;  
    }
    else
    {
      document.getElementById('msgphone_error').innerHTML = 'The phone number should contain only 10 numbers';  
      msgPhone.focus();
      return false;
    }
}
