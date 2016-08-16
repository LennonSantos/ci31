<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail 
{
    public function send($data = array())
    {
    	$CI =& get_instance();
    	
    	$CI->load->library('email');

		$CI->email->from($data['from'], $data['from_name']);
		$CI->email->subject($data['subject']);
		//$this->email->reply_to("email_de_resposta@dominio.com");
		$CI->email->to($data['to']); 
		//$this->email->cc('email_copia@dominio.com');
		//$this->email->bcc('email_copia_oculta@dominio.com');
		$CI->email->message($data['message']);
		if($CI->email->send())
			return true;
		else
			return false;

    }
}