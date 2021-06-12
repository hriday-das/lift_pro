


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../connect.php';
    include'../headr.php';
   include '../footer.php';?>
 

     
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container text-center text-center">
    <div class="container">
          <div class="page-header">
               <center><h2> <b> LIFT MAINTENANCE CONTRACT FORM</b></h2></center>      
         </div>
   </div>
            <form action="contract_action.php" method="post" class="form-horizontal" role="form">
                 <h3 align="left">Customer Information</h3>
            <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                <div class="col-sm-4">
                        <input type="text" id="Name" placeholder="Full Name" name="fullname" class="form-control" autofocus>
                       
                </div>
            </div>
				<div class="form-group">
                    <label for="Address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-4">
                        <input type="text" id="Address" name="Address" placeholder="City ,colony " class="form-control" autofocus>
                       
                    </div>
                </div>
                    <div class="form-group">
                  <label for="Address" class="col-sm-3 control-label">Building no</label>
                    <div class="col-sm-4">
                        <input type="text" id="Address" name="building" placeholder="Customer Building No. , " class="form-control" autofocus>
                       
                    </div>
                </div>
				<div class="form-group">
                    <label for="State" class="col-sm-3 control-label">State</label>
                    <div class="col-sm-4">
                        <input type="text" id="State" name="State" placeholder="State" class="form-control" autofocus>
                       
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="PIN" class="col-sm-3 control-label">PIN</label>
                    <div class="col-sm-4">
                        <input type="text" name="Pin" id="PIN" placeholder="Enter Pin code" class="form-control">
                    </div>
                </div>
                
               <h3 align="left">Service Information</h3> 
               <div id="sections">
                <div class="section">
                   <fieldset class="the-fieldset">
                    <legend class="the-legand"></legend>
		<div class="form-group">
                    <label for="Maintaince" class="col-sm-3 control-label">Maintaince Type</label> <label><a href="#" class='addsection'><span class="glyphicon glyphicon-plus-sign text-danger"></span></a><small>Click to add more</small></label>  
                   <div class="col-sm-4">
                        <select  name="service_type" onchange="showHint(this.value);" id="service_type" class="form-control">
                            <option value="none" selected="selected" disabled="disabled">Select Service Type</option>
                            <?php  
                                           $query=mysqli_query($con, "SELECT * FROM `service_detail`") or die(mysqli_error($con));
                                             while ($fet=mysqli_fetch_array($query)) {
                                   
                                    ?>
                                      <option value="<?php echo $fet['service_type']; ?>"><?php echo $fet['service_type']; ?></option>
                                   <?php } ?>
                        </select>
                    </div>
         </div>
                <div id="txtHint">
                                
              </div>
               <div class="form-group">
                    <label for="Lift" class="col-sm-3 control-label">Lift Capacity</label>
                   <div class="col-sm-4">
                        <select name="Lift_cap" id="Select" class="form-control">
                            <option value="Goods">-Select-</option>
                            <option value="4 Passenger">4 Passenger</option>
                            <option value="6 Passenger">6 Passenger</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="payment" class="col-sm-3 control-label">PAYMENT Type</label>
                   <div class="col-sm-4">
                        <select name="payment_type" class="form-control">
                            <option value="select">-SELECT-</option>
                            <option value="yearly">yearly</option>
                            <option value="half-yearly">half-yearly</option>
                            <option value="quarterly">quarterly</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="payment" class="col-sm-3 control-label">Maintaince Charge</label>
                   <div class="col-sm-4">
                        <input type="text" name="service_charge" class="form-control" autofocus>
                    </div>
                </div>
               
   <div class="row">
                    <label for="agreement" class="col-sm-3 control-label"><code> Agreement </code>From</label>
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
<div class="row">
                    <label for="agreement" class="col-sm-3 control-label"><code>Lift Serving limit </code>From</label>
                   <div class="col-sm-2">
                       <div class="form-group">
                        <select name="serving_from" class="form-control">
                         <option selected="selected" >Ground Floor</option>
                         <option value="1st Floor">1st Floor</option>
                         <option value="2nd Floor">2nd Floor</option>
                         <option value="3rd Floor">3rd Floor</option>
                         <option value="4th Floor">4th Floor</option>
                         <option value="5th Floor">5th Floor</option>
                         <option value="6th Floor">6th Floor</option>
                         <option value="7th Floor">7th Floor</option>
                         <option value="8th Floor">8th Floor</option>
                         <option value="9th Floor">9th Floor</option>
                       </select>
                   </div>
                </div>
         <label for="Lift" class="col-sm-1 control-label">To</label>
    <div class="col-sm-2">
         <div class="form-group">
            <select  name="serving_to" class="form-control">
                   
                         <option selected="selected" >Ground Floor</option>
                         <option value="1st Floor">1st Floor</option>
                         <option value="2nd Floor">2nd Floor</option>
                         <option value="3rd Floor">3rd Floor</option>
                         <option value="4th Floor">4th Floor</option>
                         <option value="5th Floor">5th Floor</option>
                         <option value="6th Floor">6th Floor</option>
                         <option value="7th Floor">7th Floor</option>
                         <option value="8th Floor">8th Floor</option>
                         <option value="9th Floor">9th Floor</option>
            </select>
         </div>
    </div>
 </div>
  <div id="cnt">
              <lable><a href="#" class='remove '><span class="glyphicon glyphicon glyphicon-remove text-danger"></span></a><small>Click to remove</small></a></lable>
              </div>

            </fieldset >
        </div>
    </div>
   
                <div class="clearfix"></div>

