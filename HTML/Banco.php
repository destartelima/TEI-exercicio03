<?php

namespace html;
use PDO;
class Banco
{
	private static $host = 'localhost';
	private static $usernane = 'root';
	private static $password = '';
	private static $dbname = 'cdcol';
	protected static $conn = null;

	protected static function conectar(){
		if(is_null(self::$conn)){
			$dsn = 'mysql:
			host='.self::$host.';
			dbname='.self::$dbname;
		}

		self::$conn = new PDO(
			$dsn,
			self::$username,
			self::$password);
		}
	
}