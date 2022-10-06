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
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBFood");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Promotion(PromotionId,PromotionName) VALUES ('$_GET[PromotionId]','$_GET[PromotionName]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='promotion.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='promotion.php'>"."กลับหน้าหลัก"."</a>";
}
?>

</div> 
</div>
</body>
</html>