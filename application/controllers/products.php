<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index()
    {
        $this->load->model('Product');
        $this->session->set_userdata('category_id', 0);
        $this->session->set_userdata('page', 1);
        $this->session->set_userdata('option', 0);
        $this->session->set_userdata('start', 0);
        $session = $this->session->all_userdata();

        $products_info = $this->Product->filter_products($session);
        $this->load->view('products/index', array('products_info' => $products_info,
                                                  'category' => $session['category_id'],
                                                  'page' => $session['page'],
                                                  'start' => $session['start'],
                                                  'option' => $session['option'])
                         );
    }
    public function show()
    {
        $this->load->view('products/show');
    }
    public function change_category($id) {
        $this->load->model('Product');
        $this->session->set_userdata('category_id', $id);
        $this->session->set_userdata('page', 1);
        $this->session->set_userdata('option', 0);
        $this->session->set_userdata('start', 0);
        $session = $this->session->all_userdata();
        $products_info = $this->Product->filter_products($session);
        $this->load->view('include/products_info.php', array('products_info' => $products_info,
                                                             'category' => $session['category_id'],
                                                             'page' => $session['page'],
                                                             'start' => $session['start'],
                                                             'option' => $session['option'])
                         );

    }
    public function change_page($id)
    {
        $this->load->model('Product');
        $this->session->set_userdata('page', $id);
        $this->session->set_userdata('start', (($id - 1) * 16));
        $session = $this->session->all_userdata();
        $products_info = $this->Product->filter_products($session);
        $this->load->view('include/products_info.php', array('products_info' => $products_info,
                                                             'category' => $session['category_id'],
                                                             'page' => $session['page'],
                                                             'start' => $session['start'],
                                                             'option' => $session['option'])
                         );

    }
    public function change_option($id)
    {
        $this->load->model('Product');
        $this->session->set_userdata('page', 1);
        $this->session->set_userdata('option', $id);
        $this->session->set_userdata('start', 0);

        $session = $this->session->all_userdata();
        $products_info = $this->Product->filter_products($session);
        $this->load->view('include/products_info.php', array('products_info' => $products_info,
                                                             'category' => $session['category_id'],
                                                             'page' => $session['page'],
                                                             'start' => $session['start'],
                                                             'option' => $session['option'])
                         );

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
