<?php
$year=$_REQUEST['year'];
$month=$_REQUEST['month'];
$day=$_REQUEST['day'];

$servidor="localhost";
$usuario="root";
$password="yohalmo95";
$baseDatos="DR12004_PDM";


try {
    $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("Select * from MATERIA where fecha_modificado>'".$year."-".$month."-".$day."'"); 
    $stmt->execute();
    $result=$stmt->fetchAll(PDO::FETCH_NUM);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo json_encode($result);

$dbh = null;
?>