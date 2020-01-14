<?php
require('connectToDb.php');
$resumeInfo = "SELECT * FROM job ORDER BY job_id";
$resultInfo = mysqli_query($db,$resumeInfo);
$count = 0;
$center = 0;
while($row = mysqli_fetch_assoc($resultInfo))
{
    $jobTitle = $row['job_title'];
    $jobCompany = $row['job_company'];
    $jobDuration = $row['job_duration'];
    $jobYear = $row['job_year'];
    if($count%2==0)
    {
    echo '<div class="first-columnres">';
    echo '<div align="left">';
	echo '<div class="company1res">'.$jobTitle.'</div>';
	echo '<div class="role1res">'.$jobCompany.' ('.$jobDuration.')</div>';
	echo '</div>';
	echo '</div>';
	echo '<div class="second-columnres">';
    echo '<hr id="line">';
    echo '<p id="yearcolor">'.$jobYear.'<p>';
    /*echo '<hr id="line">';
    echo '<p id="yearcolor">'.$jobYear.'<p>';
    echo '<hr id="line">';*/
    echo '</div>';
     }
    else
    {
    echo '<div class="second-columnres">';
    echo '<br><br><br><br><br>';  
    echo '<hr id="line">';
    echo '<p id="yearcolor">'.$jobYear.'<p>';
    echo '<hr id="line">';
    echo '<p id="yearcolor">'.$jobYear.'<p>';
    echo '</div>';
    echo '<div class="third-columnres">';
    echo '<br><br><br><br>';  
    echo '<div align="left">';
	echo '<div class="companyres"> '.$jobTitle.'</div>';
	echo '<div class="roleres"> '.$jobCompany.' ('.$jobDuration.')</div>';
    echo '</div>';
    echo '</div>';
    }
    $count++;
   
   
}
   
?>