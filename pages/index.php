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
    <?php include_once 'navbar.php'; showNavbar(); ?>
    
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
    
    <?php include_once 'footer.php'; showFooter(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
