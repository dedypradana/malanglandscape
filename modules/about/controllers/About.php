<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_about', 'ma');
    }

    public function index() {
        $data['res_gallery'] = $this->ma->getGallery();
        $data['res_kategori'] = $this->ma->getKategori();
        $this->templates->display('index',$data);
    }

}
