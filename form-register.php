<?php require_once "header.php"; ?>
<html>
<link type="text/css" rel="stylesheet" href="main5.css">
    <body>
       
        <form action="register.php" method="Post">
            <h1>Register Information</h1>
           

<div class="flex-container">
         <div>
            <label for="name">Name :</label>
            <input type="text" id="name" name="name"><br>

            <label for="surname">Surname :</label>
            <input type="text" id="surname" name="surname"><br>

            <label for="country">Select your country</label>
            <select class ="select_country" name="country">
                <?php
                    $connect=mysqli_connect("localhost","root","","954246") or die("Failed to connect with DB");
                    $userQuery="SELECT * FROM country";
                    $result=mysqli_query($connect,$userQuery);
                    while ($row=mysqli_fetch_array($result)) {
                    ?> 

                    <option value="<?php echo $row['country_name'];?>"> <?php echo $row['country_name'];?></option>
                <?php } ?> 
             </select><br>
        </div>
        <div>
            <label for="phone">Phone :</label>
            <input type="text" id="phone" name="phone"><br>


     
            <label for="email">Email :</label>
            <input type="text" id="email" name="email"><br>
     
            <label for="address">Address :</label>
            <input type="text" id="address" name="address"><br><br>
        </div>
  </div>
  <div class="ac">
                 <h1>Create account</h1>
            <label for="username">UserName :</label>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password :</label>
            <input type="password" id="password" name="password"><br><br>
                    </div>            
 
            <input type="submit" value="SUBMIT">
            <input type="reset" value="CANCEL"> </div>
           
        </form> 
    </body>