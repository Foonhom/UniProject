<html>

    <style>
        .success h2 {
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: rgb(22, 163, 22);
        margin-top: 50px;
        margin-bottom: 50px;
        }

        .success a {
            text-align: center;
            background-color: whitesmoke;
            color: mediumseagreen;
            text-decoration: none;
            border: 2px solid mediumseagreen;
            border-radius: 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 500;
            text-decoration: none;
            padding : 15px;
            margin-left:600px;
            
        }
    </style>
</html>

<?php
require_once "header.php";
require_once "config.php";
$id = $_GET['id'];
$userQuery = "SELECT * FROM product WHERE product_ID ='$id'";
$result = mysqli_query($connect,$userQuery);
$row = mysqli_fetch_assoc($result);

$product_qty = $_POST["qty"];
$user_id = $_SESSION['user_id'];
$price = $row ['product_price'];
$totol_price = $row['product_price'] * $product_qty;
$product_name = $row['product_name'];
$product_price = $row['product_price'];

$date = date("Y/m/d");
    $userQuery = "INSERT INTO order_d (order_id, user_id , product_name, product_qty,product_price, price,order_date) 
    values (NULL,'$user_id','$product_name','$product_qty','$product_price','$totol_price','$date')";
    $result = mysqli_query($connect,$userQuery);

    if (!$result)
    {
        die ("Could not successfully run the query $userQuery".mysqli_error($connect));
    }
    else
    {
        echo "<div class=\"success\"><h2>Successfully added the new product to Shopping-Cart</h2><br><br>";
        echo "<a href=\"home.php\">Go back to add other products</a></div>";
        
    }
    


?>