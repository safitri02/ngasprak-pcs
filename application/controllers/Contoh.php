<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('User_model');
}

//kalo udah pake auto load ini itu gaperlu

    public function index()
    {
        $this->load->model('User_model');
        $data['user'] = $this->User_model->getAllUser();
        //echo "Helooo";
        // print_r($data['user']);
        $data_json = array(
            "success" => true,
            "message" => "Data found",
            "data" => $data['user'] 
        );

        header('Content-Type: application/json');
        echo json_encode($data_json);
    }

        // $this->load->view('admin/index', $data);
    }
