<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
      $this->load->library('session');
      $this->load->database();
  	}
	
	public function index_()
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
      if($this->session->userdata('name') == "admin"){
              $sql = "SELECT * FROM work ORDER BY id DESC" ;
             
      }else{
              $sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."' AND status != 0 ORDER BY id DESC" ;
     
      }

      $query = $this->db->query($sql);
      $data['result'] = $query->result();
      $this->load->view('manage_index',$data);

     
    }else{
      echo "<script>alert('Please Login first!');window.location='".base_url()."';</script>";
    }

  	
	}


  //----------------------Test pagination

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

      if($this->session->userdata('name') == "admin"){
              //$sql = "SELECT * FROM work ORDER BY id DESC" ;
              // load pagination class
              $this->load->library('pagination');
              $config['base_url'] = site_url('manage/index');
              $config['total_rows'] = $this->db->count_all('work');
              $config['per_page'] = 8;
              $config['uri_segment'] = 3;  // 表示第 3 段 URL 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URL 段不是第 3 段，请修改成需要的数值。
              $config['cur_tag_open'] = ' <a class="current">'; // 当前页开始样式   
              $config['cur_tag_close'] = '</a>';

              $this->pagination->initialize($config);
              $this->load->model('Work_model');
              $data['result'] = $this->Work_model->admin_get_all_entries($config['per_page'],$this->uri->segment(3));
              $data['pagelinks'] = $this->pagination->create_links();//创分页链接
             
      }else{
              /*$sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."' AND status != 0 ORDER BY id DESC" ;
              $query = $this->db->query($sql);
              $data['result'] = $query->result();
              $this->load->view('manage_index',$data);*/
               // load pagination class
              $this->load->library('pagination');
              $config['base_url'] = site_url('manage/index');
              $this->db->where('status !=', '0');
              $this->db->where('publisher', $this->session->userdata('name'));
              $this->db->from('work');
              $config['total_rows'] = $this->db->count_all_results();
              $config['per_page'] =8;
              $config['uri_segment'] = 3;  // 表示第 3 段 URL 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URL 段不是第 3 段，请修改成需要的数值。
              $config['cur_tag_open'] = ' <a class="current">'; // 当前页开始样式   
              $config['cur_tag_close'] = '</a>';

              $this->pagination->initialize($config);
              $this->load->model('Work_model');
              $data['result'] = $this->Work_model->user_get_all_entries($config['per_page'],$this->uri->segment(3),$this->session->userdata('name'));
              $data['pagelinks'] = $this->pagination->create_links();//创分页链接
             

     
      }

      //$query = $this->db->query($sql);
      //$data['result'] = $query->result();
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

      $race = "NO";
      $status = "1";
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
          $query=$this->db->query("INSERT INTO work (id, title, createtime, category, imagename, threedfilename,description,publisher,voted,race,status) VALUES (null, '$title', '$creattime','$category','$filename.jpg', '$filename.obj','$description','$publisher',0,'$race','$status')");
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


    public function edit_()
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
        if($this->session->userdata('name') == "admin"){
               // $sql = "SELECT * FROM work ORDER BY id DESC" ;
          
               
        }else{
                $sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."' AND status != 0 ORDER BY id DESC" ;
              //$query = $this->db->query($sql);
              //$data['result'] = $query->result();
              //$this->load->view('manage_index',$data);

      
      }
        //$sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."' AND status != 0" ;
        $query = $this->db->query($sql);
        $data['result'] = $query->result();
      

        $this->load->view('manage_edit',$data);
      }else{
        echo "<script>alert('Please Login first!');window.location='".base_url()."';</script>";
      }

      
    }


    // test paginateion
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

          // check if any race
           $raceid =""; 
           $nterm = "";
          $sql = "SELECT * FROM race WHERE  status = 1 ORDER BY id DESC limit 1" ;
          $query = $this->db->query($sql);
            foreach($query->result() as $item){
              $raceid= $item->id;
              $nterm = $item->nterm;
            }

            $data['raceid'] = $raceid;
            $data['nterm'] = $nterm;
          


        if($this->session->userdata('name') == "admin"){
               // $sql = "SELECT * FROM work ORDER BY id DESC" ;
           $this->load->library('pagination');
              $config['base_url'] = site_url('manage/edit');
              $config['total_rows'] = $this->db->count_all('work');
              $config['per_page'] = 10;
              $config['uri_segment'] = 3;  // 表示第 3 段 URL 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URL 段不是第 3 段，请修改成需要的数值。
              $config['cur_tag_open'] = ' <a class="current">'; // 当前页开始样式   
              $config['cur_tag_close'] = '</a>';

              $this->pagination->initialize($config);
              $this->load->model('Work_model');
              $data['result'] = $this->Work_model->admin_get_all_entries($config['per_page'],$this->uri->segment(3));
              $data['pagelinks'] = $this->pagination->create_links();//创分页链接
          
               
        }else{
                //$sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."' AND status != 0 ORDER BY id DESC" ;
              //$query = $this->db->query($sql);
              //$data['result'] = $query->result();
              //$this->load->view('manage_index',$data);
              $this->load->library('pagination');
              $config['base_url'] = site_url('manage/edit');
              $this->db->where('status !=', '0');
              $this->db->where('publisher', $this->session->userdata('name'));
              $this->db->from('work');
              $config['total_rows'] = $this->db->count_all_results();
              $config['per_page'] =10;
              $config['uri_segment'] = 3;  // 表示第 3 段 URL 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URL 段不是第 3 段，请修改成需要的数值。
              $config['cur_tag_open'] = ' <a class="current">'; // 当前页开始样式   
              $config['cur_tag_close'] = '</a>';

              $this->pagination->initialize($config);
              $this->load->model('Work_model');
              $data['result'] = $this->Work_model->user_get_all_entries($config['per_page'],$this->uri->segment(3),$this->session->userdata('name'));
              $data['pagelinks'] = $this->pagination->create_links();//创分页链接
             

      
      }
        //$sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."' AND status != 0" ;
        //$query = $this->db->query($sql);
        //$data['result'] = $query->result();
      

        $this->load->view('manage_edit',$data);
      }else{
        echo "<script>alert('Please Login first!');window.location='".base_url()."';</script>";
      }

      
  }


    public function changestatus(){

            $sql = "UPDATE work set status='".  $_POST['status'] ."' WHERE id =". $_POST['workid'];
            $query=$this->db->query($sql);
            $sql = "SELECT * FROM work WHERE  id = ".$_POST['workid'] ;
            $query = $this->db->query($sql);
            foreach($query->result() as $item){
              echo $item->status;
            }
          
            
           
    }


     public function changeracestatus(){

            $sql = "UPDATE race set status='".  $_POST['status'] ."' WHERE id =". $_POST['raceid'];
            $query=$this->db->query($sql);
            $sql = "SELECT * FROM race WHERE  id = ".$_POST['raceid'] ;
            $query = $this->db->query($sql);
            foreach($query->result() as $item){
              echo $item->status;
            }
          
            
           
    }

    public function in_game(){
             $sql = "SELECT * FROM work WHERE  id = ".$_POST['workid'] ;
             $query = $this->db->query($sql);
              foreach($query->result() as $item){
                echo $item->race;
              }
           

    }

    public function racer_changeracestatus(){

       $sql = "UPDATE work set race='".  $_POST['race'] ."' , nterm = '".$_POST['nterm']."', raceid = '".$_POST['raceid']."' WHERE id =". $_POST['workid'];
       $query=$this->db->query($sql);
       $sql = "SELECT * FROM work WHERE  id = ".$_POST['workid'] ;
        $query = $this->db->query($sql);
        foreach($query->result() as $item){
          echo $item->race;
        }
    }

    public function race(){

      $data['login']="<ul class=\"nav pull-right\">
          <li class=\"dropdown\">
            <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"icon-user\"></i> ".$this->session->userdata('name')." <i class=\"caret\"></i>

            </a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"".base_url('/login/logout?url='.base_url('/about'))."\">Logout</a></li>
            </ul>
          </li>
          </ul>";

      if($this->session->userdata('name') == "admin"){
        $this->load->view('manage_race',$data);
      }else{
        $this->load->view('home',$data);
      }

           

    }

  public function publicrace(){
    if($_POST){

      $title=$_POST['title'];
      $description=$_POST['description'];
      $ps_datetime=$_POST['ps_date'];
      $pe_datetime=$_POST['pe_date'];
      $vs_datetime=$_POST['vs_date'];
      $ve_datetime=$_POST['ve_date'];

      $nterm = $_POST['nterm'];
      $createtime =date('Y-m-d H:i:s',time());
      $publisher=$this->session->userdata('name');
      $status =1;


      $sql = "INSERT INTO race (id, title, createtime,ps_datetime,pe_datetime,vs_datetime,ve_datetime,nterm,description,publisher,status) VALUES (null, '$title', '$createtime','$ps_datetime','$pe_datetime', '$vs_datetime','$ve_datetime','$nterm','$description','$publisher',$status)";

       $query=$this->db->query($sql);
          if(!$query){
            echo "<script>alert('Insert Failed !');window.location='".base_url('announcement')."';</script>";
          }else{
            echo "<script>alert('Insert Successfully !');window.location='".base_url('announcement')."';</script>";
            
          }

    }
  }


    public function editrace()
    {
      
        if($this->session->userdata('name') == "admin"){
          $data['login']="<ul class=\"nav pull-right\">
            <li class=\"dropdown\">
              <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"icon-user\"></i> ".$this->session->userdata('name')." <i class=\"caret\"></i>

              </a>
              <ul class=\"dropdown-menu\">
                  <li><a href=\"".base_url('/login/logout?url='.base_url('/about'))."\">Logout</a></li>
              </ul>
            </li>
            </ul>";
               // $sql = "SELECT * FROM work ORDER BY id DESC" ;
           $this->load->library('pagination');
              $config['base_url'] = site_url('manage/editrace');
              $config['total_rows'] = $this->db->count_all('race');
              $config['per_page'] = 10;
              $config['uri_segment'] = 3;  // 表示第 3 段 URL 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URL 段不是第 3 段，请修改成需要的数值。
              $config['cur_tag_open'] = ' <a class="current">'; // 当前页开始样式   
              $config['cur_tag_close'] = '</a>';

              $this->pagination->initialize($config);
              $this->load->model('Race_model');
              $data['result'] = $this->Race_model->admin_get_all_entries($config['per_page'],$this->uri->segment(3));
              $data['pagelinks'] = $this->pagination->create_links();//创分页链接
              $this->load->view('manage_editrace',$data);
        }else{
          echo "<script>window.location='".base_url('announcement')."';</script>";      
        }
    }
}
