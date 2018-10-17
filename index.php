<!DOCTYPE html>
<html>
<head>
	<title>prueba2_php</title>
</head>
<body>
<?php

 // echo "El nombre ingresado es:";
  // echo $_REQUEST['nombre'];

 var nombre = $_REQUEST['nombre'];
 var radio1 = $_REQUEST['radio1'];
 var ingresos = $_REQUEST['ingresos'];
 var comentarios = $_REQUEST['comentarios'];
 var clave1 = $_REQUEST['clave1'];
 var contrato = $_REQUEST['contrato'];

 echo $_REQUEST['nombre'];
  echo "<br>";
  if ($_REQUEST['radio1']=="sin")
  {
    echo "Sin estudios.";
  }
  if ($_REQUEST['radio1']=="primario")
  {
      echo "Estudios primarios.";
  }
  if ($_REQUEST['radio1']=="secundario")
  {
    echo "Estudios secundarios.";	
  }
//check
    $cant=0;
  if (isset($_REQUEST['check1']))
  {
    $cant++;
  }
  if (isset($_REQUEST['check2']))
  {
    $cant++;
  }  
  if (isset($_REQUEST['check3']))
  {
    $cant++;
  }  
  if (isset($_REQUEST['check4']))
  {
    $cant++;
  }  
  echo $_REQUEST['nombre'];
  echo " practica $cant deportes.";
  // ingresos 
  echo $_REQUEST['nombre'];
  if ($_REQUEST['ingresos']==3)
  {
    echo " debe pagar impuestos.";
  }
  else
  {
    echo " no debe pagar impuestos a las ganancias.";	
  }


 echo $_REQUEST['nombre'];
  if ($_REQUEST['ingresos']==3)
  {
    echo " debe pagar impuestos.";
  }
  else
  {
    echo " no debe pagar impuestos a las ganancias.";	
  }

	echo $_REQUEST['contrato'];


	$ar=fopen("datos.txt","a") or
  die("Problemas en la creacion");
fputs($ar,$_REQUEST['nombre']);
fputs($ar,"\n");
fputs($ar,$_REQUEST['comentarios']);
fputs($ar,"\n");
fputs($ar,"--------------------------------------------------------");
fputs($ar,"\n");
fclose($ar);
echo "Los datos se cargaron correctamente.";

$server = "localhost";
$usuario = "usuario";
$contra = "contrasena";
$nombredb = "testdb";

$conexion = new mysqli($server, $usuario, $contra, $nombredb);
if ($conexion->connect_error) {
    die("no se pudo conectar a la base de datos");
}

$sql = "INSERT INTO Tabla (nombre, radio1, ingresos, comentarios, clave1, contrato) VALUES ('{$nombre}', '{$radio1}', {$ingresos}, '{$comentarios}', '{$clave1}', '{$contrato}')";

if ($conexion->query($sql) === TRUE) {
    echo "Se agrego correctamente a la abse de datos";
} else {
    echo "Nos e pudo agregar a la base de datos.";
}

$conn->close();


function verificarClaves($cla1,$cla2)
  {
    if ($cla1!=$cla2)
	  echo "Las claves ingresadas son distintas";
  }
  
  verificarClaves($_REQUEST['clave1'],$_REQUEST['clave2']);

?>
<h2>Se verificaron las claves ingresadas.</h2>
?>


</body>
</html>