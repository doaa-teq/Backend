<?php
include "./dbconnection.php";
if (isset($_POST["send"])){
    $seq ='INSERT INTO user(name,user_name,email,active,password) VALUES(?,?,?,?,?)';
    $STMT = $conn->prepare($seq);
    $name=$_POST["first"];//WITH POST WE USE THE NAMES OF THE FIELDS 
    //IT IS CONNECTED WITH form_data WHICH USE HTML FOR CREATING THE FORM
    $user=$_POST["user"];
    $email=$_POST["email"];
    $message=$_POST["active"];
    $pass=$_POST["password"];
    $STMT-> execute([$name,$user,$email,$message,$pass]);
    echo "<h3>you submitted data sucessfully</h3>";
}
?>