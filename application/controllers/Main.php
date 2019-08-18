<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

			public function __construct()
      {
            parent::__construct();
            $this->load->helper('url');
						$this->load->helper('form');
						//  Path to simple_html_dom
						include APPPATH . 'third_party/simplehtmldom_1_9/simple_html_dom.php';
      }

			public function view($page='home') {
				if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

						$data['title'] = ucfirst($page); // Capitalize the first letter

						$this->load->view('templates/header', $data);
						$this->load->view('pages/'.$page, $data);
						$this->load->view('templates/footer', $data);

			}

			function parse() {

						$html = file_get_html('https://www.flightradar24.com/data/flights/' . $this->input->post('flight'));

						$data['dt'] = $html;

						$this->load->view('parse', $data);

			}
}
