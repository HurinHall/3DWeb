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
			$role="user";
			$status="UNACTIVE";
			$regtime=date('YmdHis',time());
			$query=$this->db->query("INSERT INTO user (id, name, email, pwd, studentid, major,role,regtime,status) VALUES (null, '$name', '$email', md5('$password'), '$studentid', '$major','$role','$regtime','$status')");
			if(!$query){
				echo "<script>alert('Register Failed !');window.location='".base_url('/register')."';</script>";
			}else{
				echo "<script>alert('Register Successfully ! Please go to your Email to Active your account.');window.location='".base_url('/')."';</script>";
			}


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
        $pwd = md5($password);
        $token= md5($name.$pwd.$email.$regtime); 
       

        $activelink=base_url()."account/active/".$name."/".$token;          
          
        //以下设置Email内容  
        $this->email->from('website3d@163.com', 'website3d');  
        $this->email->to($email);  
        $this->email->subject('Welcome to 3D Website!');  
        $this->email->message('<h3>Dear '.$name.',</h3><br><h4>Thank you for regitered the account in this website! <br>Click the following link to ACTIVE your account.<br>link:<a href='.$activelink.'>'.$activelink.'</a><br> Your Email:'.$email.'<br></h4><p>Any question please contact: admin@uic.edu.hk</p> <br><br>Best all!<br>');  
        //$this->email->attach('application\controllers\1.jpeg');           //相对于index.php的路径  
  
        $this->email->send();  
  
        //echo $this->email->print_debugger();        //返回包含邮件内容的字符串，包括EMAIL头和EMAIL正文。用于调试。  
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
