<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->library('session');
      $this->load->database();
  	}
	





  	function active($name,$token){
  		  $sql="SELECT * FROM user WHERE name = '".$name."'";

      	$query=$this->db->query($sql);
      	$result= $query->first_row();
      	$pwd=$result->pwd;
      	$email=$result->email;
      	$regtime=$result->regtime;
        $_token= md5($name.$pwd.$email.$regtime); 
        //echo $token."---------".$_token;
        $status = $result->status;
        if($token == $_token && $status == "UNACTIVE"){
        	$uid = $result->id;//
        	$sql = "UPDATE user set status= 'ACTIVE' WHERE id = ".$uid;
        	$query=$this->db->query($sql);
		    if(!$query){
		        echo "<script>alert('ACTIVE Account Failed !');window.location='".base_url()."';</script>";
		        //redirect(base_url());
		    }else{
		        echo "<script>alert('ACTIVE Account  Successfully !');window.location='".base_url()."';</script>";
		         // redirect(base_url());
		    }
        }
        redirect(base_url());

  	}



  	function forgetpwd(){
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
		
		$this->load->view('forgetpwd',$data);
  	}


    function resetnewpwd($name,$token){
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

      $sql="SELECT * FROM user WHERE name = '".$name."'";

      $query=$this->db->query($sql);
      $data['result']= $query->first_row();

      $this->load->view('resetnewpwd',$data);


     
    }


    function updatepwd(){
    if($_POST){
      $password = $_POST['password'];
      $uid = $_POST['uid'];
      $sql = "UPDATE user set pwd=md5('$password') WHERE id = $uid";
      $query=$this->db->query($sql);
      if(!$query){
        echo "<script>alert('Rest Password Failed !');window.location='".base_url()."';</script>";
      }else{
        echo "<script>alert('Rest Successfully !');window.location='".base_url()."';</script>";
      }

    }

    }


    function resetpwd(){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $sql = "SELECT * FROM user WHERE name = '".$name."' AND email = '".$email."'" ;
      $query=$this->db->query($sql);
      $result=$query->first_row();

      $row=$query->num_rows();

      if($row){
        $this->load->library('email');            //加载CI的email类  
          
        //以下设置Email参数  
        $config['protocol'] = 'smtp';  
        $config['smtp_host'] = 'smtp.163.com';  
        $config['smtp_user'] = 'website3d';  
        $config['smtp_pass'] = 'amywebsite';  
        $config['smtp_port'] = '25';  
        $config['charset'] = 'utf-8';  
        $config['wordwrap'] = TRUE;  
        $config['mailtype'] = 'html';  
        $this->email->initialize($config);  
        $token= md5($name.$email); 
       

        $resetlink=base_url()."account/resetnewpwd/".$name."/".$token;          
          
        //以下设置Email内容  
        $this->email->from('website3d@163.com', 'website3d');  
        $this->email->to($email);  
        $this->email->subject('Reset Password!');  
        $this->email->message('<h3>Dear '.$name.',</h3><br><h4>Please reset your new password! <br>Click the following link to reset your password.<br>link:<a href='.$resetlink.'>'.$resetlink.'</a><br></h4><p>Any question please contact: admin@uic.edu.hk</p> <br><br>Best all!<br>');  
        //$this->email->attach('application\controllers\1.jpeg');           //相对于index.php的路径  
  
        $this->email->send();  
         echo "<script>alert('Please check your Email and Rest your password!');window.location='".base_url('/account/forgetpwd')."';</script>";
      }else{
         echo "<script>alert('Name and  Email  DO NOT Match !');window.location='".base_url('/account/forgetpwd')."';</script>";
      }
    }








}