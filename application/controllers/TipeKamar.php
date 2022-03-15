<?php 

    class TipeKamar extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_TipeKamar');
        }

        public function index() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
    
            $data['title'] = "Tipe Kamar";
            $data['tipekamar'] = $this->M_TipeKamar->data_tipekamar();
            $this->template->load_admin('index','tipekamar',$data);
        }

        public function tambah(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $data['title'] = "Tipe Kamar";
            $data['subtitle'] = "Tambah Tipe Kamar";
            $this->template->load_admin('index', 'tipekamar_tambah',$data);		
        }

        public function upload_gambar() {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'pdf|png|jpg';
            $config['max_size'] = 500;
            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar');
            $datafile = $this->upload->data();
            $link = $config['upload_path'] . $datafile['file_name'];
            return $link;
        }

        public function simpan(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }

            $data = array(
                'id_kamar_tipe' => $this->input->post('id_kamar_tipe'),
                'nama_kamar_tipe' => $this->input->post('nama_kamar_tipe'),
                'fasilitas' => $this->input->post('fasilitas'),
                'gambar' => $this->upload_gambar(),
                'harga' => $this->input->post('harga'),
            );
        
            $this->M_TipeKamar->simpan($data);		
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
            if ($this->session->userdata('login') != true) {
                redirect('login');
            }
        
            $this->M_TipeKamar->update();
            redirect('tipekamar');
        }

        public function hapus(){
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
        
            $id = $this->uri->segment(3);
            $this->M_TipeKamar->hapus_data_tipekamar($id);
            redirect('tipekamar');
        }
    }