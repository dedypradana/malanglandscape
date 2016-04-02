<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_master extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_master', 'mm');
        $this->load->library('grocery_CRUD');
    }

    public function index() {
        $data['title'] = 'Master Data';
        $data['subtitle'] = 'Semua Master Data';
        $this->templates->admin('index',$data);
    }
    
    public function master_user() {
        $crud = new grocery_CRUD();
        $crud->set_table('master_user');
        $crud->columns('nama', 'username', 'email', 'tipe', 'build');
        $crud->required_fields('nama', 'username','password','tipe');
        $crud->set_field_upload('image_path','assets/uploads/img/profil');
        $crud->change_field_type('password', 'password');
        $crud->callback_before_insert(array($this, 'encrypt_password_callback'));
        $crud->callback_before_update(array($this, 'encrypt_password_callback'));
        $crud->callback_edit_field('password', array($this, 'decrypt_password_callback'));
        $data = (array)$crud->render();
        
        $data['title'] = 'Master User';
        $data['subtitle'] = 'Semua Master user';
        $this->templates->admin('v_user', $data);
    }
    
    public function master_subs() {
        $crud = new grocery_CRUD();
        $crud->set_table('master_subscriber');
        $data = (array)$crud->render();
        
        $data['title'] = 'Master Subscriber';
        $data['subtitle'] = 'Semua Master Subscriber';
        $this->templates->admin('v_subs',$data);
    }
    
    public function master_cat() {
        $crud = new grocery_CRUD();
        $crud->set_table('master_kategori');
        $data = (array)$crud->render();
        
        $data['title'] = 'Master Kategori';
        $data['subtitle'] = 'Semua Master Kategori';
        $this->templates->admin('v_cat',$data);
    }
    
    function encrypt_password_callback($post_array, $primary_key = null) {
        $post_array['password'] = encode($post_array['password']);
        return $post_array;
    }

    function decrypt_password_callback($value) {
        $decrypted_password = decode($value);
        return "<input type='password' name='password' value='$decrypted_password' />";
    }

}
