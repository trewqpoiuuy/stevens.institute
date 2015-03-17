<?php

abstract class AbstractView
{
	private $model;
	private $controller;
	
	public function __constructor(&$model, &$controller)
	{
		$this->model = $model;
		$this->controller = $controller;
	}
	
	abstract public function output();
}
