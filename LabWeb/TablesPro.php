<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel ="stylesheet" href="style-table.css">
    <title>ตารางสินค้า</title>
</head>
<body>
<div class="Container2">
<div class="Tables">


<?php
//connect to database 
$objConnect = mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBFood");
mysqli_query($objConnect, "SET NAMES utf8");



//select data from table 
$sql = "SELECT  *  FROM Product";
$result = $objConnect->query($sql);
echo "ข้อมูลสินค้า";
echo "<br>";
if ($result->num_rows > 0) {
  // head of table
 echo "<table border='2px'>";
 echo "<tr bgcolor='pink'>";   echo "<th width='200px'>รหัสสินค้า "; echo "</th>";echo "<th> ชื่อสินค้า: ";echo "</th>"; echo "<th> ราคา"; echo "</th>"; echo "<th> วันผลิต"; echo "</th>";echo "<th> วันหมด"; echo "</th>";
 echo "</tr>"; 
// output data of each row
 while($row = $result->fetch_assoc()) {
 echo "<td><a href='editPro.php?ProductId=$row[ProductId]'>"
 .$row["ProductId"]."</td>"."</a><td>"."</a>"
 .$row["ProductName"]."</td>"."<td>"
 .$row["Price"]."</td>"."<td>"
 .$row["CDate"]."</td>"."<td>"
 .$row["ModDate"]."</td>";

 echo "</tr>"."<br>";    

  }
  echo "</table>";
}
else {
    echo "0 results";
  }

  //menu add data to table
  
  $objConnect->close();
?>



</div>
<div class="Tables">
    <form action = "insertProduct.php">
        <input type = submit name="suname" value="เพิ่มสินค้า" >
    </form>
    <form action = "">
        <input type = submit name="suname" value="ลบสินค้า" >
    </form>
    <form action = "main.html">
        <input type = submit name="suname" value="เข้าสู่หน้าหลัก" >
    </form>
</div>
</div>

</body>
</html>