<?php
class Embarque
{
  private $conn;
  public $idCompra;
  public $cantContenedores;
  public $bl;
  public $linea;
  public $motoNave;
  public $fechaPedido;
  public $fechaEntrega;
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
    $sql = $this->conn->prepare("INSERT INTO embarque(idEmbarque,cantContenedores,bl,linea,motoNave,fechaPedido,fechaEntrega) VALUES(?,?,?,?,?,?,?)");
    $sql->execute(array($em->idEmbarque,$em->cantContenedores,$em->bl,$em->linea,$em->motoNave,$em->fechaPedido,$em->fechaEntrega));
  }

  public function Listar()
  {
      $sql = $this->conn->prepare("SELECT * FROM embarque order by idEmbarque");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);
  }

  public function ListarIDCompra($id)
  {
    $sql = $this->conn->prepare("SELECT * FROM embarque WHERE idCompra =?");
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
        $sql = $this->conn->prepare("SELECT * FROM embarque WHERE idEntrega =?");
        $sql->execute($id);
        return $sql->fetch(PDO::FETCH_OBJ);
      }

      public function CambiarEstadoLlego($id)
      {
        $sql = $this->conn->prepare("UPDATE `embarque` SET `enPuerto` = '1' WHERE idEmbarque = ?");
        $sql->execute(array($id));
      }
  }

?>
