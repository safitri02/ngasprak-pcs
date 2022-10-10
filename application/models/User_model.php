<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getAllUser()
    {
        // echo 'Oke';
        $query = $this->db->get('user');
        return $query->result_array();

        // Method berantai
        // return $query = $this->db->get('user')->result->array();
    }
}