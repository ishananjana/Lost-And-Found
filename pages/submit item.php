<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/submitstyles.css">
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

    <section id="submit-item" class="container my-5">
        <h2 class="text-center mb-4">Submit a Found/Lost Item</h2>
        <form class="mx-auto" style="max-width: 600px; margin-bottom: 8rem;">
            <div class="mb-3">
                <label for="item-name" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="item-name" placeholder="Enter item name">
            </div>
            <div class="mb-3">
                <label for="item-desc" class="form-label">Item Description</label>
                <textarea class="form-control" id="item-desc" rows="3" placeholder="Enter item description"></textarea>
            </div>
            <div class="mb-3">
                <label for="item-location" class="form-label">Location Found/Lost</label>
                <input type="text" class="form-control" id="item-location" placeholder="Enter location">
            </div>
            <input type="radio" id="found" name="fav_language" value="found">
            <label for="found">Found</label><br>
            <input type="radio" id="Lost" name="fav_language" value="lost">
            <label for="css">Lost</label><br>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; Findr. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>