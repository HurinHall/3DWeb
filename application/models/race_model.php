<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Race_model extends CI_Model {
    



    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

     //Admin 获取race 所有记录
    function admin_get_all_entries($num, $offset)
    {   
        $this->db->order_by('id','DESC');
        $query = $this->db->get('race', $num, $offset);        
        return $query->result();
    }
}