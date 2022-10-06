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
$sql = "SELECT  *  FROM Customer";
$result = $objConnect->query($sql);
echo "ข้อมูลลูกค้า";
echo "<br>";
if ($result->num_rows > 0) {
  // head of table
 echo "<table border='2px'>";
 echo "<tr bgcolor='pink'>";   echo "<th width='200px'>รหัสลูกค้า "; 
 echo "</th>";echo "<th> ชื่อลูกค้า: ";
 echo "</th>"; echo "<th> ที่อยู่"; 
 echo "</th>"; echo "<th> อีเมล"; 
 echo "</th>"; echo "<th> วันเกิด"; 
 echo "</th>"; echo "<th> วันที่สมัคร"; 
 echo "</th>";echo "<th> หมดอายุวันที่สมาชิก"; 
 echo "</th>";echo "<th> Postcode";
 echo "</tr>"; 
// output data of each row
 while($row = $result->fetch_assoc()) {
 echo "<td><a href='editCus.php?CustomerId=$row[CustomerId]'>"
 .$row["CustomerId"]."</td>"."</a><td>"."</a>"
 .$row["CustomerName"]."</td>"."<td>"
 .$row["Locations"]."</td>"."<td>"
 .$row["Email"]."</td>"."<td>"
 .$row["DateOfBirth"]."</td>"."<td>"
 .$row["CDate"]."</td>"."<td>"
 .$row["ModDate"]."</td>"."<td>"
 .$row["Postcode"]."</td>";

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
    <form action = "insertCus.php">
        <input type = submit name="suname" value="เพิ่มลูกค้า" >
    </form>
    <form action = "">
        <input type = submit name="suname" value="ลบลูกค้า" >
    </form>
    <form action = "main.html">
        <input type = submit name="suname" value="เข้าสู่หน้าหลัก" >
    </form>
</div>
</div>

</body>
</html>