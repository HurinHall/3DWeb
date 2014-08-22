<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work_model extends CI_Model {
    



    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

     //Admin 获取blog 所有记录
    function admin_get_all_entries($num, $offset)
    {   
        $this->db->order_by('id','DESC');
        $query = $this->db->get('work', $num, $offset);        
        return $query->result();
    }
        //User 获取blog 所有记录
    function user_get_all_entries($num, $offset,$publisher)
    {   
    	$this->db->where('publisher', $publisher); 
        $this->db->where('status', '1'); 
        $this->db->order_by('id','DESC');
        $query = $this->db->get('work', $num, $offset);        
        return $query->result();
    }
        //Public 获取blog 所有记录
    function public_get_all_entries($num, $offset)
    {   
        $this->db->where('status', '1'); 
        $this->db->order_by('id','DESC');
        $query = $this->db->get('work', $num, $offset);        
        return $query->result();
    }

            //User 获取blog 所有记录
    function vote_get_all_entries($num, $offset)
    {   
        $this->db->where('status', '1'); 
        $this->db->where('race', 'YES'); 

        $this->db->order_by('id','DESC');
        $query = $this->db->get('work', $num, $offset);        
        return $query->result();
    }

}