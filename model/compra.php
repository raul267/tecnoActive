<?php
 Class Compra
 {
    private $conn;
    public $cantidadEntregas;

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

    public function Insertar($co)
    {
      $sql = $this->conn->prepare("INSERT INTO compra(cantidadEntregas) values(?)");
      $sql->execute($co->cantidadEntregas);
    }

    public function Listar()
    {
        $sql = $this->conn->prepare("SELECT * FROM compra c JOIN entrega e using(idCompra) JOIN producto p using(idProducto)");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

        public function ListarID($id)
        {
          $sql = $this->conn->prepare("SELECT * FROM compra WHERE idCompra =?");
          $sql->execute($id);
          return $sql->fetch(PDO::FETCH_OBJ);
        }

 }


 ?>
