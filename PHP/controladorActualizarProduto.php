<html>
  <head>
    <title>Proceso de actualizacion de nuevo producto</title>
  </head>
  <body>
    <h1>actualizar el nuevo producto...</h1>
  
<?php 

//incluimos la clase con la que trabajamos
require("./producto.php");


//recoger valores del form
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$rebaja = $_POST["rebaja"];
$estarebajado = $_POST["rebajado"];
$precio = $_POST["precio"];

if ($estarebajado <> true) {
  $estarebajado = false;
}

echo "El precio del formulario es: $precio<br>";
//hemos recogido datos del formulario... creamos objeto
$productoNuevo = new Producto($codigo,$descripcion,$rebaja,$estarebajado,$precio);
echo $productoNuevo->getPrecio()."<br>";


//Vamos a por la
$SQLUpdate = $ProductoNuevo->getUpdateSQL();

echo "La sentencia SQL a ejecutar es: ".$SQLUpdate."<br>";

$servername = "bbdd";
$username = "root";
$password = "secret";

try {
  $conn = new PDO("mysql:host=$servername;dbname=iaw_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

try {
    //la function exec está programada en la clase PDO,
    // y he leido que lo que hace es ejecutar el SQL que tenga
    //el parámetro dentro de la mysql a la que estemos conectados
   $conn->exec($SQLUpdate);
   echo "Actualizacion correcta";
} catch (PDOException $e) {
    echo "Update failed: " . $e->getMessage();
    die();
}

//cerramos la conexión
$conn = null;


?>
<a href="./index.html">Volver a inicio</a>
</body>
</html>
