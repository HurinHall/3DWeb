<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    	parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->database();
  	}
	
	public function index()
	{
		if($this->session->userdata('name')){
      $data['login']="<ul class=\"nav navbar-nav navbar-right\">
        <li class=\"text-danger\"><a>Welcome ".$this->session->userdata('name')."</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"".base_url('/manage')."\">Dashboard</a></li>
            <li><a href=\"".base_url('/login/logout?url='.base_url())."\">Logout</a></li>
          </ul>
        </li>
      </ul>";
		}else{
			$data['login']="<form class=\"navbar-form navbar-right\" role=\"form\" action=\"".base_url('/login')."\" method=\"post\">
            <div class=\"form-group\">
              <input type=\"text\" name=\"email\" placeholder=\"Email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" name=\"password\" placeholder=\"Password\" class=\"form-control\">
            </div>
            <input type=\"hidden\" name=\"url\" value=\"".base_url('/')."\" />
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            <a class=\"btn btn-success\" href=\"".base_url('/register')."\">Register</a>
          </form>";
		}
      $sql = "SELECT * FROM race WHERE  status = 1 ORDER BY id DESC limit 1" ;
      $query = $this->db->query($sql);
      $raceid =""; 
      $nterm = "";
      $description="";
        foreach($query->result() as $item){
          $raceid= $item->id;
          $nterm = $item->nterm;
          $description=$item->description;
        }

        $data['raceid'] = $raceid;
        $data['nterm'] = $nterm;
        $data['description']=$description;
		$this->load->view('home',$data);
	}
}