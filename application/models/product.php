<?php

class Product extends CI_Model {
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
}


/* End of file product.php */
/* Location: ./application/models/carts.php */
