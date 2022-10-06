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
$db =mysqli_select_db($objConnect,"DBFood");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Product(ProductId,ProductName,Price,CDate,ModDate) VALUES ('$_GET[ProductId]','$_GET[ProductName]','$_GET[Price]','$_GET[CDate]','$_GET[ModDate]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "<a  color: red> Can't Insert!!!" ."</a>"."<br>";
echo "<br>";
echo "<a href='TablesPro.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='TablesPro.php'  color: red>"."กลับหน้าหลัก"."</a>";
}
?>
</div> 
</div>
</body>
</html>