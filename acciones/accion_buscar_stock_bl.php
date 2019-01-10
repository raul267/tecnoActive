<?php
session_start();
include ("../model/database.php");
?>

<?php

$bl = $_POST['bl'];
//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$sql = mysqli_query($con, "SELECT internadas as 'internadas', producto.idProducto producto from stock s join bl using(bl) join embarque using(idEmbarque) JOIN compra using(idCompra) join producto using(idProducto) where bl = '$bl'");

    mysqli_close($con);
		while ($r = mysqli_fetch_object($sql))
		{

			echo '<label>Hay '.$r->internadas.' disponibles</label>';
			echo '<br><label>Producto</label><input style="margin-left:10px;"type="text" name="idProducto" id="idProducto" readonly value="'.$r->producto.'">';
			echo '<input type="hidden" id="vCantidad" name="vCantidad" value="'.$r->internadas.'">';
		}

  }

?>
