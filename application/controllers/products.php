<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
    // load helper for upload files
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->Model("Product");
        $this->load->Model("Category");
        $this->load->Model("Image");
        $this->load->library("s3.php");
    }

    public function index()
    {
        $this->load->view('products/index');
    }
    public function create(){

        $product = $this->input->post();
        // $this->Product->add_product($product);
        $this_product_id = $this->Product->newest_product_id();

        if (!empty($_FILES["file1"]["name"])){
            // $this->Image->do_upload();
        }
        var_dump($_FILES);
        var_dump($product);
        var_dump($this_product_id[0]);
        var_dump($this);
        die();


        // // load s3 from the library folder
        // $this->do_upload();
        // $this->Image->add_image_to_cloud();
    }
    public function edit($id) {
        $product = $this->Product->get_product_by_id($id);
        echo json_encode($product);
    }
    public function update($id) {
        // update product with the form where id = $id

    }
    public function show()
    {
        $this->load->view('products/show');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
