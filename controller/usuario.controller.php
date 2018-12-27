<?php
require_once 'model/usuario.php';
require_once 'model/producto.php';
require_once 'model/compra.php';
require_once 'model/embarque.php';
require_once 'model/stock.php';
require_once 'model/bl.php';
session_start();
class UsuarioController
{

  private $model_us;
  private $model_pro;
  private $model_com;
  private $model_em;
  private $model_s;
  private $model_bl;
  public function __CONSTRUCT()
    {
      $this->model_us = new Usuario();
      $this->model_pro = new Producto();
      $this->model_com = new Compra();
      $this->model_em  = new Embarque();
      $this->model_s = new Stock();
      $this->model_bl = new Bl();
    }


    public function Index()
    {
      $u = new Usuario();
      require_once 'view/login.php';
    }

    public function Compras()
    {
      $c = new Compra();
      require_once 'view/header.php';
      require_once 'view/compras.php';
      require_once 'view/footer.php';
    }

    public function Despacho()
    {
      require_once 'view/header.php';
      require_once 'view/despacho.php';
      require_once 'view/footer.php';
    }

    public function Embarques()
    {
      $em = new Embarque();
      require_once 'view/header.php';
      require_once 'view/embarques.php';
      require_once 'view/footer.php';
    }

    public function Inventario()
    {
      $s = new Stock();
      require_once 'view/header.php';
      require_once 'view/inventario.php';
      require_once 'view/footer.php';
    }

    public function Proveedores()
    {
      require_once 'view/header.php';
      require_once 'view/proveedores.php';
      require_once 'view/footer.php';
    }
    public function AGA()
    {
      require_once 'view/header.php';
      require_once 'view/aga.php';
      require_once 'view/footer.php';
    }

    public function EmbarquesPorCompras()
    {
      $em = new Embarque();
      $id = $_REQUEST['id'];
      require_once 'view/header.php';
      require_once 'view/embarquesPorCompras.php';
      require_once 'view/footer.php';
    }

    public function IngresarEmbarque()
    {
      $em = new Embarque();
      $id = $_REQUEST['id'];
      $em = $this->model_em->ListarID($id);
      require_once 'view/header.php';
      require_once 'view/ingresarEmbarque.php';
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

    public function LogOut()
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

    public function GuardarCompra()
    {
      $co = new Compra();
      $em = new Embarque();
      $s = new Stock;
      $porInternar = 0;

       $co->idCompra = $_REQUEST['idCompra'];
       $co->idProducto = $_REQUEST['idProducto'];
       $co->proveedor = $_REQUEST['proveedor'];
       $co->cantidadPedido = $_REQUEST['cantidadPedido'];
       $co->fechaInicio = $_REQUEST['fechaInicio'];
       $co->fechaTermino = $_REQUEST['fechaTermino'];
       $this->model_com->Insertar($co);
       for ($i=1; $i <= $_REQUEST['cantidadEntregas'] ; $i++)
       {

           $em->idEmbarque = $_REQUEST['idCompra'].'/'.$i;
           $em->idCompra = $_REQUEST['idCompra'];
           $em->cantContenedores = $_REQUEST['cant'.$i];
           $this->model_em->Insertar1($em);
           $this->model_s->InsertarEmbarque($_REQUEST['idCompra'].'/'.$i);
           $this->model_s->AgregarPorInternar($_REQUEST['cant'.$i],$_REQUEST['idCompra'].'/'.$i);
             //$porInternar = $porInternar + $_REQUEST['cant'.$i];

           //$porInternarActual = $this->model_s->ListarPorInternar($_REQUEST['idCompra'].'/'.$i);
           //echo $porInternar;
           //$porInternarActual->porInternar + $porInternar ;
           //$this->model_s->AgregarPorInternar($porInternarActual->porInternar, $_REQUEST['idCompra'].'/'.$i);

       }



      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Compras";</script>';


    }

    public function GuardarEmbarque()
    {
      $e = new Embarque();
      $bl = new Bl();
      $cant = $_REQUEST['cantBl'];

       $e->linea = $_REQUEST['linea'];
       $e->motoNave = $_REQUEST['motoNave'];
       $e->fechaPedido = $_REQUEST['fechaPedido'];
       $e->fechaEntrega = $_REQUEST['fechaEntrega'];
       $e->pSeguro = $_REQUEST['pSeguro'];
       $e->puertoDestino = $_REQUEST['puertoDestino'];
       $e->embarcador = $_REQUEST['embarcador'];
       $e->consignee = $_REQUEST['consignee'];
       $e->tMaritimo = $_REQUEST['tMaritimo'];
       $e->coMODATO = $_REQUEST['coMODATO'];
       $e->gateIn = $_REQUEST['gateIn'];
       $e->diasLibres = $_REQUEST['diasLibres'];
       $e->depositoDevVacio = $_REQUEST['depositoDevVacio'];
       $e->lote = $_REQUEST['lote'];

      for ($i=1; $i <= $cant ; $i++)
      {
         $bl->bl = $_REQUEST['bl'.$i];
         $bl->idEmbarque = $_REQUEST['idEmbarque'];
        $this->model_bl->Insertar($bl);
      }

      $this->model_em->Insertar2($e,$_REQUEST['idEmbarque']);

      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Embarques";</script>';

    }


    public function Llego()
    {
      $em = new Embarque();
      $id = $_REQUEST['id'];
      $em->CambiarEstadoLlego($id);
      /*$em->ListarID($id);
      echo $em->cantidad;
      echo $em->producto;*/
      Header('Location: index.php?c=Usuario&a=Embarques');


    }

  }

?>