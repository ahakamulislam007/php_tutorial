<?php
session_start();
include 'function.php';
if($_SESSION['username'] == null){
    session_destroy();
    header("Location: index.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $phone_no = $_POST['phone_no'];
    $cus_email = $_POST['cus_email'];
    $address = $_POST['address'];
    $invoice_no = $_POST['invoice_no'];
    $invoice_date = $_POST['invoice_date'];

    $invoice_sql = "INSERT INTO `cus_info_kcbd` (`invoice_no`, `invoice_date`, `customer_name`, `phone_no`, `cus_email`, `address`) 
    VALUES (NULL, current_timestamp(), '$customer_name', $phone_no, '$cus_email', '$address'); ";

    if ($conn->query($invoice_sql) === TRUE) {
        header('Location: All_invoice.php');
    } else {
        echo "Error: " . $invoice_sql . "<br>" . $conn->error;
    }
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
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </aside>


        <!-- main part  -->
        <div class="main-content">
            <header class="header">
                <h1>Kaleidoscope Creations</h1>
                <h3>Create Invoice</h3>
            </header>


            <!-- form design  -->


            <div class="form_area">
                <!-- <a href="#">Return To Home</a> -->
                <h1>Customer Information</h1>

                <form method="post" action="">
                    <div class="form">
                        <div class="form_input">
                            <label for="fname">Customer Name:</label><br>
                            <input type="text" id="cus_name" name="customer_name" placeholder="Enter Customer name" required><br>
                        </div>
                        <div class="form_input">
                            <label for="fname">Phone Number</label><br>
                            <input type="text" id="cus_name" name="phone_no" placeholder="Enter Phone Number" required><br>
                        </div>
                        <div class="form_input">
                            <label for="fname">Email Address</label><br>
                            <input type="email" id="cus_name" name="cus_email" placeholder="Enter Email Address (Optional)"><br>
                        </div>
                        <div class="form_input" id="form_input">
                            <label for="fname">Address</label><br>
                            <input type="textarea" id="cus_name" name="address" placeholder="Enter Customer Address" required><br>
                        </div>

                    </div>

                    <h1>Item Information</h1>
                    <div class="form">
                        <div class="form_input">
                            <label for="fname">Item Name:</label><br>
                            <input type="text" id="cus_name" name="cus_name" placeholder="Enter Item Name"><br>
                        </div>
                        <div class="form_input">
                            <label for="fname">Item Quentity</label><br>
                            <input type="text" id="cus_name" name="cus_name" placeholder="Enter Item Quentity"><br>
                        </div>
                        <div class="form_input">
                            <label for="fname">Item Price</label><br>
                            <input type="text" id="cus_name" name="cus_name" placeholder="Enter Item Price"><br>
                        </div>


                    </div>

                    <div class="submit_unit">

                        <input type="submit" name="add_inv" value="Add Invoice">

                    </div>

                </form>


            </div>


            <!-- form design end  -->

        </div>

        <!-- main part  -->
    </div>
    <!-- jQuery, Popper.js, and Bootstrap JS -->


</body>

</html>