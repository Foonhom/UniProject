<!DOCTYPE html>
<html>
<head>
	<title>Employee Data</title>
	<style>
    .bg {
			font-family: Arial, sans-serif;
			background-image: url(pic/webbg.png);
            background-size:cover; 
          
          
		}
        h1 {
			text-align: center;
			color: #117A65;
           
		}
        table {
            
            border-collapse: collapse;
            background-color: #E8F8F5;
			margin: auto;
			text-align: left;
			width: 100%;
			margin-bottom: 20px;
        }

        th, td {
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #73C6B6;
            color: #0B5345 ;
        }

       
        .create {
            text-align: center;
            margin-top: 20px;
        }

        .create a {
            background-color: #58D68D;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }

        .create a:hover {
            background-color: #333333;
        }

        .cannot h3{
            color:red;
            text-align: center;
            margin-top: 50px;
        }
        .border{
            
			margin: 50px auto 0 auto ;
            
			display: block;
			width: 50%;
			padding: 20px;
			background-color:#D1F2EB;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
            margin-bottom: 100px  ;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
		}

        .cannot a {
            margin-left:300px;
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
        .cannot h2 {
        weight:bold;
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color:red;
        margin-top: 50px;
        margin-bottom: 50px;
        }
        
        
	</style>
</head>
<body class="bg">
    

<?php require_once "header.php"; ?>
<form class="border">
    <h1>Employee</h1><br><br>
<?php

require_once "config.php";

if(isset($_SESSION['level']))
{
    $userQuery = "SELECT * FROM employee";
    $result = mysqli_query($connect,$userQuery);
    if (!$result)
    {
        die ("Could not successfully run the query 
        $userQuery".mysqli_error($connect));
    }

    if(mysqli_num_rows($result) == 0)
    {
        echo "No records were found with query $userQuery";
    }


        //user2
        if ($_SESSION['level'] == 2)
        {
            echo "<table border=\"1\">";
            echo "<tr> <th>Employee_ID</th> 
                   <th>Firstname</th>
                   <th>Lastname</th>
                   <th>Department</th>
                   <th>Position</th>
                   <th>Salary</th>";
        
    
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<tr><td>".$row['employ_id']."</td>".
                        "<td>".$row['emp_fname']."</td>".
                        "<td>".$row['emp_lname']."</td>".
                        "<td>".$row['department']."</td>".
                        "<td>".$row['position']."</td>".
                        "<td>".$row['salary']."</td>";
            
            
            }
            echo "</table>";
            }

    
        elseif ($_SESSION['level'] == 3)
        {
            echo "<table border=\"1\">";
            echo "<tr> <th>Employee_ID</th> 
                   <th>Firstname</th>
                   <th>Lastname</th>
                   <th>Department</th>
                   <th>Position</th>
                   <th>Salary</th>
                   <th>Update</th>
                   <th>Delete</th>";
        
    
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<tr><td>".$row['employ_id']."</td>".
                        "<td>".$row['emp_fname']."</td>".
                        "<td>".$row['emp_lname']."</td>".
                        "<td>".$row['department']."</td>".
                        "<td>".$row['position']."</td>".
                        "<td>".$row['salary']."</td>";
            
                    echo "<td><a href=\"update_employee.php?id=".$row['employ_id']."\">";
                    echo "Update</a></td>";
                    
                    echo "<td><a href=\"delete_employ.php?id=".$row['employ_id']."\">";
                    echo "Delete</a></td></tr>";
          
            }
            echo "</table>";
            echo "<div class='create'><a href=\"add_employee.php\">Add new employee </a></div><br><br>";
            }

        else{

            echo "<div class='cannot'><h3>You can not access to this data.</h3><br><br>";
    
        }
        

    mysqli_close($connect);
    }
else
{
    echo "<div class='cannot'><h3>Can not show data,please login</h3><br><br>";
    echo "<a href=\"login.php\">Click here to login</a></div>";
}

?>
</form> </body> 
</html>