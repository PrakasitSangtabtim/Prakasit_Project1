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

$sql="SELECT * FROM product WHERE ProductId='$_GET[ProductId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editProsuccess.php">
<label class="Text" >แก้ไขข้อมูลสินค้า</label>
<p>
<label class="Text" for="ProductId">รหัสสินค้าที่จะแก้ไข</label>
<input type="text" name="ProductId" id="ProductId" value="<?=$data['ProductId'];?>"/>
</p>
<p>
<label class="Text" for="ProductName">แก้ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value="<?=$data['ProductName'];?>"/>
</p>
<p>
<label class="Text" for="Price">แก้ราคา</label>
<input type="text" name="Price" id="Price" value="<?=$data['Price'];?>" />
</p>
<p>
<label class="Text" for="CDate">แก้ราคา</label>
<input type="Date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<label class="Text" for="ModDate">แก้ราคา</label>
<input type="Date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</div> 
</div>
</body>
</html>