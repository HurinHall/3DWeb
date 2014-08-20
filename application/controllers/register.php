<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

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
            <li><a href=\"".base_url('/login/logout?url='.base_url('/register'))."\">Logout</a></li>
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
            <input type=\"hidden\" name=\"url\" value=\"".base_url('/register')."\" />
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            <a class=\"btn btn-success\" href=\"".base_url('/register')."\">Register</a>
          </form>";
		}
		$this->load->view('register',$data);
	}
	
	public function send(){
		if($_POST){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$studentid=$_POST['id'];
			$major=$_POST['major'];
			$query=$this->db->query("INSERT INTO user (id, name, email, pwd, studentid, major) VALUES (null, '$name', '$email', PASSWORD('$password'), '$studentid', '$major')");
			if(!$query){
				echo "<script>alert('Register Failed !');window.location='".base_url('/register')."';</script>";
			}else{
				echo "<script>alert('Register Successfully !');window.location='".base_url('/')."';</script>";
			}
		}
	}
	
	public function checkname(){
		$query = $this->db->query("SELECT * FROM user WHERE name = '".$_POST['name']."'");
		echo $query->num_rows();
	}
	
	public function checkemail(){
		$query = $this->db->query("SELECT * FROM user WHERE email = '".$_POST['email']."'");
		echo $query->num_rows();
	}
	
	public function checkid(){
		$query = $this->db->query("SELECT * FROM user WHERE studentid = '".$_POST['id']."'");
		echo $query->num_rows();
	}
}
