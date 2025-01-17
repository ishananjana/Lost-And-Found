<?php
require_once 'dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buyer_name = mysqli_real_escape_string($conn, $_POST['buyer_name']);
    $buyer_email = mysqli_real_escape_string($conn, $_POST['buyer_email']);
    $buyer_phone = mysqli_real_escape_string($conn, $_POST['buyer_phone']);
    $buyer_address = mysqli_real_escape_string($conn, $_POST['buyer_address']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);
    $status = "Pending"; // Default status before payment confirmation

    $sql = "INSERT INTO payments (buyer_name, buyer_email, buyer_phone, buyer_address, payment_method, status) 
            VALUES ('$buyer_name', '$buyer_email', '$buyer_phone', '$buyer_address', '$payment_method', '$status')";

    if (mysqli_query($conn, $sql)) {
        $payment_id = mysqli_insert_id($conn);
        header("Location: payment_success.php?payment_id=$payment_id");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center">Payment Gateway</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Buyer Name</label>
                <input type="text" class="form-control" name="buyer_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Buyer Email</label>
                <input type="email" class="form-control" name="buyer_email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Buyer Phone</label>
                <input type="text" class="form-control" name="buyer_phone" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Buyer Address</label>
                <textarea class="form-control" name="buyer_address" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Payment Method</label>
                <select class="form-control" name="payment_method" required>
                    <option value="Credit Card">Credit Card</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Google Pay">Google Pay</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100">Proceed to Pay</button>
            <!-- <a href="payment_success.php" class="btn btn-dark w-100">Proceed to pay</a> -->
        </form>
    </div>
</body>
</html>
