<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>REGISTRAR CLIENTE</h1>
    <h2>Introduce los datos del nuevo cliente</h2>
    <form action="./controladorInsertarClientes.php" method="post">
          Dni: <input type="number" name="dni"><br>
          Nombre: <input type="text" name="nombre"><br>
          Apellidos: <input type="text" name="apellidos"><br>
          Movil: <input type="number" name="movil"><br>
          Direccion: <input type="text" name="dierccion"><br>
          <input type="submit">
    </form>

</body>
</html>
