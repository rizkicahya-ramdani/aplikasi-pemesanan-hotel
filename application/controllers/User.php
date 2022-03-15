<?php

    class User extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_User');
        }

        public function index() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
    
            $data['title'] = "User";
            $data['user'] = $this->M_User->data_user();
            $this->template->load_admin('index','user',$data);
        }

        public function tambah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "User";
            $data['subtitle'] = "Tambah User";
            $this->template->load_admin('index','user_tambah',$data);		
        }

        public function simpan(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $this->M_User->simpan();		
            redirect('user');
        }

        public function ubah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "User";
            $data['subtitle'] = "Edit User";
        
            $id = $this->uri->segment(3);
            $data['user'] = $this->M_User->data_user_by_id($id);
            $this->template->load_admin('index','user_ubah',$data);
        }

        public function update(){
            if ($this->session->userdata('login') != true) {
                redirect('login');
            }
        
            $this->M_User->update();
            redirect('user');
        }

        public function hapus(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $id = $this->uri->segment(3);
            $this->M_User->hapus_data_user($id);
            redirect('user');
        }
    }