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
        <!-- Jquery UI CSS -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css">
        <!-- JQuery before loading Bootstrap JavaScript -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!-- Jquery UI JaveScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../assets/css/dash.css">
        <script type="text/javascript">
        $(document).ready(function(){
            function readURL(input,number) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#blah"+number).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                };
            };

            $("#imgInp").change(function(){
            readURL(this,0);
            });
            $("#imgInp1").change(function(){
            readURL(this,1);
            });
            $("#imgInp2").change(function(){
            readURL(this,2);
            });
            $("#imgInp3").change(function(){
            readURL(this,3);
            });
        });
        </script>
    </head>
    <body>
        <!-- Modal Add New Product -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
                    </div>
                    <div class="modal-body">
                        <form action="products" method="post" enctype="multipart/form-data">
                            <p><label>Name:</label></p>
                            <p><input type="text" name="product_name"></p>
                            <p><label>Description:</label></p>
                            <p><textarea name="product_description"></textarea></p>
                            <p><label>Categories:</label></p>
                            <p>
                                <select>
                                    <option value="hat">Hat</option>
                                    <option value="mug">Mug</option>
                                    <option value="pants">Pants</option>
                                    <option value="key_chain">Key Chain</option>
                                    <option value="belt">Belt</option>
                                </select>
                            </p>
                            <p><label>Add new category:</label></p>
                            <p><input type="text" name="new_category"></p>
                            <p><label>Upload Image:</label></p>
                            <p class="admin_upload">
                                <input type="file" name="file" id="imgInp">
                                <input class="btn btn-xs btn-success" type="submit" value="Upload Main">
                                <img id="blah0" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                            <p class="admin_upload">
                                <input type="file" name="file" id="imgInp1">
                                <input class="btn btn-xs btn-success" type="submit" value="Upload Supplementary 1">
                                <img id="blah1" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                            <p class="admin_upload">
                                <input type="file" name="file" id="imgInp2">
                                <input class="btn btn-xs btn-success" type="submit" value="Upload Supplementary 2">
                                <img id="blah2" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                            <p class="admin_upload">
                                <input type="file" name="file" id="imgInp3">
                                <input class="btn btn-xs btn-success" type="submit" value="Upload Supplementary 3">
                                <img id="blah3" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div> <!-- end modal -->
        <!-- Modal Edit New Product-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
                    </div>
                    <div class="modal-body">
                        <form action="products" method="post" enctype="multipart/form-data">
                            <p><label>Name:</label></p>
                            <p><input type="text" name="product_name"></p>
                            <p><label>Description:</label></p>
                            <p><textarea name="product_description"></textarea></p>
                            <p><label>Categories:</label></p>
                            <p>
                                <select>
                                    <option value="hat">Hat</option>
                                    <option value="mug">Mug</option>
                                    <option value="pants">Pants</option>
                                    <option value="key_chain">Key Chain</option>
                                    <option value="belt">Belt</option>
                                </select>
                            </p>
                            <p><label>Add new category:</label></p>
                            <p><input type="text" name="new_category"></p>
                            <p><label>Upload Image:</label></p>
                            <p class="admin_upload">
                                <input type="file" name="file">
                                <input class="btn btn-xs btn-success" type="submit" value="Upload Main">
                            </p>
                            <p class="admin_upload">
                                <input type="file" name="file">
                                <input class="btn btn-xs btn-success" type="submit" value="Upload Supplementary 1">
                            </p>
                            <p class="admin_upload">
                                <input type="file" name="file">
                                <input class="btn btn-xs btn-success" type="submit" value="Upload Supplementary 2">
                            </p>
                            <p class="admin_upload">
                                <input type="file" name="file">
                                <input class="btn btn-xs btn-success" type="submit" value="Upload Supplementary 3">
                            </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div> <!-- end modal -->

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
                    <form id="admin_search" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-md btn-default">Search</button>
                    </form>
                </div>
                <div id="admin_filter" class="col-md-4 col-md-offset-4">
                    <!-- Button trigger modal -->
                    <button class="btn btn-success btn-md pull-right" data-toggle="modal" data-target="#myModal">Add New Product</button>
                </div>
            </div>

            <div class="row">
                <div id="admin_table" class="col-md-12">
                    <table class="table table-bordered">
                        <theader>
                            <tr>
                                <th>Picture</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Inventory Count</th>
                                <th>Quantity Sold</th>
                                <th>Action</th>
                            </tr>
                        </theader>
                        <tbody>
                            <tr>
                                <td><img class="img-rounded" src="http://lorempixel.com/44/44"></td>
                                <td>1</td>
                                <td>T-Shirt</td>
                                <td>123</td>
                                <td>1000</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="img-rounded" src="http://lorempixel.com/45/45"></td>
                                <td>2</td>
                                <td>Hats</td>
                                <td>3</td>
                                <td>20</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="img-rounded" src="http://lorempixel.com/46/46"></td>
                                <td>3</td>
                                <td>Mugs</td>
                                <td>12</td>
                                <td>4</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="img-rounded" src="http://lorempixel.com/47/47"></td>
                                <td>4</td>
                                <td>Pants</td>
                                <td>57</td>
                                <td>14</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="img-rounded" src="http://lorempixel.com/48/48"></td>
                                <td>5</td>
                                <td>Belts</td>
                                <td>78</td>
                                <td>30</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="img-rounded" src="http://lorempixel.com/49/49"></td>
                                <td>6</td>
                                <td>Sweaters</td>
                                <td>219</td>
                                <td>130</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
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
                                <td><img class="img-rounded" src="http://lorempixel.com/50/50"></td>
                                <td>50</td>
                                <td>Shoes</td>
                                <td>1</td>
                                <td>5100</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
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
        </div> <!-- end container -->
    </body>
</html>