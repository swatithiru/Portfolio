<?php
require('connectToDb.php');
$skillInfo = "SELECT * FROM skills WHERE skill_typeid_fk = '1' ORDER BY skill_id";
$resultInfo = mysqli_query($db,$skillInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
   $skillName = $row['skill_name'];
   $skillPercentage = $row['skill_percentage'];
   $skillColor = $row['skill_color'];
   $skillIcon = $row['skill_icon'];
   echo '<div align="left">';
   echo '<div class="completion-bar">';
   echo '<div class="progress-bar" style="width:'.$skillPercentage.';background-color:'.$skillColor.'"> <i class="'.$skillIcon.'"></i> '.$skillName.'</div>';
   echo '<div class="progress_value">'.$skillPercentage.'</div>';  
   echo '</div>';
   echo '</div>';
   
   
}
?>