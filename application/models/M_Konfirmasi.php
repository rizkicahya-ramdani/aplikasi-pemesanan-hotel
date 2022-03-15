<?php 

    class M_Konfirmasi extends CI_Model {
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
    
        function konfirmasi_booking($a){
            $this->db->select("*")->from('tamu a, reservasi b');
            $this->db->where('a.nik = b.nik')->where('a.nik',$a);
            return $this->db->get();
        }
    }