<?php
require_once ("config.php");
$order_id = $_GET['order_id'];
$userQuery = "DELETE FROM order_d WHERE order_id = '$order_id' ";

$result = mysqli_query($connect, $userQuery);

if (!$result)
{
    die ("Could not successfully delete the order");
}
else
{
    echo "Successfully delete the record<br><br>";
}
    header("location:cus_order.php");
?>