<?php
require('connectToDb.php');
$refInfo = "SELECT * FROM portReference ORDER BY ref_id";
$resultInfo = mysqli_query($db,$refInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $refName = $row['ref_name'];
    $refRole = $row['ref_role'];
    $refFeedback = $row['ref_feedback'];
    $refImage = base64_encode( $row['ref_image'] );
   	echo '<div class="columnreferenceref">';
	echo '<figure>';	
	//echo '<img src="assets/images/joe.jpg" class="displayrefimagesref" alt="pic" >';
	echo '<img src="data:image/JPEG;base64,'.$refImage.'" class="displayrefimagesref""/>';
	echo '<figcaption><strong>'.$refName.'</strong></figcaption>';
	echo '</figure>';
	echo '<p class="refp"><font class="setfontref">'.$refRole.'</font></p>';
	echo '<p class="refp">'.$refFeedback.'</p>';
    echo '</div>';
   
}
?>