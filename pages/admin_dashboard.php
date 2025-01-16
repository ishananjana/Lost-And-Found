<?php
 session_start();
 if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
     echo "Access denied!";
     exit;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
            position: fixed;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            margin: 5px 0;
        }
        .sidebar a:hover {
            background-color: #495057;
            border-radius: 5px;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center text-white">Admin Panel</h4>
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="manage_items.php">Manage Items</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>This is your admin dashboard. Here, you can manage the system, users, and items reported as lost or found.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total Users</div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            include 'dbconfig.php';
                            $result = $conn->query("SELECT COUNT(*) AS total FROM users");
                            $data = $result->fetch_assoc();
                            echo $data['total'];
                            ?>
                        </h5>
                        <p class="card-text">Manage all registered users.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Lost Items</div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                include 'dbconfig.php';
                                $result = $conn->query("SELECT COUNT(*) AS total FROM submit_items WHERE item_status = 'lost'");
                                $data = $result->fetch_assoc();
                                echo $data['total'];
                            ?>
                        </h5>
                        <p class="card-text">View and manage all lost items.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Found Items</div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                $result = $conn->query("SELECT COUNT(*) AS total FROM submit_items WHERE item_status = 'found'");
                                $data = $result->fetch_assoc();
                                echo $data['total'];
                            ?>
                        </h5>
                        <p class="card-text">View and manage all found items.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
