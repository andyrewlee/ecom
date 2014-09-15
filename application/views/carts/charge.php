<?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/header.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/application/third_party/stripe-php/config.php"); ?>

<?php

$token  = $_POST['stripeToken'];

$customer = Stripe_Customer::create(array(
    'email' => 'customer@example.com',
    'card'  => $token
));

$charge = Stripe_Charge::create(array(
    'customer' => $customer->id,
    'amount'   => 5000,
    'currency' => 'usd'
));

?>
        <div class="container">
            <h1>Charged</h1>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT']."/application/views/include/footer.php"); ?>
    </body>
</html>
