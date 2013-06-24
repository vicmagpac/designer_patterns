<?php

class EmissorEmail implements Emissor
{
	public function envia($mensagem)
	{
		echo 'Enviando por email a mensagem: <br />';
		echo $mensagem . '<br /><br />';
	}
}