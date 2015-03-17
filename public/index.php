<?php


$boards = [
	''
];


function determineBoard()
{
	$uri_parts = split('/', $_SERVER['REQUEST_URI'], 3);
	if (count($uri_parts) > 1 && $uri_parts[1] !== '')
	{
		return $uri_parts[1];
	} else {
		return 'homepage';
	}
}

