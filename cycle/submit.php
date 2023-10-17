<?php
require('config.php');
\Stripe\Stripe::setVerifySslCerts(false);
$token=$_POST['stripeToken'];
$data=\Stripe\Charge::create(array(
	"description"=>"Cycle payment", 
	
	"currency"=>"inr",
	"source"=>$token,

));
echo "<pre>";
print_r($_POST);
?>