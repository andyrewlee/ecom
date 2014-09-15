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
        $context = array(
                           'category_id' => 0,
                           'page' => 1,
                           'option' => 0,
                           'start' => 0    );

        $session = $this->set_session($context);
        $products_info = $this->Product->filter_products($session);

        $this->load->view('products/index', array('products_info' => $products_info,
                                                  'category' => $session['category_id'],
                                                  'page' => $session['page'],
                                                  'start' => $session['start'],
                                                  'option' => $session['option'],
                                                  'session' => $session));
    }
    public function show($product_id)
    {
        $product_and_images = $this->Product->find_product_and_images($product_id);
        $this->load->view('include/product_info.php', array('product_and_images' => $product_and_images));
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
    public function go_back()
    {
        $session = $this->session->all_userdata();
        $products_info = $this->Product->filter_products($session);

        $this->load->view('include/products_info.php', array('products_info' => $products_info,
                                                             'category' => $session['category_id'],
                                                             'page' => $session['page'],
                                                             'start' => $session['start'],
                                                             'option' => $session['option']));

    }
    public function change_category($id)
    {
        $context = array(
                           'category_id' => $id,
                           'page' => 1,
                           'option' => 0,
                           'start' => 0    );

        $session = $this->set_session($context);
        $products_info = $this->Product->filter_products($session);

        $this->load->view('include/products_info.php', array('products_info' => $products_info,
                                                             'category' => $session['category_id'],
                                                             'page' => $session['page'],
                                                             'start' => $session['start'],
                                                             'option' => $session['option']));

    }
    public function change_page($id)
    {
        $context = array(
                           'page' => $id,
                           'start' => (($id - 1) * 16));

        $session = $this->set_session($context);
        $products_info = $this->Product->filter_products($session);

        $this->load->view('include/products_info.php', array('products_info' => $products_info,
                                                             'category' => $session['category_id'],
                                                             'page' => $session['page'],
                                                             'start' => $session['start'],
                                                             'option' => $session['option']));

    }
    public function change_option($id)
    {
        $context = array(
                           'page' => 1,
                           'option' => $id,
                           'start' => 0    );

        $session = $this->set_session($context);
        $products_info = $this->Product->filter_products($session);

        $this->load->view('include/products_info.php', array('products_info' => $products_info,
                                                             'category' => $session['category_id'],
                                                             'page' => $session['page'],
                                                             'start' => $session['start'],
                                                             'option' => $session['option']));

    }
    public function set_session($array)
    {
        foreach($array as $key => $value)
        {
            $this->session->set_userdata($key, $value);
        }
        return $this->session->all_userdata();
    }

}

/* End of file products.php */
/* Location: ./application/controllers/products.php */
