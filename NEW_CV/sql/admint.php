<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/test/css/contacto.css">
    <style>
        table {            
            width: 100%
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div id="otros">
    <h2><em>Registros de contacto</em></h2>
    <?php
        header('Content-type: text/html; charset=utf-8');
       $server = "localhost";
        $usuario = "root";
        $contra = "";
        $nombredb = "test";

        $conexion = new mysqli($server, $usuario, $contra, $nombredb);

        if ($conexion->connect_error) {
            die("no se pudo conectar a la base de datos");
        }
        $sql = "SELECT * FROM test_wb";
        
        $resultado = $conexion->query($sql);
        echo "<form method=\"POST\" action=\"borrar.php\">";
        
        echo "<table><thead><tr><td>seleccionar</td><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Email</td><td>Asunto</td></tr></thead><tbody>";
        
        if (!$resultado) {
            trigger_error('Sentencia invalida: ' . $conexion->error);
        }
 
        else if ($resultado->num_rows > 0) {
            
            while($row = $resultado->fetch_assoc()) {

            echo "<tr><td><input type=\"checkbox\" value=\"" . $row["nombre"] . "\"></td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["telefono"] . "</td><td>" . $row["email"] . "</td>" . "<td>" . $row["asunto"] . "<td/></tr>";
            }
        } else {
            echo "0 results";
        }
        echo "<input style=\"width: auto\" type=\"submit\" value=\"enviar\">";
        echo "<form>";
        $conexion->close();
    ?>
</div>