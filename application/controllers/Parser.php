<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parser extends CI_Controller {

			function __construct() {
			parent::__construct();

			//  Path to simple_html_dom
			include APPPATH . 'third_party/simplehtmldom_1_9/simple_html_dom.php';
			$this->load->helper('form');
			}

			function index() {
						$this->load->view('input');
			}

			function parse() {

						$html = file_get_html('https://www.flightradar24.com/data/flights/' . $this->input->post('flight'));

						$data['dt'] = $html;

						$this->load->view('parse', $data);

			}
}
