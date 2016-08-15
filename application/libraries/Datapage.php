<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapage {

        public function start()
        {
        	$cssurl = base_url('assets/css/');
        	$jsurl = base_url('assets/js/');

        	return $data = array(
				'css' => array( 
					array( $cssurl . 'styles' ),
					array( $cssurl . 'test'   )
				),
				'js' => array( 
					array( $jsurl . 'scripts' ),
					array( $jsurl . 'test'   )
				),
				'description' => "des",
				'keywords'    => "key",
				'author'	  => "lennon",
				'name_page'   => "testando o codeigniter 3.1"
			);

        }
}