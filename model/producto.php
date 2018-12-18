<?php
  class Producto
  {
    private $conn;
    public $idProducto;
    public $descripcion;
    public $valor;

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

     public function Insertar($pro)
     {
         $sql = $this->conn->prepare("INSERT INTO producto (descripcion,valor) values(?,?)");
         $sql->execute(array($pro->descripcion, $pro->valor));
     }

     public function Listar()
     {
         $sql = $this->conn->prepare("SELECT * FROM producto");
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function ListarNombre($id)
     {
       $sql = $this->conn->prepare("SELECT * from producto where idProducto = ?");
       $sql->execute(array($id));
       return $sql->fetch(PDO::FETCH_OBJ);
     }
}
