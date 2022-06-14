<?php
 include 'db.php';
  class userInsert{
    private $conn;
    public function __construct(){
       $this->conn = new Database;
    }
    
    public function newUserInsert($userData){
        $Name= $userData['Name'];
        $email= $userData['email'];
        $phone= $userData['phone'];
        $sql="INSERT INTO tbl_user(Name,email,phone)VALUES(:Name,:email,:phone)";

        $command= $this->conn->pdo->prepare($sql);
        $command->bindValue(":Name",$Name);
        $command->bindValue(":email",$email);
        $command->bindValue(":phone",$phone);
        $command->execute(); 
        if($command){
        	return "Data Save Successfully";
        }
        else {
        	return "data Not  Saved";
        }
    }
  }

?>