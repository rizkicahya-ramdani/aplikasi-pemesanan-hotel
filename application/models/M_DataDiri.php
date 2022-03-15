<?php

    class M_DataDiri extends CI_Model {
        function data_tamu_by_id($id){
            $query = $this->db->query("select * from tamu where id_tamu = '$id'");
            return $query;
        }
    }