<html>
<head>
    <style>
       body {
			font-family: Arial, sans-serif;
			background-image: url(2.png);
            background-size:cover; 
		}
        h1 {
			text-align: center;
			color: #117A65;
		}
        form {
            margin: 0 auto;
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #D5F5E3;
        }

        /* Style the form elements */
        label {
            display: inline-block;
            width: 120px;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 60%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #D5F5E3;
            margin-bottom: 20px;
            background-color: #D5F5E3;
        }

        input[type="submit"], input[type="reset"] {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #0069d9;
        }

        /* Style the heading */
        h3 {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 50px;
        }

        /* Style the update message */
        .update {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: green;
        }
        input[type="submit"]:hover{
            background-color: #333333;
        }
        input[type="reset"]:hover {
			background-color: #F1948A;
		}
    </style>
</head>

<body>
<?php
require_once "header.php";
require_once "config.php";
$order_id = $_GET['order_id'];
$userQuery = " SELECT * FROM order_d where order_id = '$order_id' ";
$result = mysqli_query($connect, $userQuery);

if (!$result)
{
    die ("Could not successfully run the query $userQuery ".mysqli_error($connect)."");
}
else
{
    echo "<div class='update'> </div><br><br>";
     if(mysqli_num_rows($result) > 0) 
     { 
        $row = mysqli_fetch_assoc($result)


?>

<html>
    <body>
        <h3>Edit Your Order</h3>
            <form method="POST" action="update_order_submit.php?order_id=<?php echo $order_id;?>" >
            
                <label for="product_name">Product Name: </label>
                <input type="text" name="product_name" value="<?php echo $row['product_name'];?>"><br>

                <label for="product_qty">Product Quantity: </label>
                <input type="number" name="product_qty" value="<?php echo $row['product_qty'];?>"><br>

                <label for="product_price">Product Price: </label>
                <input type="text" name="product_price" value="<?php echo $row['product_price'];?>"><br>

                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">
            </form>
    </body>
</html>
<?php
    }  //end while
 }//end else
?>
</body>