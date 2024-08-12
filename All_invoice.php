<?php
session_start();

include 'function.php';
if($_SESSION['username'] == null){
    session_destroy();
    header("Location: index.php");
}
$invoice = $conn->query("SELECT * FROM cus_info_kcbd");
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
                <h3>All Invoice</h3>
            </header>
            <div class="content">

            <table id="customers">
                <h1 class="inv_list_title">Customer Invoice List</h1>
                    <tr>
                        <th>Invoice No</th>
                        <th>Invoice Date</th>
                        <th>Customer Name</th>
                        <th>Customer Phone No</th>
                    </tr>
                    <?php while($invoice_row = $invoice->fetch_assoc()): ?>
                    <tr>
                        <td> <a href="invoice_view.php?id=<?php echo $invoice_row['invoice_no'] ?>">INV-000<?php echo $invoice_row['invoice_no']; ?></a></td>
                        <td><?php echo $invoice_row['invoice_date']; ?></td>
                        <td><?php echo $invoice_row['customer_name']; ?></td>
                        <td>+880<?php echo $invoice_row['phone_no']; ?></td>
                        
                    </tr>
                    <?php endwhile; ?>
            
            </table>
                
            </div>
        </div>
    </div>
</body>
</html>
