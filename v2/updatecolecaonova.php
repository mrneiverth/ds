<?php

	ini_set('display_errors', 'On');

	print_r($_POST);
	echo $_SERVER['REQUEST_METHOD'];

	$data = $_POST['data'];

	foreach ($data as $d) {
		echo $d;
	}

?>