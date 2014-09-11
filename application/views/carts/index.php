<?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/header.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/application/third_party/stripe-php/config.php"); ?>
        <div class="container">
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
                            <tr>
                                <td>Black Belt for Staff</td>
                                <td>$19.99</td>
                                <td>
                                    <input class="update_cart" type="text" value=1 disabled><a class="cart_edit" href="#">Edit</a><a class="cart_update" href="#">Update</a></td>
                                <td>$19.99</td>
                            </tr>
                            <tr>
                                <td>Coding Dojo Cups</td>
                                <td>$9.99</td>
                                <td>
                                    <input class="update_cart" type="text" value=1 disabled><a class="cart_edit" href="#">Edit</a><a class="cart_update" href="#">Update</a></td>
                                <td>$29.97</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <h2 id="total" class="pull-right">Total: <span id="total_price">$39.00</span></h2>
                </div>
                <a href="/products/" type="button" class="continue_shopping pull-right btn btn-success">Continue Shopping </a>
            </div>
            <div class="row">
                <form id="billing" action="/carts/charge" method="post">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="<?php echo $stripe['publishable_key']; ?>"
                            data-shipping-address
                            data-billing-address
                            data-amount="5000" data-description="One year's subscription"></script>
                </form>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/footer.php"); ?>
    </body>
    <script>

        // Once same as shipping is clicked copy contents over from shipping to billing
        $(document).on('click', '#checkbox', function(){
            if($('#checkbox').is(':checked')) {
                $('#billing #first_name').val($('#shipping #first_name').val());
                $('#billing #last_name').val($('#shipping #last_name').val());
                $('#billing #address').val($('#shipping #address').val());
                $('#billing #address_two').val($('#shipping #address_two').val());
                $('#billing #city').val($('#shipping #city').val());
                $('#billing #state').val($('#shipping #state').val());
                $('#billing #zipcode').val($('#shipping #zipcode').val());
            } else {
                $('#billing #first_name').val('');
                $('#billing #last_name').val('');
                $('#billing #address').val('');
                $('#billing #address_two').val('');
                $('#billing #city').val('');
                $('#billing #state').val('');
                $('#billing #zipcode').val('');
            }
        });

        // Once edit is clicked enable input for updating quantity
        $('.cart_update').hide();
        $(document).on('click', '.cart_edit', function(){
            $(this).prev().prop('disabled', false).focus();
            $(this).hide();
            $(this).next().show();
        });
        $(document).on('click', '.cart_update', function(){
          $(this).prev().prev().prop('disabled', true);
          $(this).hide();
          $(this).prev().show();
        });

    </script>
</html>
