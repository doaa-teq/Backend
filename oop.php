<?php

class user
{
    public $user_name;
    public $email;
    public $password;

    public function __construct($stname,$stemail,$stpassword)
    {
        $this->user_name=$stname;
        $this->email=$stemail;
        $this->password=$stpassword;

    }
    public function getData()
    {
        echo $this->user_name."<br>";
        echo $this->email."<br>";
        echo $this->password. "<br>";  
    }


}
$std1=new user('DOAA','DOAA@GMAIL.COM','DF$20');
class ADMIN
{
    public $role_type1;
    public $role_type2;
    public $role_type3;
  
    public function __construct($strole_type1,$strole_type2,$strole_type3)
    {
        $this->role_type1=$strole_type1;
        $this->role_type2=$strole_type2;
        $this->role_type3=$strole_type3;
        

    }
    public function getData()
    {
        echo $this->role_type1."<br>";
        echo $this->role_type2."<br>";
        echo $this->role_type3."<br>";
        
    }


}
$std3=new ADMIN('adminstration','registration','designerss');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Alerts</h2>
  <div class="alert alert-success">
    <?php
    $std1->getData();
    ?>
  </div>
  
  <div class="alert alert-success">
    <?php
   $std3->getData();
    ?>
  </div>

</body>
</html>