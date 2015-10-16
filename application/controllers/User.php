<?php 

/**
* 
*/
class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{		
		$data['page_title'] = 'Titre de page';
		$this->load->view('templates/header',$data); //header 
	    /**
	    * Debut de du corp de la page
	    */

	    /**
	    * fin corp de la page
	    */
	    
		$this->load->view('templates/footer'); //pied de page 
	}

	public function inscription()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('first_name','Nom_famille','required');
		$this->form_validation->set_rules('password','Mdp','required');

		if($this->form_validation->run() == False)
		{
			$this->load->view('templates/header');
			$this->load->view('user/inscription');
			$this->load->view('templates/footer');

		}
		else
		{
			$this->user_model->set_user();
			$this->load->view('user/success');
		}
	}

	public function login()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password','Mdp','required');

		if ($this->form_validation->run()==False) {
			$this->load->view('templates/header');
			$this->load->view('user/login');
			$this->load->view('templates/footer');
		}
		else{
		    $this->user_model->get_user();
			$this->load->view('user/success');
		}
	}











}
 ?>