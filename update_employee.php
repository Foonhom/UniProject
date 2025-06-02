<html>
<head>
    <style>
       body {
			font-family: Arial, sans-serif;
			background-image: url(pic/webbg.png);
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
            border: 1px solid #ccc;
            margin-bottom: 20px;
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
$employee_id = $_GET ['id'];
$userQuery = "SELECT * FROM employee where employ_id = '$employee_id' ";
$result = mysqli_query($connect, $userQuery);

if (!$result)
{
    die ("Could not successfully run the query $userQuery ".mysqli_error($connect)."");
}
else
{
    echo "<div class='update'>Update data </div><br><br>";
    if(mysqli_num_rows($result) > 0) 

    { 
        $row = mysqli_fetch_assoc($result)
?>
    
    <form method="POST" action="update_employee_submit.php?employee_id=<?php echo $employee_id;?>" >
    <h1>Edit Employee</h1>
        <label for="fname">First Name: </label>
        <input type="text" name="fname" value="<?php echo $row['emp_fname'];?>"><br>

        <label for="lname">Last Name: </label>
        <input type="text" name="lname" value="<?php echo $row['emp_lname'];?>"><br>

        <label for="salary">Department: </label>
        <input type="text" name="department" value="<?php echo $row['department'];?>"><br>

        <label for="salary">Position: </label>
        <input type="text" name="position" value="<?php echo $row['position'];?>"><br>

        <label for="salary">Salary: </label>
        <input type="text" name="salary" value="<?php echo $row['salary'];?>"><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Cancel">
    </form>
<?php
    } //end while
} //end else
?>
</body>
</html>