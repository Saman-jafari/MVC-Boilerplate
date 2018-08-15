<?php
/**
 * Created by PhpStorm.
 * User: samanjafari
 * Date: 13-Aug-18
 * Time: 10:42 PM
 */

class Pages extends Controller {
	public function __construct()
	{
	}
	public function index(){
		$this->view('pages/index', ['title'=>'welcome']);
	}
	public function about(){
		$this->view('pages/about');

	}
}