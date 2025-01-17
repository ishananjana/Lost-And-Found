<?php
require_once 'dbconfig.php';
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM submit_items";
$result = mysqli_query($connect, $sql);

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];


    $fetch_sql = "SELECT * FROM submit_items WHERE id = $delete_id";
    $fetch_result = mysqli_query($connect, $fetch_sql);
    $item = mysqli_fetch_assoc($fetch_result);

    if ($item && $item['item_status'] == 'found') {
        
        $move_sql = "INSERT INTO gift_items (item_name, item_desc, item_location, item_photo) 
                     VALUES ('{$item['item_name']}', '{$item['item_desc']}', '{$item['item_location']}', '{$item['item_photo']}')";
        mysqli_query($connect, $move_sql);
    }

    
    $delete_sql = "DELETE FROM submit_items WHERE id = $delete_id";
    mysqli_query($connect, $delete_sql);

    header("Location: manage_items.php");
    exit();
}


if (isset($_POST['update'])) {
    $update_id = $_POST['update_id'];
    $new_name = $_POST['item_name'];
    $new_desc = $_POST['item_desc'];
    $new_location = $_POST['item_location'];

    $update_sql = "UPDATE submit_items SET item_name='$new_name', item_desc='$new_desc', item_location='$new_location' WHERE id=$update_id";
    mysqli_query($connect, $update_sql);

    header("Location: manage_items.php");
    exit();
}
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
        <h2 class="text-center mb-4">Manage Items</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['item_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['item_desc']); ?></td>
                        <td><?php echo htmlspecialchars($row['item_location']); ?></td>
                        <td><img src="<?php echo $row['item_photo']; ?>" width="100"></td>
                        <td><?php echo htmlspecialchars($row['item_status']); ?></td>
                        <td>
                            
                            <a href="manage_items.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>

                            
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $row['id']; ?>">Update</button>
                        </td>
                    </tr>

                    
                    <div class="modal fade" id="updateModal<?php echo $row['id']; ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Item</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
                                        <div class="mb-3">
                                            <label class="form-label">Item Name</label>
                                            <input type="text" class="form-control" name="item_name" value="<?php echo htmlspecialchars($row['item_name']); ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="item_desc"><?php echo htmlspecialchars($row['item_desc']); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" name="item_location" value="<?php echo htmlspecialchars($row['item_location']); ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
