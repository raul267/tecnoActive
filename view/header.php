<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/menu/pagina.css">
    <link rel="stylesheet" href="assets/pagina/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/pagina/DataTables/datatables.min.css"/>


    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="topnav" id="myTopnav">
      <a href="#">Inicio</a>
      <a href="?c=Usuario&a=Compras" class="active">Compras</a>
      <a href="?c=Usuario&a=Embarques">Embarques</a>
      <a href="?c=Usuario&a=Inventario">Inventario</a>
      <a href="?c=Usuario&a=Despacho">Despacho</a>
      <a href="?c=Usuario&a=AGA">AGA</a>
      <a href="?c=Usuario&a=Proveedores">Proveedores</a>
      <a href="#">Contabilidad</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
          <button type="button" class="btn btn-success"style="float:right;" name="button" class="data-toggle="modal" data-target="#exampleModal">Bienvenido <?php echo $_SESSION['nombre_usuario'] ?></button>
        </div>
