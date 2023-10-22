<?php
if(isset($GET['id'])){
     $host="localhost";
                        $username="root";//return the data from config file of cApatchi
                        $password='';//for connection we used try and catch pdo(php data object)
                        try{
                            $conn=new PDO("mysql:host=$host;dbname=final_project",$username,$password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            $DATA=$conn->query("select title dimention format from photo_details")->fetchAll();
                            foreach($DATA as $row){
                                echo"
                                title
                                dimention
                                format
                              ";
                            }
                            echo "</table>";
                        }catch(Exception $D){
                            echo "connection failed".$D->getMessage();
                        }
}
                       
                        ?>