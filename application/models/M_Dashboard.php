<?php
class M_Dashboard extends CI_Model{
	function data_tamu() {
        $query = $this->db->query("select * from tamu");
        return $query;
    }
}
