        <div class="container">
            <div class="row">
                <div id="product_show" class="col-md-12">
                    <a id="back_to_shopping" href="/products/go_back">Back to shopping</a>
                    <div class="row">
                        <div class="col-md-5">
<?php
                        if(isset($product_and_images[0]['img_src']))
                        {    ?>
                            <img id="main_picture" class="img-responsive img-rounded" src="<?= $product_and_images[0]['img_src'] ?>">
<?php
                        }    ?>
                            <div id="product_images">
                                <div class="row">
<?php
                        if(isset($product_and_images[1]['img_src']))
                        {    ?>
                                    <div class="col-xs-4">
                                        <img class="img-responsive img-rounded" src="<?= $product_and_images[1]['img_src'] ?>">
                                    </div>
<?php
                        }    ?>
<?php
                        if(isset($product_and_images[2]['img_src']))
                        {    ?>
                                    <div class="col-xs-4">
                                        <img class="img-responsive img-rounded" src="<?= $product_and_images[2]['img_src'] ?>">
                                    </div>
<?php
                        }    ?>
<?php
                        if(isset($product_and_images[3]['img_src']))
                        {    ?>
                                    <div class="col-xs-4">
                                        <img class="img-responsive img-rounded" src="<?= $product_and_images[3]['img_src'] ?>">
                                    </div>
<?php
                        }    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                        <h2 id="product_name" class="page-header"><?= $product_and_images[0]['product_name'] ?></h2>
                            <p><?= $product_and_images[0]['product_description'] ?></p>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-6">
                                <h2 id="total_price" class="pull-right"><?= $product_and_images[0]['product_price'] ?></h2>
                                </div>
                                <div class="col-sm-2">
                                    <form id="change_count" action="/carts/add_to_cart/" method="post">
                                        <input type="hidden" name="product_id" value=<?= $product_and_images[0]['product_id'] ?>>
                                        <label>Quantity</label>
                                        <input class="form-control" type="text" name="quantity" value=1>
                                        <input id="add_to_cart" type="submit" class="pull-right btn btn-custom-lighten" value="Add to Cart">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
