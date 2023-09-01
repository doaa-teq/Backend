<?php
 session_start(); //to keep tracking the secion
 unset($_SESSION["username"]); //the same as in the form
 unset($_SESSION["password"]);
 session_destroy();
 echo "you have been logged out";
 setcookie($_COOKIE["user"],"username",time()-(86400*30),"/");
 header("Refresh:2;URL=form.php"); //return to the same page after loged out
?>