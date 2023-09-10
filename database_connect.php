<?php
$host="localhost";
$username="root";//return the data from config file of cApatchi
$password='';//if sussefully conect to the dtabase or not 
try{
    $conn=new PDO("mysql:host=$host;dbname=school",$username,$password);
    $conn->setAttribute(PDO ::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $STMT=$conn->prepare("SELECT student_ID ,student_name,contact_info,email,password FROM student");
    $STMT->execute();
    $result =$STMT->fetchAll();//fetsh the data in form of array to retun the values from the k variable 
    
     echo "<table border=1>
   <tr>
      <th> student_ID</th> 
      <th>Neme</th>
      <th>contact info</th>
      <th> email</th>
      <th> password</th>

     
    </tr>
    ";
    foreach ($result as $row) {
    echo "<tr>
        <td> {$row["student_ID"]}</td>
        <td> {$row["student_name"]}</td>
        <td> {$row["contact_info"]}</td>
        <td> {$row["email"]}</td>
        <td> {$row["password"]}</td>

        

    </tr>";


 }
echo "</table>";

}
catch(Exception $d){
    echo "connection failed".$d->getMessage();
}
?>