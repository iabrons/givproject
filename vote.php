<?php
		$myfile = fopen("idinfo.txt", "w") or die("Unable to open file!");
		
		$var = fread($myfile);
		fclose($myfile);
		
		//$fp = fopen('information.csv', 'r');
		//$fl = file('information.csv');
		//$fl = count($fl);
		
		$arrayVar = array(
		
		)
		
		
		$file = fopen('information.csv', r);
		while (($line = fgetcsv($file)) !== FALSE) {
		//$line is an array of the csv elements
		array = $line;
		}

		
		fclose($fp);
		
?>