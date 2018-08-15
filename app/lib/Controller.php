<?php

/**
 * Created by PhpStorm.
 * User: samanjafari
 * Date: 13-Aug-18
 * Time: 9:44 PM
 * Base Controller
 */
class Controller
{
	//load Model
	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';

		return new $model();
	}

	public function view($view, $data = [])
	{
		//check for view file
		if (file_exists('../app/views/' . $view . '.php')) {
			require_once '../app/views/' . $view . '.php';
		} else {
			die('file not found');
		}

	}
}