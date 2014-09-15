        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div id="categories" class="bs-docs-sidebar">
                        <ul class="nav bs-docs-sidenav">
                            <li
<?php                           if($category == 0)
                                {
                                     echo 'id="current_category"';
                                     $current_category = "All Categories";
                                }    ?> >
                                <a class="category" href="/products/change_category/0">All Categories</a>
                            </li>
                            <li
<?php                           if($category == 1)
                                {
                                     echo 'id="current_category"';
                                     $current_category = "Shoes";
                                }    ?> >
                                <a class="category" href="/products/change_category/1">Shoes</a>
                            </li>
                            <li
<?php                           if($category == 2)
                                {
                                     echo 'id="current_category"';
                                     $current_category = "Shirts";
                                }    ?> >
                                <a class="category" href="/products/change_category/2">Shirts</a>
                            </li>
                            <li
<?php                           if($category == 3)
                                {
                                     echo 'id="current_category"';
                                     $current_category = "Cups";
                                }    ?> >
                                <a class="category" href="/products/change_category/3">Cups</a>
                            </li>
                            <li
<?php                           if($category == 4)
                                {
                                     echo 'id="current_category"';
                                     $current_category = "Posters";
                                }    ?> >
                                <a class="category" href="/products/change_category/4">Posters</a>
                            </li>
                            <li
<?php                           if($category == 5)
                                {
                                     echo 'id="current_category"';
                                     $current_category = "Sweatshirts";
                                }    ?> >
                                <a class="category" href="/products/change_category/5">Sweatshirts</a>
                            </li>
                            <li
<?php                           if($category == 6)
                                {
                                     echo 'id="current_category"';
                                     $current_category = "Hats";
                                }    ?> >
                                <a class="category" href="/products/change_category/6">Hats</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-10">
                    <h2 class="page-header"><?= $current_category ?></h2>
                    <div class="row">
                        <div>
                            <ul class="pagination">
<?php
                                for( $i=1; $i <= ceil(count($products_info)/16); $i++)
                                {    ?>
                                     <li
<?php
                                     if($i == $page)
                                     {
                                         echo "class='active'";
                                     }    ?> >
                                          <a class="page_number" href="/products/change_page/<?= $i ?>"><?= $i ?></a>
                                     </li>
<?php                            }   ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 col-sm-offset-10">
                            <select id="options" class="form-control">
                                <option href="/products/change_option/0"
<?php
                                    if( $option == 0 )
                                    {
                                        echo ' selected';
                                    }    ?> >Most Recent</option>
                                <option href="/products/change_option/1"
<?php
                                    if( $option == 1 )
                                    {
                                        echo ' selected';
                                    }    ?> >Price (Low to High)</option>
                                <option href="/products/change_option/2"
<?php                               if( $option == 2 )
                                    {
                                        echo ' selected';
                                    }    ?> >Price (High to Low)</option>
                            </select>
                        </div>
                    </div>
                    <div class="pull-left row">
<?php                   for( $i = $start; $i < $start + 16; $i++)
                        {
                             if(isset($products_info[$i]))
                             {
                                 if(count($products_info) == 1)
                                 {    ?>
                                     <div class="col-sm-8">
                                         <div class="product">
                                             <a href="/products/show/<?= $products_info[$i]['product_id'] ?>">
                                                 <h4 class="product_name"><?= $products_info[$i]["product_name"] ?><span class="price pull-right"><?= $products_info[$i]["product_price"] ?></span></h4>
                                                 <img class="img-responsive img-rounded" src="<?= $products_info[$i]['img_src'] ?>">
                                             </a>
                                             <p>
                                             <?php echo substr($products_info[$i]["product_description"], 0, 50) . "..." ?>
                                             </p>
                                         </div>
                                     </div>
<?php                            }
                                 elseif(count($products_info) == 2)
                                 {    ?>
                                     <div class="col-sm-4">
                                         <div class="product">
                                             <a href="/products/show/<?= $products_info[$i]['product_id'] ?>">
                                                 <h4 class="product_name"><?= $products_info[$i]["product_name"] ?><span class="price pull-right"><?= $products_info[$i]["product_price"] ?></span></h4>
                                                 <img class="img-responsive img-rounded" src="<?= $products_info[$i]['img_src'] ?>">
                                             </a>
                                             <p>
                                             <?php echo substr($products_info[$i]["product_description"], 0, 50) . "..." ?>
                                             </p>
                                         </div>
                                     </div>
<?php                            }
                                 else
                                 {    ?>
                                     <div class="col-sm-3">
                                         <div class="product">
                                             <a href="/products/show/<?= $products_info[$i]['product_id'] ?>">
                                                 <h4 class="product_name"><?= $products_info[$i]["product_name"] ?><span class="price pull-right"><?= $products_info[$i]["product_price"] ?></span></h4>
                                                 <img class="img-responsive img-rounded" src="<?= $products_info[$i]['img_src'] ?>">
                                             </a>
                                             <p>
                                             <?php echo substr($products_info[$i]["product_description"], 0, 50) . "..." ?>
                                             </p>
                                         </div>
                                     </div>
<?php
                                 }
                            }
                        }    ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="pagination">
<?php
                                for( $i=1; $i <= ceil(count($products_info)/16); $i++)
                                {    ?>
                                    <li
<?php                                   if($i == $page)
                                        {
                                            echo "class='active'";
                                        }    ?> >
                                        <a class="page_number" href="/products/change_page/<?= $i ?>"><?= $i ?></a>
                                    </li>
<?php                           }    ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
