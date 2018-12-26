<?php
 Class Compra
 {
    private $conn;
    public $idCompra;
    public $idPedido;
    public $proveedor;
    public $cantidadPedido;
    public $fechaInicio;
    public $fechaTermino;

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

    public function Insertar($co)
    {
      $sql = $this->conn->prepare("INSERT INTO compra(idCompra,idProducto,proveedor,cantidadPedido,fechaInicio,fechaTermino) values(?,?,?,?,?,?)");
      $sql->execute(array($co->idCompra,$co->idProducto,$co->proveedor,$co->cantidadPedido,$co->fechaInicio,$co->fechaTermino));
    }

    public function Listar()
    {
        $sql = $this->conn->prepare("SELECT * FROM compra c left JOIN producto p using(idProducto)");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

        public function ListarID($id)
        {
          $sql = $this->conn->prepare("SELECT * FROM compra WHERE idCompra =?");
          $sql->execute($id);
          return $sql->fetch(PDO::FETCH_OBJ);
        }

 }


 ?>
