<?php
require_once 'model/usuario.php';
require_once 'model/producto.php';
require_once 'model/compra.php';
require_once 'model/embarque.php';
require_once 'model/stock.php';
require_once 'model/bl.php';
require_once 'model/internacion.php';
require_once 'model/despacho.php';
require_once 'model/despachosemanal.php';
require_once 'model/proveedores.php';
session_start();
class UsuarioController
{

  private $model_us;
  private $model_pro;
  private $model_com;
  private $model_em;
  private $model_s;
  private $model_bl;
  private $model_in;
  private $model_des;
  private $model_dese;
  private $model_p;
  public function __CONSTRUCT()
    {
      $this->model_us = new Usuario();
      $this->model_pro = new Producto();
      $this->model_com = new Compra();
      $this->model_em  = new Embarque();
      $this->model_s = new Stock();
      $this->model_bl = new Bl();
      $this->model_in = new Internacion();
      $this->model_des = new Despacho();
      $this->model_dese = new Despachosemanal();
      $this->model_p = new Proveedores();
    }


    public function Index()
    {
      $u = new Usuario();
      require_once 'view/login.php';
    }

    public function Admin()
    {
      $u = new Usuario();
      $p = new Producto();

      require_once 'view/headerAdmin.php';
      require_once 'view/admin.php';
      require_once 'view/footer.php';

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
      $d = new Despacho();
      $ds = new Despachosemanal();
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
      $bl = new Bl();
      require_once 'view/header.php';
      require_once 'view/inventario.php';
      require_once 'view/footer.php';
    }

    public function AdminProductos()
    {
      $p = new Producto();
      require_once 'view/header.php';
      require_once 'view/listarProductos.php';
      require_once 'view/footer.php';
    }


