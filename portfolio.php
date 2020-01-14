<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/portfolio.css">
</head>
<body class="fontbody">
<?php
session_start(); 
?>
<div id="wrapper">
<div class="aboutmeport">
	<hr>
	<button class ="headertextcolor"><strong>PORTFOLIO</strong></button>
	<hr>
</div>
<div class="allphotosport">
    <form method="POST" action="portfolio.php">
<button name="ALL" value="ALL" class= "portolioa" style="border: none;">All</button>&nbsp;&nbsp;<wbr><button name="WEBSITES" value="WEBSITES" class= "portolioa" style="border: none;">Websites</button>&nbsp;&nbsp;<wbr><button name="APPS" value="APPS" class= "portolioa" style="border: none;">Apps</button>&nbsp;&nbsp;<wbr><button name="DESIGN" value="DESIGN" class= "portolioa" style="border: none;">Design</button>     
&nbsp;&nbsp;<wbr><button name="PHOTO" value="PHOTO" class= "portolioa" style="border: none;">Photography</button>     

<!--<a class= "portolioa" href="#">All</a> &nbsp;&nbsp;<wbr> <a class= "portolioa" href="#">Websites</a> &nbsp;&nbsp;<wbr> <a class= "portolioa" href="#">Apps</a> &nbsp;&nbsp;<wbr> <a class= "portolioa" href="#">Design</a> &nbsp;&nbsp;<wbr> <a class= "portolioa" href="#">Photography</a>-->
</form>
</div>
<?php
require('connectToDb.php');
if(isset($_POST['ALL']))
{
$portfolioInfo = "SELECT * FROM portfolio ORDER BY portfolio_id";
$resultInfo = mysqli_query($db,$portfolioInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $portfolioImage = base64_encode( $row['portfolio_images'] );
    
    echo '<div class="columnport">';
    echo '<img src="data:image/JPEG;base64,'.$portfolioImage.'"/>';
    echo '</div>';
    
}
}
else if(isset($_POST['WEBSITES']))
{
$portfolioInfo = "SELECT * FROM portfolio WHERE categoryid_fk='1' ORDER BY portfolio_id";
$resultInfo = mysqli_query($db,$portfolioInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $portfolioImage = base64_encode( $row['portfolio_images'] );
   
    echo '<div class="columnport">';
    echo '<img src="data:image/JPEG;base64,'.$portfolioImage.'"/>';
    echo '</div>';
    
}   
}
else if(isset($_POST['APPS']))
{
$portfolioInfo = "SELECT * FROM portfolio WHERE categoryid_fk='2' ORDER BY portfolio_id";
$resultInfo = mysqli_query($db,$portfolioInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $portfolioImage = base64_encode( $row['portfolio_images'] );
    
    echo '<div class="columnport">';
    echo '<img src="data:image/JPEG;base64,'.$portfolioImage.'"/>';
    echo '</div>';
    
}     
}
else if(isset($_POST['DESIGN']))
{
$portfolioInfo = "SELECT * FROM portfolio WHERE categoryid_fk='3' ORDER BY portfolio_id";
$resultInfo = mysqli_query($db,$portfolioInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $portfolioImage = base64_encode( $row['portfolio_images'] );
    echo '<div class="columnport">';
    echo '<img src="data:image/JPEG;base64,'.$portfolioImage.'"/>';
    echo '</div>';

}     
}
else if(isset($_POST['PHOTO']))
{
$portfolioInfo = "SELECT * FROM portfolio WHERE categoryid_fk='4' ORDER BY portfolio_id";
$resultInfo = mysqli_query($db,$portfolioInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $portfolioImage = base64_encode( $row['portfolio_images'] );
    echo '<div class="columnport">';
    echo '<img src="data:image/JPEG;base64,'.$portfolioImage.'"/>';
    echo '</div>';

}     
}
else
{
$portfolioInfo = "SELECT * FROM portfolio ORDER BY portfolio_id";
$resultInfo = mysqli_query($db,$portfolioInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $portfolioImage = base64_encode( $row['portfolio_images'] );
    
    echo '<div class="columnport">';
    echo '<img src="data:image/JPEG;base64,'.$portfolioImage.'"/>';
    echo '</div>';
    
} 
}
?>

<div align="right">
	<a href="index.php"><img id="arrowbutton" src="assets/images/arrowbutton.png" alt="back"></a>
	</div>
</div>
</body>
</html>
