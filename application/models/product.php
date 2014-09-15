<?php 
class Product extends CI_Model{
    function get_all_products()
    {
        $query = "SELECT products.id as product_id, products.name as product_name, products.inventory as product_inventory, SUM(orders_has_products.quantity) as quantity_sold FROM products LEFT JOIN orders_has_products ON products.id = orders_has_products.product_id GROUP BY products.id"; 
        return $this->db->query($query)->result_array();
    }
    function get_product_by_id($product_id)
    {
        return $this->db->query("SELECT * FROM products WHERE id=?", array($product_id))->row_array();
    }
    function add_product($product)
    {
        $query = "INSERT INTO Products (category_id,name,description,price,inventory,created_at,updated_at) VALUES(?,?,?,?,?,?,?)";
        $values = array($product["category"],$product["name"],$product["description"],$product["product_price"],$product["inventory"],date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
        return $this->db->query($query,$values);
    }
    function newest_product_id()
    {
        return $this->db->query("SELECT id FROM products ORDER BY id DESC LIMIT 1")->result_array();
    }
}