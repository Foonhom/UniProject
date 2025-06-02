<?php
session_start();
require_once "config.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$department = $_POST["department"];
$position = $_POST["position"];
$salary = $_POST["salary"];

if ($_SESSION['level']==3)
{
    $userQuery = "INSERT INTO employee(employ_id, emp_fname, emp_lname, department, position, salary) 
    values (NULL,'$firstname','$lastname', '$department', '$position', '$salary')";
    $result = mysqli_query($connect,$userQuery);

    if (!$result)
    {
        die ("Could not successfully run the query $userQuery".mysqli_error($connect));
    }
    else
    {
        header("location:employee.php");
    }
}
else
{
    echo "ONLY Owner can delete<br><br>";
    echo "<a href=\"login.php\"> Click here to login </a>";
}
?>