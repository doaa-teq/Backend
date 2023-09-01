<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $msg=""; //to store the massage if the request submited and isnot impity send it to store in the server sessioncraete a form that send data which is user name password and sunmet after that click a link to log out and remain in the same page 
    if(isset($_POST["submit"])){   
        if(!empty($_POST["username"]) && !empty($_POST["pw"])){
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["password"]=$_POST["pw"];
            $cookie_name="user";
            $cookie_value=$_POST["username"];
            setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
            $msg="welcome ".$_SESSION["username"];
        }
    }
    ?> 
     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      User name:<input type="text" name="username"><br><br>
      Password: <input type="password" name="pw"><br>
      <input type="submit" name= "submit" value="submit"><br>
      Click here to logout:<a href="logout.php">Log Out </a><br>

    </form>
    <?php echo $msg;?>
   
</body>
</html>