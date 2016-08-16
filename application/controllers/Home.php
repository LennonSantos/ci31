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

	public function email($action = null)
	{
		if($action === 'enviar')
		{
			$this->load->library('sendemail');
			$this->sendemail->send(
				array(
					"from" => "lennonsbueno@teste",
					"from_name" => "lennon teste",
					"subject" => "Assunto do email",
					"to" => "lennon-limao@hotmail.com",
					"message" => "olá teste"
				)
			);
		}

		$this->parser->parse('page/master_page/head', $this->data);
		$this->load->view('page/email');
		$this->parser->parse('page/master_page/footer', $this->data);
	}

	public  function database()
	{
		$this->load->model('default_model', 'bd');

		$get = $this->bd->get(
			array(
				'name_table' => 'test',
				'select'     => ['nome', 'email'],
				'where'		 => ['nome' => 'lennon', 'email' => 'lennonsbueno@gmail.com'],
				'order_by'   => 'nome ASC',
				'limit'		 => '10'
			)
		);
		print_r($get);

		$get_max = $this->bd->get_max(
			array(
				'name_table' => 'test',
				'field'      => 'idade',
				'as'         => 'maior idade'
				)
		);
		print_r($get_max);

		$get_min = $this->bd->get_min(
			array(
				'name_table' => 'test',
				'field'      => 'idade',
				'as'         => 'menor idade'
				)
		);
		print_r($get_min);

		$get_avg = $this->bd->get_avg(
			array(
				'name_table' => 'test',
				'field'      => 'idade',
				'as'         => 'media idade'
				)
		);
		print_r($get_avg);

		$get_sum = $this->bd->get_sum(
			array(
				'name_table' => 'test',
				'field'      => 'idade',
				'as'         => 'soma idades'
				)
		);
		print_r($get_sum);

		$this->bd->insert(
			array(
				'name_table' => 'test',
				'values'     => ['nome' => 'outro', 'email' => 'otro@gmail', 'idade' => 15]
			)
		);

		$this->bd->update(
			array(
				'name_table'  => 'test',
				'values'      => ['nome' => 'lennon s. bueno'],
				'where_field' => 'nome',
				'where_value' => 'lennon'
			)
		);

		$this->bd->delete(
			array(
				'name_table'  => 'test',
				'where_field' => 'nome',
				'where_value' => 'outro'
			)
		);


		$this->parser->parse('page/master_page/footer', $this->data);
	}
}
