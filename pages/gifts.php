<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        body {
            background-image: url(../images/giftbg1.avif);
            background-color: #f8f9fa;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        .navbar {
            margin-bottom: 30px;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
 
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

    
    <div class="container" style="margin-bottom: 20px;">
        <h1 class="text-center mb-4">Found Items for Sale</h1>
        <p class="text-center mb-5"><b>These unique items were found unclaimed. Buy them as gifts at amazing prices!</b></p>
        <div id="products" class="row g-4">
            
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="../images/watch.webp" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Stylish Watch</h5>
                        <p class="card-text">$50 - A sleek silver watch in excellent condition.</p>
                        <a href="#" class="btn btn-dark w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="../images/wallet.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Leather Wallet</h5>
                        <p class="card-text">$25 - A premium leather wallet, as good as new.</p>
                        <a href="#" class="btn btn-dark w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="../images/bag.webp" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Backpack</h5>
                        <p class="card-text">$40 - A sturdy backpack perfect for travel.</p>
                        <a href="#" class="btn btn-dark w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="../images/bluetooth speaker.webp" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Bluetooth Speaker</h5>
                        <p class="card-text">$60 - A compact yet powerful speaker.</p>
                        <a href="#" class="btn btn-dark w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <p>&copy; Findr. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
