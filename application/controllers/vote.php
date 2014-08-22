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
   /* $sql = "SELECT * FROM work WHERE  status = '1' AND race = 'YES'" ;
  
    $query = $this->db->query($sql);
    $data['result'] = $query->result();*/

      // check if any race
    $data['result']=array();
           $raceid =""; 
           $nterm = "";
            $sql = "SELECT * FROM race WHERE  status = 1 ORDER BY id DESC limit 1" ;
            $query = $this->db->query($sql);
            foreach($query->result() as $item){
              $raceid= $item->id;
              $nterm = $item->nterm;
            }
           if(strlen($raceid)>0){
              $data['raceid'] = $raceid;
              $data['nterm'] = $nterm;
              $this->load->library('pagination');
              $config['base_url'] = site_url('vote/index');
              $this->db->where('nterm ', $nterm);
              $this->db->where('status ', '1');
              $this->db->where('race ', 'YES');
              $this->db->from('work');
              $config['total_rows'] = $this->db->count_all_results();
              $config['per_page'] =8;
              $config['uri_segment'] = 3;  // 表示第 3 段 URL 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URL 段不是第 3 段，请修改成需要的数值。
              $config['cur_tag_open'] = ' <a class="current">'; // 当前页开始样式   
              $config['cur_tag_close'] = '</a>';

              $this->pagination->initialize($config);
              $this->load->model('Work_model');
              $data['result'] = $this->Work_model->vote_get_all_entries($config['per_page'],$this->uri->segment(3));
              $data['pagelinks'] = $this->pagination->create_links();//创分页链接
           }

            
		      $this->load->view('vote',$data);
	}


  public function do_vote(){
      $updateusersql = "UPDATE user SET vote = vote+1 WHERE id = '".$_POST['voterid']."'";
      $this->db->query($updateusersql);
      $updateusersql = "UPDATE work SET voted = voted+1 WHERE id = '".$_POST['workid']."'";
      $this->db->query($updateusersql);
      $sql = "SELECT * FROM work WHERE  id = '".$_POST['workid']."'" ;
      $query = $this->db->query($sql);
      foreach($query->result() as $item){
	      echo $item->voted;
      }



  }

  public function had_voted(){
      $query = $this->db->query("SELECT * FROM user WHERE id = '".$_POST['userid']."' AND vote = 1 ");
      echo $query->num_rows();

  } 






}
