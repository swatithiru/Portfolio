<?php
require('connectToDb.php');
$skillInfo = "SELECT * FROM skills WHERE skill_typeid_fk = '3' ORDER BY skill_id";
$resultInfo = mysqli_query($db,$skillInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $skillName = $row['skill_name'];
    $skillPercentage = $row['skill_percentage'];
    $skillColor = $row['skill_color'];
    $skillIcon = $row['skill_icon'];
	echo '<td>';
	echo '<div class="counter" data-cp-percentage="'.$skillPercentage.'" data-cp-color="'.$skillColor.'">';
	echo '</div>';
	echo '</td>';
   
   
}
?>