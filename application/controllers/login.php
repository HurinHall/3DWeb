<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->library('session');
    	$this->load->database();
  	}
	
	public function index()
	{
		if($_POST['email']&&$_POST['password']){
			$email=$_POST['email'];
			$password=$_POST['password'];
			$query = $this->db->query("SELECT name FROM user WHERE email = '".$email."' AND pwd = PASSWORD('".$password."')");
			if($query->num_rows()==0){
				echo "<script>alert('Login Failed !');window.location='".$_POST['url']."';</script>";
			}else{
				$name="";
				foreach($query->result() as $item){
					$name=$item->name;
			}
				$this->session->set_userdata('name',$name);
				redirect($_POST['url'],'reload');
			}
		}else{
			redirect($_POST['url'],'reload');
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('name');
		redirect($_GET['url'],'reload');
	}
}
