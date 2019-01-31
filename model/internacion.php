<?php
  class Internacion
  {
    private $conn;
    public $nProvision;
    public $bl;
    public $transferido;
    public $nIdentDI;
    public $fechaPagoDI;
    public $fa;
    public $faFile;
    public $fechaProvision;
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
         $sql = $this->conn->prepare("INSERT INTO internacion (nProvision,bl,transferido,nIdentDI,fechaPagoDI, fa, faFile, fechaProvision) values(?,?,?,?,?,?,?,?)");
         $sql->execute(array($in->nProvision,$in->bl,$in->transferido,$in->nIdentDI,$in->fechaPagoDI,$in->fa,$in->faFile,$in->fechaProvision));
     }

     public function Listar()
     {
         $sql = $this->conn->prepare("SELECT * FROM internacion i right join bl b using(bl)  join embarque e using(idEmbarque)  join compra c using(idCompra) join producto p using(idProducto) join stock s using(bl) where enPuerto =1");
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_OBJ);
     }
}
?>
