<?php
class user
{
    public static $num=0;
    //public function count()
    //{
        //return self::$num;
    //}

   CONST LEAVMASSEGE ="THANK YOU GOODBAY";
    public function __construct(
        public $name,
        public $email,
        public $age,
        
    ){
       $this->name=$name;
       $this->email=$email;
       $this->age=$age;
       self::$num++;
       self::greeting($name);

    }
    public function getDATA()
    {
        echo $this->name ."<br>";
        echo $this->email ."<br>";
        echo $this->age ."<br>";
    }
    public static function greeting($name){
        echo "hello ". $name."<br>";
       
    }

}

    class admin extends user{
    public $role;
    public function __construct($name,$email,$age,$role){
        parent::__construct($name,$email,$age);//inhert construct from parent 
        $this->role=$role; 
    }
    public function getDATA()  //override
    {
        echo $this->name ."<br>";
        echo $this->email ."<br>";
        echo $this->age ."<br>";
        echo $this->role ."<br>";
    }
    
  

    }

$admin1=new admin('ali','dkjj@gmail',20,"developer");
$admin2=new admin('doaa','dkjj@gmail',22,"developer");

$admin1->getData();
echo USER ::LEAVMASSEGE ."<br>";
//echo $admin1->count();
echo user::$num;
?>