<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost & Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    
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
    
    <header id="home" class="hero bg-primary text-white text-center d-flex align-items-center justify-content-center" style="height: 35rem;">
        <div class="hero-text">
            <h2 class="display-4">Find Lost Items or Report Found Ones</h2>
            <p class="lead">Helping people reconnect with their lost belongings.</p>
            <a href="lost items.php" class="btn btn-light btn-lg">View Lost Items</a>
            <a href="submit item.php" class="btn btn-outline-light btn-lg">Submit a Found Item</a>
        </div>
    </header>

    <section id="contact" class="bg-light py-5" >
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="text-center">
                <p>Email: findr@gmail.com</p>
                <p>Phone: 071-3420035</p>
                <div class="social-icons">
                    <a href="https://facebook.com" target="_blank" class="mx-2">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="mx-2">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="mx-2">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="mx-2">
                        <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>
            </div>
        </div>
    </section>
    
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; Findr. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
