<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view("dashboard/index");
    }
    public function orders()
    {
        $this->load->view("dashboard/orders");
    }
    public function products()
    {
        $this->load->view("dashboard/products");
    }
    public function products_show()
    {
        $this->load->view("dashboard/products_show");
    }
 }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
