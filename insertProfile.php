<?php
    require('connectToDb.php');
    if(isset($_POST['insProfile']))
    {
        $addAddress = $_POST['insertadd'];
        $addRole = $_POST['insertrole'];
        $addPhone = $_POST['insertphone'];
        $addWebsite = $_POST['insertwebsite'];
        $addSkype = $_POST['insertskype'];
        $addcv = $_POST['insertcv'];
        $addImage = addslashes(file_get_contents($_FILES['uploadImage']['tmp_name']));
        $addLogo = addslashes(file_get_contents($_FILES['logoImage']['tmp_name']));
        $addDescription = $_POST['addDescription'];
        $insertProfile ="INSERT INTO contact(phone,address,nationality,description,image,role,whatsap,skype,website,DOB,contact_userid_fk,cv,logo) 
                         VALUES ('$addPhone','$addAddress','indian','$addDescription','$addImage','$addRole','$addPhone','$addSkype','$addWebsite','08-22-1993','1','cv','$addLogo')";
        $resultProfile = mysqli_query($db,$insertProfile);
        if($resultProfile)
        {
            echo "profile is inserted"; 
        }
        else
        {
            echo "profile is not inserted";   
        }
        
       
    }
    if(isset($_POST['delProfile']))
    {
        $delPhone = $_POST['insertphone'];
        $deleteProfile ="DELETE FROM contact where phone='$delPhone'";
        $resultdelProfile = mysqli_query($db,$deleteProfile);
        if($resultdelProfile)
        {
            echo "profile is deleted"; 
        }
        else
        {
            echo "profile is not deleted";   
        }
    }
    if(isset($_POST['updProfile']))
    {
        $updAddress = $_POST['insertadd'];
        $updRole = $_POST['insertrole'];
        $updPhone = $_POST['insertphone'];
        $updateProfile ="UPDATE contact SET address='$updAddress', role = '$updRole' where phone='$updPhone'";
        $resultupdProfile = mysqli_query($db,$updateProfile);
        if($resultupdProfile)
        {
            echo "profile is updated"; 
        }
        else
        {
            echo "profile is not updated";   
        }
    }
    ?>