<?php require_once "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add new employee</title>
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
			margin: 30px auto 50px auto ;
            
			display: block;
			width: 50%;
			padding: 20px;
			background-color:#D1F2EB;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
		}

		table {
			border-collapse: collapse;
            background-color: #E8F8F5;
			margin: auto;
			text-align: left;
			width: 100%;
			margin-bottom: 20px;
		}

        tr > div{
        border-color:red;
        }

		th, td {
			padding: 10px;
			border: 1px solid #dddddd;
		}

		th {
			background-color: #A2D9CE;
			color: #283747;
		}

		input[type="submit"], input[type="reset"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-right: 10px;
		}

		input[type="reset"] {
			background-color: #58D68D;
		}
        input[type="submit"] {
			background-color: #58D68D;
		}
		input[type="submit"]:hover{
            background-color: #333333;
        }
        input[type="reset"]:hover {
			background-color: #F1948A;
		}

		input[type="text"] {
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #cccccc;
			width: 100%;
		}

	</style>
</head>
<body>
<form action="add_employee_submit.php" method="post">
<h1>Add new employee</h1>
    <table border="1">

        <tr>
            <th>Employee</th>
            <th>Auto Increment</th>
        <tr>
    </div>
            <td>First Name</td> 
            <td><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <td>Last Name</td> 
            <td><input type="text" name="lastname"></td>
        </tr>
        <tr>
            <td>Department</td> 
            <td><input type="text" name="department"></td>
        </tr>
        <tr>
            <td>Position</td> 
            <td><input type="text" name="position"></td>
        </tr>
        <tr>
            <td>Salary</td>
           <td><input type="text" name="salary"></td>
        </tr>
    </table>
    <br><input type="submit" value="Submit"> <input type="reset" value="Cancel">
</form>
