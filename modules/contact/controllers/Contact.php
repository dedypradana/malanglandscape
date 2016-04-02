<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_contact', 'mc');
    }

    public function index() {
        $data['res_gallery'] = $this->mc->getGallery();
        $data['res_kategori'] = $this->mc->getKategori();
        $this->templates->display('index',$data);
    }

    public function item($id=''){
        $data['res'] = $this->mc->getPortofolio(decode($id));
//        print_r($data);exit;
        $this->templates->display('item_portofolio',$data);
    }
}
