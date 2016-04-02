<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_gallery extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function getGallery() {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->order_by("sort", "asc"); 
        $query = $this->db->get();
        $ret = $query->result();
        if ($ret) {
            return $ret;
        } else {
            return false;
        }
    }
    
    function getKategori() {
        $this->db->select('*');
        $this->db->from('master_kategori');
        $this->db->where('pilihan',1);
        $query = $this->db->get();
        $ret = $query->result();
        if ($ret) {
            return $ret;
        } else {
            return false;
        }
    }

}
