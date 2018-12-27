<?php
  class Stock
  {
    private $conn;
    public $idEmbarque;
    public $internadas;
    public $porInternar;
    public $despachadas;
    public $stock;
    public $resolucion;

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
        $sql = $this->conn->prepare("INSERT INTO stock(idEmbarque,internadas,porInternar,despachadas,stock,resolucion) values(?,?,?,?,?,?)");
        $sql->execute(array($s->idEmbarque,$s->internadas,$s->porInternar,$s->despachadas,$s->stock,$s->resolucion));
     }

     public function InsertarEmbarque($id)
     {
        $sql = $this->conn->prepare("INSERT INTO stock(idEmbarque) values(?)");
        $sql->execute(array($id));
     }
     public function Listar()
     {
       $sql = $this->conn->prepare("SELECT * from stock s right join embarque using(idEmbarque) right join bl b using(idEmbarque) join compra using(idCompra) join producto p USING(idProducto)");
       $sql->execute();
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function ListarIDProducto($idEmbarque)
     {
       $sql = $this->conn->prepare("SELECT * FROM stock where idEmbarque =?");
       $sql->execute($idEmbarque);
       return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function ListarPorInternar($idEmbarque)
     {
       $sql = $this->conn->prepare("SELECT porInternar porInternar FROM stock where idEmbarque =?");
       $sql->execute(array($idEmbarque));
       return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function ListarInternado($idEmbarque)
     {
       $sql = $this->conn->prepare("SELECT internado insternado FROM stock where idEmbarque =?");
       $sql->execute(array($idEmbarque));
       return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function AgregarPorInternar($numero,$id)
     {
       $sql = $this->conn->prepare("UPDATE stock SET porInternar = ? WHERE idEmbarque = ?");
       $sql->execute(array($numero,$id));
     }

     public function Internar($id, $numero)
     {
       $sql = $this->conn->prepare("UPDATE stock SET internar = ? WHERE idEmbarque = ?");
       $sql->execute(array($id,$numero));
     }


   }
   ?>
