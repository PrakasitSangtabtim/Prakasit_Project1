<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>this is html style</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="Container">
        <div class="screen">

<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBFood");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Promotion SET PromotionId='$_GET[PromotionId]',PromotionName='$_GET[PromotionName]'
 WHERE PromotionId='$_GET[PromotionId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='promotion.php'>กลับสู่หน้าหลัก</a>";
}
?>
</div> 
</div>
</body>
</html>