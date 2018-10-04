<?php

$year = $_POST['year'];

if($year==-1)
	echo "Please select a year!";
else 
	echo "You selected " . $year;

die();

?>