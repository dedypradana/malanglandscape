<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_gallery', 'mg');
    }

    public function index() {
        $data['res_gallery'] = $this->mg->getGallery();
        $data['res_kategori'] = $this->mg->getKategori();
        $this->templates->display('index',$data);
    }

}
