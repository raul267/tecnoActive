<?php
class Producto
{
  private $conn;
  public $idCompra;
  public $idProducto;
  public $cantidad;
  public $fechaPedido;
  public $fechaEntrega;
  public $total;

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

  public function Insertar($en)
  {
    $sql = $this->conn->prepare("INSERT INTO entrega(idCompra,idProducto,cantidad,fechaPedido,fechaEntrega,total) VALUES(?,?,?,?,?,?)");
    $sql->execute($en->idCompra,$en->idProducto,$en->cantidad,$en->fechaPedido,$en->fechaEntrega,$en->total);
  }

  public function Listar()
  {
      $sql = $this->conn->prepare("SELECT * FROM entrega");
      $sql->execute();
      return $sql->fetchAll(PDO::FETCH_OBJ);

      public function ListarID($id)
      {
        $sql = $this->conn->prepare("SELECT * FROM entrega WHERE idEntrega =?");
        $sql->execute($id);
        return $sql->fetch(PDO::FETCH_OBJ);
      }
  }

?>
