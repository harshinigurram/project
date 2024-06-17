<?php
$pageTitle = 'Payment';
include 'templates/header.php';
?>

<h2>Make a Payment</h2>
<form action="process_payment.php" method="post">
    <label for="amount">Amount:</label>
    <input type="number" id="amount" name="amount" required><br>
    <label for="payment-method">Payment Method:</label>
    <select id="payment-method" name="payment_method">
        <option value="stripe">Stripe</option>
        <option value="paypal">PayPal</option>
    </select><br>
    <input type="submit" value="Pay Now">
</form>

<?php include 'templates/footer.php'; ?>
