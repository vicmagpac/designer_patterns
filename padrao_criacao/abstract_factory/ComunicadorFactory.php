<?php

/**
* Interface para padronizar as fabricas de emissores e receptores
*/
interface ComunicadorFactory
{
	function createEmissor();
	function createReceptor();
}