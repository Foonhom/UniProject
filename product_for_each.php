<html>
    <style>

        .cannot h3 {
        weight:bold;
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: red;
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

<?php require_once "header.php";
require_once "config.php";

if(isset($_SESSION['level']))
{
$id = $_GET['id'];
$userQuery = "SELECT * FROM product WHERE product_ID='$id'";
$result = mysqli_query($connect,$userQuery);
$row = mysqli_fetch_assoc($result);

if (($_SESSION['level'] == 1) or ($_SESSION['level'] == 2) or ($_SESSION['level'] == 3))
    {
?>

<html>
    <head>
        <title>MENU</title>
        <link type="text/css" rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="main-menu">
            <form action="all_submit.php?id=<?php echo $id?>" method="post">
            <img src="<?Php echo $row['product_pic']?>">
                    <div class="drop">
                    <h2><span> - <?php echo $row['product_name']; ?> - </span></h2>
                    <div class="trans">
                    <p><?php echo $row['describ'];?></p>
                    </div>
                    </div>

                    <h3><span><?php echo "" .$row['district']. ","; ?></span></h3>
                    <h3><span><?php echo $row['province']; ?></span></h3>

                    <div class="menu">
                    <table>
                        <tr>
                            <td> Price: </td>
                            <td > <?php echo $row['product_price']; ?> Baht </td>
                        </tr>
                        <tr>
                            <td> Quantity: </td>
                            <td> <input type="number" name="qty"> </td>
                        </tr>
                        
                    </table>
                    <br><input type="submit" value="Submit">
                <div> 
            </form>
        </div>
    </body>
</html>

<?php        
    }    
        mysqli_close($connect);
        }
else{
    echo "<div class='cannot'><h3>Can not show the data, please LOGIN<h3><br><br>";
    echo "<a href=\"login.php\">Click here to login</a></div> <br><br>";
}
 ?>