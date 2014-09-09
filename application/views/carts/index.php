<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>eCommerce | Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <!-- JQuery before loading Bootstrap JavaScript -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    </head>
    <body>
        <!-- begin navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dojo</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Shopping Cart</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- end navbar -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
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
                                <td>1<a class="cart_edit" href="#">Edit</a></td>
                                <td>$19.99</td>
                            </tr>
                            <tr>
                                <td>Coding Dojo Cups</td>
                                <td>$9.99</td>
                                <td>3<a class="cart_edit" href="#">Edit</a></td>
                                <td>$29.97</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <form role="form">
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
                </div>
            </div>
        </div>
    </body>
</html>
