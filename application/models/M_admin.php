<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function getAllUser()
    {
        // echo 'Oke';
        $query = $this->db->get('admin');
        return $query->result_array();

        // Method berantai
        // return $query = $this->db->get('user')->result->array();
    }
}