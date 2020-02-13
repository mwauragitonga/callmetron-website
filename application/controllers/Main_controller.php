<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	/**
	 * Main controller for callmetron website
	 * developed by U70XDN
	 * mail: mwauragitonga12@gmail.com
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('callmetron_model');

	}
	public function force_ssl()
	{
		if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on") {
			$url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			redirect($url);
			exit;
		}
	}
	public function index()
	{
		//$this->force_ssl();
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
	public function sendContactMail(){

		$from = 'info@callmetron.com';
		$to='contact@callmetron.com';
		$name = $this->input->post("name");
		$email =$this->input->post("email");
		$text = $this->input->post("message");
		$subject = $this->input->post("subject");

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'www.callmetron.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = $from;
		$config['smtp_pass'] = 'Tuende2020**';
		$config['smtp_crypto'] = 'ssl';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		//$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$this->email->from($email);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message ('<table style="width:100%">
        <tr>
            <td>User Name: ' . $name . '</td>
        </tr>
        <tr><td>User Email: ' . $email . '</td></tr>
        <tr><td>Subject: ' . $subject . '</td></tr>
        <tr><td>Message: ' . $text . '</td></tr>
        
    </table>');

		try {
			$this->email->send();
			$message= 'Email Sent, We will be in touch ASAP.';
			$data= array(
				'message'=>$message
			);
			$this->load->view('contact.php', $data);
		} catch (Exception $e) {
			$message= 'Email not sent! Please try again.';
			$data= array(
				'message'=>$message
			);
			$this->load->view('contact.php', $data);
		}
	}
	public function sendPartnerMail(){

		$to = 'info@callmetron.com';
		$from='contact@callmetron.com';
		$name = $this->input->post("name");
		$email =$this->input->post("email");
		$country = $this->input->post("country");
		$subject = 'PARTNERSHIP';

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'www.callmetron.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = $from;
		$config['smtp_pass'] = 'Tuende2020**';
		$config['smtp_crypto'] = 'ssl';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		//$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$this->email->from($email);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message ('<table style="width:100%">
        <tr><td>User Name: ' . $name . '</td></tr>
        <tr><td>User Email: ' . $email . '</td></tr>
        <tr><td>Subject: ' . $subject . '</td></tr>        
         <tr><td>Country: ' . $country . '</td></tr>        

    		</table>');


		try {
			$this->email->send();
			$message= 'Email Sent, We will be in touch ASAP.';
			$data= array(
				'message'=>$message
			);
			$this->load->view('partners.php', $data);
		} catch (Exception $e) {
			$message= 'Email not sent! Please try again.';
			$data= array(
				'message'=>$message
			);
			$this->load->view('partners.php', $data);
		}
	}
	public function subscribeNewsletter(){

		$to = 'info@callmetron.com';
		$from='contact@callmetron.com';
		$email =$this->input->post("email");
		$subject = 'NEWSLETTER';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'www.callmetron.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = $from;
		$config['smtp_pass'] = 'Tuende2020**';
		$config['smtp_crypto'] = 'ssl';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$this->email->from($email);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message ('<table style="width:100%">
        <tr><td>User Email: ' . $email . '</td></tr>
        <tr><td>Subject: ' . $subject . '</td></tr>        
    		</table>');
		try {
			$this->email->send();
			$this->callmetron_model->addNewsletterSubscribers($email);
			$message= 'Subscribed to Newsletter.';
			$data= array(
				'message'=>$message
			);
			$this->load->view('index.php', $data);
		} catch (Exception $e) {
			$message= 'Could not subscribe to Newsletter.Please try again.';
			$data= array(
				'message'=>$message
			);
			$this->load->view('index.php', $data);
		}
	}
}
