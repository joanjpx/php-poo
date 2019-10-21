<?php

// Accesing Class Attributes through methods (Getters y Setters)
Class Vehiculo
{
	private $modelo;
	public $ruedas;

	public function __construct()
	{
		$this->modelo = "CRUZE";
		$this->ruedas = 4; 
	}

	public function getAttribute($attribute)
	{
		return $this->$attribute;
	}
}

//Accesing PRIVATE 
$instance = new Vehiculo();
$attr = "modelo";
echo "<pre>";
echo $instance->getAttribute($attr);


//Accesing PRIVATE 
echo "<pre>";
echo $instance->ruedas;