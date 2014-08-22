<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work extends CI_Controller {

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
            <li><a href=\"".base_url('/login/logout?url='.base_url('/work'))."\">Logout</a></li>
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
            <input type=\"hidden\" name=\"url\" value=\"".base_url('/work')."\" />
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            <a class=\"btn btn-success\" href=\"".base_url('/register')."\">Register</a>
          </form>";
      
    
		}
                    //$sql = "SELECT * FROM work WHERE publisher = '".$this->session->userdata('name')."'";
      /*$sql = "SELECT * FROM work WHERE  status = 1" ;

      $query = $this->db->query($sql);
      $data['result'] = $query->result();*/

       $this->load->library('pagination');
              $config['base_url'] = site_url('work/index');
              $this->db->where('status ', '1');
              $this->db->from('work');
              $config['total_rows'] = $this->db->count_all_results();
              $config['per_page'] =8;
              $config['uri_segment'] = 3;  // 表示第 3 段 URL 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URL 段不是第 3 段，请修改成需要的数值。
              $config['cur_tag_open'] = ' <a class="current">'; // 当前页开始样式   
              $config['cur_tag_close'] = '</a>';

              $this->pagination->initialize($config);
              $this->load->model('Work_model');
              $data['result'] = $this->Work_model->public_get_all_entries($config['per_page'],$this->uri->segment(3));
              $data['pagelinks'] = $this->pagination->create_links();//创分页链接
		$this->load->view('work',$data);
	}
}
