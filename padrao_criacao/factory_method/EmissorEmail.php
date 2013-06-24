<?php

class EmissorEmail implements Emissor
{
	public function envia($mensagem)
	{
		echo 'Enviando por email a mensagem: ';
		echo $mensagem ;
	}
}