<div class="row">
  <div class="col-sm-6" style="width:200px;border-radius:6px;margin:0px auto">  
<table border="1">  
   <tr>  
      <td colspan="2">Select For warrants </td>  
   </tr>  
   <tr>  
      <td>i. Over Speed Governor</td>  
      <td><input type="checkbox" name="cover[]" value=" Over Speed Governor"></td>  
   </tr>  
   <tr>  
      <td>.ii. Brake shoe Liner</td>  
      <td><input type="checkbox" name="cover[]" value=" Brake shoe Liner"></td>  
   </tr>  
   <tr>  
      <td>iii. Brake/CAM Coils</td>  
      <td><input type="checkbox" name="cover[]" value="Brake/CAM Coils"></td>  
   </tr>  
   <tr>  
      <td>iv. Switches</td>  
      <td><input type="checkbox" name="cover[]" value="Switches"></td>  
   </tr> 
   <tr>  
      <td> v.  Guide Shoe</td>  
      <td><input type="checkbox" name="cover[]" value="Guide Shoe"></td>  
   </tr> 
   <tr>  
      <td>vi.   Guide Shoe Gibs</td>  
      <td><input type="checkbox" name="cover[]" value="  Guide Shoe Gibs"></td>  
   </tr> 
   <tr>  
      <td> vii.  Car operating Panels</td>  
      <td><input type="checkbox" name="cover[]" value=" Car operating Panels"></td>  
   </tr> 
   <tr>  
      <td>viii. Hall Button Units</td>  
      <td><input type="checkbox" name="cover[]" value=" Hall Button Units"></td>  
   </tr> 
   <tr>  
      <td>ix.Trailing cables</td>  
      <td><input type="checkbox" name="cover[]" value=" Trailing cables"></td>  
   </tr> 
   <tr>  
      <td>x. Controller Parts</td>  
      <td><input type="checkbox" name="cover[]" value="Controller Parts"></td>  
   </tr>  
   <tr>  
      <td> xi. Machine including motor and Gear Box (Repair Only) </td>  
      <td><input type="checkbox" name="cover[]" value="Machine including motor and Gear Box (Repair Only)"></td>  
   </tr>  
   <tr>  
      <td>xii. Main Rope</td>  
      <td><input type="checkbox" name="cover[]" value=" Main Rope"></td>  
   </tr>  
    
