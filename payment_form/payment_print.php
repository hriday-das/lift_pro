<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>Payment</title>
    <?php include'../connect.php';
    session_start();
     $bank= $_SESSION['bank'] ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    margin-top:20px;
    background:#eee;
}

.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-rig .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: right; 
}

.invoice-price .invoice-price-ri {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-ri small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
          
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
            Elevarse Elevator Pvt. Ltd
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-from">
               
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">1/38C Beghajatin Pally,1st floor</strong><br>
                  Kolkata-700092<br> 
                  GSTIN/UIN: 19AAECE9370Q1ZR<br>
                  State: West Bengal,code:19<br>
                  Contact: 18001213626<br>
                  E-mail: info@elevarse.co.in<br>
                  www.elevarse.co.in
               </address>
            </div>
           <?php 
          $pro=$_REQUEST['id'];
      $query= mysqli_query($con, "SELECT * FROM `contract_form` WHERE `proposal_no`='EMP'") or die(mysqli_error($con));
      while ($fet=mysqli_fetch_array($query)) {
      
     ?>

            <div class="invoice-to"> 
               <small>Buyer</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse"><?php echo $fet['name']; ?> </strong><br>
                  <br>
                 fdfd <?php echo $fet['address'] , $fet['pin']; ?><br>
                  993914000 <!--  <?php echo $fet['mobile']; ?> --><br>
                   rishav948@gmail.com<!-- <?php echo $fet['email']; ?> -->
               </address>
            </div>
            <div class="invoice-date">
               <small>Invoice No.</small><b>xyzzz</b>
               <div class="date text-inverse m-t-5">Date: <?php echo $fet['date']; ?> </div>
               <div class="invoice-detail">
                  Proposal_no: <?php echo $fet['proposal_no']; ?><br>
                 <?php echo $fet['date']; ?>
               </div>
            </div>
         </div>
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th>DESCRIPTIONS</th>
                        <th class="text-center" width="10%">QTY.</th>
                        <th class="text-center" width="10%">RATE</th>
                        <th class="text-right" width="20%">AMOUNT</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <span class="text-inverse">Annual maintenance of the Lift we hereby agree and accept the appointment for annual maintenance of 1 (One) No. “Escon” make <?php echo $fet['lift_type']; ?> Lift serving from <?php echo $fet['serving_from']; ?> to <?php echo $fet['serving_to']; ?> at <?php echo $fet['address']; ?>,<?php echo $fet['state']; ?> – <?php echo $fet['pin']; ?> for the period from <?php echo $fet['date']; ?> to June 2020 upon terms and conditions</span><br>
                         
                        </td>
                        <td class="text-center">1</td>
                        <td class="text-center"> 6000 <!-- <?php echo $fet['contract_price']; ?> --> </td>
                        <td class="text-right">6000<!--  <?php echo $fet['contract_price']; ?> --></td>
                     </tr>
                     <tr>
                        <td>
                           <span class="text-inverse">CGST@9%</span><br>
                         
                        </td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-right">xyz</td>
                     </tr>
                    
                  </tbody>
               </table>
            </div>
          <?php } ?>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
            
               <div class="invoice-price-right">
                <div class="invoice-price-row">
                  <small>TOTAL</small> <span class="">XYZ</span>
                  </div>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
       
         <div class="container">
          <div class="row">
         <div class="col-lg-6 col-md-9 info">
          <?php 
          
      $query= mysqli_query($con, "SELECT * FROM `banks_detail` WHERE `bank_name`='$bank'") or die(mysqli_error($con));
      while ($fet=mysqli_fetch_array($query)) {
      
     ?>
            <h4>Our Bank Detail</h4>
          <p><b> A/C NAME:</b> <strong class="p-3"> ELEVARSE ELEVATOR PRIVATE LIMITED </strong></p>
          <p><b> BANK NAME:</b> <strong class="p-3"> BANK OF BARODA</strong></p>
           <p><b> BRANCH:</b> <strong class="p-3">JODHPUR PARK</strong></p>
            <p><b> A/C NO.:</b> <strong class="p-3">08560200000594</strong></p>
             <p><b> IFSC CODE:</b> <strong class="p-3"> BARB0JODCL</strong></p>
         
          </div>
            <div class="col-lg-6 col-md-9 info">
              <div class="col py-md-5">
              <?php } ?>
            
          <p> <strong class="p-5"> E.& O.E. </strong></p>
         
          <p> <strong class="p-3"> for ELEVARSE ELEVATOR PVT LTD</strong></p>
          <div class=" py-md-5">
          <p> <strong class="p-3"> Accounts officer/Manager</strong></p>
          </div>
         </div>
          </div>
          </div>
          </div>
        
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               THANK YOU FOR YOUR BUSINESS
            </p>
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i>35 </span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume">877</i></span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> .com</span>
            </p>
         </div>
         <!-- end invoice-footer -->
      </div>
   </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>