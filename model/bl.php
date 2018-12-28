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
}
 ?>
