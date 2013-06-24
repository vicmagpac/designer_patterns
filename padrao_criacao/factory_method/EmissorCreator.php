<?php

class EmissorCreator
{
	const SMS = 0;
	const EMAIL = 1;
	const JMS = 2;

	public function create($tipoDeEmissor)
	{
		if($tipoDeEmissor == self::SMS) {
			return new EmissorSMS();
		}else if($tipoDeEmissor == self::EMAIL) {
			return new EmissorEmail();
		}else if($tipoDeEmissor == self::JMS) {
			return new EmissorJMS();
		}else {
			throw new Exception('Tipo de emissor não suportado!!!');
		}
	}
}