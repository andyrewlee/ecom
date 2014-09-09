<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index()
    {
        $this->load->view('products/index');
    }
    public function show()
    {
        $this->load->view('products/show');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
