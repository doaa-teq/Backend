<?php
include('./dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.css"> 
</head>
<body>
   <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-auto">
  <form action="welcome.php" method="post">
  <div class="input-group mb-3">
  <span class="input-group-text">@</span>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="Username">
    <label for="floatingInputGroup1">Username</label>
  </div>
</div>
<div class="input-group mb-3">
  <span class="input-group-text">@</span>
  <div class="form-floating">
    <input type="email" class="form-control" id="floatingInputGroup1" placeholder="EMAIL" name="EMAIL">
    <label for="floatingInputGroup1">EMAIL</label>
  </div>
</div>
<div class="input-group mb-3">
  <span class="input-group-text">@</span>
  <div class="form-floating">
    <input type="password" class="form-control" id="floatingInputGroup1" placeholder="PASSWORD" name="PASSWORD">
    <label for="floatingInputGroup1">PASSWORD</label>
  </div>
</div>
<br> <br> 
<div class="form-check">
  <input class="form-check-input" type="radio" name="GENDER" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    MALE
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="GENDER" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    FEMALE
  </label>
</div>
<br><br>  
<div class="col-md-4">
    <label for="inputState" class="form-label">courses</label>
    <select id="inputState" class="form-select">
      <option selected>Cources</option>
      <option>HTML</option>
      <option>PHP</option>
      <option>PYTHON</option>
    </select>
  </div>
  <br><br> 
    <div class="input-group">
    <span class="input-group-text">insert text</span>
    <textarea class="form-control" aria-label="insert text"></textarea>
    </div>
    <br> <br> 
    <div class="row mb-3">
    <label for="profile">profile picture</label>
    <br><br>
    <input type="file" id="profile">
    </div>
    <br> <br> 
    <input type="submit" value="submit data" name="send"  class="btn btn-primary">
    <input type="reset" value="reset data"  class="btn btn-primary">
    <script src="./bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
  </form>
</body>
</html>