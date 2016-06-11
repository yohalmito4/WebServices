<?php
$carnet=$_REQUEST['carnet'];
 
$servidor="localhost";
$usuario="root";
$password="yohalmo95";
$baseDatos="DR12004_PDM";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT CARNET, AVG(NOTAFINAL) AS PROMEDIO FROM NOTA WHERE CARNET='".$carnet."' group by CARNET"); 
    
    $stmt->execute();
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo json_encode($result);

$conn = null;
?>