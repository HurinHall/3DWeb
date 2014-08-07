<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->library('session');
  	}
	
	public function index()
	{
		$this->load->view('register');
	}
	
	public function send(){
		if($_POST){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$studentid=$_POST['id'];
			$major=$_POST['major'];
			$this->load->database();
			$query=$this->db->query("INSERT INTO user (id, name, email, password, studentid, major) VALUES (null, '$name', '$email', PASSWORD('$password'), '$studentid', '$major')");
			if(!$query){
				echo "<script>alert('Register Failed !');window.location='".base_url('/register')."';</script>";
			}else{
				echo "<script>alert('Register Successfully !');window.location='".base_url('/')."';</script>";
			}
		}
	}
}
