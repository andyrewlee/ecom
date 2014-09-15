<?php 
class Category extends CI_Model{
    function get_all_categories()
    {
        return $this->db->query("SELECT * FROM categories")->result_array();
    }
    function add_category($category)
    {
        $query = "INSERT INTO categories (name,created_at,updated_at) VALUES(?,?,?)";
        $values = array($category["new_category"],date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
        return $this->db->query($query,$values);
    }
    function newest_category_id()
    {
        return $this->db->query("SELECT id FROM categories ORDER BY id DESC LIMIT 1")->result_array();
    }
}
