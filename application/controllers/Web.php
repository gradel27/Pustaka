<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller
{

    function __construct(){
    parent::__construct();
    }

    public function index(){
        $data['judul'] = 'Welcome to NetCafe';
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer', $data);
        
    }
    public function about(){
        $data['judul'] = 'Welcome to NetCafe';
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer', $data);
    }
    public function contact(){
        $data['judul'] = 'Welcome to NetCafe';
        $this->load->view('v_header',$data);
        $this->load->view('v_contact',$data);
        $this->load->view('v_footer', $data);
    }
}