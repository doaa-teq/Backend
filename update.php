<?php
include "./dbconnection.php";
$id=$_GET['id'];
$sql="UPDATE student set student_name='ali' where student_ID=$id";
$conn->exec($sql);
echo "record UPDATED successfully";
?>