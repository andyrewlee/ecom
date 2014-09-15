<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

    public function index()
    {
        $this->load->view('carts/index');
    }
    public function charge()
    {
        $post = $this->input->post();
        $this->load->view('carts/charge');
    }
    public function add_to_cart()
    {
    }
}

/* End of file carts.php */
/* Location: ./application/controllers/carts.php */
