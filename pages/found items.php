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

                <?php
        
                    require_once 'dbconfig.php';

                    $sql = "SELECT * FROM submit_items WHERE item_status = 'found' ";
                    $result = mysqli_query($conn,$sql);

                    $numrecord=mysqli_num_rows($result);


                    for($i=0;$i<$numrecord;$i++){
                        $data = mysqli_fetch_assoc($result);
                        $title = $data['item_name'];
                        $desc = $data['item_desc'];
                        $location = $data['item_location'];
                        $imgpath = $data['item_photo'];

                        echo '
                        <div class="col-md-4">
                            <div class="card">
                                <img src="../pages/'.$imgpath.'" class="card-img-top" alt="Lost Wallet">
                                <div class="card-body">
                                    <h5 class="card-title">'.$title.'</h5>
                                    <p class="card-text">'.$desc.'</p>
                                    <p class="card-text"><small class="text-muted">'.$location.'</small></p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </section>

    <?php include_once 'footer.php'; showFooter(); ?>
    
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>