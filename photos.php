<?php
include "./dbconnection.php";
if (isset($_POST['send'])) {
    $seq = 'INSERT INTO photo_details (date, title,active, licence, dimention, format,tag, img) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
    $STMT = $conn->prepare($seq);
    $date = $_POST['date'];
    $title = $_POST['title'];
    $active = $_POST['active'];
    $license = $_POST['license'];
    $dimension = $_POST['dimension'];
    $format = $_POST['format'];
    $caregory = $_POST['tag'];
    $image = $_POST['image'];
    $STMT->execute([$date, $title, $active, $license, $dimension, $format,$caregory, $image]);
};
echo "<h3>You submitted data and image successfully</h3>";
?>