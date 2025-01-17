<?php
require_once 'dbconfig.php';

if (isset($_GET['payment_id'])) {
    $payment_id = $_GET['payment_id'];

    // Update status to "Completed"
    $update_sql = "UPDATE payments SET status='Completed' WHERE id='$payment_id'";
    mysqli_query($conn, $update_sql);

    // Fetch Payment Details
    $query = "SELECT * FROM payments WHERE id = '$payment_id'";
    $result = mysqli_query($conn, $query);
    $payment = mysqli_fetch_assoc($result);
    header("Location:payment-success");
} else {
    die("Invalid Payment ID.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5 text-center">
        <h2 class="text-success">Payment Successful!</h2>
        <p>Thank you, <strong><?= htmlspecialchars($payment['buyer_name']) ?></strong>, for your payment.</p>
        <p><strong>Payment Method:</strong> <?= htmlspecialchars($payment['payment_method']) ?></p>
        <p><strong>Payment Status:</strong> <span class="badge bg-success"><?= htmlspecialchars($payment['status']) ?></span></p>
        <a href="index.php" class="btn btn-primary">Back to Home</a>
    </div>
</body>
</html>
