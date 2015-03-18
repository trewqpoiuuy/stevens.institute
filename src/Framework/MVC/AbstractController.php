<?php

abstract class AbstractController
{
	private $model;
	
	public function __constructor(&$model)
	{
		$this->model = $model;
	}
	
	abstract public function get($params);
	abstract public function post($params);
}
