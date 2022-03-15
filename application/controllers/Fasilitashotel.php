<?php
class Fasilitashotel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Fasilitashotel');
    }

    public function index()
    {
        if ($this->session->userdata('login') != TRUE) {
            redirect('login');
        }

        $data['title'] = "Data Fasilitas Hotel";
        $data['fasilitashotel'] = $this->M_Fasilitashotel->data_fasilitashotel();
        $this->template->load_admin('index', 'fasilitashotel', $data);
    }

    public function tambah()
    {
        if ($this->session->userdata('login') != TRUE) {
            redirect('login');
        }
        $data['title'] = "Data Fasilitas Hotel";
        $data['subtitle'] = "Tambah Data Fasilitas Hotel";
        $this->template->load_admin('index', 'fasilitashotel_tambah', $data);
    }

    public function upload_gambar()
    {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'pdf|png|jpg';
        $config['max_size'] = 500;
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        $datafile = $this->upload->data();
        $link = $config['upload_path'] . $datafile['file_name'];
        return $link;
    }

    public function ubah()
    {
        if ($this->session->userdata('login') != TRUE) {
            redirect('login');
        }

        $data['title'] = "Data Fasilitas Hotel";
        $data['subtitle'] = "Edit Data Fasilitas Hotel";

        $id = $this->uri->segment(3);
        $data['fasilitashotel'] = $this->M_Fasilitashotel->data_fasilitashotel_by_id($id);
        $this->template->load_admin('index', 'fasilitashotel_ubah', $data);
    }
    
    public function update()
    {
        if ($this->session->userdata('login') != true) {
            redirect('login');
        }

        $this->M_Fasilitashotel->update();
        redirect('fasilitashotel');
    }

    public function simpan()
    {
        if ($this->session->userdata('login') != TRUE) {
            redirect('login');
        }

        $data = array(
            'id_fasilitas_hotel' => $this->input->post('id_fasilitas_hotel'),
            'nama_fasilitas_hotel' => $this->input->post('nama_fasilitas_hotel'),
            'gambar' => $this->upload_gambar(),
            'keterangan' => $this->input->post('keterangan'),
        );

        $this->M_Fasilitashotel->simpan($data);
        redirect('fasilitashotel');
    }

    public function hapus()
    {
        if ($this->session->userdata('login') != TRUE) {
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Fasilitashotel->hapus_data_fasilitashotel($id);
        redirect('fasilitashotel');
    }
}