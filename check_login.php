
<?php 
session_start();
include_once "config.php";

$username = $_POST['username']; 
$password = $_POST['password'];
$userQuery="SELECT * FROM user WHERE username = '$username' && password = '$password' ";

$result=mysqli_query($connect, $userQuery);
    if(!$result) 
    {
        die ("Could not successfully run the query $userQuery".mysqli_error($connect));
    }

    if(mysqli_num_rows($result) == 0)
    {
        $_SESSION['errors_msg'] = "Username or Password is incorrect.";
        header("Location: login.php");
    }

    else
    {
        $row = mysqli_fetch_assoc($result);
        if (($_POST['username'] == $row['username'])
            && ($_POST['password'] == $row['password'])) 
            {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['level'] = $row['level'];
                $_SESSION['user_id'] = $row['user_id'];
                header("Location:home.php");
            }
        else
            {
                $_SESSION['errors_msg']="Username or Password is incorrect.";
                header("Location: login.php");
            }
    }
?>