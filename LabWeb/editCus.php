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

$sql="SELECT * FROM Customer WHERE CustomerId='$_GET[CustomerId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editCusuccess.php">
<label class="Text">แก้ไขข้อมูลลูกค้า</label>
<p>
<label class="Text" for="CustomerId">รหัสลูกค้า</label>
<input type="text" name="CustomerId" id="CustomerId" value="<?=$data['CustomerId'];?>"/>
</p>
<p>
<label class="Text" for="CustomerName">ชื่อลูกค้า</label>
<input type="text" name="CustomerName" id="CustomerName" value="<?=$data['CustomerName'];?>"/>
</p>
<p>
<label class="Text" for="Locations">ที่อยู่</label>
<input type="text" name="Locations" id="Locations" value="<?=$data['Locations'];?>" />
</p>
<p>
<label class="Text" for="Email">Email</label>
<input type="text" name="Email" id="Email" value="<?=$data['Email'];?>" />
</p>
<p>
<label class="Text" for="DateOfBirth">วันที่เกิด</label>
<input type="Date" name="DateOfBirth" id="DateOfBirth" value="<?=$data['DateOfBirth'];?>" />
</p>
<p>
<label class="Text" for="CDate">วันที่สมัคร</label>
<input type="Date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<label class="Text" for="ModDate">หมดอายุวันที่สมาชิก</label>
<input type="Date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
</p>
<label class="Text" for="Postcode">Postcode</label>
<input type="Date" name="Postcode" id="Postcode" value="<?=$data['Postcode'];?>" />
</p>
<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</div> 
</div>
</body>
</html>