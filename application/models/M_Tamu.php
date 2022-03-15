<?php 

    class M_Tamu extends CI_Model {
        function data_tamu() {
            $query = $this->db->query("select * from tamu");
            return $query;
        }

        function simpan(){
            $data = array('nik' => $this->input->post('nik'),
                    'nama_depan' => $this->input->post('nama_depan'),
                    'nama_belakang' => $this->input->post('nama_belakang'),
                    'tipe_identitas' => $this->input->post('tipe_identitas'),
                    'nomor_identitas' => $this->input->post('nomor_identitas'),
                    'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_hp' => $this->input->post('no_hp'),
                    'email' => $this->input->post('email'));
            $insert = $this->db->insert('tamu',$data);

            if ($insert > 0) {
                $this->session->set_flashdata('suksessimpan','Data Tamu Berhasil Disimpan');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Tamu Gagal Disimpan');
            }		
        }

        function data_tamu_by_id($id){
            $query = $this->db->query("select * from tamu where id_tamu = '$id'");
            return $query;
        }

        function hapus_data_tamu($id){
            $query = $this->db->query("delete from tamu where id_tamu = '$id'");
            if($query > 0){
                $this->session->set_flashdata('suksessimpan','Data Tamu Berhasil Dihapus');
            } else {
                $this->sesssion->set_flashdata('gagalsimpan','Data Tamu Gagal dihapus');    
            }
        }
    }