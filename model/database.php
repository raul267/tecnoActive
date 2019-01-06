<?php
class Database
{
	public static function Conn()
	{
		$conn = new PDO('mysql:host=localhost;dbname=tecnoactive','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES \'UTF8\'')); /* ESTOS DATOS HAY Q CAMBIARLOS SI CAMBIAS DE PC*/
		$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $conn;
	}
}
