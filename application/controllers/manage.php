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
      //$sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."'";
      $sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."' AND status != 0 " ;

      $query = $this->db->query($sql);
      $data['result'] = $query->result();
    

      $this->load->view('manage_index',$data);
    }else{
      echo "<script>alert('Please Login first!');window.location='".base_url()."';</script>";
    }

  	
	}


  public function profile()
  {
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
      

      $uid = $this->session->userdata('userid');
      $sql = "SELECT * FROM user WHERE id = $uid";
      $query = $this->db->query($sql);
      if($query->num_rows()==0){
        
         echo "<script>alert('No such a user!');window.location='".base_url()."';</script>";
        
      }else{
        $data['result']=$query->first_row();
      }

      $this->load->view('manage_profile',$data);
    }else{
      echo "<script>alert('Please Login first!');window.location='".base_url()."';</script>";
    }


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
      $sql = "UPDATE user set pwd=PASSWORD('$password') WHERE id = $uid";
      $query=$this->db->query($sql);
      if(!$query){
        echo "<script>alert('Chanage Password Failed !');window.location='".base_url('/manage/profile')."';</script>";
      }else{
        echo "<script>alert('Register Successfully !');window.location='".base_url('/manage/profile')."';</script>";
      }

    }
  }

  public function upload()
  {
    
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
      $this->load->view('manage_upload',$data);
        }else{
          echo "<script>alert('Please Login first!');window.location='".base_url()."';</script>";
        }
  }

  public function uploadfile(){  

    $error1 = 0;
    $error2 = 0;

    if($_POST){

      $title=$_POST['title'];
      $category=$_POST['category'];
      $description=$_POST['description'];
      $creattime=$_POST['date'];
      $publisher = $this->session->userdata('name');
      $filename = $publisher.'_'. $creattime;
      //$imagename = $filename.'jpg';
      
      //var_dump($zipfile);

      //

    $path = getcwd().'/models/'.$this->session->userdata('name').'/';
    $zipfile = $path.$filename.'.zip';
    $destinantion = $path.$filename.'/'; 

    if (!file_exists($path)) {
      mkdir($path,0777);
    }
   
    $config['upload_path'] = $path;
    $config['allowed_types'] = 'jpg|zip';
    $config['file_name'] = $filename;
    $config['max_size'] = '5000';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';
    
    $this->load->library('upload', $config);
    
    if ( !$this->upload->do_upload('imagefile'))
      {
          //echo "Imange Cover Upload Failed";
          $error1=1;
      } 
    else
      {
          //echo "Imange Cover Upload Successfully";
          $error1=0;
      }

    if ( !$this->upload->do_upload('threedfile'))
      {
         //echo "3D File Upload Failed";
          $error2=1;
      } 
    else
      {
         //unzip the 3d zip file
         $this->unzip_file($zipfile,$destinantion);
        // rename the obj file
         $this->objfilerename($destinantion,$filename);

          $error2=0;
      }

      if($error1==0 && $error2==0){
          $query=$this->db->query("INSERT INTO work (id, title, createtime, category, imagename, threedfilename,description,publisher,voted,competition,status) VALUES (null, '$title', '$creattime','$category','$filename.jpg', '$filename.obj','$description','$publisher',0,0,1)");
          if(!$query){
            echo "<script>alert('Insert Failed !');window.location='".base_url('/manage/upload')."';</script>";
          }else{

            echo "<script>alert('Insert Successfully !');window.location='".base_url('/manage/upload')."';</script>";
            
          }
      }else{
            echo "<script>alert('Upload Failed !');window.location='".base_url('/manage/upload')."';</script>";
      }
         
    }

  }      


  public function unzip_file($zipfile,$destinantion){
      $zip = new ZipArchive() ;
      //打开压缩文件
      if ($zip->open($zipfile) !== TRUE) {
          die ('Could not open archive');
          }
      //创建文件
      $zip->extractTo($destinantion);
      $zip->close();
      
  }

  public function objfilerename($destinantion,$filename){
    $dir= $destinantion;
    $filenames = scandir($destinantion);
    foreach ($filenames as $name) {
    
      $path_parts = pathinfo($name);
      if($path_parts['extension'] == 'obj'){
         //echo $name.'<br>';
         rename($destinantion.$name,$destinantion.$filename.'.obj');
         break;
      }

}

  }


    public function edit()
    {
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
        $sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."' AND status != 0" ;
        $query = $this->db->query($sql);
        $data['result'] = $query->result();
      

        $this->load->view('manage_edit',$data);
      }else{
        echo "<script>alert('Please Login first!');window.location='".base_url()."';</script>";
      }

      
    }


    public function updatemywork($id,$status){

            $sql = "UPDATE work set status= $status WHERE id = $id";
            $query=$this->db->query($sql);
            if($status == "0"){
               echo "<script>alert('Delete Successfully!');</script>";
            }
            echo "<script>window.location='".base_url('manage/edit')."';</script>";
          
            
           
    }




}
