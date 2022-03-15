<?php

    class DataDiri extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_Tamu');
            $this->load->model('M_Reservasi');
        }

        public function index() {
            // $data['tamu'] = $this->M_Tamu->simpan();
            // $this->load->view('datadiri', $data);

            $this->load->view('datadiri');
        }
    }