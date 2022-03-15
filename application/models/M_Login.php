<?php
class M_Login extends CI_Model{
	function cek_login_admin($username, $password){
        $query = $this->db->query("select * from user where username = '$username' and password = '$password'");
        return $query;
    }
    
    function cek_login_resepsionis($username, $password){
        $query = $this->db->query("select * from user where username = '$username' and password = '$password'");
        return $query;
    }
    
}
