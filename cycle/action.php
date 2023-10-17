<?php

// print_r($_POST);


?>

<?php
// Replace with your Stripe secret key.
\Stripe\Stripe::setApiKey('sk_test_51NQtrMIawEE83DXImtJ2QRGcuANtJ9euezGPFhvlgFfMAXuSimK6zjJLnsIvzdEb9gb1RQwcmeUU9VCEw5QUqcmk00nsDErE4k');


// Get the token submitted from the client-side.
$token = $_POST['stripeToken'];

// Create a charge on Stripe using the token.

    $charge = \Stripe\Charge::create(array(
        'amount' => 1000, // Amount in cents (e.g., $10.00 would be 1000).
        'currency' => 'usd',
        'source' => $token,
        'description' => 'Sample Charge'
    ));

    // Handle the success of the payment (e.g., store the transaction details in your database).

 
?>
