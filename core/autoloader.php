<?php


/*	
 *	Loads the provided classname or namespace.
 *	
 *	@param		classname / namespace
 *	
 */
function autoloader($class)
{
	require_once __DIR__ . '/../' . $class . '.php';
}


// Registers the above function as autoloader.
spl_autoload_register('autoloader');
