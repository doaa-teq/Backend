<?php
include "dbconnection.php";
$DATA=$conn->query("SELECT test.test_id,test.assessment , test.score , test.data ,student.contact_info,student.email,student.student_name
FROM student Right JOIN test
ON student.student_ID=test.stud_id ")->fetchAll();
    echo "<table border=1>
    <tr>
      <th>student_name</th>
      <th>email</th>
      <th>test_id</th>
      <th>assessment</th>
      <th>score</th>
      <th>data</th>
      <th>contact_info</th>
    </tr>
    ";
    foreach($DATA as $row){
        echo"<tr>
        <td>{$row['student_name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['test_id']}</td>
        <td>{$row['assessment']}</td>
        <td>{$row['score']}</td>
        <td>{$row['data']}</td>
        <td>{$row['contact_info']}</td>
        </tr>";
    }
    echo "</table>";