<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
      <?php include '../connect.php'; ?>
   
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="../css/sidebar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form action="" method="POST" class="from-group">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input name="item" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Proposal No.">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                      <input class=" btn btn-primary " type="submit" value="Search" name="search">
                                      <!--   <button name="search" class="btn btn btn-success" value="search data" type="submit">Search</button> -->
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
<?php 
if (isset($_POST['search'])) {
   $id=$_POST['item'];
   $query=mysqli_query($con, "SELECT * FROM `contract_form` WHERE `proposal_no`='$id' ") or die(mysqli_error($con));
      while ($fet=mysqli_fetch_array($query)) {
        $flag='ok';
        $name=$fet['name'];
        $address= $fet['address'];
        $amount=$fet['service_charge'];
        $timeline= '1year';
  
}

if (isset($flag)) {
  
 ?>
 <div id="page-content-wrapper">

  <div class="card">
  <div class="card-header">
    Customer Details
  </div>
  <div class="card-body">
   

    <h4  class="card-title">Name : <?php echo $name ?></h4>
     <h4  class="card-title">Address : <?php echo $address ?></h4>
   
    <h4  class="card-title">Proposed Amount : <?php echo $amount  ?></h4>
    <h4  class="card-title">Proposed Timeline : <?php echo $timeline  ?></h4>
    <a href="#" class="card-link">Lift Details</a>
    <a href="#" class="card-link">Service Information</a>
 


  </div>
</div>
<div class="container text-center text-center">

            <form action="payment_action.php" method="post" class="form-horizontal" role="form">
                 <h3 align="left">Payment Information</h3>
            <div class="form-group">
               <input type="hidden" name="proposal_no" value=" <?php echo $id ?> ">
                    <label for="price" class="col-sm-3 control-label">Contract Price</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Contact Price" name="Contract-Price" class="form-control" autofocus>
                       
                    </div>
                </div>
        <div class="form-group">
                    <label for="Address" class="col-sm-3 control-label">Contract Timeline</label>
                    <div class="col-sm-2">
                    <div class="form-group">
                          <input class="form-control" type="month" id="agmonth" name="agreement_from">
                   </div>
            </div>
                <label for="agreement" class="col-sm-1 control-label">To</label>
              <div class="col-sm-2">
                         <div class="form-group">
                             <input class="form-control" type="month" id="agmonth" name="agreement_to">
                         </div>
              </div>
                </div>
                  
                 <div class="form-group">
                    <label for="Address" class="col-sm-3 control-label">Payment Term</label>
                    <div class="col-sm-4">
                      <select name="payment_term" class="form-control">
                        <option value="25%">25%</option>
                        <option value="50%">50%</option>
                        <option value="75%">75%</option>
                        <option value="100%">100%</option>
                      </select>
                    
                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="Address" class="col-sm-3 control-label">Payment account</label>
                    <div class="col-sm-4">
                      <select name="bank" class="form-control">
                        <option value="Bank Of Baroda">Bank Of Baroda</option>
                    
                      </select>
                       
                    </div>
                </div>
                      <h3 align="left">contact info</h3>
            <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-4">
                        <input type="number" placeholder="Contact Price" name="mobile_py" class="form-control" autofocus>
                       
                    </div>
                </div>
                 <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" placeholder="Email" name="email_py" class="form-control" autofocus>
                       
                    </div>
                </div>
                 <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="FullName" name="name_py" class="form-control" autofocus>
                       
                    </div>
                </div>
                 <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">address</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="address" name="address" class="form-control" autofocus>
                       
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                    </div>

                </div>

              </form>
            </div>
            </div>
           <?php } 
           else{ ?>
          <div class="container justify-content-center" > 
            <h3 >Data Not Found </h3>
            <code>Check You have typed correct input</code>
            </div>
           <?php }


            }



         ?>





</body>
</html>