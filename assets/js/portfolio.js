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