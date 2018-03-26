<?php

class Members extends CI_Controller {
    
    public function create(){

        $data['schools'] = $this->member_model->load_schools();

        $data['members'] = $this->member_model->load_members();;
        
        $this->form_validation->set_rules('name', 'name','required');
        $this->form_validation->set_rules('email', 'email','required');
        $this->form_validation->set_rules('school', 'school','required');

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
       
        $data['schools'] = $this->member_model->load_schools();
        
        $this->load->view('templates/header');
        $this->load->view('members/search',$data);
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