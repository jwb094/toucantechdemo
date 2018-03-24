<?php 

class Member_model extends CI_Model{
    public function __construct(){
            $this->load->database();

    }

   public function get_members(){
        $input= $this->input->post('school');
        $query = $this->db->get_where('members',array('school' => $input));
        return $query->result();

    }

    public function create_member(){

         $data = array(
             'member' =>$this->input->post('name'),
             'email' => $this->input->post('email'),
             'school' => $this->input->post('school')
        );
             return  $this->db->insert('members',$data);

     }



    
}