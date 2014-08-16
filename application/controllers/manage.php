<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
      $this->load->library('session');
      $this->load->database();
  	}
	
	public function index()
	{
		$data['login']="<ul class=\"nav pull-right\">
        <li class=\"dropdown\">
          <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"icon-user\"></i> ".$this->session->userdata('name')." <i class=\"caret\"></i>

          </a>
          <ul class=\"dropdown-menu\">
              <li><a href=\"".base_url('/login/logout?url='.base_url('/about'))."\">Logout</a></li>
          </ul>
        </li>
        </ul>";
		$this->load->view('manage_index',$data);
	}


  public function profile()
  {
    
      $data['login']="<ul class=\"nav pull-right\">
        <li class=\"dropdown\">
          <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"icon-user\"></i> ".$this->session->userdata('name')." <i class=\"caret\"></i>

          </a>
          <ul class=\"dropdown-menu\">
              <li><a href=\"".base_url('/login/logout?url='.base_url('/about'))."\">Logout</a></li>
          </ul>
        </li>
        </ul>";
    

    $uid = $this->session->userdata('userid');
    $sql = "SELECT * FROM user WHERE id = '".$uid."'";
    $query = $this->db->query($sql);
    if($query->num_rows()==0){
       echo "<script>alert('No such a user!');window.location='".base_url()."';</script>";
    }else{
      $data['result']=$query->result();
    }

    $this->load->view('manage_profile',$data);
  }

  public function checkoldpw(){
    $sql = "SELECT * FROM user WHERE pwd = PASSWORD('".$_POST['opwd']."')";
    $query = $this->db->query($sql);
    echo $query->num_rows();
  }

  public function changepwd(){
    if($_POST){
      $password = $_POST['password'];
      $uid = $_POST['uid'];
      $sql = "UPDATE user set pwd=PASSWORD('$password') WHERE id = '$uid'";
      $query=$this->db->query($sql);
      if(!$query){
        echo "<script>alert('Chanage Password Failed !');window.location='".base_url('/manage/profile')."';</script>";
      }else{
        echo "<script>alert('Register Successfully !');window.location='".base_url('/manage/profile')."';</script>";
      }

    }
  }









}
