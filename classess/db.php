<?php
   /**
    * 
    */
   class Database 
   {
   	public $pdo;
   	function __construct()
   	{
   		try{
   			$this->pdo= new PDO("mysql:dbname=pdocrud;host=localhost","root","",);
   		}

   		catch(PDOException $e){
   			echo "error connection".$e;
   		}
   	}
   }

?>