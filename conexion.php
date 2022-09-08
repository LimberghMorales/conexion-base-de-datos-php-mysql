<?php
 class conexion{
    private $host="localhost";
    private $dbname="cursos";
    private $user="root";
    private $password="";
    public function setconexion(){
        try{
            $con = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
            return $con;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
 }

?>