<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Raceresult extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->library('session');
      $this->load->database();

  	}
	
	public function index($nterm=6)
	{      

        // check if any race
            $raceid =""; 
            if($nterm == ""){
              $sql = "SELECT * FROM race WHERE  status = 1 ORDER BY id DESC limit 1" ;
              $query = $this->db->query($sql);
              foreach($query->result() as $item){
                $raceid= $item->id;
                $nterm = $item->nterm;
              }
            }

            // get all nterm
              $sql = "SELECT nterm FROM race ORDER BY nterm DESC" ;
              $query = $this->db->query($sql);
              $data['nterms'] = $query->result();
          

          if(strlen($nterm)>0){
           
              $this->load->model('Race_model');
              $data['result'] = $this->Race_model->get_all_result_entries($nterm);
          }

          
        if($this->session->userdata('name')){

              $data['login']="<ul class=\"nav pull-right\">
                <li class=\"dropdown\">
                  <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"icon-user\"></i> ".$this->session->userdata('name')." <i class=\"caret\"></i>

                  </a>
                  <ul class=\"dropdown-menu\">
                      <li><a href=\"".base_url('/login/logout?url='.base_url('/about'))."\">Logout</a></li>
                  </ul>
                </li>
                </ul>";
                $this->load->view('raceresult',$data);

            
        }else{
          $data['login']="<form class=\"navbar-form navbar-right\" role=\"form\" action=\"".base_url('/login')."\" method=\"post\">
                <div class=\"form-group\">
                  <input type=\"text\" name=\"email\" placeholder=\"Email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                  <input type=\"password\" name=\"password\" placeholder=\"Password\" class=\"form-control\">
                </div>
                <input type=\"hidden\" name=\"url\" value=\"".base_url('/vote')."\" />
                <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
                <a class=\"btn btn-success\" href=\"".base_url('/register')."\">Register</a>
              </form>";
              $this->load->view('race_result',$data);  
      }    
         
  }      


       
}
