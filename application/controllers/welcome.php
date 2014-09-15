<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        $session = $this->session->all_userdata();
        $this->load->view('welcome.php', array('session' => $session));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
