<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <?php
    $a=array("Joe"=>"Smarties","Ahmed"=>"Pringles","Cassie"=>"Marmite crisps","Ben"=>"Mr kiplings cakes");
    foreach($a as $key=>$value){
        echo "<p> $key loves  $value </p>" ;
    }  
    
  ?>
</body>
</html>
