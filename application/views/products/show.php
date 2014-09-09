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
                        <li><a href="#">Shopping Cart</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- end navbar -->
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div id="categories" class="bs-docs-sidebar">
                        <ul class="nav bs-docs-sidenav">
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 2</a></li>
                            <li><a href="#">Category 3</a></li>
                            <li><a href="#">Category 4</a></li>
                            <li><a href="#">Category 5</a></li>
                            <li><a href="#">Category 6</a></li>
                        </ul>
                    </div>
                </div>
                <div id="product_show" class="col-md-10">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-responsive img-rounded" src="http://lorempixel.com/200/200/">
                            <div id="product_images">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img class="img-responsive img-rounded" src="http://lorempixel.com/100/100/">
                                    </div>
                                    <div class="col-xs-4">
                                        <img class="img-responsive img-rounded" src="http://lorempixel.com/120/120/">
                                    </div>
                                    <div class="col-xs-4">
                                        <img class="img-responsive img-rounded" src="http://lorempixel.com/130/130/">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h2 id="product_name" class="page-header">Product Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                            </p>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-6">
                                    <h2 id="total_price" class="pull-right">$15.00</h2>
                                </div>
                                <div class="col-sm-2">
                                    <label>Quantity</label>
                                    <input class="form-control" type="text" name="quantity" value=1>
                                    <button id="purchase" type="button" class="pull-right btn btn-primary">Purchase</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
