<?php
require('connectToDb.php');
if(isset($_POST['skillsubmit']))
{
    $selectid = "";
    $selectOption = $_POST['skillType'];
    $skillName = $_POST['skillName'];
    $skillPercentage = $_POST['skillPercentage'];
    $skillColor = $_POST['skillColor'];
    $skillIcon = $_POST['skillIcon'];
    
    if($selectOption == 'managerialSkills')
    {
        $selectid=1;
        
       
    }
     if($selectOption == "transferableSkills")
    {
        $selectid=2;
        
        
    }
     if($selectOption == "languageSkills")
    {
        $selectid=3;
        
       
    }
    
       $insertSkill ="INSERT INTO skills(skill_typeid_fk,skill_name,skill_percentage,skill_userid_fk,skill_color,skill_icon) 
                         VALUES ('$selectid','$skillName','$skillPercentage','1','$skillColor','$skillIcon')";
        $resultSkill = mysqli_query($db,$insertSkill);
        if($resultSkill)
        {
            echo "skill is inserted"; 
        }
        else
        {
            echo "skill is not inserted";   
        }
   
}

if(isset($_POST['delSkill']))
{
       
       $delskillName = $_POST['skillName'];
       $delSkill ="DELETE FROM skills WHERE skill_name='$delskillName'";
       $resultDelSkill = mysqli_query($db,$delSkill);
        if($resultDelSkill)
        {
            echo "skill is deleted"; 
        }
        else
        {
            echo "skill is not deleted";   
        }
   
}
if(isset($_POST['updSkill']))
{
       
       $updskillName = $_POST['skillName'];
       $updskillPercentage = $_POST['skillPercentage'];
       $updskillColor = $_POST['skillColor'];
       $updSkill ="UPDATE skills SET skill_percentage = '$updskillPercentage', skill_color='$updskillColor' where skill_name='$updskillName'";
       $resultUpdSkill = mysqli_query($db,$updSkill);
        if($resultUpdSkill)
        {
            echo "skill is updated"; 
        }
        else
        {
            echo "skill is not updated";   
        }
   
}
?>