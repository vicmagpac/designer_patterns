<?php

// definindo as interfaces
class ReceptorVisa implements Receptor
{
	/**
	* Metodo que irá retornar uma string
	* @return String
	*/
	public function recebe()
	{
		echo nl2br('Recebendo Mensagem da Visa');
		$mensagem = 'Mensagem da Visa';
		return $mensagem;
	}
}