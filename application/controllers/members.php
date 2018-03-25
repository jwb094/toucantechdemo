<?php

class Members extends CI_Controller {
    
    public function create(){


        $data['title'] = 'Create A New Member';
        
        $this->form_validation->set_rules('name', 'Name','required');
        $this->form_validation->set_rules('email', 'Email','required');
        $this->form_validation->set_rules('school', 'School','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('members/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->member_model->create_member();
            redirect('members/search');       
        
        }

    }

    
    public function search(){
        
        $this->load->view('templates/header');
        $this->load->view('members/search');
        $this->load->view('templates/footer');
    }

    public function getRecords(){
        $data['post'] = $this->member_model->get_members();

        if(empty($data['post'])){
            show_404();
        }

        $data['title'] = 'Search Results';
        $this->load->view('templates/header');
        $this->load->view('members/display',$data);
        $this->load->view('templates/footer');

    }
}