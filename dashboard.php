<?php

session_start();
include 'function.php';
if($_SESSION['username'] == null){
    session_destroy();
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Kaleidoscope Creations</h2>

            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="Create_invoice.php">Create Invoice</a></li>
                <li><a href="All_invoice.php">All Invoice</a></li>
                <!-- <li><a href="invoice_view.php" target="_blank">Invoice View</a></li> -->
                <!-- <li><a href="#">Vendor List</a></li> -->
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </aside>
        <div class="main-content">
            <header class="header">
                <h1>Kaleidoscope Creations</h1>
                <h3>Dashboard</h3>
            </header>
            <div class="content">
                <div class="card">
                    <h3>Card Title 1</h3>
                    <p>Card content goes here.</p>
                </div>
                <div class="card">
                    <h3>Card Title 2</h3>
                    <p>Card content goes here.</p>
                </div>
                <div class="card">
                    <h3>Card Title 3</h3>
                    <p>Card content goes here.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
