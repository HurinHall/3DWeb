<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vote extends CI_Controller {

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
            <li><a href=\"".base_url('/login/logout?url='.base_url('/vote'))."\">Logout</a></li>
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
            <input type=\"hidden\" name=\"url\" value=\"".base_url('/vote')."\" />
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            <a class=\"btn btn-success\" href=\"".base_url('/register')."\">Register</a>
          </form>";
		}
    $sql = "SELECT * FROM work WHERE  status = 1 AND competition = 1" ;

    $query = $this->db->query($sql);
    $data['result'] = $query->result();
		$this->load->view('vote',$data);
	}


  public function do_vote(){
      echo "<script>alert("+$_POST['voterid']+");</script>";
      echo "<script>alert("+$_POST['workid']+");</script>";
      $updateusersql = "UPDATE user SET vote = 0 WHERE id = '".$_POST['voterid']."'";
      $this->db->query($updateusersql);
      echo "<script>alert("+$_POST['workid']+");</script>";


      /*$getworksql = "SELECT voted FROM work WHERE  id = '".$_POST['workid']."'";
      $voted = $this->db->query($getworksql);
      $voted = intval($voted) +1;

      $updateworksql = "UPDATE work SET voted = ".$voted." WHERE id = '".$_POST['workid']."'";
      $query = $this->db->query($updateworksql);
      echo 1;*/


  }

  public function had_voted(){
      $query = $this->db->query("SELECT * FROM user WHERE id = '".$_POST['userid']."' AND vote = 1 ");
      echo $query->num_rows();

  } 






}
