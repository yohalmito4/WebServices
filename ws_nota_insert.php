<?php
$codmateria=$_REQUEST['codmateria'];
$carnet=$_REQUEST['carnet'];
$ciclo=$_REQUEST['ciclo'];
$notafinal=$_REQUEST['notafinal'];
$servidor="mysql11.000webhost.com";
$usuario="a1028486_pdm";
$password="yohalmo95";
$respuesta=array('resultado'=>0);
json_encode($respuesta);
$conexion=mysql_connect($servidor,$usuario,$password) or
die ("Problemas en la conexion");
$baseDatos="a1028486_dr12004";
mysql_select_db($baseDatos,$conexion)
or die("Problemas en la seleccion de la base de datos");
$query = "INSERT INTO NOTA VALUES('".$codmateria."','".$carnet."','".$ciclo."',".$notafinal.");";
echo($query);
$resultado = mysql_query($query) or die(mysql_error());
//Si la respuesta es correcta enviamos 1 y sino enviamos 0
if(mysql_affected_rows() == 1)
$respuesta=array('resultado'=>1);
echo json_encode($respuesta);
mysql_close($conexion);
?>