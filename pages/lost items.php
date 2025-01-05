<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/loststyles.css">
    </style>
</head>
<body>
    <?php include_once 'navbar.php'; showNavbar(); ?>

    <section id="lost-items" class="container my-5">
        <h2 class="text-center mb-4">Lost Items</h2>
        <div class="row g-4" style="margin-bottom: 8rem;">
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/wallet.jpg" class="card-img-top" alt="Lost Wallet">
                    <div class="card-body">
                        <h5 class="card-title">Lost Wallet</h5>
                        <p class="card-text">Black leather wallet, lost in the park.</p>
                        <p class="card-text"><small class="text-muted">Location: Central Park</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/iphone.jpg" class="card-img-top" alt="Lost iphone">
                    <div class="card-body">
                        <h5 class="card-title">Lost Phone</h5>
                        <p class="card-text">iPhone 12, white color, with a cracked screen.</p>
                        <p class="card-text"><small class="text-muted">Location: Train Station</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'footer.php'; showFooter(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>