<?php
include '_dbconnect.php';
require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

$sql = "SELECT * FROM `orders`";
                    $result = mysqli_query($conn, $sql);
                    $counter = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $Id = $row['userId'];
                        $orderId = $row['orderId'];
                        $address = $row['address'];
                        $zipCode = $row['zipCode'];
                        $phoneNo = $row['phoneNo'];
                        $amount = $row['amount'];
                    }

                    $sql = "SELECT * FROM `users` WHERE id=$Id"; 
                    $result = mysqli_query($conn, $sql);
                    
                    while($row=mysqli_fetch_assoc($result)) {
                        $Id = $row['id'];
                        $username = $row['username'];
                        $firstName = $row['firstName'];
                        $lastName = $row['lastName'];
                        $email = $row['email'];
                                $phone = $row['phone'];
                                $userType = $row['userType'];
                            }
use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
// $xyz = $_GET['amounta'];
$orderData = [
    'receipt'         => 1111,
    'amount'          => $amount * 100,
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Munch Sqaure.",
    "description"       => "Enjoy the munch.",
    "image"             => "icon.png",
    "prefill"           => [
    "name"              => "$firstName . $lastName",
    "email"             => "$email",
    "contact"           => "$phone",
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
