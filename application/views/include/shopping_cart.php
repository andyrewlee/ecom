            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-header">Shopping Cart</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
                        $final = 0;
                        foreach($products as $product)
                        {
                        $total = floatval($product['price']) * $product['quantity'];
                        $total = number_format($total, 2);
                        $final += $total ?>
                            <tr>
                                <td><?= $product['name'] ?></td>
                                <td><?= $product['price'] ?></td>
                                <td>
                                    <form id="update_form" action="/carts/update/<?= $product['id'] ?>" method="post">
                                        <input class="update_cart" name="quantity" type="text" value=<?= $product['quantity'] ?> disabled>
                                        <input class="cart_update" type="submit" value="Update">
                                    </form>
                                    <a class="cart_edit" href="#">Edit</a>
                                    <a class="cart_delete" href="/carts/destroy/<?= $product['id'] ?>">Delete</a>
                                </td>
                                <td><?= $total ?></td>
                            </tr>
<?php
                        }    ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <h2 id="total" class="pull-right">Total: <span id="total_price"><?= $final ?></span></h2>
                </div>
                <a href="/products/" type="button" class="continue_shopping pull-right btn btn-success">Continue Shopping </a>
            </div>
            <div class="row">
                <form id="billing" action="/carts/charge" method="post">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="<?php echo $stripe['publishable_key']; ?>"
                            data-shipping-address
                            data-billing-address
                            data-amount="<?= $final * 100 ?>" data-description="Complete your purchase"></script>
                </form>
            </div>
            <script>
                $('.cart_update').hide();
            </script>
