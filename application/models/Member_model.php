<?php 

class Member_model extends CI_Model{
    public function __construct(){
            $this->load->database();
    }

    public function load_schools(){
        $query = $this->db->get('schools');
        return $query->result_array();
    }

    public function load_members(){
        $query = $this->db->get('members');
        return $query->result_array();
    }



   public function get_members(){
        $input= $this->input->post('school');
        $memberquery = $this->db->get_where('schoolmembers' , array('schoolid' =>$input));
        return $memberquery->result_array();
    
    }

    public function create_member(){

         $data = array(
             'member' =>$this->input->post('name'),
             'email' => $this->input->post('email'),
             'schoolid' => $this->input->post('school')
        );
             return  $this->db->insert('schoolmembers',$data);
     }



    
}