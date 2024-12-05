<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/foundstyles.css">
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
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lost items.php">Lost Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="found items.php">Found Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submit item.php">Submit Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gifts.php">Gift</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="login.php" class="btn btn-outline-light me-2">Login</a>
                    <a href="signup.php" class="btn btn-light">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="found-items" class="container my-5">
        <div class="container" style="margin-bottom: 8rem;">
            <h2 class="text-center mb-4">Found Items</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="../images/watch.webp" class="card-img-top" alt="Lost watch">
                        <div class="card-body">
                            <h5 class="card-title">Found Watch</h5>
                            <p class="card-text">Silver wristwatch, found near the library.</p>
                            <p class="card-text"><small class="text-muted">Location: University Library</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../images/bag.webp" class="card-img-top" alt="Lost backpack">
                        <div class="card-body">
                            <h5 class="card-title">Found Bag</h5>
                            <p class="card-text">Red backpack with books and a laptop inside.</p>
                            <p class="card-text"><small class="text-muted">Location: Coffee Shop</small></p>
                        </div>
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