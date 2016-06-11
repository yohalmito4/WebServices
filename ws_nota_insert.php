<?php

$codmateria=$_REQUEST['codmateria'];
$carnet=$_REQUEST['carnet'];
$ciclo=$_REQUEST['ciclo'];
$notafinal=$_REQUEST['notafinal'];

$servidor="localhost";
$usuario="root";
$password="contraseña";
$respuesta=array('resultado'=>0);
json_encode($respuesta);
$baseDatos="DR12004_PDM";

try {
        $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO NOTA VALUES('".$codmateria."','".$carnet."','".$ciclo."',".$notafinal.");";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Registro almacenado correctamente";
    }catch(PDOException $e){
        echo json_encode($sql . "<br>" . $e->getMessage());
    }

$conn = null;

?>