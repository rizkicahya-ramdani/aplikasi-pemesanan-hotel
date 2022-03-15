<?php
class M_TipeKamar extends CI_Model
{
    function data_tipekamar()
    {
        $query = $this->db->query("select * from tipekamar");
        return $query;
    }

    function simpan($data)
    {
        $insert = $this->db->insert('tipekamar', $data);

        if ($insert > 0) {
            $this->session->set_flashdata('suksessimpan', 'Data Tipe Kamar Berhasil Disimpan');
        } else {
            $this->session->set_flashdata('gagalsimpan', 'Data Tipe Kamar Gagal Disimpan');
        }
    }

    function data_tipekamar_by_id($id)
    {
        $query = $this->db->query("select * from tipekamar where id_kamar_tipe = '$id'");
        return $query;
    }

    function upload_gambar() {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'pdf|png|jpg';
        $config['max_size'] = 500;
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        $datafile = $this->upload->data();
        $link = $config['upload_path'] . $datafile['file_name'];
        return $link;
    }

    function update()
    {
        $where = array('id_kamar_tipe' => $this->input->post('id_kamar_tipe'));
        $data1 = array(
            'nama_kamar_tipe' => $this->input->post('nama_kamar_tipe'),
            'fasilitas' => $this->input->post('fasilitas'),
            'gambar' => $this->upload_gambar(),
            'harga' => $this->input->post('harga'),
        );

        $data2 = array(
            'nama_kamar_tipe' => $this->input->post('nama_kamar_tipe'),
            'fasilitas' => $this->input->post('fasilitas'),
            'gambar' => $this->upload_gambar(),
            'harga' => $this->input->post('harga')
        );

        if (empty($this->input->post('id_kamar_tipe'))) {
            $this->db->where($where);
            $query = $this->db->update('tipekamar', $data2);
        } else {
            $this->db->where($where);
            $query = $this->db->update('tipekamar', $data1);
        }

        if ($query > 0) {
            $this->session->set_flashdata('suksessimpan', 'Data Tipe Kamar Berhasil Diperbaharui');
        }
    }

    function hapus_data_tipekamar($id)
    {
        $query = $this->db->query("delete from tipekamar where id_kamar_tipe = '$id'");
        if ($query > 0) {
            $this->session->set_flashdata('suksessimpan', 'Data Tipe Kamar Berhasil Dihapus');
        } else {
            $this->sesssion->set_flashdata('gagalsimpan', 'Data Tipe Kamar Gagal dihapus');
        }
    }
}