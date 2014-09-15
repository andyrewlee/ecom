<?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/header.php"); ?>
        <div id="products_info">
            <?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/products_info.php"); ?>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/footer.php"); ?>
    </body>
<script>

$(document).on('click', '.page_number', function(){
    $.get($(this).attr('href'), function(data_received){
        $('#products_info').html(data_received);
    });
    return false;
});

$(document).on('change','#options', function(){
    $.get($(this).find(':selected').attr('href'), function(data_received){
        $('#products_info').html(data_received);
    });
    return false;
});

$(document).on('click', '.category', function(){
    $.get($(this).attr('href'), function(data_received){
        $('#products_info').html(data_received);
    });
    return false;
});

$(document).on('click', '.product_link', function() {
    $.get($(this).attr('href'), function(data_received){
        $('#products_info').html(data_received);
    });
    return false;
});

$(document).on('mouseenter', '#product_images img', function(){
    var main_picture_source = $('#main_picture').attr('src');
    $('#main_picture').attr('src', $(this).attr('src'));
    $(this).attr('src', main_picture_source);
});

$(document).on('click', '#back_to_shopping', function(){
    $.get($(this).attr('href'), function(data_received) {
        $('#products_info').html(data_received);
    });
    return false;
});


</script>
</html>

