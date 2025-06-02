<link type="text/css" rel="stylesheet" href="main.css">
<?php
require_once ("config.php");

$employee_id = $_GET['id'];
$userQuery = "DELETE FROM employee WHERE employ_id = '$employee_id' ";

$result = mysqli_query($connect, $userQuery);

if (!$result)
{
    die ("Could not successfully delete the record");
}
else
{
    header("location:employee.php");
}
    
?>