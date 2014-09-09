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

        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
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
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Orders</a></li>
                        <li><a href="#">Products</a></li>
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
                <div class="col-md-4 col-md-offset-4">
                    <select class="form-control">
                        <option>Order in process</option>
                        <option>Shipped</option>
                        <option>Cancelled</option>
                    </select>
                </div>
            </div>
            <div class="row">

            </div>
        </div><!-- end container -->
    </body>
</html>

