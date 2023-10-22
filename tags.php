<?php
include "./dbconnection.php";
if (isset($_POST["send"])){
    $seq ='INSERT INTO tags(tag_name) VALUES(?)';
    $STMT = $conn->prepare($seq);
    $name=$_POST["tag"];//WITH POST WE USE THE NAMES OF THE FIELDS 
    $STMT-> execute([$name]);
    echo "data submmeted suceesfully";
}
?>