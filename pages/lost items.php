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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../images/logo.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lost items.html">Lost Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="found items.html">Found Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submit item.html">Submit Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gifts.html">Gift</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="login.html" class="btn btn-outline-light me-2">Login</a>
                    <a href="signup.html" class="btn btn-light">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

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

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; Findr. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>