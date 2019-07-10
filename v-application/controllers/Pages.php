<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * This Controller is to show all Pages to public
	 *
	 * By using route Pages contoller is removed from url
	 * 		
	 */
	
	//default function
	public function index()
	{   

		$arg = $this->uri->segment_array();
		unset($arg[1]);
		$page = $this->uri->segment(1);
		if($page === NULL){
			$page = "home";
		}
		$page = str_replace('-', '_', $page);
		//call function which is in $page variable
		$this->$page($arg);
	}

	//check from data base if page exist show if not show 404 (dynamic Page)
	public function page($name, $arg){
		echo "$name";
		var_dump( $arg );
	}

	//if fuction for page (static) is not build and it is a dynamic page
	public function __call($name, $arg){
		
		$this->page($name, $arg);
	}

	//example of static function (page)
	public function about_us(){
		echo "About Us Page";
	}

	//Home page
	public function home(){
		echo "Home Page";
	}

	//example of archive
	public function blog($arg){
		if(isset($arg[2])){
			echo "one post";
			var_dump($arg);
		}else{
			echo 'Post Archive';
			var_dump($arg);
		}
	}
}
