<?php
 include 'db.php';
   class updateUser{
   	 private $conn;
   	 public function __construct(){
   	 	$this->conn= new Database;
   	 }

   	 public function ShowDataForUpdate($id){
         $sql= "SELECT * FROM tbl_user WHERE id= $id";
         $result = $this->conn->pdo->query($sql);
         return $result;
   	 }

   	 public function updateUserData($userData, $id){
   	 	$name=$userData['Name'];
   	 	$email=$userData['email'];
   	 	$phone=$userData['phone'];

   	 	 $sql="UPDATE tbl_user SET Name=:Name ,email=:email,phone=:phone WHERE id= $id";
   	 	 $command= $this->conn->pdo->prepare($sql);
   	 	 $command->bindValue(":Name",$name);
   	 	 $command->bindValue(":email",$email);
   	 	 $command->bindValue(":phone",$phone);
   	 	 $command->execute();
   	 	 

         
   	 }
   }

?>