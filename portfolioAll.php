<?
require('connectToDb.php');
$portfolioInfo = "SELECT * FROM portfolio ORDER BY portfolio_id";
$resultInfo = mysqli_query($db,$portfolioInfo);
while($row = mysqli_fetch_assoc($resultInfo))
{
    $portfolioImage = base64_encode( $row['portfolio_images'] );
    echo '<div class="columnport">';
    echo '<img src="data:image/JPEG;base64,'.$portfolioImage.'"/>';
    echo '</div>';
}
?>