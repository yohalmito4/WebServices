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
$registros=mysql_query("Select * from MATERIA where
fecha_modificado>'".$year."-".$month."-".$day."'",$conexion) or
die("Problemas en el select:".mysql_error());
$filas=array();
while ($reg=mysql_fetch_assoc($registros))
{
$filas[]=$reg;
}
echo json_encode($filas);
mysql_close($conexion);
?>