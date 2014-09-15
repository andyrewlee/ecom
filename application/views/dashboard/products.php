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
                        $(".blah"+number).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                };
            };

            $(document).on("click", "#add_new_product",function(){
                $.post(
                    "/categories/index",
                    function(data){
                        html = "";
                        for (var i = 0; i < data.length; i++){
                            var html = html + "<option value="+data[i]["id"]+">"+data[i]["name"]+"</option>"
                        }
                        $(".categories_select").html(html);
                        },"json");
            });

            $(document).on("click","#edit_product",function(){
                $.post(
                    "/categories/index",
                    function(data){
                        html = "";
                        for (var i = 0; i < data.length; i++){
                            var html = html + "<option value="+data[i]["id"]+">"+data[i]["name"]+"</option>"
                        }
                        $(".categories_select").html(html);
                    },"json");
                $.get(
                    $(this).attr("action"),
                    function(data){
                        $("h4#myModalLabel2").text("Edit Product - ID "+data["id"]);
                        $("form#update_product").attr("action", "/products/create/"+data["id"]);
                        $("input[name='product_name']").val(data["name"]);
                        $("#update_product_description").text(data["description"]);
                    },"json");
                return false;
            });

            $("#add_new_category").on("click", function(){
                $.post(
                        "/categories/create",
                        $("#add_cat").serialize(),
                        function(data){
                            $("#categories_select").append("<option selected value="+data[1]["id"]+">"+data[0]["new_category"]+"</option>");
                        },"json");
            });

            $(".file1").change(function(){
                readURL(this,1);
            });            
            $(".file2").change(function(){
                readURL(this,2);
            });            
            $(".file3").change(function(){
                readURL(this,3);
            });            
            $(".file4").change(function(){
                readURL(this,4);
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
                    <form id="create_product" action="/products/create" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <p><label>Name:</label></p>
                            <p><input type="text" name="name"></p>
                            <p><label>Description:</label></p>
                            <p><textarea name="description"></textarea></p>
                            <p><label>Categories:</label></p>
                            <p>
                                <select class="categories_select" name="category">                           
                                </select>
                            </p>
                            <p><label>Add new category:</label></p>
                            <p>
                                <input class="add_cat" type="text" name="new_category">
                                <button class="add_new_category btn btn-primary btn-xs" type="button">Add</button>
                            </p>                             
                            <p><label>Price:</label></p>
                            <p><input type="text" name="product_price"></p>
                            <p><label>Inventory Count:</label></p>
                            <p><input type="text" name="inventory"></p>
                            <p><label>Upload Main Image:</label></p>
                            <p class="admin_upload">
                                <input type="file" name="file1" class="file1">
                                <img class="blah1" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                            <p><label>Upload Minor Image:</label></p>
                            <p class="admin_upload">
                                <input type="file" name="file2" class="file2">
                                <img class="blah2" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                            <p><label>Upload Minor Image:</label></p>                            
                            <p class="admin_upload">
                                <input type="file" name="file3" class="file3">
                                <img class="blah3" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                            <p><label>Upload Minor Image:</label></p>                            
                            <p class="admin_upload">
                                <input type="file" name="file4" class="file4">
                                <img class="blah4" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Save Product">
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end modal -->

        <!-- Modal Edit New Product-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel2"></h4>
                    </div>
                    <form id="update_product" action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <p><label>Name:</label></p>
                            <p><input type="text" name="product_name"></p>
                            <p><label>Description:</label></p>
                            <p><textarea id="update_product_description" name="product_description"></textarea></p>
                            <p><label>Categories:</label></p>
                            <p>
                                <select class="categories_select" name="categories">
                                </select>
                            </p>
                            <p><label>Add new category:</label></p>
                            <p>
                                <input class="add_cat" type="text" name="new_category">
                                <button class="add_new_category btn btn-primary btn-xs" type="button">Add</button>
                            </p>   
                            <p><label>Upload Main Image:</label></p>
                            <p class="admin_upload">
                                <input type="file" name="file1" class="file1">
                                <img class="blah1" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                            <p><label>Upload Minor Image:</label></p>
                            <p class="admin_upload">
                                <input type="file" name="file2" class="file2">
                                <img class="blah2" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                            <p><label>Upload Minor Image:</label></p>                            
                            <p class="admin_upload">
                                <input type="file" name="file3" class="file3">
                                <img class="blah3" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" wclassth="65" height="65" alt="your image">
                            </p>
                            <p><label>Upload Minor Image:</label></p>                            
                            <p class="admin_upload">
                                <input type="file" name="file4" class="file4">
                                <img class="blah4" src="http://www.jarsandbottles.co.uk/wp-content/themes/dragonsdesign/images/default.jpg" width="65" height="65" alt="your image">
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Update Product">
                        </div>
                    </form>
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
                    <button id="add_new_product" class="btn btn-success btn-md pull-right" data-toggle="modal" data-target="#myModal">Add New Product</button>
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
<?php                   foreach ($products as $product)
                        {   ?>                            
                            <tr>
                                <td><img class="img-rounded" src="http://lorempixel.com/44/44"></td>
                                <td><?= $product["product_id"] ?></td>
                                <td><?= $product["product_name"] ?></td>
                                <td><?= $product["product_inventory"] ?></td>
                                <td><?= $product["quantity_sold"] ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <!-- Button trigger modal -->
                                        <button id="edit_product" action="/products/edit/<?= $product['product_id'] ?>" type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
<?php                   }   ?>                            
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