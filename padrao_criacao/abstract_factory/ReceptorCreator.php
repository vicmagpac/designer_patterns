<?php

class ReceptorCreator
{
	const VISA = 0;
	const MASTERCARD = 1;

	/**
	* Metodo de criação do objeto
	* @return Receptor 
	*/
	public function create($tipoReceptor)
	{
		if($tipoReceptor == self::VISA) {
			return new ReceptorVisa();
		}else if($tipoReceptor== self::MASTERCARD) {
			return new ReceptorMastercard();
		}else {
			throw new Exception('Tipo de Receptor não suportado.');
		}
	}
}