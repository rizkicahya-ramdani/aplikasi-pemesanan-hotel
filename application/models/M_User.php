<?php

    class M_User extends CI_Model {
        function data_user() {
            $query = $this->db->query("select * from user");
            return $query;
        }

        function simpan(){
            $data = array('id_user' => $this->input->post('id_user'),
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'nama' => $this->input->post('nama'),
                    'level' => $this->input->post('level'),
                    'akses_terakhir' => $this->input->post('akses_terakhir'));
            $insert = $this->db->insert('user',$data);

            if ($insert > 0) {
                $this->session->set_flashdata('suksessimpan','Data Kamar Berhasil Disimpan');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Kamar Gagal Disimpan');
            }		
        }

        function data_user_by_id($id){
            $query = $this->db->query("select * from user where id_user = '$id'");
            return $query;
        }

        function update(){
            $where = array('id_user'=> $this->input->post('id_user'));
            $data1 = array('username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'level' => $this->input->post('level'),
                'akses_terakhir' => $this->input->post('akses_terakhir'));
            
           $data2 = array('username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'nama' => $this->input->post('nama'),
                'level' => $this->input->post('max_anak'),
                'akses_terakhir' => $this->input->post('akses_terakhir'));
        
            if (empty($this->input->post('nama'))) {
                 $this->db->where($where);
                $query = $this->db->update('user',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('user',$data1);
            }
        
            if ($query > 0) {
                $this->session->set_flashdata('suksessimpan','Data User Berhasil Diperbaharui');
            }
        }

        function hapus_data_user($id){
            $query = $this->db->query("delete from user where id_user = '$id'");
            if($query > 0){
                $this->session->set_flashdata('suksessimpan','Data User Berhasil Dihapus');
            } else {
                $this->sesssion->set_flashdata('gagalsimpan','Data User Gagal dihapus');    
            }
        }
    }