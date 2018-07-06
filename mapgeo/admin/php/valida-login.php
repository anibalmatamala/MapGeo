<?php

try {

    $bd= new PDO("mysql:host=localhost; dbname=mapgeo", "root", "");

    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM usuario WHERE NOMBRE= :login AND CLAVE= :password";

    $resultado=$bd->prepare($sql);

    $login=htmlentities(addslashes($_POST["login"]));

    $password=htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login", $login);//identificar los marcadores con su post

    $resultado->bindValue(":password", $password);

    $resultado->execute();

    $numero_registro=$resultado->rowCount();//rowcoun numero de registro que devuelve una consulta

    if($numero_registro!=0){  
     session_start();
     $_SESSION["usuario"]=$_POST["login"];
     header("location:../principal.php");
    }else{

        header("location:../index.php");
    }
}catch(exception $e) {   
    
    die("error: " . $e->getMessage());
}

?>