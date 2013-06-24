<?php

function __autoload($class)
{
	if(file_exists($class . '.php')) {
		require_once $class . '.php';
	}
}

$emissor1 = new EmissorSMS();
$emissor1->envia('K19 Treinamentos...');
	
$emissor2 = new EmissorEmail();
$emissor2->envia('K19 Treinamentos...');

$emissor3 = new EmissorJMS();
$emissor3->envia('K19 Treinamentos...');


echo '<br /><br />----------------------- ultilizando a classe EmissorCreator -----------------------------<br />';
$creator = new EmissorCreator();
//SMS
$emissor1 = $creator->create(EmissorCreator::SMS);
$emissor1->envia('K19 Treinamentos...');
//EMAIL
$emissor2 = $creator->create(EmissorCreator::EMAIL);
$emissor2->envia('K19 Treinamentos...');
//JMS
$emissor3 = $creator->create(EmissorCreator::JMS);
$emissor3->envia('K19 Treinamentos...');