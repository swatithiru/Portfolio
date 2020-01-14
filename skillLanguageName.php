<?php
require('connectToDb.php');
$skillInfo = "SELECT * FROM skills WHERE skill_typeid_fk = '3' ORDER BY skill_id";
$resultInfo = mysqli_query($db,$skillInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $skillName = $row['skill_name'];
    echo '<td>'.$skillName.'</td>';
   
   
}
?>