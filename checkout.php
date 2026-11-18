<!DOCTYPE html>
<html>
<head>
    <title>FarmFresh Checkout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>FarmFresh Checkout</h1>
</header>

<?php
$items = $_GET['items'] ?? 0;
$total = $_GET['total'] ?? 0;
?>

<section class="register">

    <h2>Order Summary</h2>

    <p><strong>Total Items:</strong> <?php echo $items; ?></p>
    <p><strong>Total Amount:</strong> ₹<?php echo $total; ?></p>

    <form action="payment.php" method="POST">

        <input type="hidden" name="amount" value="<?php echo $total; ?>">

        <input type="text" name="fullname" placeholder="Full Name" required>

        <input type="text" name="address" placeholder="Delivery Address" required>

        <input type="tel" name="phone" placeholder="Phone Number" required>

        <button type="submit">
            Proceed To Payment
        </button>

    </form>

</section>

</body>
</html>