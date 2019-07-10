<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

	/**
	 * This is just a dummy controller with some dummy function for admin page
	 * 		
	 */
	public function index()
	{   
		$this->load->view('admin/layout');
	}

	//test function with parameter
	public function edit($id=NULL, $second=NULL, $third=NULL, $four=NULL, $five=NULL){
		if($id!=NULL){
			echo "edit post $id $second $third $four $five";
		}else{
			echo 'no Post found';
		}
	}
}