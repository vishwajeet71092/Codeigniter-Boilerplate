<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	/**
	 * This Controller is to show dashboard to admin
	 *
	 * This is the default admin contoller
	 * 		
	 */
	
	public function index()
	{   $data['page'] = 'blog';
		$this->load->view('admin/layout', $data);
	}

	//test function with parameter
	public function edit($id=NULL){
		if($id!=NULL){
			echo "edit post $id";
		}else{
			echo 'no Post found';
		}
	}
}
