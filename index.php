<?php
	$values = $_POST["values"];

	echo "Message connection successfull.\n<br>";
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
