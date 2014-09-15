<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

    public function index()
    {
        $session = $this->session->all_userdata();
        $cart = $session['cart'];
        $products = array();

        $this->load->model('Product');
        foreach($cart as $product_id => $quantity)
        {
            $product = $this->Product->get_product_by_id($product_id);
            $product['quantity'] = $quantity;
            $products[] = $product;
        }
        sort($products);
        $this->load->view('carts/index', array('session'=> $session, 'products'=>$products));
    }
    public function charge()
    {
        $post = $this->input->post();
        var_dump($post);
        die();
        $this->load->view('carts/charge');
    }
    public function update($id)
    {
        $session = $this->session->all_userdata();
        $quantity = $this->input->post('quantity');

        foreach($session['cart'] as $product_id => $value)
        {
            $new_cart[$product_id] = $value;
        }
        unset($new_cart[$id]);
        $new_cart[$id] = intval($quantity);
        $this->session->set_userdata('cart', $new_cart);
        $this->index();
    }
    public function destroy($id)
    {
        $session = $this->session->all_userdata();
        $products = array();
        $this->load->model('Product');

        foreach($session['cart'] as $product_id => $value)
        {
            $new_cart[$product_id] = $value;
        }

        unset($new_cart[$id]);
        $this->session->set_userdata('cart', $new_cart);

        $this->index();
    }
    public function refresh_header()
    {
        $session = $this->session->all_userdata();
        $this->load->view('include/header.php', array('session'=>$session));
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
        $this->load->view('include/shopping_cart_count.php', array('session' => $session));
    }
}

/* End of file carts.php */
/* Location: ./application/controllers/carts.php */
