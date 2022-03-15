<?php
class M_Fasilitashotel extends CI_Model
{
    function data_fasilitashotel()
    {
        $query = $this->db->query("select * from fasilitashotel");
        return $query;
    }

    function simpan($data)
    {
        $insert = $this->db->insert('fasilitashotel', $data);

        if ($insert > 0) {
            $this->session->set_flashdata('suksessimpan', 'Data Fasilitas Hotel Berhasil Disimpan');
        } else {
            $this->session->set_flashdata('gagalsimpan', 'Data Fasilitas Hotel Gagal Disimpan');
        }
    }

    function data_fasilitashotel_by_id($id)
    {
        $query = $this->db->query("select * from fasilitashotel where id_fasilitas_hotel = '$id'");
        return $query;
    }

    function upload_gambar()
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

    function update()
    {
        $where = array('id_fasilitas_hotel' => $this->input->post('id_fasilitas_hotel'));


        $data1 = array(
            'nama_fasilitas_hotel' => ($this->input->post('nama_fasilitas_hotel')),
            'gambar' => $this->upload_gambar(),
            'keterangan' => $this->input->post('keterangan')
        );

        $data2 = array(
            'nama_fasilitas_hotel' => ($this->input->post('nama_fasilitas_hotel')),
            'gambar' => $this->upload_gambar(),
            'keterangan' => $this->input->post('keterangan')
        );

        if (empty($this->input->post('id_fasilitas_hotel'))) {
            $this->db->where($where);
            $query = $this->db->update('fasilitashotel', $data2);
        } else {
            $this->db->where($where);
            $query = $this->db->update('fasilitashotel', $data1);
        }

        if ($query > 0) {
            $this->session->set_flashdata('suksessimpan', 'Data Fasilitas Hotel Berhasil Diperbaharui');
        }
    }

    function hapus_data_fasilitashotel($id)
    {
        $query = $this->db->query("delete from fasilitashotel where id_fasilitas_hotel = '$id'");

        if ($query > 0) {
            $this->session->set_flashdata('suksessimpan', 'Data Fasilitas Hotel Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('gagalsimpan', 'Data Fasilitas Hotel Gagal Dihapus');
        }
    }
}