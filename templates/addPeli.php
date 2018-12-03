
<!DOCTYPE html>
<html lang="ca">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap-material-design.css" rel="stylesheet">
    
    <title>Examen 1a Avaluació IAW</title>

</head>

<body>
<?php
  require_once("header.html");
?>
<div class="container" style="margin-top: 100px">
<h1>Afig una pel·lícula</h1>

<form id="addPeli" method="post" action="processRequest.php">

<div class="form-group">
<label for="Episodi">Episodi</label>
    <input type="text" class="form-control" id="Episodi" placeholder="Episodi" name="Episodi">
</div>

<div class="form-group">
<label for="Titol">Títol</label>
    <input type="text" class="form-control" id="Titol" placeholder="Títol" name="Titol">
</div>

<div class="form-group">
<label for="Any">Any de producció</label>
    <input type="text" class="form-control" id="Any" placeholder="Any de producció" name="Any">
</div>

<div class="form-group">
<label for="Director">Director</label>
    <input type="text" class="form-control" id="Director" placeholder="Director" name="Director">
</div>

<button type="submit" class="btn btn-primary btn-outline-primary">Afig la pel·lícula</button>
</form>

</div>

</body>
</html>