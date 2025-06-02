<html>
    <style>
        .success h2 {
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: rgb(22, 163, 22);
        margin-top: 50px;
        margin-bottom: 50px;
        }

        .success a {
            text-align: center;
            background-color: whitesmoke;
            color: mediumseagreen;
            text-decoration: none;
            border: 2px solid mediumseagreen;
            border-radius: 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 500;
            text-decoration: none;
            padding : 15px;
            margin-left:650px;
            
        }
    </style>
</html>

<?php
    require_once "header.php";
    require_once('config.php');
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    $userQuery = "INSERT INTO user(user_id, name, surname, email, phone, country, address, username, password) 
    values(NULL, '$name', '$surname', '$email', '$phone' ,'$country', '$address' , '$username' ,'$password')";

    $result = mysqli_query($connect, $userQuery);

        if(!$result)
        {
            die ("Something Went Wrong");
        }
            
        else
        {
            echo "<div class=\"success\"><h2>Successfully create your account.</h2>"."<br>";
            echo "<a href=\"login.php\">Go to LOGIN page</a></div><br><br>";

        }


?>