<?php
  class Internacion
  {
    private $conn;
    public $nProvision;
    public $bl;
    public $transferido;
    public $nIdentDI;
    public $fechaPagoDI;
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

     public function Insertar($in)
     {
         $sql = $this->conn->prepare("INSERT INTO internacion (nProvision,bl,transferido,nIdentDI,fechaPagoDI) values(?,?,?,?,?)");
         $sql->execute(array($in->nProvision,$in->bl,$in->transferido,$in->nIdentDI,$in->fechaPagoDI));
     }

     public function Listar()
     {
         $sql = $this->conn->prepare("SELECT * FROM internacion i right join bl b using(bl) join embarque e using(idEmbarque) join compra c using(idCompra) join producto p using(idProducto)");
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_OBJ);
     }
}
?>
