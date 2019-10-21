<?php
@require_once("Vehiculo.php");
	//Accesing PRIVATE 
	$instance = new Vehiculo();
	$attr = "modelo";
	echo "<pre>";
	echo $instance->getAttribute($attr);


	//Accesing PRIVATE 
	echo "<pre>";
	echo $instance->ruedas;
?>