<?php 
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "E_Learning_db";

	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	{
		die("faild to connect");
	}
