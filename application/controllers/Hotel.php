<?php

    class Hotel extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_Hotel');
        }

        public function index() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
    
            $data['title'] = "Hotel";
            $data['hotel'] = $this->M_Hotel->data_hotel();
            $this->template->load_admin('index','hotel',$data);
        }

        public function tambah() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }

            $data['title'] = "Hotel";
            $data['subtitle'] = "Tambah Hotel";
            $this->template->load_admin('index','hotel_tambah',$data);
        }

        public function simpan() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $this->M_Hotel->simpan();		
            redirect('hotel');
        }

        public function ubah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "Hotel";
            $data['subtitle'] = "Edit Hotel";
        
            $id = $this->uri->segment(3);
            $data['hotel'] = $this->M_Hotel->data_hotel_by_id($id);
            $this->template->load_admin('index','hotel_ubah',$data);
        }

        public function update(){
            if ($this->session->userdata('login') != true) {
                redirect('login');
            }
        
            $this->M_Hotel->update();
            redirect('hotel');
        }

        public function hapus(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $id = $this->uri->segment(3);
            $this->M_Hotel->hapus_data_hotel($id);
            redirect('hotel');
        }
    }