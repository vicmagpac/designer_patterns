<?php

//Definindo as fábricas de emissores e receptores
class EmissorCreator
{
	const VISA = 0;
	const MASTERCARD = 1;

	/**
	* Metodo de criação do objeto
	* @return Emissor 
	*/
	public function create($tipoEmissor)
	{
		if($tipoEmissor == self::VISA) {
			return new EmissorVisa();
		}else if($tipoEmissor== self::MASTERCARD) {
			return new EmissorMastercard();
		}else {
			throw new Exception('Tipo de Emissor não suportado.');
		}
	}
}