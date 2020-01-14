<?php
require('connectToDb.php');
$hireInfo = "SELECT * FROM products ORDER BY product_id";
$resultInfo = mysqli_query($db,$hireInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $productTitle = $row['product_title'];
    $productDescription = $row['product_desc'];
    $productPrice = $row['product_price'];
    $productImage = base64_encode( $row['product_image'] );
    $contactme = 'contactme.php';
    echo '<div class="columnhire">';
    echo '<img src="data:image/JPEG;base64,'.$productImage.'" class="imghire""/>';
	echo '<div id="servicehire"><strong>'.$productPrice.'</strong></div>';
	echo '<div id="servicehire">'.$productTitle.'</div>';
	echo '<div id="servicehire">'.$productDescription.'</div>';
//	echo '<div ... onclick="location.href=\''.get_permalink($recent["ID"]).'\';">..</div>';
	echo '<button onclick="location.href=\''.$contactme.'\';" class="buttonsignuphire">Contact US</a>';
	echo '</div>';
   
}
?>