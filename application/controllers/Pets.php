<?php
class Pets extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('pets_model');
		$this->load->helper('url_helper');
	}
	public function index() {
		$data['pets']  = $this->pets_model->get_pets();
		$data['title'] = 'All Pets';
		$this->load->view('templates/header', $data);
		$this->load->view('pets/index', $data);
		$this->load->view('templates/footer');
	}
	public function view($slug = NULL) {
		$data['pets_item'] = $this->pets_model->get_pets($slug);
		if (empty($data['pets_item'])) {
			show_404();
		}
		$data['title'] = $data['pets_item']['title'];
		$this->load->view('templates/header', $data);
		$this->load->view('pets/view', $data);
		$this->load->view('templates/footer');
	}
	public function create() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Add your pet';
		// The set_rules() method takes three arguments; the name of the input field, 
		// the name to be used in error messages, and the rule. In this case the title and text fields are required
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('pets/create');
			$this->load->view('templates/footer');
		} else {
			$this->pets_model->set_pets();
			$this->load->view('pets/success');
		}
	}
	public function edit($slug = NULL){
	    $this->load->helper('form');
		$this->load->library('form_validation');
		$data['pets_item'] = $this->pets_model->get_pets($slug);
		$data['title'] = 'Edit Pet';
		// The set_rules() method takes three arguments; the name of the input field, 
		// the name to be used in error messages, and the rule. In this case the title and text fields are required
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('pets/edit');
			$this->load->view('templates/footer');
		} else {
			$this->pets_model->set_pet();
			$this->load->view('pets/success');
		}
	}
}