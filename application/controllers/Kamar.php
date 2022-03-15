<?php

    class Kamar extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_Kamar');
        }

        public function index() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
    
            $data['title'] = "Kamar";
            $data['kamar'] = $this->M_Kamar->data_kamar();
            $this->template->load_admin('index','kamar',$data);
        }

        public function tambah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "Kamar";
            $data['subtitle'] = "Tambah Kamar";
            $this->template->load_admin('index','kamar_tambah',$data);		
        }

        public function ubah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "Kamar";
            $data['subtitle'] = "Edit Kamar";
        
            $id = $this->uri->segment(3);
            $data['kamar'] = $this->M_Kamar->data_kamar_by_id($id);
            $this->template->load_admin('index','kamar_ubah',$data);
        }

        public function update(){
            if ($this->session->userdata('login') != true) {
                redirect('login');
            }
        
            $this->M_Kamar->update();
            redirect('kamar');
        }

        public function simpan(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $this->M_Kamar->simpan();		
            redirect('kamar');
        }

        public function hapus(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $id = $this->uri->segment(3);
            $this->M_Kamar->hapus_data_kamar($id);
            redirect('kamar');
        }

    }