<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapage {

        public function start()
        {
        	$cssurl = base_url('assets/css/');
        	$jsurl = base_url('assets/js/');

        	return $data = array(
				'css' => array( 
					array( $cssurl . 'animated-icons.css' ),
					array( $cssurl . 'styles.css' ),
					array(           'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'   )
				),
				'js' => array( 
					array( $jsurl . 'jquery.min.js' ),
					array( $jsurl . 'scripts.js' ),
					array( $jsurl . 'test.js'   )
				),
				'description' => "des",
				'keywords'    => "key",
				'author'	  => "lennon",
				'name_page'   => "testando o codeigniter 3.1"
			);

        }
}