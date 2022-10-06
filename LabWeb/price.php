<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="style.css">

        <title>การชำระเงิน</title>

    </head>

    <body>

        <div class="Container">
            <div class="screen">

<?php

    $product_price = $_GET["pproduct"];

    echo "ราคาสินค้าต่อชิ้น $product_price <br>";

    $product_num = $_GET["nproduct"];

    echo "จำนวนสินค้า $product_num <br>";

    $product_total = $product_price * $product_num;

    echo "ราคารวม $product_total <br>";

    $product_vat = $product_total * 0.07;

    echo "รวมภาษี $product_vat <br>";

    $product_net = $product_total + $product_vat;

    echo "ราคาทั้งหมด $product_net <br>";

?>

</div> 
        </div>
    </body>
</html>