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
    <?php include_once 'navbar.php'; showNavbar(); ?>

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

    <?php include_once 'footer.php'; showFooter(); ?>
    
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>