<?php

    class TipeKamar extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_TipeKamar');
        }

        public function index() {
            if($this->session->userdata('login')!= TRUE) {
                redirect('login');
            }

            $data['title'] = "Tipe Kamar";
            $data['tipekamar'] = $this->M_TipeKamar->data_tipekamar();
            $this->template->load_admin('index', 'tipekamar', $data);
        }


        public function tambah() {

            // ===== Dari Youtube 1 =====

            // $config['upload_path']          = './assets/images';
            // $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 10000;
            // $config['max_width']            = 10000;
            // $config['max_height']           = 10000;

            // $this->load->library('upload', $config);

            // if (!$this->upload->do_upload('userfile'))
            // {
            //     echo "Gagal Tambah";
            // }
            // else
            // {
            //     $data = array('upload_data' => $this->upload->data());
            //     $this->load->view('upload_success', $data);
            // }

            // ===== Dari Youtube 2 =====

            // $id_kamar_tipe      = $this->input->post('id_kamar_tipe');
            // $nama_kamar_tipe    = $this->input->post('nama_kamar_tipe');
            // $fasilitas          = $this->input->post('fasilitas');
            // $harga              = $this->input->post('harga');
            // $gambar             = $_FILES['gambar'];
            // if ($gambar='') {} else {
            //     $config['upload_path']      = '.assets/images';
            //     $config['allowed_types']    = 'jpg|png|gif';

            //     $this->load->library('upload');
            //     $this->upload->initialize($config);

                // if($this->upload->do_upload('gambar')) {
                //     $gambar = $this->upload->data('file_name');
                // // } else {
                // //     echo "Upload Gagal"; die();
                // // }
            // }

            // ===== Default =====

            // if($this->session->userdata('login')!= TRUE){
            //     redirect('login');
            // }

            // $data['title'] = "Tipe Kamar";
            // $data['subtitle'] = "Tambah Tipe Kamar";
            // $this->template->load_admin('index','tipekamar_tambah',$data);


            $config['upload_path'] = './image/';
            $config['allowed_types'] = 'pdf|png|jpg';
            $config['max_size'] = 500;
            $this->load->library('tipekamar', $config);
            $this->upload->do_upload('gambar');
            $datafile = $this->upload->data();
            $link = $config['upload_path'] . $datafile['file_name'];
            return $link;

            // ==================================

            

            // $data = array(
            //     'id_kamar_tipe'     => $id_kamar_tipe,
            //     'nama_kamar_tipe'   => $nama_kamar_tipe,
            //     'fasilitas'         => $fasilitas,
            //     'gambar'            => $gambar,
            //     'harga'             => $harga,
            // );

            // $this->M_TipeKamar->input_data($data, 'kamar_tipe');
            // redirect('tipekamar');
        }

        public function simpan(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $this->M_TipeKamar->simpan();		
            redirect('tipekamar');
        }

        public function ubah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "Tipe Kamar";
            $data['subtitle'] = "Edit Tipe Kamar";
        
            $id = $this->uri->segment(3);
            $data['tipekamar'] = $this->M_TipeKamar->data_tipekamar_by_id($id);
            $this->template->load_admin('index','tipekamar_ubah',$data);
        }

        public function update(){
            if ($this->session->userdata('login') != TRUE) {
                redirect('login');
            }
        
            $this->M_TipeKamar->update();
            redirect('tipekamar');
        }
    }