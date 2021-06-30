<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=bb2srhowikj9bbwnflop-mysql.services.clever-cloud.com;dbname=bb2srhowikj9bbwnflop",
			            "uldjba78rsx1ypk7",
			            "rg5HftPwvT5t9dFDPiTL");
		
		/*$link = new PDO("mysql:host=localhost;dbname=iv",
			            "root",
			            "");
		*/
		$link->exec("set names utf8");

		return $link;

	}
}