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