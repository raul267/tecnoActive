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
}
 ?>
