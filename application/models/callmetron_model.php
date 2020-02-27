<?php
/**
 * @author  Mwaura Gitonga
 * @mail mwauragitonga12@gmail.com
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class callmetron_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function addNewsletterSubscribers($email){
		$data= array('email'=>$email);
		$this->db->insert('newsletter_subscribers', $data);
	}
}
