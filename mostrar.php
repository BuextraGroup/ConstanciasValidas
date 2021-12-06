<?php
include 'conexion.php';
$mostrar = "SELECT * from constancias";
$resultado = mysqli_query($conexion, $mostrar)
  or die("Error al mostrar los registros");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los datos</title>
    <link rel="shortcut icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body style="background-color: #E1E8EB;">
    <!--Inicio del munú-->

 <nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="logo.png" alt="" width="150" height="90">
      </a>
      <div class="boton" style="text-align: center;">
      <form action="select.php" method="POST">
          <input type="text" name= "folio" placeholder="Busque mediante el folio" />
          <input type="submit" value="Buscar">
        </form>
  </div>
    </div>
  </nav>

  <!--Fin del menú-->
    
    <div class="datos">
    <div class="col-ms-8">
    <table class="table table-bordered border-secondary" style="text-align: center; margin-top: 40px">
      <thead class="table-dark">
        <tr>
            <th><b><font>Nombre</font></b></th>
            <th><b><font >Folio</font></b></th>
            <th><b><font >Tipo de constancia</font></b></th>
            <th><b><font >Fecha de expedición</font></b></th>
            <th><b><font >Vigencia</font></b></th>
        </tr>
      </thead>

      <tbody>
        <?php
            while ($row = $resultado->fetch_array()) {
        ?>
            <tr>
                <th><?php echo $row['nombre']?></th>
                <th><?php echo $row['folio']?></th>
                <th><?php echo $row['tipo_certificacion']?></th>
                <th><?php echo $row['fecha_certificacion']?></th>
                <th><?php echo $row['vigencia']?></th>
            </tr>
          <?php
              }
            ?>
      </tbody>
    </table>
  </div>
</div>


</body>
</html>
</body>
</html>




