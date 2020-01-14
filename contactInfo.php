<?
require('connectToDb.php');
$contactInfo = "SELECT * FROM contact ORDER BY contact_id DESC limit 1";
$resultInfo = mysqli_query($db,$contactInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $address = $row['address'];
    $phone = $row['phone'];
    $nationality = $row['nationality'];
    $description = $row['description'];
    $role = $row['role'];
    $whatsap = $row['whatsap'];
    $skype = $row['skype'];
    $website = $row['website'];
    $DOB = $row['DOB'];
    $image = base64_encode( $row['image'] );
    $logo = base64_encode( $row['logo'] );
   
   
}
?>