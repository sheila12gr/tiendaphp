<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>MOSTRAR CLIENTE</h1>
    <h2>Introduce el tipo de ordenacion</h2>
    <form action="./controladorMostrarClientes.php" method="post">
          Ordenado por: 
          <br><input type="radio" name="tipoOrdenacion" value="nombreasc">Nombre Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="nombredesc">Nombre Descendente
          <br><input type="radio" name="tipoOrdenacion" value="apellidosasc">Apellidos Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="apellidosdesc">Apellidos Descendente
          <br>
          <input type="submit">
    </form>

</body>
</html>
