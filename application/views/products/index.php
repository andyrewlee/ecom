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

</script>
</html>

