<?php
function showNavbar() {
    echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/logo.png" class="logo" alt="Findr Logo" style="height: 50px;">
            </a>
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
    ';
}
?>