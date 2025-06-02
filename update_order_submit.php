<?php
require_once "header.php";
require_once "config.php";

$order_id = $_GET['order_id'];

$product_name = $_POST['product_name'];
$product_qty = $_POST['product_qty'];
$product_price = $_POST['product_price'];

$price = $product_qty * $product_price;
                        $userQuery = " INSERT INTO order_d 'price' VALUE $price";

$userQuery = "UPDATE order_d SET product_name = '$product_name',
                            product_qty = '$product_qty',
                            product_price = '$product_price',
                            price = '$price'
                            
         WHERE order_id = '$order_id' ";

$result = mysqli_query($connect, $userQuery);

if (!$result)
{
    die ("Could not successfully update the order  $userQuery". mysqli_error($connect));
}
else
{
    echo "Successfully update the order";
    header("location:cus_order.php");
}
?>