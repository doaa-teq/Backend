<?php
$host="localhost";
$username="root";//return the data from config file of cApatchi
$password='';
try{
    $conn=new PDO("mysql:host=$host;dbname=school",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $DATA=$conn->query("select * from student")->fetchAll();
    echo "<table border=1>
    <tr>
      <th>NAME</th>
      <th>email</th>
      <th>update</th>
    </tr>
    ";
    foreach($DATA as $row){
        echo"<tr>
        <td>{$row['student_name']}</td>
        <td>{$row['email']}</td>
        <td><a href='update.php?id={$row['student_ID']}'>UPDATE</a></td>
        </tr>";
    }
    echo "</table>";
}catch(Exception $D){
    echo "connection failed".$D->getMessage();
}
?>