<?php
// Accesing Class Attributes through methods (Getters y Setters)
Class Vehiculo
{
	private $modelo;
	public $ruedas;

	/**
	 * 
	 *  constructor function
	 */
	public function __construct()
	{
		$this->modelo = "CRUZE";
		$this->ruedas = 4; 
	}

	/**
	 * 
	 * String @param attribute
	 * 
	 */
	public function getAttribute($attribute)
	{
		return $this->$attribute;
	}
}
