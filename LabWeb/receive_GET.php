<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>this is html style</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<div class="Container2">
<div class ="screen">
<?php

$user_name = $_GET["fname"];
echo "ยินต้อนรับ $user_name <br>";

$user_pass = $_GET["pname"];

//echo "your password is $user_pass <br>";

?> 

<form action = "main.html">
        <input type = submit name="suname" value="เข้าสู่หน้าหลัก" >
</form>
</div>

</div>


    </body>
</html>

