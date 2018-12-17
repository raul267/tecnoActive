<?php
  class Usuario
  {
    private $conn;
    public $nombre = '';
    public $password ='';

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

     public function Insertar($us)
     {
         $sql = $this->conn->prepare("INSERT INTO usuario (nombre,password) values(?,?)");
         $sql->execute(array($us->nombre, $us->password));
     }

     public function Listar()
     {
         $sql = $this->conn->prepare("SELECT * FROM usuario");
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_OBJ);
     }

     public function ListarNombre($nombre)
     {
       $sql = $this->conn->prepare("SELECT * from usuario where nombre = ?");
       $sql->execute(array($nombre));
       return $sql->fetch(PDO::FETCH_OBJ);
     }
}
