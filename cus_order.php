<?php
require_once "header.php";
require_once "config.php";?>

<html>
    <style>

        .cannot h3 {
        weight:bold;
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color:red;
        margin-top: 50px;
        margin-bottom: 50px;
        }

        .cannot a {
            text-align: center;
            background-color: whitesmoke;
            color: red;
            text-decoration: none;
            border: 2px solid red;
            border-radius: 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 500;
            text-decoration: none;
            padding : 15px;
            
            
        }
    </style>
<link type="text/css" rel="stylesheet" href="table.css">

<?php
if(isset($_SESSION['level']))
{
    $id = $_SESSION['user_id'];
    $userQuery = "SELECT * FROM order_d WHERE user_id='$id'";
    $result = mysqli_query($connect,$userQuery);

    if (!$result)
    {
        die ("Could not successfully run the query 
        $userQuery".mysqli_error($connect));
    }

    if(mysqli_num_rows($result) == 0)
    {
        echo "";

    }

    if (($_SESSION['level'] == 1) or ($_SESSION['level'] == 2) or ($_SESSION['level'] == 3))
        {
        echo "<body>";
        echo "<div class=\"table\">";

        echo "<div class=\"table_header\"> <h1>Your Order</h1> </div>";

        echo "<div class=\"table_body\">";
        echo "<table border=\"1\">";
        echo "<thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Product Price</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                </tr>
            </thead>";

        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<tbody>
                    <tr>
                        <td> ".$row['product_name']."</td>
                        <td> ".$row['product_qty']."</td> 
                        <td> ".$row['product_price']."</td>
                        <td> ".$row['price']."</td>";
 

            echo "     
                        <td><a href=\"update_order.php?order_id=".$row['order_id']."\">Edit</a></td>   
                        <td><a href=\"delete_order.php?order_id=".$row['order_id']."\">Delete</a></td>
                    </tr>
                </tbody>";
        
            }
            echo "</table>";
            echo "</div>";
            echo "</div>";
            echo "</body>";?>

            <html>
                <form action="receipt.php" method="post">
                <div class="ship">
                <label for="shipping"> Select your shipping </label>
                <select class ="select_shipping" name="ship">
                    <?php
                        $connect=mysqli_connect("localhost","root","","954246") or die("Failed to connect with DB");
                        $userQuery="SELECT * FROM shipping";
                        $result=mysqli_query($connect, $userQuery);
                        while ($row=mysqli_fetch_array($result)) {
                        ?> 

                        <option value="<?php echo $row['ship_type'];?>"> <?php echo $row['ship_type'];?></option>
                    <?php } ?> 
                </select>

                <br><input type="submit" Value="SUBMIT YOUR ORDER">
                </div>
                </form>
            </html>
<?php        
        }
    
        mysqli_close($connect);
        }

else{

        echo "<body>";
        echo "<div class=\"table\">";

        echo "<div class=\"table_header\"> <h1>Your Order</h1> </div>";

        echo "<div class='cannot'><h3>Can not show the data, please LOGIN</h3><br><br>";
        echo "<a href=\"login.php\">Click here to login</a></div> <br><br>";
        
        echo "</div>";
        echo "</body>";
}
 ?>