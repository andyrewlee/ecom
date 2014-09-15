<?php
require_once('lib/Stripe.php');

$stripe = array(
    "secret_key"      => "sk_test_70Wm55pNDlRUf8CK7mTuYzHA",
    "publishable_key" => "pk_test_GYWVZ1dipNjvt8Vas6RB4Bxs"
);

Stripe::setApiKey($stripe['secret_key']);
