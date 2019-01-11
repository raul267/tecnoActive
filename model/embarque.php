<?php
class Embarque
{
  private $conn;
  public $idEmbarque;
  public $idCompra;
  public $cantContenedores;
  public $bl;
  public $linea;
  public $motoNave;
  public $fechaPedido;
  public $fechaEntrega;
  public $pSeguro;
  public $puertoDestino;
  public $embarcador;
  public $consignee;
  public $tMaritmo;
  public $coMODATO;
  public $gateIn;
  public $diasLibres;
  public $depositoDevVacio;
  public $enPuerto;
  public $lote;
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
    $sql = $this->conn->prepare("INSERT INTO embarque(idEmbarque,idCompra,cantContenedores,bl,linea,motoNave,fechaPedido,fechaEntrega) VALUES(?,?,?,?,?,?,?,?)");
    $sql->execute(array($em->idEmbarque,$em->idCompra,$em->cantContenedores,$em->bl,$em->linea,$em->motoNave,$em->fechaPedido,$em->fechaEntrega));
  }

  public function Insertar1($em)
  {
    $sql = $this->conn->prepare("INSERT INTO embarque(idEmbarque,idCompra,cantContenedores) VALUES(?,?,?)");
    $sql->execute(array($em->idEmbarque,$em->idCompra,$em->cantContenedores));
  }

  public function Insertar2($em,$idEmbarque)
  {
    $sql = $this->conn->prepare("UPDATE embarque SET  linea=?, motoNave=?, fechaPedido =?, fechaEntrega =?, pSeguro =?, puertoDestino =?, embarcador =?, consignee =?, tMaritimo =?, coMODATO =?, gateIn =?, diasLibres =?, depositoDevVacio =?, lote = ? WHERE idEmbarque=?");
    $sql->execute(array($em->linea,$em->motoNave,$em->fechaPedido,$em->fechaEntrega,$em->pSeguro,$em->puertoDestino,$em->embarcador,$em->consignee,$em->tMaritimo,$em->coMODATO,$em->gateIn,$em->diasLibres,$em->depositoDevVacio,$em->lote,$idEmbarque));
  }


  public function Listar()
  {
      $sql = $this->conn->prepare("SELECT * FROM embarque e JOIN bl b USING(idEmbarque) order by fechaEntrega DESC");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
  }

  public function ListarIDCompra($id)
  {
    $sql = $this->conn->prepare("SELECT * FROM embarque e LEFT JOIN bl b USING(idEmbarque) WHERE idCompra = ? and enPuerto = 0 and bl is null");
    $sql->execute(array($id));
    return $sql->fetchAll(PDO::FETCH_OBJ);
  }

    public function ListarFechaMayor()
    {
      $sql = $this->conn->prepare("SELECT * FROM embarque e JOIN bl b USING(idEmbarque) WHERE fechaEntrega > sysdate()");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function ListarNoEntregadas()
    {
      $sql = $this->conn->prepare("SELECT * FROM embarque e JOIN bl b USING(idEmbarque) WHERE enPuerto = 0");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
    }


      public function ListarID($id)
      {
        $sql = $this->conn->prepare("SELECT cantidad cantidad, idProducto producto FROM embarque e JOIN compra c USING(idCompra) JOIN producto USING(idProducto) JOIN bl b USING(idEmbarque) WHERE idEmbarque = ?");
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
