<?php
require('connectToDb.php');
if(isset($_POST['addService']))
{
   $productTitle = $_POST['newservicetitle'];
    //echo $productTitle;
    $productDescription = $_POST['newservicedescription'];
   // echo $productDescription;
    $productCharge = $_POST['newservicecharge'];
    //echo $productCharge;
    $productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
    //echo $productImage;
     $insertService ="INSERT INTO products(product_image,product_price,product_title,product_desc) 
                         VALUES ('$productImage','$productCharge','$productTitle','$productDescription')";
        $resultService = mysqli_query($db,$insertService);
        if($resultService)
        {
            echo "service is inserted"; 
        }
        else
        {
            echo "service is not inserted";   
        }
}

if(isset($_POST['delService']))
{
   $delproductTitle = $_POST['newservicetitle'];
    $delService ="DELETE FROM products WHERE product_title='$delproductTitle'";
    $resultDelService = mysqli_query($db,$delService);
        if($resultDelService)
        {
            echo "service is deleted"; 
        }
        else
        {
            echo "service is not deleted";   
        }
}
if(isset($_POST['updService']))
{
   $updproductTitle = $_POST['newservicetitle'];
   $updproductDescription = $_POST['newservicedescription'];
   $updproductCharge = $_POST['newservicecharge'];
   $updproductImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
   $updService ="UPDATE products SET product_image = '$updproductImage' where product_title='$updproductTitle'";
   $resultUpdService = mysqli_query($db,$updService);
        if($resultUpdService)
        {
            echo "service is updated"; 
        }
        else
        {
            echo "service is not updated";   
        }
}



?>