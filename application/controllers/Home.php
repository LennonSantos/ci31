<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data = array();

    public function __construct() 
    {
        parent::__construct();

        //$this->output->cache(1);
        //$this->output->delete_cache();

        $this->load->library("datapage");
        $this->data = $this->datapage->start();
    }

	public function index($page = 'home')
	{
		$this->parser->parse('page/master_page/head', $this->data);
		$this->load->view('page/'.$page);
		$this->parser->parse('page/master_page/footer', $this->data);
	}

	public  function database()
	{
		$this->load->model('default_model', 'bd');
		$result = $this->bd->get(
			array(
				'name_table' => 'test',
				'select'     => ['nome', 'email'],
				'where'		 => ['nome' => 'lennon', 'email' => 'lennonsbueno@gmail.com']
			)
		);
		print_r($result);
		$this->parser->parse('page/master_page/footer', $this->data);
	}
}
