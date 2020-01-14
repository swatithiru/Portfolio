<?php
require('connectToDb.php');
if(isset($_POST['jobSubmit']))
{
    $jobTitle = $_POST['jobTitle'];
    $jobCompany = $_POST['jobCompany'];
    $jobDuration = $_POST['jobDuration'];
    $jobYear = $_POST['jobYear'];
    $insertJob ="INSERT INTO job(job_title,job_company,job_duration,job_userid_fk,job_year) 
                         VALUES ('$jobTitle','$jobCompany','$jobDuration','1','$jobYear')";
        $resultProfile = mysqli_query($db,$insertJob);
        if($resultProfile)
        {
            echo "job experience is inserted"; 
        }
        else
        {
            echo "job experience is not inserted";   
        }
}
if(isset($_POST['delJob']))
{
    
    $deljobCompany = $_POST['jobCompany'];
    $deleteJob ="DELETE FROM job WHERE job_company='$deljobCompany'";
    $resultJob = mysqli_query($db,$deleteJob);
        if($resultJob)
        {
            echo "job experience is deleted"; 
        }
        else
        {
            echo "job experience is not deleted";   
        }
}

if(isset($_POST['updJob']))
{
    
    $updjobCompany = $_POST['jobCompany'];
    $updjobTitle = $_POST['jobTitle'];
    $updjobDuration = $_POST['jobDuration'];
    $updateJob ="UPDATE job SET job_title='$updjobTitle', job_duration = '$updjobDuration' where job_company='$updjobCompany'";
    $resultJobUpdate = mysqli_query($db,$updateJob);
        if($resultJobUpdate)
        {
            echo "job experience is updated"; 
        }
        else
        {
            echo "job experience is not updated";   
        }
}
?>