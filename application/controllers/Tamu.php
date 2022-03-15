<?php

    class Tamu extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_Tamu');
            $this->load->model('M_Reservasi');
        }

        public function index() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }

            $data['title'] = "Tamu";
            $data['tamu'] = $this->M_Tamu->data_tamu();
            $this->template->load_admin('index','tamu',$data);
        }


        public function simpan(){
            // if($this->session->userdata('login')!= TRUE){
            //     redirect('login');
            // }
            
            $this->session->set_userdata('ss_nik', $this->input->post('nik'));
            $this->M_Tamu->simpan();
            $this->M_Reservasi->simpan();
            redirect('konfirmasi');
        }

        public function hapus(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $id = $this->uri->segment(3);
            $this->M_Tamu->hapus_data_tamu($id);
            redirect('tamu');
        }
    }