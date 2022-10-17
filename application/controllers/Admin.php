<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Admin extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        // $this->load->model('M_admin');
    }

    public function index_get()
    {
        // Users from a data store e.g. database
        $data = $this->db->get('admin')->result();
        // $data = $this->M_admin('getAllUser')->result();
        // $this->response($data, RestController::HTTP_OK);
        $this->response($data, 200);
    }

    public function index_post()
    {
        $data = array(
            'email' => $this->post('email'),
            'password' => $this->post('password'),
            'nama' => $this->post('nama'),
        );
        $insert = $this->db->insert('admin', $data);

        if($insert){
            $this->response($data, 200);
        } else{
            $this->response($data, 502);
        }
    }
}