<?php
  class Stock
  {
    private $conn;
    public $idStock;
    public $idProducto;
    public $internadas;
    public $porInternar;

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

     public function Insertar($s)
     {
        $sql = $this->conn->prepare("INSERT INTO stock(idProducto,internadas,porInternar) values(?,?,?)");
        $sql->execute(array($s->idProducto,$s->internadas,$s->porInternar));
     }

     public function Listar()
     {
       $sql = $this->conn->prepare("SELECT * FROM stock s join producto p on s.idProducto = p.idProducto");
       $sql->execute();
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function ListarIDProducto($idProducto)
     {
       $sql = $this->conn->prepare("SELECT * FROM stock where idProducto =?");
       $sql->execute($idProducto);
       return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function AgregarPorInternar($numero,$id)
     {
       $sql = $this->conn->prepare("UPDATE stock SET porInternar = ? WHERE idProducto = ?");
       $sql->execute(array($numero,$id));
     }

     public function Internar($id, $numero)
     {
       $sql = $this->conn->prepare("UPDATE stock SET internar = ? WHERE idProducto = ?");
       $sql->execute(array($id,$numero));
     }
   }
   ?>
