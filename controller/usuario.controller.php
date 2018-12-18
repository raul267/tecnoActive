<?php
require_once 'model/usuario.php';
require_once 'model/producto.php';
session_start();
class UsuarioController
{

  private $model_us;
  private $model_pro;
  public function __CONSTRUCT()
    {
      $this->model_us = new Usuario();
      $this->model_pro = new Producto();
    }


    public function Index()
    {
      $u = new Usuario();
      require_once 'view/login.php';
    }

    public function Compras()
    {
      require_once 'view/header.php';
      require_once 'view/compras.php';
      require_once 'view/footer.php';
    }

    public function Ingresar()
    {
      $nombre = $_REQUEST['txtNombre'];
      $password = $_REQUEST['txtPassword'];

      $u = $this->model_us->ListarNombre($nombre);

      if ($nombre == $u->nombre && $password == $u->password)
      {
          header('Location: index.php?c=Usuario&a=Compras');
          $_SESSION['nombre_usuario'] = $u->nombre;

      }
      else
      {

        echo '<script language="javascript">alert("Error al iniciar sesion"); window.location.href="index.php";</script>';

      }

    }

    public function logOut()
    {
      session_destroy();
      header('Location:index.php');
    }

    public function IngresarCompra()
    {
      $producto = new Producto();
      require_once('view/header.php');
      require_once('view/ingresarCompra.php');
      require_once('view/footer.php');
    }

    public function Guardarcompra()
    {
      $co = new Compra();
      $en = new Entrega();

      
    }

  }

?>
