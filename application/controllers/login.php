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
			$query = $this->db->query("SELECT * FROM user WHERE email = '".$email."' AND pwd = md5('".$password."') AND status = 'ACTIVE'");
			if($query->num_rows()==0){
				echo "<script>alert('Login Failed !');window.location='".$_POST['url']."';</script>";
			}else{
				$name="";
				$id=0;
				foreach($query->result() as $item){
					$name=$item->name;
					$id = $item->id;

			}

				$this->session->set_userdata('name',$name);
				$this->session->set_userdata('userid',$id);
				redirect($_POST['url'],'reload');
			}
		}else{
			redirect($_POST['url'],'reload');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect($_GET['url'],'reload');
	}
}
