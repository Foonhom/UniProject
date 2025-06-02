<html>
<head>
<link type="text/css" rel="stylesheet" href="receipt.css">
</head>
<body class="bg">

<?php require_once "config.php";?>
<?php require_once "header.php";?>
<form class="border">
<?php
require_once "header.php";
require_once "config.php";

$id = $_SESSION['user_id'];
$ship = $_POST['ship'];

$userQuery = "SELECT * FROM user WHERE user_id ='$id'";
$result = mysqli_query($connect,$userQuery);
$row = mysqli_fetch_assoc($result);


    echo "<body>";
    echo "<h1>RECEIPT</h1><br>";

    echo "<div class=\"all\">";
        echo "<div class=\"table_body\">";
        echo "<table border=\"0\">";
        echo "<thead>
                <tr>
                    <td><h4>Customer name: ".$row['name']."   ".$row['surname']."<h4></td>                     
                </tr>

                <tr>
                    <td><h4>Phone: ".$row['phone']." </h4></td>
                </tr>

                <tr>
                    <td><h4>Address:  ".$row['country']."  ".$row['address']."  </h4></td>
                </tr>
            </thead>";
        echo "</table>";
        echo "</div>";
        echo "</body>";

    $userQuery2 = "SELECT * FROM order_d WHERE user_id ='$id'";
    $result2 = mysqli_query($connect,$userQuery2);
    $sum=0;
    while ($row2 = mysqli_fetch_assoc($result2))
    {

        $sum += $row2['price'];
        
        echo "<div class=\"table_body\">";
        echo "<table border=\"0\">";
        echo " 
                <tr>
                    <td><p> ".$row2['product_name']."</p></td>
                    <td><p> x".$row2['product_qty']."</p></td>
                    <td><p class=\"price\"> ".$row2['price']." THB</p></td>                       
                </tr>
                ";
    }
        echo "</table>";
        echo "</div>";
    

        echo "</div>";

        echo "<br><div class=\"ship\">shipping</div>";

        if($ship=="SCG Express")
            { $shipcost = 200; }

        elseif($ship=="Inter Express Logistics")
            { $shipcost = 250; }
        
        elseif($ship=="JWD Express")
            { $shipcost = 270; }

        else{
            $shipcost = 300;
        }

        echo "<div class=\"ship\"> $ship  $shipcost THB </div><br><br>";

        $totalprice = $sum + $shipcost;
        $totalprice = number_format($totalprice ,2);
        
        echo "<h2>Total Price $totalprice THB</h2>";
        ?>
        
        <div class="content">
            <div class="textbox">
                <a href="thankyou.php">CONFIRM YOUR ORDER</a>
            </div>
        </div>
</body>
</html>