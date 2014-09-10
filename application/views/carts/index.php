<?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/header.php"); ?>
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
                <div class="col-md-5">
                    <h2 class="page-header">Shipping Information</h2>
                    <form id="shipping" role="form">
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" id="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" id="last_name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="form-group">
                            <label for="address_two">Address 2</label>
                            <input type="text" class="form-control" id="address_two">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="form-group">
                            <label for="state">State:</label>
                            <input type="text" class="form-control" id="state">
                        </div>
                        <div class="form-group">
                            <label for="zipcode">Zipcode:</label>
                            <input type="text" class="form-control" id="zipcode">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <h2 id="billing" class="page-header">Billing Information</h2>
                    <div class="checkbox">
                        <label><input id="checkbox" type="checkbox" selected>Same as shipping</label>
                    </div>

                    <form id="billing" role="form">
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" id="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" id="last_name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="form-group">
                            <label for="address_two">Address 2</label>
                            <input type="text" class="form-control" id="address_two">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="form-group">
                            <label for="state">State:</label>
                            <input type="text" class="form-control" id="state">
                        </div>
                        <div class="form-group">
                            <label for="zipcode">Zipcode:</label>
                            <input type="text" class="form-control" id="zipcode">
                        </div>
                    </form>

                </div>
                <div class="col-md-8">
                    <h2 class="page-header">Credit Card Information</h2>
                    <form class="form-horizontal" role="form">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="card-number">Card Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                                                <option>Month</option>
                                                <option value="01">Jan (01)</option>
                                                <option value="02">Feb (02)</option>
                                                <option value="03">Mar (03)</option>
                                                <option value="04">Apr (04)</option>
                                                <option value="05">May (05)</option>
                                                <option value="06">June (06)</option>
                                                <option value="07">July (07)</option>
                                                <option value="08">Aug (08)</option>
                                                <option value="09">Sep (09)</option>
                                                <option value="10">Oct (10)</option>
                                                <option value="11">Nov (11)</option>
                                                <option value="12">Dec (12)</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-3">
                                            <select class="form-control" name="expiry-year">
                                                <option value="13">2013</option>
                                                <option value="14">2014</option>
                                                <option value="15">2015</option>
                                                <option value="16">2016</option>
                                                <option value="17">2017</option>
                                                <option value="18">2018</option>
                                                <option value="19">2019</option>
                                                <option value="20">2020</option>
                                                <option value="21">2021</option>
                                                <option value="22">2022</option>
                                                <option value="23">2023</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                <button type="button" class="pull-right btn btn-primary">Pay Now</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
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
