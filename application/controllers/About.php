<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application {

	public function index()
	{
		//$this->load->view('welcome');
                $this->data['pagebody'] = 'about';
                $this->render();
	}
}
