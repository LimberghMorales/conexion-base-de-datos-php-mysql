<?php
    require_once("conexion.php");
    $con = new conexion();
    $PDO= $con->setconexion();
    $statement = $PDO->prepare("insert into username values(null,'aaa')");
    $statement->execute();
?>