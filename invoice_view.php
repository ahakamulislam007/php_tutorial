<?php
session_start();

include 'function.php';
if($_SESSION['username'] == null){
    session_destroy();
    header("Location: index.php");
}
$invoice_id = $_GET['id'];
$invoice = $conn->query("SELECT * FROM cus_info_kcbd WHERE `invoice_no` = $invoice_id")->fetch_assoc();
// die ($invoice['customer_name']);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="inv_styles.css">
  <title>Document</title>
</head>
<body>
<div class="print">

<div class="nav_menu">
    <button><a  class="btn_submit" href="All_invoice.php">Return Input Field</a></button>
</div>

<section>
  <div class="invoice">
    <div class="invoice_info">
      <div class="i_row">
        <div class="i_logo">
          <h1 class="company_name">KALEIDOSCOPE CREATIONS</h1>
        </div>
        <div class="title">
          <h1>INVOICE</h1>
        </div>
      </div>




      <div class="i_row">

        <div class="i_to">
          <div class="main_title">
            <p>Company Details</p>
          </div>
          <div class="p_title">
            <p>Kaleidoscope Creations</p>
            <span>Gift Shop</span>
          </div>
          <div class="p_title">
            <p>Phone: 01302070489 </p>
            <p>Address: Road #2, House #2, Block #J</p>
            <p>Baridhara, Dhaka</p>
          </div>
        </div>
        <div id="cus_details" class="i_details .text_left">

          <div class="main_title">
            <p>Invoice details</p>
          </div>
          <div class="p_title">
            <p>Invoice No : INV-000<?= $invoice['invoice_no'] ?></p>
            <!-- <span>3452356</span> -->
          </div>
          <div class="p_title">
            <p>Invoice Date : <?= $invoice['invoice_date'] ?></p>
            <!-- <span>22 April 2023</span> -->
          </div>
          <div class="p_title">
            <p>Customer Name : <?= $invoice['customer_name'] ?> </p>
            <!-- <span>22 April 2023</span> -->
          </div>
          <div class="p_title">
            <p>Phone No : +880 <?= $invoice['phone_no'] ?></p>
            <!-- <span>22 April 2023</span> -->
          </div>
          <div class="p_title">
            <p>Address : <?= $invoice['address'] ?> </p>

          </div>
       
        </div>
      </div>
      


    </div>
    <div class="invoice_table">
      <div class="i_table">
        <div class="i_table_head">
          <div class="i_row">
            <div class="i_col w_55">
                <p class="p_title">SL No</p>
              </div>
            <div class="i_col w_55">
              <p class="p_title">Item Name</p>
            </div>
            <div class="i_col w_15 text_center">
              <p class="p_title">QTY</p>
            </div>
            <div class="i_col w_15 text_center">
              <p class="p_title">PRICE</p>
            </div>
            <div class="i_col w_15 text_right">
              <p class="p_title">TOTAL</p>
            </div>
          </div>
        </div>
        <div class="i_table_body">
          <div class="i_row">
            <div class="i_col w_55">
                <p>01</p>
                
              </div>
            <div class="i_col w_55">
              <p>Lorem, ipsum.</p>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vel.</span>
            </div>
            <div class="i_col w_15 text_center">
              <p>3</p>
            </div>
            <div class="i_col w_15 text_center">
              <p>$10.00</p>
            </div>
            <div class="i_col w_15 text_right">
              <p>$30.00</p>
            </div>
          </div>
          
        <div class="i_table_foot">
          <div class="i_row">
            <div class="i_col w_50">
              <p>Sub Total</p>
              <p>Paid Total</p>
              <p>Due Total</p>
            </div>
            <div class="i_col w_50 text_right">
              <p>$580.00</p>
              <p>$150.00</p>
              <p>$15.00</p>
            </div>
          </div>
          <div class="i_row grand_total_wrap">
            <div class="i_col w_50">
              <p>GRAND TOTAL:</p>
            </div>
            <div class="i_col w_50 text_right">
              <p>$745.00</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="invoice_terms">
      <div >
        <p class="terms_conditions">terms and Conditions</p>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe nemo eligendi inventore? Provident iste cumque quam eaque consequatur architecto, consequuntur molestiae? Corporis, voluptates? Fugit, omnis.</p>
    </div>
  </div>
</section>

</div>

  
</body>
</html>