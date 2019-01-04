<?php
session_start();
include ("../model/database.php");
?>

<?php

$bl = $_POST['bl'];
//$data = array();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'tecnoactive');
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$sql = mysqli_query($con, "SELECT internadas as 'internadas' from stock where bl = $bl");

    mysqli_close($con);

    echo '<input type="text" name="disponible" id="disponible" readonly="readonly value="Disponible:'.$sql["internadas"].'">';
  }

?>
