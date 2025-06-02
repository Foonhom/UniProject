<?php session_start(); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>OTOP</title>
        <link type="text/css" rel="stylesheet" href="main.css">
    </head>
    <body>
        <section>
            <div class="header">
                <div class="logo"> 
                    <a href="home.php"> <img src="pic/logohead.png" alt="Logo"> </a>
                </div>
                <ul>
                    <li><a href="home.php"> Home </a></li>
                    <li><a href="cus_order.php"> Shopping-Cart </a></li>
                    <li><a href="employee.php"> Employee </a></li>

                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<li><a href="logout.php">Logout -</a>';
                        echo "<span class='user-desc'>&nbsp;[";
                        echo $_SESSION['name']
                            ." ".$_SESSION['surname']
                            ."- Level: ".$_SESSION['level'];
                        echo "]</span></li>";
                    }
                    else {
                        echo '<li><a href="login.php">Login</a></li>';
                    }
                    ?>
                </ul>
                </div>
        </section>
    <body>
</html>
    