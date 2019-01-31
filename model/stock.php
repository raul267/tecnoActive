<?php
  class Stock
  {
    private $conn;
    public $bl;
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
        $sql = $this->conn->prepare("INSERT INTO stock(bl,internadas,porInternar,despachadas,stock,resolucion) values(?,?,?,?,?,?)");
        $sql->execute(array($s->bl,$s->internadas,$s->porInternar,$s->despachadas,$s->stock,$s->resolucion));
     }

     public function InsertarEmbarque($id,$numero)
     {
        $sql = $this->conn->prepare("INSERT INTO stock(bl,porInternar) values(?,?)");
        $sql->execute(array($id,$numero));
     }
     public function Listar()
     {
       $sql = $this->conn->prepare("SELECT * from stock s right join bl using(bl) left join embarque b using(idEmbarque) left join compra using(idCompra) left join producto p USING(idProducto) where enPuerto = 1");
       $sql->execute();
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function ListarLote()
     {
       $sql = $this->conn->prepare("SELECT lote, idEmbarque,motoNave,idProducto, sum(cantContenedores) cantContenedores,
                                      sum(cantContenedores), sum(internadas) internadas, sum(porInternar) porInternar,sum(despachadas) despachadas,sum(stock) stock
                                      from stock s right join
                                      bl using(bl)
                                      left join embarque b using(idEmbarque)
                                      left join compra using(idCompra)
                                      left join producto p USING(idProducto)
                                      where enPuerto = 1
                                      group by lote;");
       $sql->execute();
       return $sql->fetchAll(PDO::FETCH_OBJ);

     }

     public function ListarBl($bl)
     {
       $sql = $this->conn->prepare("SELECT * FROM stock where bl =?");
       $sql->execute($bl);
       return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function ListarBlDespacho($bl)
     {
       $sql = $this->conn->prepare("SELECT bl bl, stock stock FROM bl join embarque using(idEmbarque) join stock using(bl) where lote = ?");
       $sql->execute(array($bl));
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function ListarPorInternar($bl)
     {
       $sql = $this->conn->prepare("SELECT porInternar porInternar, internadas internadas, despachadas despachadas, stock stock  FROM stock where bl =?");
       $sql->execute(array($bl));
       return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function ListarInternado($bl)
     {
       $sql = $this->conn->prepare("SELECT internado insternado FROM stock where bl =?");
       $sql->execute(array($bl));
       return $sql->fetch(PDO::FETCH_OBJ);
     }

     public function Internar($numero,$numero2,$bl)
     {
       $sql = $this->conn->prepare("UPDATE stock SET internadas = ? , porInternar = ?, stock = ?  WHERE bl = ?");
       $sql->execute(array($numero,$numero2, $numero, $bl));
     }

     public function Despachar($numero,$numero2,$bl)
     {
       $sql = $this->conn->prepare("UPDATE stock SET despachadas = ?, stock =? WHERE bl = ?");
       $sql->execute(array($numero,$numero2,$bl));
     }

     public function ListarResumen()
     {
       $sql = $this->conn->prepare("SELECT p.idProducto producto, sum(internadas) internadas, sum(porInternar) porInternar from producto p join compra c on p.idProducto = c.idProducto join embarque e using(idCompra) join bl b using(idEmbarque) join stock s USING(bl) group by p.idProducto");
       $sql ->execute();
       return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function Resolucion($idStock)
     {
       $sql = $this->conn->prepare("UPDATE stock SET resolucion = 1 WHERE idStock = ?");
       $sql->execute(array($idStock));
     }


   }
   ?>
