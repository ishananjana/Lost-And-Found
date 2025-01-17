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

    
    <div class="container" style="margin-bottom: 20px;">
        <h1 class="text-center mb-4">Found Items for Sale</h1>
        <p class="text-center mb-5"><b>These unique items were found unclaimed. Buy them as gifts at amazing prices!</b></p>
        <div id="products" class="row g-4">
            <?php
        
                require_once 'dbconfig.php';

                $sql = "SELECT * FROM gift_items ";
                $result = mysqli_query($conn,$sql);

                $numrecord=mysqli_num_rows($result);

                for($i=0;$i<$numrecord;$i++){
                    $data = mysqli_fetch_assoc($result);
                    $id = $data['id'];
                    $title = $data['item_name'];
                    $desc = $data['item_desc'];
                    $location = $data['item_location'];
                    $imgpath = $data['item_photo'];

                    echo '
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <img src="../pages/'.$imgpath.'" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">'.$title.'</h5>
                                    <p class="card-text">'.$desc.'</p>
                                    <a href="payment_details.php" class="btn btn-dark w-100">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    ';
                }
            ?>
        
        </div>
    </div>

    <footer class="text-center">
        <p>&copy; Findr. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
