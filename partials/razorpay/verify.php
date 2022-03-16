<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p style='text-align:center; font-weight : 800; font-size:3em;'>Thank You!!!</p>

             <p style='text-align:center; font-weight : 800; font-size:2em;'>Transaction successful.Thanks a Bunch For ordering food from our website.it means alot to us,just like you do.Your order will dilever to you shortly</p>
             <a href='../../viewOrder.php' style='background:black; color:#FFA45B; border-radius:4px; padding:15px; text-decoration:none; margin-left:550px; margin-top : 100px; margin-right:30px;'>Go to your orders</a>
             <a href='../../review.php' style='background:black; border-radius:4px; padding:15px; text-decoration:none;color:#FFA45B; '>Add a Review</a>";
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
