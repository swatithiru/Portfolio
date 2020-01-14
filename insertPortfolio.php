<?php
require('connectToDb.php');
if(isset($_POST['portfoliosubmit']))
{
    $selectid = "";
    $selectOption = $_POST['portfolioType'];
    $addPortfolioImage = addslashes(file_get_contents($_FILES['portfolioImage']['tmp_name']));
    $addPortfolioName = $_POST['portfolio_name'];
    
    if($selectOption == 'website')
    {
        $selectid=1;
       
    }
     if($selectOption == "app")
    {
        $selectid=2;
        
    }
     if($selectOption == "design")
    {
        $selectid=3;
       
    }
     if($selectOption == "photography")
    {
        $selectid=4;
        
    }
       $insertPortfolio ="INSERT INTO portfolio(categoryid_fk,portfolio_images,portfolio_name,portfolio_userid_fk) 
                         VALUES ('$selectid','$addPortfolioImage','$addPortfolioName','1')";
        $resultPortfolio = mysqli_query($db,$insertPortfolio);
        if($resultPortfolio)
        {
            echo "portfolio is inserted"; 
        }
        else
        {
            echo "portfolio is not inserted";   
        }
   
}
if(isset($_POST['delPortfolio']))
{
    
       $delPortfolioName = $_POST['portfolio_name'];
       $delPortfolio ="DELETE FROM portfolio WHERE portfolio_name='$delPortfolioName'";
       $resultDelPortfolio = mysqli_query($db,$delPortfolio);
        if($resultDelPortfolio)
        {
            echo "portfolio is deleted"; 
        }
        else
        {
            echo "portfolio is not deleted";   
        }
   
}
if(isset($_POST['updPortfolio']))
{
    
       $updPortfolioName = $_POST['portfolio_name'];
       $updPortfolioImage = addslashes(file_get_contents($_FILES['portfolioImage']['tmp_name']));
       $updPortfolio ="UPDATE portfolio SET portfolio_images='$updPortfolioImage'where portfolio_name='$updPortfolioName'";
       $resultUpdPortfolio = mysqli_query($db,$updPortfolio);
        if($resultUpdPortfolio)
        {
            echo "portfolio is updated"; 
        }
        else
        {
            echo "portfolio is not updated";   
        }
   
}
?>