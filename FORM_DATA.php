<?php
include('./dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
</head>
<body>
    <br><br>
  <form action="welcome.php" method="post">
    <label for="user_ name">USER NAME</label>
    <input type="text" id="user_ name" name="user_ name"> <br><br>
    <label for="email">EMAIL</label>
    <input type="email" id="email" name="email"><br><br>
    <label= for="password">PASSWORD</label>
    <input type="passeword" id="password" name="password"><br><br>

    <label for="gender">GENDER</label>
    <input type="checkbox" id="gender" value="female">Female
    <input type="checkbox" id="gender" value="male">Male
    <br><br>
    <label for="courses">CHOOSE YOUR COURSE</label>
    <select id="courses" name="courses">
        <option value="html">HTML</opion>
        <option value="php">PHP</option>
        <option value="python">PYTHON</option>
    </select>
    <br><br>
    <label for="comment">INSERT TEXT</label>
    <textarea rows="8" cols="20"></textarea>
    <br><br>
    <label for="profile">profile picture</label>
    <input type="file" id="profile"><br><br>
    <input type="submit" value="submit data">
    <input type="reset" value="reset data">
    <button type="submit">submit data</button>
  </form>
</body>
</html>