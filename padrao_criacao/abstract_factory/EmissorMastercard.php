<?php

// definindo as interfaces
class EmissorMastercard implements Emissor
{
	function envia($mensagem)
	{
		echo nl2br('Enviando a seguinte mensagem para a Master Card:');
		echo nl2br($mensagem);
	}
}