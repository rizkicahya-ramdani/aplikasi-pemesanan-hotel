<?php

    class M_Hotel extends CI_Model {
        function data_hotel() {
            $query = $this->db->query("select * from hotel");
            return $query;
        }

        function simpan() {
            $data = array('id_hotel' => $this->input->post('id_hotel'),
                    'nama_hotel' => $this->input->post('nama_hotel'),
                    'slogan' => $this->input->post('slogan'),
                    'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                    'alamat' => $this->input->post('alamat'),
                    'telepon' => $this->input->post('telepon'),
                    'faximile' => $this->input->post('faximile'),
                    'email' => $this->input->post('email'),
                    'website' => $this->input->post('website'));
            $insert = $this->db->insert('hotel', $data);

            if ($insert > 0) {
                $this->session->set_flashdata('suksessimpan','Data Hotel Berhasil Disimpan');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Hotel Gagal Disimpan');
            }	
        }

        function data_hotel_by_id($id){
            $query = $this->db->query("select * from hotel where id_hotel = '$id'");
            return $query;
        }

        function update(){
            $where = array('id_hotel'=> $this->input->post('id_hotel'));
            $data1 = array('nama_hotel' => $this->input->post('nama_hotel'),
                'slogan' => $this->input->post('slogan'),
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'faximile' => $this->input->post('faximile'),
                'email' => $this->input->post('email'),
                'website' => $this->input->post('website'));
            
           $data2 = array('nama_hotel' => $this->input->post('nama_hotel'),
                'slogan' => $this->input->post('slogan'),
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'faximile' => $this->input->post('faximile'),
                'email' => $this->input->post('email'),
                'website' => $this->input->post('website'));
        
            if (empty($this->input->post('id_hotel'))) {
                 $this->db->where($where);
                $query = $this->db->update('hotel',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('hotel',$data1);
            }
        
            if ($query > 0) {
                $this->session->set_flashdata('suksessimpan','Data Hotel Berhasil Diperbaharui');
            }
        }

        function hapus_data_hotel($id){
            $query = $this->db->query("delete from hotel where id_hotel = '$id'");
            if($query > 0){
                $this->session->set_flashdata('suksessimpan','Data Hotel Berhasil Dihapus');
            } else {
                $this->sesssion->set_flashdata('gagalsimpan','Data Hotel Gagal dihapus');    
            }
        }
    }