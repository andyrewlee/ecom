<?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/header.php"); ?>
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
                            <img id="main_picture" class="img-responsive img-rounded" src="http://lorempixel.com/200/200/">
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
        <?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/footer.php"); ?>
    </body>
<script>

var main_picture_source = $('#main_picture').attr('src');

$(document).on('mouseenter', '#product_images img', function(){
  $('#main_picture').attr('src', $(this).attr('src'));
});

$(document).on('mouseleave', '#product_images img', function(){
  $('#main_picture').attr('src', main_picture_source);
});
</script>

</html>
