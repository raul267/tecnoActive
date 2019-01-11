<?php
  class Despachosemanal
  {
    private $conn;
    public $idProducto;
    public $cliente;
    public $fechaEntrega;
    public $cantidad;

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

     public function Insertar($de)
     {
         $sql = $this->conn->prepare("INSERT INTO despachosemanal (idProducto, cliente, fechaEntrega,cantidad) values(?,?,?,?)");
         $sql->execute(array($de->idProducto, $de->cliente, $de->fechaEntrega,$de->cantidad));
     }

     public function Listar()
     {
         $sql = $this->conn->prepare("SELECT * FROM despachosemanal join producto p using(idProducto)");
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function ListarID($id)
     {
         $sql = $this->conn->prepare("SELECT * FROM despachosemanal join producto p using(idProducto) where id = ?");
         $sql->execute(array($id));
         return $sql->fetch(PDO::FETCH_OBJ);
     }
}
?>
