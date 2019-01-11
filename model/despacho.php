<?php
  class Despacho
  {
    private $conn;
    public $cliente;
    public $tipoDocumento;
    public $facturaNro;
    public $fechaEmision;
    public $fechaEntrega;
    public $montoTotal;
    public $idProducto;
    public $cantidadKG;
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
         $sql = $this->conn->prepare("INSERT INTO despacho ( cliente,tipoDocumento,facturaNro,fechaEmision,fechaEntrega,montoTotal,idProducto,cantidadKG) values(?,?,?,?,?,?,?,?)");
         $sql->execute(array($de->cliente,$de->tipoDocumento,$de->facturaNro,$de->fechaEmision,$de->fechaEntrega,$de->montoTotal,$de->idProducto,$de->cantidadKG));
     }

     public function Listar()
     {
         $sql = $this->conn->prepare("SELECT * FROM despacho join producto p using(idProducto)");
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_OBJ);
     }
}
?>
