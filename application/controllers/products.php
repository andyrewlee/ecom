<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product');
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
                                                  'option' => $session['option']));
    }
    public function show()
    {
        $this->load->view('products/show');
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
