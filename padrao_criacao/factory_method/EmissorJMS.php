<?php
class EmissorJMS implements Emissor
{
	public function envia($mensagem)
	{
		echo 'Enviando por JMS a mensagem: <br />';
		echo $mensagem . '<br /><br />';
	}
}