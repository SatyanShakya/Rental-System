<?php

$conn = mysqli_connect('localhost','root','','user_db');
// require('stripe-php/init.php');
// $publishablekey="pk_test_51NQtrMIawEE83DXIYmr0nATWrZ13x59oCLYYS1tIv1sNiy2jwgVzWbR3N2sspOpo8pEHv9NwUBk9K6Gg0VK4XS6000R9kOJUS1";
// $secretkey="sk_test_51NQtrMIawEE83DXImtJ2QRGcuANtJ9euezGPFhvlgFfMAXuSimK6zjJLnsIvzdEb9gb1RQwcmeUU9VCEw5QUqcmk00nsDErE4k";
// \Stripe\Stripe::setApiKey($secretkey);

if(!isset($_SESSION['allInfo'])){
    header('location:../login_form.php');
 }
?>