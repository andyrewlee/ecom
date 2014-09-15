<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Product");
    }
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
        $all_products = $this->Product->get_all_products();
        $products = array("products" => $all_products);
        $this->load->view("dashboard/products",$products);
    }
    public function products_show()
    {
        $this->load->view("dashboard/products_show");
    }
 }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
