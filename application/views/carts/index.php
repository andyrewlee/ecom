<?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/header.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/application/third_party/stripe-php/config.php"); ?>
        <div id="shopping_cart" class="container">
            <?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/shopping_cart.php"); ?>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/footer.php"); ?>
    </body>
    <script>

    // Once edit is clicked enable input for updating quantity
    $(document).on('click', '.cart_edit', function(){
        $(this).prev().children('input').prop('disabled', false).focus();
        $(this).hide();
        $(this).prev().children('.cart_update').show();
    });

    </script>
</html>