</table>  
</div> 

<div class="col-sm-6" style="width:200px;border-radius:6px;margin:0px auto">  
<table border="1">  
   <tr>  
      <td colspan="2">ELEVARSE SERVICES DOES NOT COVER </td>  
   </tr>  
   <tr>  
      <td>01. Polishing, Painting, Repairing & Replacement of lift cage, supply & fitting lift doors including door closure & landing door sill.</td>  
      <td><input type="checkbox" name="not_cover[]" value="  Polishing, Painting, Repairing & Replacement of lift cage, supply & fitting lift doors including door closure & landing door sill."></td>  
   </tr>  
   <tr>  
      <td>02.Replacement of light and light fixtures inside the lift car.</td>  
      <td><input type="checkbox" name="not_cover[]" value="Replacement of light and light fixtures inside the lift car."></td>  
   </tr>  
   <tr>  
      <td>03. Repair and replacement of damaged lift equipment due to misuse, mishandling, theft or any other cause other than normal wear and tear.</td>  
      <td><input type="checkbox" name="not_cover[]" value="Repair and replacement of damaged lift equipment due to misuse, mishandling, theft or any other cause other than normal wear and tear."></td>  
   </tr>  
   <tr>  
      <td>04.Repair & replacement of lift car flooring and platform.</td>  
      <td><input type="checkbox" name="not_cover[]" value="Repair & replacement of lift car flooring and platform."></td>  
   </tr> 
   <tr>  
      <td> 05.Repair & replacement of battery operated emergency light and alarm.</td>  
      <td><input type="checkbox" name="not_cover[]" value="Repair & replacement of battery operated emergency light and alarm."></td>  
   </tr> 
   <tr>  
      <td>06. Repair & replacement of annunciator in car if any.</td>  
      <td><input type="checkbox" name="not_cover[]" value="Repair & replacement of annunciator in car if any."></td>  
   </tr> 
   <tr>  
      <td>07. Repair & Replacement of 400V A.C. Supply and its related parts.</td>  
      <td><input type="checkbox" name="not_cover[]" value="Repair & Replacement of 400V A.C. Supply and its related parts."></td>  
   </tr> 
    
</table>  
</div>

</div> 

     <br><br> 
<h3 align="left">Lift Information</h3>
        
            <div class="form-group">
                    <label for="Lift" class="col-sm-3 control-label">Lift Type</label>
                   <div class="col-sm-4">
                        <select name="machine_type" id="Select" class="form-control">
                            <option value="Goods">-Select-</option>
                            <option value="Hydraulic lift">Hydraulic lift</option>
                            <option value="Building lift">Building lift</option>
                            <option value="Passenger lift">Passenger lift</option>
                            <option value="MRL lift">MRL lift</option>
                            <option value="Capsule lift">Capsule lift</option>
                            <option value="Pneumatic lift">Pneumatic lift</option>
                            <option value="other ">other</option>
                        </select>
                    </div>
                </div>


        
            <div class="form-group">
                    <label for="m_model_no" class="col-sm-3 control-label"> Model no</label>
                <div class="col-sm-4">
                        <input type="text" id="mod"  name="m_model_no" class="form-control" autofocus>
                       
                </div>
            </div>

        
             <div class="form-group">
                    <label for="Lift" class="col-sm-3 control-label">Lift Capacity</label>
                   <div class="col-sm-4">
                        <select name="capacity" id="Select" class="form-control">
                            <option value="Goods">-Select-</option>
                            <option value="4 Passenger">4 Passenger</option>
                            <option value="6 Passenger">6 Passenger</option>
                        </select>
                    </div>
                </div>


    
                <div class="clearfix"></div>  
                <div class="form-group">
                    <div class="col-md-4 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                    </div>
                </div>
            </form> 
</div> 
        
		</body>
		</html>