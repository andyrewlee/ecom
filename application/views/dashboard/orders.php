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
                        <li class="active"><a href="/dashboard/orders">Orders</a></li>
                        <li><a href="/dashboard/products">Products</a></li>
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
                    <form id="admin_search" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-sm btn-default">Search</button>
                    </form>
                </div>
                <div id="admin_filter" class="col-md-4 col-md-offset-4">
                    <div class="row">
                        <form>
                            <div class="col-md-4">
                                <label>Filter By:</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control">
                                    <option>Order in process</option>
                                    <option>Shipped</option>
                                    <option>Cancelled</option>
                                    <option>Show All</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="admin_table" class="col-md-12">
                    <table class="table table-bordered">
                        <theader>
                            <tr>
                                <th>Order ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Billing Addres</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </theader>
                        <tbody>
                            <tr>
                                <td><a href="/dashboard/products_show">100</a></td>
                                <td>Chandler</td>
                                <td>9/6/2014</td>
                                <td>123 Dojo Way, Bellevue WA 98005</td>
                                <td>$149.99</td>
                                <td>
                                    <select>
                                        <option selected>Order in process</option>
                                        <option>Shipped</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="/dashboard/products_show">99</a></td>
                                <td>Joey</td>
                                <td>9/6/2014</td>
                                <td>123 Dojo Way, Bellevue WA 98005</td>
                                <td>$29.99</td>
                                <td>
                                    <select>
                                        <option>Order in process</option>
                                        <option selected>Shipped</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="/dashboard/products_show">98</a></td>
                                <td>Ross</td>
                                <td>9/6/2014</td>
                                <td>123 Dojo Way, Bellevue WA 98005</td>
                                <td>$4.99</td>
                                <td>
                                    <select>
                                        <option>Order in process</option>
                                        <option>Shipped</option>
                                        <option selected>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="/dashboard/products_show">97</a></td>
                                <td>Monica</td>
                                <td>9/6/2014</td>
                                <td>123 Dojo Way, Bellevue WA 98005</td>
                                <td>$14.99</td>
                                <td>
                                    <select>
                                        <option>Order in process</option>
                                        <option selected>Shipped</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="/dashboard/products_show">96</a></td>
                                <td>Rachel</td>
                                <td>9/6/2014</td>
                                <td>123 Dojo Way, Bellevue WA 98005</td>
                                <td>$29.99</td>
                                <td>
                                    <select>
                                        <option>Order in process</option>
                                        <option selected>Shipped</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="/dashboard/products_show">95</a></td>
                                <td>Phoebe</td>
                                <td>9/6/2014</td>
                                <td>123 Dojo Way, Bellevue WA 98005</td>
                                <td>$129.99</td>
                                <td>
                                    <select>
                                        <option selected>Order in process</option>
                                        <option>Shipped</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td><a href="/dashboard/products_show">51</a></td>
                                <td>Andrew</td>
                                <td>9/6/2014</td>
                                <td>123 Dojo Way, Bellevue WA 98005</td>
                                <td>$5100.99</td>
                                <td>
                                    <select>
                                        <option>Order in process</option>
                                        <option selected>Shipped</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr> 
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-10 col-md-offset-1">
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- end container -->
    </body>
</html>

