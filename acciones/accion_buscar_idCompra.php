<?php
session_start();
include ("../model/database.php");
?>

<?php

$idCompra = $_POST['idCompra'];
//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$sql = mysqli_query($con, "SELECT idCompra as 'id' from compra where idCompra like '$idCompra'");

    mysqli_close($con);
		while ($r = mysqli_fetch_object($sql))
		{

  		if ($r->id = $idCompra)
      {
        echo '<label style="color:red; float:left;">No disponible!!</label>';
      }

      else
      {
        echo '<label style="font-color:green;">Disponible</label>';
      }

		}

  }

?>
