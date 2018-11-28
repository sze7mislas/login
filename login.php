<?php
        session_start();
        require_once ('connect.php');
        if (isset($_POST['enter'])){
            $username=$_POST['uname'];
            $password=$_POST['pwd'];
            
            $sql="SELECT * FROM user WHERE uname=$username
                AND pwd=$password";
            $res
            }
            
        ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
