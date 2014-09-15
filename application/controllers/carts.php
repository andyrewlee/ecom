<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

    public function index()
    {
        $session = $this->session->all_userdata();
        $this->load->view('carts/index', array('session'=> $session));
    }
    public function charge()
    {
        $post = $this->input->post();
        $this->load->view('carts/charge');
    }
    public function add_to_cart()
    {
        $session = $this->session->all_userdata();
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');


        if(isset($session['cart']))
        {
            $new_cart = array();
            foreach($session['cart'] as $key => $value)
            {
                $new_cart[$key] = intval($value);
            }
            if(isset($new_cart[$product_id]))
            {
              $new_cart[$product_id] += intval($quantity);
            }
            else
            {
              $new_cart[$product_id] = intval($quantity);
            }
            $this->session->set_userdata('cart', $new_cart);
        }
        else
        {
            $this->session->set_userdata('cart', array($product_id => intval($quantity)));
        }
        $session = $this->session->all_userdata();
        $this->load->view('include/shopping_cart.php', array('session' => $session));
    }
}

/* End of file carts.php */
/* Location: ./application/controllers/carts.php */
