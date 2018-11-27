<?php

class Persona{

	private $idPersona;
	private $nombrePersona;
	private $apellidoPersona;

		function _construct($idPersona, $nombrePersona, $apellidoPersona){
			$this->idPersona = $idPersona;
			$this->nombrePersona = $nombrePersona;
			$this->apellidoPersona = $apellidoPersona;
		}

		function setIdPersona($idPersona){
			$this->idPersona = $idPersona;
		}

		function getIdPersona(){
			return $this->idPersona;
		}

		function setNombrePersona($nombrePersona){
			$this->nombrePersona = $nombrePersona;
		}

		function getNombrePersona(){
			return $this->nombrePersona;
		}

		function setApellidoPersona($apellidoPersona){
			$this->apellidoPersona = $apellidoPersona;
		}

		function getApellidoPersona(){
			return $this->apellidoPersona;
		}

	}

?>
