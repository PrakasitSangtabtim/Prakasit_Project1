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

<form action="insertProsuccess.php" method="GET">
<label class="Text" >เพิ่มสินค้า </label>
<p>
<label class="Text" for="ProductId">รหัสสินค้า </label>
<input type="text" name="ProductId" id="ProductId" value=""/>
</p>
<p>
<label class="Text" for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value=""/>
</p>
<p>
<label class="Text" for="Price">ราคา</label>
<input type="text" name="Price" id="Price" value="" />
</p>
<p>
<label class="Text" for="CDate">วันผลิต</label>
<input type="Date" name="CDate" id="CDate" value="" />
</p>
<p>
<label class="Text" for="ModDate">วันหมด</label>
<input type="Date" name="ModDate" id="ModDate" value="" />
</p>
<p>
    <input type="submit">
</p>
</form>
</div> 
</div>
</body>
</html>