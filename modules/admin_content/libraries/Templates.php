<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Templates {

    function __construct() {
        $this->CI =& get_instance();
    }

    function display($template=NULL, $data = NULL) {
        if($template!=NULL)
        $data['_content'] = $this->CI->load->view($template, $data, TRUE);
        $data['_header'] = $this->CI->load->view('frontend/header', $data, TRUE);
        $data['_menu'] = $this->CI->load->view('frontend/menu', $data, TRUE);
        $data['_footer'] = $this->CI->load->view('frontend/footer', $data, TRUE);
        $data['_slider'] = $this->CI->load->view('frontend/slider', $data, TRUE);
        $this->CI->load->view('frontend/template', $data);
    }
    
    function admin($template=NULL, $data = NULL) {
        if($template!=NULL)
        $data['_content'] = $this->CI->load->view($template, $data, TRUE);
        $data['_header'] = $this->CI->load->view('admin/header', $data, TRUE);
        $data['_menu'] = $this->CI->load->view('admin/menu', $data, TRUE);
        $data['_footer'] = $this->CI->load->view('admin/footer', $data, TRUE);
        $this->CI->load->view('admin/template', $data);
    }
}

?>
