<?php

    class M_Kamar extends CI_Model {
        function data_kamar() {
            $query = $this->db->query("select * from kamar");
            return $query;
        }

        function simpan(){
            $data = array('id_kamar' => $this->input->post('id_kamar'),
                    'id_kamar_tipe' => $this->input->post('id_kamar_tipe'),
                    'nomor_kamar' => $this->input->post('nomor_kamar'),
                    'max_dewasa' => $this->input->post('max_dewasa'),
                    'max_anak' => $this->input->post('max_anak'),
                    'status_kamar' => $this->input->post('status_kamar'));
            $insert = $this->db->insert('kamar',$data);

            if ($insert > 0) {
                $this->session->set_flashdata('suksessimpan','Data Kamar Berhasil Disimpan');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Kamar Gagal Disimpan');
            }		
        }

        function data_kamar_by_id($id){
            $query = $this->db->query("select * from kamar where id_kamar = '$id'");
            return $query;
        }

        function update(){
            $where = array('id_kamar'=> $this->input->post('id_kamar'));
            $data1 = array('id_kamar_tipe' => $this->input->post('id_kamar_tipe'),
                'nomor_kamar' => $this->input->post('nomor_kamar'),
                'max_dewasa' => $this->input->post('max_dewasa'),
                'max_anak' => $this->input->post('max_anak'),
                'status_kamar' => $this->input->post('status_kamar'));
            
           $data2 = array('id_kamar_tipe' => $this->input->post('id_kamar_tipe'),
                'nomor_kamar' => $this->input->post('nomor_kamar'),
                'max_dewasa' => $this->input->post('max_dewasa'),
                'max_anak' => $this->input->post('max_anak'),
                'status_kamar' => $this->input->post('status_kamar'));
        
            if (empty($this->input->post('id_kamar_tipe'))) {
                 $this->db->where($where);
                $query = $this->db->update('kamar',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('kamar',$data1);
            }
        
            if ($query > 0) {
                $this->session->set_flashdata('suksessimpan','Data Kamar Berhasil Diperbaharui');
            }
        }

        function hapus_data_kamar($id){
            $query = $this->db->query("delete from kamar where id_kamar = '$id'");
            if($query > 0){
                $this->session->set_flashdata('suksessimpan','Data Kamar Berhasil Dihapus');
            } else {
                $this->sesssion->set_flashdata('gagalsimpan','Data Kamar Gagal dihapus');    
            }
        }
    }