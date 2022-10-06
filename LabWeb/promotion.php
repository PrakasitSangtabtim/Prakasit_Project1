<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel ="stylesheet" href="style-table.css">
    <title>ตารางโปรโมชั่น</title>
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
$sql = "SELECT  *  FROM Promotion";
$result = $objConnect->query($sql);
echo "ข้อมูลโปรโมชั่น";
echo "<br>";
if ($result->num_rows > 0) {
  // head of table
 echo "<table border='2px'>";
 echo "<tr bgcolor='pink'>";   echo "<th width='200px'>รหัสโปรโมชั่น "; 
 echo "</th>";echo "<th> ชื่อโปรโมชั่น";
 echo "</tr>"; 
// output data of each row
 while($row = $result->fetch_assoc()) {
echo "<td><a href='editPromo.php?PromotionId=$row[PromotionId]'>"
 .$row["PromotionId"]."</td>"."</a><td>"."</a>"
 .$row["PromotionName"]."</td>";

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
    <form action = "insertPromo.php">
        <input type = submit name="suname" value="เพิ่มโปรโมชั่น" >
    </form>
    <form action = "">
        <input type = submit name="suname" value="ลบโปรโมชั่น" >
    </form>
    <form action = "main.html">
        <input type = submit name="suname" value="เข้าสู่หน้าหลัก" >
    </form>
</div>
</div>

</body>
</html>