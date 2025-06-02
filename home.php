<?php
require_once "header.php";
require_once "config.php";
$userQuery = " SELECT * FROM product";
$result = mysqli_query($connect, $userQuery);
 ?>
<html>
    <head>
        <title>Product</title>
        <link type="text/css" rel="stylesheet" href="main.css">
    </head>
    <body>
        <form action="productPrice.php" method="post">

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <div class="dessert">
            <a href="product_for_each.php?id=<?php echo $row['product_ID'] ?>">
                <img src="<?Php echo $row['product_pic']  ?>">
            </a>
            <div class="dname">
                <a href="product_for_each.php?id=<?php echo $row['product_ID'] ?>"> 
                <?php echo $row['product_name'] ?></a>
            </div>
        </div>

        <?php } ?>
        
    </body>
</html>