<?php

	ini_set('display_errors', 'On');

	header('Access-Control-Allow-Origin: *');

	print_r($_GET);
	echo $_SERVER['REQUEST_METHOD'];

	$data = $_GET['data'];

	foreach ($data as $d) {
		echo $d;
	}

?>