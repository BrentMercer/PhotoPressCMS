<?php

function classAutoLoader($class){

	$class = strtolower($class);
	$the_path = "includes/{$class}.php";

	if (file_exists($the_path) && !class_exists($class)) {
		require_once($the_path);
	} else {
		die("The file {$class}.php was not found.");
	}
}

spl_autoload_register('classAutoLoader');

function redirect($location){
	header("Location: {$location}");
}

?>