<?php
class Bl
{
public $bl;
public $idEmbarque;

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

  public function Insertar($bl)
  {
      $sql2 = $this->conn->prepare("INSERT INTO bl(bl,idEmbarque) VALUES(?,?)");
      $sql2->execute(array($bl->bl,$bl->idEmbarque));
  }

  public function CambiarEstadoInternar($bl)
  {
    $sql = $this->conn->prepare("UPDATE `bl` SET `internado` = '1' WHERE bl = ?");
    $sql->execute(array($bl));
  }

  public function ListarBlE()
  {
    $sql = $this->conn->prepare("SELECT * FROM bl RIGHT JOIN embarque using(idEmbarque) join compra using(idCompra) join producto using(idProducto) where enPuerto = 1 and internado = 1;");
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_OBJ);
  }

  public function ListarCantidad($bl)
  {
    $sql = $this->conn->prepare("SELECT embarque.cantContenedores canti FROM bl RIGHT JOIN embarque using(idEmbarque) join compra using(idCompra) join producto using(idProducto) where bl = ?");
    $sql->execute(array($bl));
    return $sql->fetch(PDO::FETCH_OBJ);

  }
}
 ?>
