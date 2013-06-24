<?php

class EmissorSMS implements Emissor
{
	public function envia($mensagem)
	{
		echo 'Enviando por sms a mensagem: ';
		echo $mensagem;
	}
}	

