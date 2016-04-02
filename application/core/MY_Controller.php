<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->user = $this->session->userdata('user_login');
        $this->s1 = $this->uri->segment(1);
        $this->s2 = $this->uri->segment(2);
        $this->s3 = $this->uri->segment(3);

        if($this->user ==''){
          redirect('admin_login');
        }
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
