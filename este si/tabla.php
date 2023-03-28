<?php

$enlace = mysqli_connect('localhost', 'root', '', 'login');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Hello, world!</title>
</head>

<body>

  <table class="table">
    <thead>
      <tr class="table-primary">
        <th scope="col">nombre</th>
        <th scope="col">apellido</th>
        <th scope="col">id</th>

      </tr>
    </thead>

    <?php
    $sql = " Select * from getfiles";
    $resul = mysqli_query($enlace, $sql);

    while ($mostra = mysqli_fetch_array($resul)) {
      ?>

      <tr>
        <td>
          <?php echo $mostra['usuario'] ?>
        </td>
        <td>
          <?php echo $mostra['clave'] ?>
        </td>
        <td>
          <?php echo $mostra['id'] ?>
        </td>
        <td>    <select>
        <option>cantidad de planas</option>

          <option value="100">100</option>
          <option value="200">200</option>

        </select> </td>
        <td> <button class="btn btn-success">motivo</button></td>

        <td> <button class="btn btn-danger">eliminar</button></td>
        


      </tr>
      <?php
    }
    ?>
  </table>
  <script>
    
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>