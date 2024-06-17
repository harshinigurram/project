<?php
$pageTitle = 'Process Payment';
include 'templates/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    // Integrate with the payment gateway
    if ($payment_method == 'stripe') {
        // Stripe payment processing
        require_once('stripe-php/init.php');

        \Stripe\Stripe::setApiKey('your_stripe_secret_key');

        try {
            $charge = \Stripe\Charge::create([
                'amount' => $amount * 100, // amount in cents
                'currency' => 'usd',
                'source' => 'tok_visa', // test token, replace with actual token from frontend
                'description' => 'Payment for project'
            ]);
            echo 'Payment successful!';
        } catch (\Stripe\Exception\ApiErrorException $e) {
            echo 'Payment failed: ' . htmlspecialchars($e->getMessage());
        }
    } elseif ($payment_method == 'paypal') {
        // PayPal payment processing
        echo 'PayPal integration would be here.';
    }
}
?>

<h2>Payment Processing Result</h2>
<p>Payment processing completed.</p>

<?php include 'templates/footer.php'; ?>
