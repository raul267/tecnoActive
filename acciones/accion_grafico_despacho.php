<?php
require_once('../model/database.php');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(!$con){
  die("No conecta: ". $mysqli->error);

}
else {
  $sql = mysqli_query($con,"SELECT idProducto id, sum(cantidadKG) cantidad FROM despacho group by idProducto");

  mysqli_close($con);

$data = array();

while($row = mysqli_fetch_array($sql)){
  $data [] = $row;


}

echo json_encode($data);

}

 ?>
