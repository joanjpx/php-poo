<?php
@require_once("Vehiculo.php");
@require_once("Furgoneta.php");
	//Accesing PRIVATE 
	$instance = new Vehiculo();
	$attr = "modelo";
	echo "<pre>";
	echo $instance->getAttribute($attr);


	//Accesing PRIVATE 
	echo "<pre>";
	echo $instance->ruedas;

	$childClass = new Furgoneta();

	echo $childClass->ruedas;
?>