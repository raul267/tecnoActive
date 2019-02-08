<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <link rel="stylesheet" href="assets/menu/pagina.css">
    <link rel="stylesheet" href="assets/pagina/css/bootstrap.css">
    <link rel="stylesheet" href="assets/pagina/css/miCSS.css">
    <link rel="stylesheet" href="assets/pagina/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/pagina/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/pagina/datatables.min.js"/>
    <script src="assets/pagina/js/sweet-alert.js"></script>
    <link rel="shortcut icon" href="assets/login/images/fondoLogin.ico" />
    <meta charset="utf-8">
    <title>PDV Chile</title>
  </head>
  <body>
    <div class="topnav" id="myTopnav" style="width:100%; background: rgba(0,0,0,0.9);width: 100%;position: fixed;z-index: 100;">
      <?php if ($_SESSION['tipo'] == 0): ?>
        <a href="?c=Usuario&a=Admin">Inicio</a>
      <?php endif; ?>
      <a href="?c=Usuario&a=Compras">Compras</a>
      <a href="?c=Usuario&a=Embarques">Embarques</a>
      <a href="?c=Usuario&a=Inventario">Inventario</a>
      <a href="?c=Usuario&a=Despacho">Despacho</a>
      <a href="?c=Usuario&a=AGA">AGA</a>
      <a href="?c=Usuario&a=Proveedores">Proveedores</a>
      <a href="#">Contabilidad</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
      <label style="color:white; margin-top:15px;"><?php if ($_SESSION['ultima'] !=null): ?>
        Tu última coneccíón fue : <?php echo $_SESSION['ultima']; ?>
      <?php endif; ?></label>
      <?php if ($_SESSION['tipo'] == 1): ?>
        <button type="button" class="btn btn-primary btn-sm"style="float:right; margin:8px;" name="button" class="btn btn-success" data-toggle="modal" data-target="#modalpass">Cambiar contraseña</button>
      <?php endif; ?>

          <button type="button" class="btn btn-success"style="float:right; margin-top:8px;" name="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Bienvenido <?php echo $_SESSION['nombre_usuario'] ?></button>
        </div>
        <br><br><br>
