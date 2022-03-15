<?php

    class Konfirmasi extends CI_Controller {
        public function index() {
            $this->load->model('M_Konfirmasi');
            $data['konfirmasi_booking'] = $this->M_Konfirmasi->konfirmasi_booking($this->session->userdata('ss_nik'))->row_array();
            $this->load->view('konfirmasi',$data);
        }
    }