<link type="text/css" rel="stylesheet" href="main.css">
<?php session_start();
require_once "config.php";

$employee_id = $_GET['employee_id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$department = $_POST['department'];
$position = $_POST['position'];
$salary = $_POST['salary'];

$userQuery = "UPDATE employee SET emp_fname = '$fname',
                                  emp_lname = '$lname',
                                  department = '$department',
                                  position = '$position',
                                  salary = '$salary'
             WHERE employ_id = '$employee_id' ";

$result = mysqli_query($connect, $userQuery);

if (!$result) {
    die("Could not successfully update the employee information");
} else {
    header("location:employee.php");
}
?>