<?php require_once "header.php"; ?>
<html>
    <head> 
        
    <link type="text/css" rel="stylesheet" href="main5.css">

    </head>
    <body>
    <?php

if (isset($_SESSION['errors_msg'])) {
    echo "<p align='center'><font color='FF0000'><B>"
    .$_SESSION['errors_msg']."</B></font></p>";
    
    unset($_SESSION['errors_msg']);
    }
    ?>

<div class="ac">  <!-- เพิ่มclassตรงนี้ -->
  

    <form action="check_login.php" method="post">
   
     
        
                 <h1>LOGIN</h1>
            <label for="username">UserName :</label>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password :</label>
            <input type="password" id="password" name="password"><br><br>
                    
            <input type="submit" name="button" id="button" value="Submit" />
            <input type="reset" name="button2" id="button2" value="Reset" /> <br><br>

            <div style=" text-align:center;"><br><a href="form-register.php"><b> Click here to Register</b> </a></div>
           

   </form>
</div>

</body>
</html>