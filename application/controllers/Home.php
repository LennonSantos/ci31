<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data = array(
		'css' => array( 
			array('styles.css'),
			array('sites')
		),
		'description' => 'description',
		'keywords'    => 'key, key, key',
		'author'	  => 'Lennon S. Bueno'
	);

    public function __construct() {
        parent::__construct();
    }

	public function index($page = 'home')
	{
		$this->data['name_page'] = 'Page -'.ucfirst($page);
		$this->parser->parse('page/master_page/head', $this->data);
		$this->load->view('page/'.$page);
	}
}
