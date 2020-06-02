<?php

        header('Access-Control-Allow-Origin: *');

	$values = $_POST["values"];


	if($values != ""){
		echo "values:".$values;

		$file = fopen("values.txt", "w");
		fwrite($file, $values);
		fclose($file);
	}else{
		$file = fopen("values.txt", "r");
		echo fread($file, filesize("values.txt"));
		fclose($file);
	}

?>
