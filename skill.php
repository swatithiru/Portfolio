<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/portfolio.css">
<script>
document.addEventListener("DOMContentLoaded", function() {

  var circleProgress = (function(selector) {
    var wrapper = document.querySelectorAll(selector);
    Array.prototype.forEach.call(wrapper, function(wrapper, i) {
      var wrapperWidth,
        wrapperHeight,
        percent,
        innerHTML,
        context,
        lineWidth,
        centerX,
        centerY,
        radius,
        newPercent,
        speed,
        from,
        to,
        duration,
        start,
        strokeStyle,
        text;

      var getValues = function() {
        wrapperWidth = parseInt(window.getComputedStyle(wrapper).width);
        wrapperHeight = wrapperWidth;
        percent = wrapper.getAttribute('data-cp-percentage');
        innerHTML = '<span class="percentage"><strong>' + percent + '</strong> %</span><canvas class="circleProgressCanvas" width="' + (wrapperWidth * 2) + '" height="' + wrapperHeight * 2 + '"></canvas>';
        wrapper.innerHTML = innerHTML;
        text = wrapper.querySelector(".percentage");
        canvas = wrapper.querySelector(".circleProgressCanvas");
        wrapper.style.height = canvas.style.width = canvas.style.height = wrapperWidth + "px";
        context = canvas.getContext('2d');
        centerX = canvas.width / 2;
        centerY = canvas.height / 2;
        newPercent = 0;
        speed = 1;
        from = 0;
        to = percent;
        duration = 1000;
        lineWidth = 25;
        radius = canvas.width / 2 - lineWidth;
        strokeStyle = wrapper.getAttribute('data-cp-color');
        start = new Date().getTime();
      };

      function animate() {
        requestAnimationFrame(animate);
        var time = new Date().getTime() - start;
        if (time <= duration) {
          var x = easeInOutQuart(time, from, to - from, duration);
          newPercent = x;
          text.innerHTML = Math.round(newPercent) + " %";
          drawArc();
        }
      }

      function drawArc() {
        var circleStart = 1.5 * Math.PI;
        var circleEnd = circleStart + (newPercent / 50) * Math.PI;
        context.clearRect(0, 0, canvas.width, canvas.height);
        context.beginPath();
        context.arc(centerX, centerY, radius, circleStart, 4 * Math.PI, false);
        context.lineWidth = lineWidth;
        context.strokeStyle = "#ddd";
        context.stroke();
        context.beginPath();
        context.arc(centerX, centerY, radius, circleStart, circleEnd, false);
        context.lineWidth = lineWidth;
        context.strokeStyle = strokeStyle;
        context.stroke();

      }
      var update = function() {
        getValues();
        animate();
      }
      update();

      var btnUpdate = document.querySelectorAll(".btn-update")[0];
      btnUpdate.addEventListener("click", function() {
        wrapper.setAttribute("data-cp-percentage", Math.round(getRandom(5, 95)));
        update();
      });
      wrapper.addEventListener("click", function() {
        update();
      });

      var resizeTimer;
      window.addEventListener("resize", function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
          clearTimeout(resizeTimer);
          start = new Date().getTime();
          update();
        }, 250);
      });
    });

    //
    // http://easings.net/#easeInOutQuart
    //  t: current time
    //  b: beginning value
    //  c: change in value
    //  d: duration
    //
    function easeInOutQuart(t, b, c, d) {
      if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
      return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
    }

  });

  circleProgress('.counter');

  // Gibt eine Zufallszahl zwischen min (inklusive) und max (exklusive) zurück
  function getRandom(min, max) {
    return Math.random() * (max - min) + min;
  }
});

</script>
</head>
<body class="fontbody">
<div id="wrapper">
<div class="aboutmeskill">
<hr>
<button class ="headertextcolor"><strong>SKILLS</strong></button>
<hr>
</div>
    <div class="rowskill">
  <div class="columnskill lefskill">
  <p id="market">MARKETABLE SKILLS</p>
  <br>
  <?php include "skillInfo.php";?>
  <!--<div align="left">
  <div class="completion-bar">
   <div class="progress-bar" style="width:75%"> <i class="fa fa-desktop"></i> Web Development</div>
  <div class="progress_value">75%</div>  
  </div>
  </div>-->
  <!--<div align="left">
  <div class="completion-bar">
  <div class="progress-bar1" style="width:75%"> <i class="fa fa-mobile"></i> Mobile Application</div>     
  <div class="progress_value">75%</div>    
  </div>
  </div>-->
  <!--<div align="left">
  <div class="completion-bar">
  <div class="progress-bar2" style="width:80%"><i class="fa fa-camera"></i> Photography</div>
  <div class="progress_value">80%</div>    
  </div>
  </div>-->
 <!--<div align="left">
  <div class="completion-bar">
  <div class="progress-bar3" style="width:90%"><i class="fa fa-server"></i> Server Administration</div>   
  <div class="progress_value">90%</div>    
  </div>
  </div>-->
    
  </div>
  <div class="columnskill rigskill"> 
 <p>TRANSFERABLE SKILLS</p>
  <?php include "skillTransfer.php";?> 
  <!--<div align="left">
  <div class="completion-bar">
  <div class="progress-bar" style="width:75%"> <i class="fa fa-comments"></i> Communication</div> 
  <div class="progress_value">75%</div>    
  </div>
  </div>-->
  <!--<div align="left">
  <div class="completion-bar">
  <div class="progress-bar1" style="width:80%"> <i class="fa fa-users"></i> Team Work</div>
  <div class="progress_value">80%</div>    
  </div>
  </div>-->
  <!--<div align="left">
  <div class="completion-bar">
  <div class="progress-bar2" style="width:90%"> <i class="fa fa-trophy"></i> Leadership</div>    
  <div class="progress_value">90%</div>    
  </div>
  </div>-->
  <!--<div align="left">
  <div class="completion-bar">
  <div class="progress-bar3" style="width:70%"> <i class="fa fa-clock-o"></i> Time Management</div>  
  <div class="progress_value">70%</div>    
  </div>
  </div>-->
 </div>
</div>

<div style='display: grid; margin-top: 20px; text-align: center'>
		<h3>LANGUAGE KNOWLEDGE AND SKILLS</h3>
		 <table cellspacing="0">
		 <tr>
		 <?php include "skillsLanguage.php";?> 
		 </tr>
		 <tr>
		  <?php include "skillLanguageName.php";?>    
		 </tr>
		 </tr>
		  </table>
	<!--<table cellspacing="0">
		<tr>
		<td>
		<div class="counter" data-cp-percentage="95" data-cp-color="#32CD32">
		</div>
		</td>
		<td>
		<div class="counter" data-cp-percentage="85" data-cp-color="#32CD32">
		</div>
		</td>
		<td>
		<div class="counter" data-cp-percentage="75" data-cp-color="#32CD32">
		</div>
		</td>
		<td>
		<div class="counter" data-cp-percentage="65" data-cp-color="#32CD32">
		</div>
		</td>
	     </tr>
		 <tr>
		 <td>Spanish</td>
		 <td>English</td>
		 <td>Latina</td>
		 <td>Japanese</td>
		 </tr>
		 </table>-->
        <button class="btn-update" hidden>update</button>
</div>
<div align="right">
	<a href="index.php"><img id="arrowbutton" src="assets/images/arrowbutton.png" alt="back"></a>
	</div>
</div>
</body>
</html>