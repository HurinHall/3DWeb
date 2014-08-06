<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Select extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	/*$this->load->model('Base_model');
	$data['rolename'] = $this->Base_model->get_role_names();*/

	//print_r($data);

	public function menu($menu){
		
		

		if($menu == "home"){
			$this->load->view('index.php');
		}
		if($menu == "about"){
			$this->load->view('about.php');
		}
		if($menu == "work"){
			$this->load->view('work1.php');
		}
		if($menu == "vote"){
			$this->load->view('vote.php');
		}
		if($menu == "register"){
			$this->load->view('register.php');
		}
		if($menu == "login"){
			$this->load->view('login.php');
		}
		if($menu == "contact"){
			$this->load->view('contact.php');
		}

	}

	public function getVeiw($designid){
			$this->load->view('stlmodelview.php',$designid);
		

	}


/*	public function role($menu){
		
		$this->load->model('Base_model');
        $data= $this->Base_model->get_role_names();
        foreach ($data as $value) {
			if($menu == $value['name']){
			$this->load->view($value['name'].'.php');
		}              }

		
		

	}*/

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
