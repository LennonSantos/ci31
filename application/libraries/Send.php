<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send 
{
    public function email($data = array())
    {
    	$CI =& get_instance();
    	
    	$CI->load->library('email');

		$CI->email->from($data['from'], $data['from_name']);
		$CI->email->subject($data['subject']);
		$CI->email->reply_to($data['reply_to']);
		$CI->email->to($data['to']); 
		$CI->email->cc($data['cc']);
		$CI->email->bcc($data['bcc']);
		$CI->email->message($data['message']);
		if($CI->email->send())
			return true;
		else
			return false;
    }
}