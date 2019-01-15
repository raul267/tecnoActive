<?php
  class Proveedores
  {
    private $conn;
    public $proveedor;
    public $fechaGeneracion;
    public $fechapago;
    public $valor;
    public $factura;
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

     public function Insertar($p)
     {
         $sql = $this->conn->prepare("INSERT INTO proveedores (proveedor,fechaGeneracion,fechaPago,valor,factura) values(?,?,?,?,?)");
         $sql->execute(array($p->proveedor,$p->fechaGeneracion,$p->fechaPago,$p->valor,$p->factura));
     }

     public function Listar()
     {
         $sql = $this->conn->prepare("SELECT * FROM proveedores");
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_OBJ);
     }
}
?>
