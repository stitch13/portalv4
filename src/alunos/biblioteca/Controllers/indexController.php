<?php

namespace alunos\biblioteca\Controllers;

use alunos\biblioteca\Models\indexModel;

class indexController 
{
	private $model;

	public function __construct() 
    {
		$this->model = new indexModel();
	}
    
	public function run() 
    {
		$string = $this->model->getString();
		include __DIR__ . './../Views/index.php';
	}
}