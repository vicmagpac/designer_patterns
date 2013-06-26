<?php

// definindo as interfaces
class EmissorVisa implements Emissor
{
	function envia($mensagem)
	{
		echo nl2br('Enviando a seguinte mensagem para a Visa:');
		echo nl2br($mensagem);
	}
}