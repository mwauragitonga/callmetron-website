<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	/**

	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function features()
	{
		$this->load->view('features');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function partner()
	{
		$this->load->view('partners');
	}
}
