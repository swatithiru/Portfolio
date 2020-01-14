<?php
require('connectToDb.php');
//$resumeFetch = "select * from job where job_id=(select max(job_id)-1 from job)";
$resumeFetch = "select * from job ORDER BY job_id DESC LIMIT 2";
$resultFetch = mysqli_query($db,$resumeFetch);
while($row = mysqli_fetch_assoc($resultFetch))
{
    $jobSecondTitle = $row['job_title'];
    $jobSecondCompany = $row['job_company'];
    $jobSecondDuration = $row['job_duration'];
    echo '<br><br><br><br>';  
    echo '<div align="left">';
	echo '<div class="companyres"> '.$jobSecondTitle.'</div>';
	echo '<div class="roleres"> '.$jobSecondCompany.' ('.$jobSecondDuration.')</div>';
    echo '</div>';
}
?>