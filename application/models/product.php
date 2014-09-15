<?php
class Product extends CI_Model{
    function get_all_products()
    {
        $query = "SELECT products.id AS product_id, products.name AS product_name,
                products.inventory AS product_inventory,
                SUM(orders_has_products.quantity) AS quantity_sold
                FROM products LEFT JOIN orders_has_products
                ON products.id = orders_has_products.product_id GROUP BY products.id";
        return $this->db->query($query)->result_array();
    }
    function get_product_by_id($product_id)
    {
        return $this->db->query("SELECT * FROM products WHERE id=?", array($product_id))->row_array();
    }
    function add_product($product)
    {
        $query = "INSERT INTO products (category_id,name,description,price,inventory,created_at,updated_at) VALUES(?,?,?,?,?,?,?)";
        $values = array($product["category"],$product["name"],$product["description"],$product["product_price"],$product["inventory"],date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
        return $this->db->query($query,$values);
    }
    function newest_product_id()
    {
        return $this->db->query("SELECT id FROM products ORDER BY id DESC LIMIT 1")->result_array();
    }
    function filter_products($session)
    {
        $query = "SELECT categories.id AS category_id, categories.name AS category_name,
                  products.id as product_id, products.name as product_name,
                  products.price as product_price,
                  products.description as product_description,
                  images.url as img_src
                  FROM categories
                  JOIN products
                  ON categories.id = products.category_id
                  JOIN images
                  ON products.id = images.product_id
                  WHERE images.picture_order=1";

        // Category Filter
        if($session['category_id'] == 1)
        {
            $query = $query . ' AND categories.id = 1';
        }
        elseif($session['category_id'] == 2)
        {
            $query = $query . ' AND categories.id = 2';
        }
        elseif($session['category_id'] == 3)
        {
            $query = $query . ' AND categories.id = 3';
        }
        elseif($session['category_id'] == 4)
        {
            $query = $query . ' AND categories.id = 4';
        }
        elseif($session['category_id'] == 5)
        {
            $query = $query . ' AND categories.id = 5';
        }
        elseif($session['category_id'] == 6)
        {
            $query = $query . ' AND categories.id = 6';
        }

        // Option Filter
        if($session["option"] == 0)
        {
            $query = $query . " ORDER BY products.created_at DESC";
        }
        elseif($session["option"] == 1)
        {
            $query = $query . " ORDER BY products.price";
        }
        elseif($session["option"] == 2)
        {
            $query = $query . " ORDER BY products.price DESC";
        }
        return $this->db->query($query)->result_array();
    }
    function find_product_and_images($product_id)
    {
        $query = "SELECT products.id AS product_id, products.name AS product_name,
                  products.description AS product_description,
                  products.price AS product_price,
                  images.url AS img_src, images.picture_order AS pic_order
                  FROM products
                  JOIN images ON products.id = images.product_id
                  WHERE product_id = ?
                  ORDER BY pic_order";
        return $this->db->query($query, array($product_id))->result_array();
    }
}


/* End of file product.php */
/* Location: ./application/models/carts.php */
