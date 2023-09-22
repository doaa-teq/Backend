<?php
$host="localhost";
$username="root";
$password="";
try{
    $conn= new PDO("mysql::host=$host;dbname=school",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $DATA="INSERT INTO  student(student_name,contact_info,email,password)
    VALUES('sara','sara@gmail','gjhjkhkjh','34154654')";
    $DATA="INSERT INTO subject(name, total_grade)
    VALUES('APPLE','FOOD')";
    $conn->exec($DATA);
    echo "record rxcute sussefully";
}catch(Exception $d){
    echo "connection failed".$d ->getMessage();
}
?>
