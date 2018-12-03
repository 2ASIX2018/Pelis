
<!DOCTYPE html>
<html lang="ca">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap-material-design.css" rel="stylesheet">
    
    
    <title>Examen 1a Avaluació IAW</title>

    <?php
   
    require_once("models/Pelis.php");
    
    ?>

</head>

<body>
<?php
  require_once("header.html");
?>
<div class="container" style="margin-top: 100px">
<h1>Llistat de pel·lícules</h1>

<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Episodi</th>
        <th>Títol</th>
        <th>Any</th>
        <th>Director</th>
      </tr>
    </thead>

    <tbody>

      <!--  TO-DO:  Crear de forma dinàmica una taula semblant a la següent
                    amb la informació de la base de dades, fent ús dle model "Peli"-->

      <tr class="table-info">
        <td>1</td>
        <td>Harry Potter y la Piedra Filosofal</td>
        <td>2001</td>
        <td>Chris Columbus</td>
      </tr>

      <tr class="table-light">
        <td>2</td>
        <td>Harry Potter y la Cámara Secreta</td>
        <td>2002</td>
        <td>Chris Columbus</td>
      </tr>
    </tbody>
  </table>

</div>

</body>
</html>