<?php
class Embarque
{
  private $conn;
  public $idEmbarque;
  public $idCompra;
  public $cantidad;
  public $cantContenedores;
  public $bl;
  public $linea;
  public $motoNave;
  public $fechaPedido;
  public $fechaEntrega;
  public $puertoDestino;
  public $embarcador;
  public $consignee;
  public $tMaritmo;
  public $gateIn;
  public $diasLibres;
  public $depositoDevVacio;
  public $enPuerto;

    public function __CONSTRUCT()
       {
           try
           {
             $this->conn = Database::Conn();
           }
           catch(Exception $e)
           {
             die($e->getMessage());
           }
       }

  public function Insertar($em)
  {
    $sql = $this->conn->prepare("INSERT INTO embarque(idEmbarque,idCompra,cantidad,cantContenedores,bl,linea,motoNave,fechaPedido,fechaEntrega) VALUES(?,?,?,?,?,?,?,?,?)");
    $sql->execute(array($em->idEmbarque,$em->idCompra,$em->cantidad,$em->cantContenedores,$em->bl,$em->linea,$em->motoNave,$em->fechaPedido,$em->fechaEntrega));
  }

  public function Insertar1($em)
  {
    $sql = $this->conn->prepare("INSERT INTO embarque(idEmbarque,idCompra,cantContenedores) VALUES(?,?,?)");
    $sql->execute(array($em->idEmbarque,$em->idCompra,$em->cantContenedores));
  }

  public function Insertar2($em)
  {
    $sql = $this->conn->prepare("UPDATE embarque SET bl=?, linea=?, motoNave=?, fechaPedido =?, fechaEntrega =?, pSeguro =?, puertoDestino =?, embarcador =?, consignee =?, tMaritimo =?, gateIn =?, diasLibres =?, depositoDevVacio =? WHERE ?");
    $sql->execute(array($em->bl,$em->linea,$em->motoNave,$em->fechaPedido,$em->fechaEntrega,$em->pSeguro,$em->puertoDestino,$em->embarcador,$em->consignee,$em->tMaritimo,$em->gateIn,$em->diasLibres,$em->depositoDevVacio,$em->idEmbarque));
  }

  public function Listar()
  {
      $sql = $this->conn->prepare("SELECT * FROM embarque order by idEmbarque");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
  }

  public function ListarIDCompra($id)
  {
    $sql = $this->conn->prepare("SELECT * FROM embarque WHERE idCompra = ? and enPuerto = 0");
    $sql->execute(array($id));
    return $sql->fetchAll(PDO::FETCH_OBJ);
  }

    public function ListarFechaMayor()
    {
      $sql = $this->conn->prepare("SELECT * FROM embarque WHERE fechaEntrega > sysdate()");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function ListarNoEntregadas()
    {
      $sql = $this->conn->prepare("SELECT * FROM embarque WHERE enPuerto = 0");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
    }


      public function ListarID($id)
      {
        $sql = $this->conn->prepare("select e.cantidad cantidad, idProducto producto from embarque e join compra c using(idCompra) JOIN producto USING(idProducto) WHERE idEmbarque = ?");
        $sql->execute(array($id));
        return $sql->fetch(PDO::FETCH_OBJ);
      }

      public function CambiarEstadoLlego($id)
      {
        $sql = $this->conn->prepare("UPDATE `embarque` SET `enPuerto` = '1' WHERE idEmbarque = ?");
        $sql->execute(array($id));
      }
  }

?>
