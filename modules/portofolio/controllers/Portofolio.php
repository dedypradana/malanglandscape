<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_portofolio', 'mp');
    }

    public function index() {
        $data['res_gallery'] = $this->mp->getGallery();
        $data['res_kategori'] = $this->mp->getKategori();
        $this->templates->display('index',$data);
    }

    public function item($id=''){
        $data['res'] = $this->mp->getPortofolio(decode($id));
//        print_r($data);exit;
        $this->templates->display('item_portofolio',$data);
    }
}
