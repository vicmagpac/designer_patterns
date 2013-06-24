<?php

function __autoload($class)
{
	if(file_exists($class . '.php')) {
		require_once $class . '.php';
	}
}

$emissor1 = new EmissorSMS();
echo $emissor1->envia('K19 Treinamentos...') . '<br />';
	
$emissor2 = new EmissorEmail();
echo $emissor2->envia('K19 Treinamentos...') . '<br />';

$emissor3 = new EmissorJMS();
echo $emissor3->envia('K19 Treinamentos...') . '<br />';

echo '<br /><br />----------------------- ultilizando a classe EmissorCreator -----------------------------<br />';

$creator = new EmissorCreator();
//SMS
$emissor1 = $creator->create(EmissorCreator::SMS);
echo $emissor1->envia('K19 Treinamentos...') . '<br />';
//EMAIL
$emissor2 = $creator->create(EmissorCreator::EMAIL);
echo $emissor2->envia('K19 Treinamentos...') . '<br />';;
//JMS
$emissor3 = $creator->create(EmissorCreator::JMS);
echo $emissor3->envia('K19 Treinamentos...') . '<br />';