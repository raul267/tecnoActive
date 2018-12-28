<?php
  class Despacho
  {
    private $conn;
    public $rutEmisor;
    public $rutReceptor;
    public $tipoDocumento;
    public $facturaNro;
    public $fechaEmision;
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
         $sql = $this->conn->prepare("INSERT INTO despacho (rutEmisor,rutReceptor,tipoDocumento,facturaNro,fechaEmision,montoTotal,idProducto,cantidadKG) values(?,?,?,?,?,?,?,?)");
         $sql->execute(array($de->rutEmisor,$de->rutReceptor,$de->tipoDocumento,$de->facturaNro,$de->fechaEmision,$de->montoTotal,$de->idProducto,$de->cantidadKG));
     }

     public function Listar()
     {
         $sql = $this->conn->prepare("SELECT * FROM despacho join producto p using(idProducto)");
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_OBJ);
     }
}
?>
