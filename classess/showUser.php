<?php
  include "db.php";
  
   class userShow{
   	  private $conn;
      public function __construct(){
      	$this->conn = new Database;
      }


      public function showUser(){
      	$sql= "SELECT * FROM tbl_user";
      	$result= $this->conn->pdo->query($sql);
      	return $result;
      }
   } 

?>