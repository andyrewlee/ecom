<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model("Category");
    }

    public function index()
    {
        $categories = $this->Category->get_all_categories();
        echo json_encode($categories);
    }
    public function create(){
        $new_category = $this->input->post();
        // $this->Category->add_category($new_category);
        $new_category_id = $this->Category->newest_category_id();
        $output = array($new_category,$new_category_id[0]);
        echo json_encode($output);
    }
}