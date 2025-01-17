<?php
require_once 'dbconfig.php';

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    
    $fetch_sql = "SELECT * FROM submit_items WHERE id = '$delete_id' AND item_status = 'found'";
    $result = mysqli_query($conn, $fetch_sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        
        $insert_sql = "INSERT INTO gift_items (item_name, item_desc, item_location, item_photo) 
                       VALUES ('{$row['item_name']}', '{$row['item_desc']}', '{$row['item_location']}', '{$row['item_photo']}')";
        mysqli_query($conn, $insert_sql);

        
        $delete_sql = "DELETE FROM submit_items WHERE id = '$delete_id'";
        mysqli_query($conn, $delete_sql);
    }

    header("Location: manage_items.php");
    exit();
}

if (isset($_GET['delete_gift_id'])) {
    $delete_gift_id = $_GET['delete_gift_id'];
    $delete_sql = "DELETE FROM gift_items WHERE id = '$delete_gift_id'";
    mysqli_query($conn, $delete_sql);

    header("Location: manage_items.php");
    exit();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $item_name = $_POST['item_name'];
    $item_desc = $_POST['item_desc'];
    $item_location = $_POST['item_location'];
    $item_status = $_POST['item_status'];

    $update_sql = "UPDATE submit_items SET 
                   item_name='$item_name', 
                   item_desc='$item_desc', 
                   item_location='$item_location', 
                   item_status='$item_status' 
                   WHERE id='$id'";
    mysqli_query($conn, $update_sql);

    header("Location: manage_items.php");
    exit();
}

if (isset($_POST['update_gift'])) {
    $id = $_POST['id'];
    $item_name = $_POST['item_name'];
    $item_desc = $_POST['item_desc'];
    $item_location = $_POST['item_location'];

    $update_sql = "UPDATE gift_items SET 
                   item_name='$item_name', 
                   item_desc='$item_desc', 
                   item_location='$item_location'
                   WHERE id='$id'";
    mysqli_query($conn, $update_sql);

    header("Location: manage_items.php");
    exit();
}

$submit_items = mysqli_query($conn, "SELECT * FROM submit_items");
$gift_items = mysqli_query($conn, "SELECT * FROM gift_items");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center">Manage Submitted Items</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($submit_items)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['item_name']; ?></td>
                    <td><?php echo $row['item_desc']; ?></td>
                    <td><?php echo $row['item_location']; ?></td>
                    <td><?php echo $row['item_status']; ?></td>
                    <td>
                        <a href="manage_items.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id']; ?>">Edit</button>
                    </td>
                </tr>

                <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <div class="mb-3">
                                        <label>Item Name</label>
                                        <input type="text" class="form-control" name="item_name" value="<?php echo $row['item_name']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <textarea class="form-control" name="item_desc" required><?php echo $row['item_desc']; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <input type="text" class="form-control" name="item_location" value="<?php echo $row['item_location']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <select class="form-control" name="item_status">
                                            <option value="found" <?php if ($row['item_status'] == 'found') echo 'selected'; ?>>Found</option>
                                            <option value="lost" <?php if ($row['item_status'] == 'lost') echo 'selected'; ?>>Lost</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="update" class="btn btn-success">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </tbody>
        </table>

        <h2 class="text-center mt-5">Manage Gift Items</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($gift_items)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['item_name']; ?></td>
                    <td><?php echo $row['item_desc']; ?></td>
                    <td><?php echo $row['item_location']; ?></td>
                    <td>$<?= number_format($row['price'], 2) ?></td>
                    <td>
                        <a href="manage_items.php?delete_gift_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editGiftModal<?php echo $row['id']; ?>">Edit</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
