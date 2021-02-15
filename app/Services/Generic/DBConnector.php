<?php

namespace App\Services\Generic;

class DBConnector {
	public static function GetConnection () {
		return mysqli_connect (
			$_ENV ['DB_HOST'    ],
			$_ENV ['DB_USERNAME'],
			$_ENV ['DB_PASSWORD'],
			$_ENV ['DB_DATABASE'],
			$_ENV ['DB_PORT'],
		);
	}
	
	public static function CloseConnection ($conn) {
		mysqli_close ($conn);
	}
}

