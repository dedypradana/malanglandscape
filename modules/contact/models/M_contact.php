<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_contact extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function getGallery() {
        $this->db->select('*');
        $this->db->from('portofolio');
        $this->db->order_by("sort", "asc"); 
        $query = $this->db->get();
        $ret = $query->result();
        if ($ret) {
            return $ret;
        } else {
            return false;
        }
    }
    function getPortofolio($id){
        $this->db->select('*');
        $this->db->from('portofolio');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $ret = $query->row();
        if ($ret) {
            return $ret;
        } else {
            return false;
        }
    }
    
    function getKategori() {
        $this->db->select('*');
        $this->db->from('master_kategori');
        $this->db->where('pilihan',2);
        $query = $this->db->get();
        $ret = $query->result();
        if ($ret) {
            return $ret;
        } else {
            return false;
        }
    }

}
