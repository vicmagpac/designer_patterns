<?php

// definindo as interfaces
class ReceptorMastercard implements Receptor
{
	/**
	* Metodo que irá retornar uma string
	* @return String
	*/
	public function recebe()
	{
		echo nl2br('Recebendo Mensagem da Master Card');
		$mensagem = 'Mensagem da Master Card';
		return $mensagem;
	}
}