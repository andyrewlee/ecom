<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>eCommerce | Dashboard</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <!-- JQuery before loading Bootstrap JavaScript -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../../assets/css/dash.css">
    </head>
    <body>
        <!-- begin navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/dashboard">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/dashboard/orders">Orders</a></li>
                        <li class="active"><a href="/dashboard/products">Products</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Log off</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- end navbar -->
        
        <!-- begin container -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Order ID: 100</h2>
                    <p>Customer Shipping Info</p>
                    <p>Name: Chandler</p>
                    <p>Address: 123 Dojo Way, Bellevue WA 98133</p>
                    <h2>Customer Billing Info</h2>
                    <p>Name: Chandler</p>
                    <p>Address: 123 Dojo Way, Bellevue WA 98133</p>
                </div>
               
                <div id="admin_table" class="col-md-8">
                    <div class="row">
                        <table class="table table-bordered">
                            <theader>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </theader>
                            <tbody>
                                <tr>
                                    <td>100</td>
                                    <td>Cup</td>
                                    <td>$9.99</td>
                                    <td>1</td>
                                    <td>$9.99</td>
                                </tr>
                                <tr>
                                    <td>215</td>
                                    <td>Shirt</td>
                                    <td>$19.99</td>
                                    <td>2</td>
                                    <td>$39.98</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div id="status" class="col-md-6 col-md-offset-1">
                            <h4>Status Shipped</h4>
                        </div>
                        <div id="total" class="col-md-5">
                            <p>Sub total: 49.97</p>
                            <p>Shipping: 3.00</p>
                            <p>Total: 52.97</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              
            </div>
        </div><!-- end container -->
    </body>
</html>

