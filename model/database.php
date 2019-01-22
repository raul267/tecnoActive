<?php

class Database
{
	/*	public static function Conn()
		{
			$conn = new PDO('mysql:host=localhost;dbname=cha45787_tecnoactive','cha45787','45k[1EmUvXZ[A[D',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES \'UTF8\''));
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $conn;
		}
	}
	define('DB_HOST','localhost');
	define('DB_NAME','cha45787_tecnoactive');
	define('DB_USER','cha45787');
	define('DB_PASS','45k[1EmUvXZ[A[D');
	*/
	public static function Conn()
	{
		$conn = new PDO('mysql:host=localhost;dbname=tecnoactive','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES \'UTF8\''));
		$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $conn;
	}
}
define('DB_HOST','localhost');
define('DB_NAME','tecnoactive');
define('DB_USER','root');
define('DB_PASS','');
?>
