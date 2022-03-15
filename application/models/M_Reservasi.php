<?php

    class M_Reservasi extends CI_Model {
        function data_reservasi() {
            $query = $this->db->query("select * from reservasi");
            return $query;
        }

        function simpan(){
            $data = array('id_reservasi' => $this->input->post('id_reservasi'),
                    'nik' => $this->session->userdata('ss_nik'),
                    'kode_booking' => generate_string(),
                    'tanggal_in' => $this->input->post('tanggal_in'),
                    'jam_in' => $this->input->post('jam_in'),
                    'tanggal_out' => $this->input->post('tanggal_out'),
                    'jam_out' => $this->input->post('jam_out'));
            $insert = $this->db->insert('reservasi',$data);

            if ($insert > 0) {
                $this->session->set_flashdata('suksessimpan','Data Reservasi Berhasil Disimpan');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Reservasi Gagal Disimpan');
            }		
        }

        function hapus_data_reservasi($id) {
            $query = $this->db->query("delete from reservasi where id_reservasi = '$id'");
            if($query > 0){
                $this->session->set_flashdata('suksessimpan','Data Reservasi Berhasil Dihapus');
            } else {
                $this->sesssion->set_flashdata('gagalsimpan','Data Reservasi Gagal dihapus');    
            }
        }
    }