<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>this is html style</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
  <div class="Container2">
        <div class="screen">
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBFood");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM Promotion WHERE PromotionId='$_GET[PromotionId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editPromosuccess.php">
<label class="Text" >แก้ไขโปรโมชั่น</label>
<p>
<label class="Text" for="PromotionId">รหัสลูกค้า</label>
<input type="text" name="PromotionId" id="PromotionId" value="<?=$data['PromotionId'];?>"/>
</p>
</p>
<label class="Text" for="PromotionName">Postcode</label>
<input type="text" name="PromotionName" id="PromotionName" value="<?=$data['PromotionName'];?>" />
</p>
<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</div> 
</div>
</body>
</html>