    public function Proveedores()
    {
      $p = new Proveedores();
      require_once 'view/header.php';
      require_once 'view/proveedores.php';
      require_once 'view/footer.php';
    }
    public function AGA()
    {
      $in = new Internacion();
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

    public function IngresarProducto()
    {
      $p = new Producto();
      require_once 'view/header.php';
      require_once 'view/ingresarProducto.php';
      require_once 'view/footer.php';

    }

    public function IngresarInternacion()
    {
      $in = new Internacion();
      require_once 'view/header.php';
      require_once 'view/ingresarInternacion.php';
      require_once 'view/footer.php';
    }

    public function IngresarProgramacionDespacho()
    {
      $de = new Despachosemanal();
      $p = new Producto();
      require_once 'view/header.php';
      require_once 'view/ingresarProgramacionDespacho.php';
      require_once 'view/footer.php';
    }

    public function Ingresar()
    {
      date_default_timezone_set('America/Santiago');
      $nombre = $_REQUEST['txtNombre'];
      $password = $_REQUEST['txtPassword'];
      $ultimaConexion = date('m/d/Y g:ia');

      $u = $this->model_us->ListarNombre($nombre);

      if ($nombre == $u->nombre && $password == $u->password)
      {
          if ($u->tipoUsuario == 0 )
          {

            $_SESSION['nombre_usuario'] = $u->nombre;
            $_SESSION['id_usuario'] = $u->idUsuario;
            $_SESSION['ultima'] = $u->ultimaConexion;

            header('Location: index.php?c=Usuario&a=Admin');


          }
          else
          {
            header('Location: index.php?c=Usuario&a=Compras');
            $_SESSION['nombre_usuario'] = $u->nombre;
            $_SESSION['id_usuario'] = $u->idUsuario;
            $_SESSION['ultima'] = $u->ultimaConexion;
            $this->model_us->ActualizarConeccion($ultimaConexion,$u->idUsuario);
          }

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

    public function CambiarPassword()
    {
       $u = new Usuario();
       $antigua = $_REQUEST['passActual'];
       $nueva = $_REQUEST['passNueva'];
       $id = $_REQUEST['id'];

       $u = $this->model_us->ListarID($id);
       if ($u->password == $antigua)
       {
         $this->model_us->ActualizarPassword($nueva,$id);
         echo '<script language="javascript">alert("Se cambio la contraseña"); window.location.href="?c=Usuario&a=Compras";</script>';
       }
       else
       {
             echo '<script language="javascript">alert("Error al cambiar la contraseña"); window.location.href="?c=Usuario&a=Compras";</script>';
       }
    }

    public function IngresarCompra()
    {
      $producto = new Producto();
      require_once('view/header.php');
      require_once('view/ingresarCompra.php');
      require_once('view/footer.php');
    }

    public function IngresarDespacho()
    {
      $p = new Producto();
      $bl = new Bl();
      require_once('view/header.php');
      require_once('view/ingresarDespacho.php');
      require_once('view/footer.php');
    }

    public function IngresarProveedores()
    {
      $p = new Proveedores();
      require_once('view/header.php');
      require_once('view/ingresarProveedores.php');
      require_once('view/footer.php');
    }

    public function IngresarUsuario()
    {
      $u = new Usuario();
      require_once('view/header.php');
      require_once('view/ingresarUsuario.php');
      require_once('view/footer.php');
    }

    public function ModificarProducto()
    {
      $p = new Producto();
      $p = $this->model_pro->ListarNombre($_REQUEST['id']);
      require_once('view/header.php');
      require_once('view/modificarProducto.php');
      require_once('view/footer.php');

    }

    public function ModificarDespachoSemanal()
    {
      $bl = new Bl();
      $de = new Despachosemanal();
      $de = $this->model_dese->ListarID($_REQUEST['idD']);
      require_once('view/header.php');
      require_once('view/modificarDespachoSemanal.php');
      require_once('view/footer.php');

    }

    public function InsertarUsuario()
    {
      $u = new Usuario();
      $u->nombre = $_REQUEST['nombre'];
      $u->password = $_REQUEST['password'];

      $this->model_us->Insertar($u);
        echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Admin";</script>';

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

       }
          // echo '<script language="javascript">swal("Exito al Registrar"); window.location.href="index.php?c=Usuario&a=Compras";</script>';
      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Compras";</script>';
    }

    public function GuardarEmbarque()
    {
      $e = new Embarque();
      $bl = new Bl();
      $s = new Stock();
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
          $cantidad = $_REQUEST['cantidad'.$i];
          $bl->bl = $_REQUEST['bl'.$i];
          $bl->cantidad = $cantidad;
          $bl->idEmbarque = $_REQUEST['idEmbarque'];
          $this->model_bl->Insertar($bl);
          // recordatorio llamar un dato de una tabla $can = $this->model_bl->ListarCantidad($_REQUEST['bl'.$i]);

         $this->model_s->InsertarEmbarque($bl->bl,$cantidad);

         //$this->model_s->AgregarPorInternar($cantidad,$bl);
      }

      $this->model_em->Insertar2($e,$_REQUEST['idEmbarque']);

      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Embarques";</script>';

    }

    public function GuardarInternacion()
    {
      $in = new Internacion;

      $in->nProvision = $_REQUEST['nProvision'];
      $in->transferido = $_REQUEST['transferido'];
      $in->fechaProvision = $_REQUEST['fechaProvision'];
      $in->fechaPagoDI = $_REQUEST['fechaPagoDI'];
      $in->nIdentDI = $_REQUEST['nIdentDI'];
      $in->fa = $_REQUEST['fa'];
      $in->bl = $_REQUEST['bl'];

      //Insertar PDF
      $nombreArchivo = $_REQUEST['bl'];
      $i = $_FILES['faFile']['name'];
      $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
      $archivo = $_FILES['faFile']['tmp_name'];
      $ruta = "PDFS/";
      $ruta = $ruta.$nombreArchivo.".".$ext;

      move_uploaded_file($archivo, $ruta);
      $in->faFile = $ruta;

      $this->model_in->Insertar($in);
      echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=AGA";</script>';
    }

    public function GuardarDespacho()
    {
          $d = new Despacho();
          $s = new Stock();
          $de = new Despachosemanal();


          $d->cliente = $_REQUEST['cliente'];
          $d->tipoDocumento = $_REQUEST['tipoDocumento'];
          $d->facturaNro = $_REQUEST['facturaNro'];
          $d->fechaEmision = $_REQUEST['fechaEmision'];
          $d->fechaEntrega = $_REQUEST['fechaEntrega'];
          $d->montoTotal = $_REQUEST['montoTotal'];
          $d->idProducto = $_REQUEST['idProducto'];
          $d->cantidadKG = $_REQUEST['cantidadKG'];

         $bl = $_REQUEST['ddlbl'];
         $s = $this->model_s->ListarPorInternar($bl);
         $s->despachadas = $s->despachadas + $_REQUEST['cantidadKG'];
         $s->stock = $s->stock - $_REQUEST['cantidadKG'];


          $this->model_des->Insertar($d);
          $this->model_s->Despachar($s->despachadas,$s->stock,$bl);
          $this->model_dese->Delete($_REQUEST['id']);
          echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Despacho";</script>';

    }

    public function GuardarDespachoSemanal()
    {
      $d = new Despachosemanal();

       $d->idProducto = $_REQUEST['idProducto'];
       $d->cliente = $_REQUEST['cliente'];
       $d->fechaEntrega = $_REQUEST['fechaEntrega'];
       $d->cantidad = $_REQUEST['cantidad'];

       $this->model_dese->Insertar($d);
       echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Despacho";</script>';

    }

    public function GuardarProveedores()
    {
      $p = new Proveedores();

       $p->proveedor = $_REQUEST['proveedor'];
       $p->fechaGeneracion = $_REQUEST['fechaGeneracion'];
       $p->fechaPago = $_REQUEST['fechaPago'];
       $p->valor = $_REQUEST['valor'];

      //Insertar PDF
      $nombreArchivo = $_REQUEST['proveedor'];
      $i = $_FILES['factura']['name'];
      $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
      $archivo = $_FILES['factura']['tmp_name'];
      $ruta = "FACTURAS/";
      $ruta = $ruta.$nombreArchivo.".".$ext;

      move_uploaded_file($archivo, $ruta);
       $p->factura = $ruta;
       $this->model_p->Insertar($p);

       echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=Proveedores";</script>';

    }

    public function InsertarProducto()
    {
      $p = new Producto();

       $p->idProducto = $_REQUEST['idProducto'];
       $p->descripcion = $_REQUEST['descripcion'];
       $p->valor = $_REQUEST['valor'];

       $this->model_pro->Insertar($p);
       echo '<script language="javascript">alert("Exito al guardar"); window.location.href="index.php?c=Usuario&a=AdminProductos";</script>';
    }



    public function CambiarProducto()
    {
      $p = new Producto();
       $p->valor = $_REQUEST['valor'];
       $p->descripcion = $_REQUEST['descripcion'];
       $p->idProducto = $_REQUEST['id'];
       $this->model_pro->Update($p);

       echo '<script language="javascript">alert("Exito al modificar"); window.location.href="index.php?c=Usuario&a=AdminProductos";</script>';
    }

    public function EliminarProducto()
    {

      $this->model_pro->Delete($_REQUEST['id']);
      echo '<script language="javascript">alert("Exito al eliminar"); window.location.href="index.php?c=Usuario&a=AdminProductos";</script>';
    }

    public function EliminarUsuario()
    {

      $this->model_us->Delete($_REQUEST['id']);
      echo '<script language="javascript">alert("Exito al eliminar"); window.location.href="index.php?c=Usuario&a=Admin";</script>';
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

    public function Internar()
    {
      $b = new Bl();
      $s = new Stock();
      $bl = $_REQUEST['bl'];
      $b->CambiarEstadoInternar($bl);
      $s = $this->model_s->ListarPorInternar($bl);
      $s->internadas = $s->porInternar;
      $s->porInternar = $s->porInternar - $s->porInternar;
      $this->model_s->Internar($s->internadas,$s->porInternar,$bl);
      Header('Location: index.php?c=Usuario&a=AGA');
    }

    public function InternarPartes()
    {
      $b = new Bl();
      $s = new Stock();
      $bl = $_REQUEST['bl'];
      $s = $this->model_s->ListarPorInternar($bl);

        $total = $_REQUEST['total'];
        $cInternar = $_REQUEST['cantidadInternar'];

       //Cambiar estado dependiendo la cantidad de internacion
       if ($s->porInternar == $cInternar)
       {
          $b->CambiarEstadoInternar($bl);
          "Internado";
       }

         $s->internadas = $s->internadas + $cInternar;
         $s->porInternar = $s->porInternar - $cInternar;
         $this->model_s->Internar($s->internadas,$s->porInternar,$bl);
         Header('Location: index.php?c=Usuario&a=AGA');
    }

    public function Resolucion()
    {
      $s = new Stock();
      $id = $_REQUEST['id'];
      $this->model_s->Resolucion($id);
      Header('Location: index.php?c=Usuario&a=Inventario');

    }


  }

?>
