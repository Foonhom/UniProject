<html>
    <style>

        .content .textbox{
            margin-left:500px;
        }
        .content .textbox h2 {
        
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: rgb(22, 163, 22);
        margin-top: 50px;
        margin-bottom: 50px;
        }

        .content .textbox a {
            
            display: inline-block;
            margin-top: 20px;
            padding: 8px 20px;
            background-color: whitesmoke;
            color: mediumseagreen;
            border: 2px solid mediumseagreen;
            border-radius: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
            font-weight: 500;
            letter-spacing: 1px;
            text-decoration: none;
            margin-top: 20px;
            margin-left: 80px;
        }

        .content a:hover, a:active {
            background-color: mediumseagreen;
            color: white;
        }

    </style>
</html>

<?php
    require_once "header.php";
    require_once('config.php');

    echo "<div class=\"content\"> <div class=\"textbox\"><h2>Thank You For Your Supporting OTOP Product.</h2>";
    echo "<a href=\"home.php\">Back to home page</a>";
    echo "<a href=\"logout.php\">logout</a></div></div>";