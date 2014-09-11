<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

    public function index()
    {
        $this->load->view('carts/index');
    }
    public function charge()
    {
        $post = $this->input->post();
        var_dump($post);
        die();
        $this->load->view('carts/charge');

    }
}

/* End of file carts.php */
/* Location: ./application/controllers/carts.php */
