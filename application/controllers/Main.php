<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	 public function __construct() {
        parent::__construct();
        $this->load->model('Mainmodel');
    }

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('main');
		$this->load->view('templates/footer');
	}


	public function purchase_order() {
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
        $this->load->view('po');
		$this->load->view('templates/footer');
    }

    public function addItems() {
        $items = $this->input->post('items'); // Assuming your form field is named 'items'
        
        if (!empty($items)) {
            foreach ($items as $item) {
                $data = array(
                    'name' => $item['name'],
                    'quantity' => $item['quantity']
                );
                $this->Mainmodel->add($data);
            }
        }

        redirect('main/purchase_order'); // Redirect back to the form
    }
}
