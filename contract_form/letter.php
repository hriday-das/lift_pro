<!DOCTYPE html>
<html>
<head>
  <?php include '../connect.php'; 
   include'../headr.php';
   /* include '../include/footer.php';*/ ?>
  <title>letter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
  
</style>

</head>
<body>
  <div id="content">
    <div  class="container">
  <div  class="page-header">
   <center><h6> <b> LIFT MAINTENANCE CONTRACT FOR LIFT EQUIPMENTS</b></h6></center>      
  </div>
</div>
  <div class="container">
    
    <div class="form-group">
      <?php 
      $id=$_REQUEST['id'];
      $query= mysqli_query($con, "SELECT * FROM `contract_form` WHERE `form_id`='$id'") or die(mysqli_error($con));
      while ($fet=mysqli_fetch_array($query)) {
      
     ?>
      <p>Proposal No:<?php echo $fet['proposal_no']?></p>
      <p>Date :<?php echo $fet['date']; ?></p><br>
    </div>
    <div class="form-group">
      <p>To</p>
      <p><?php echo $fet['name']; ?></p>
      <p> <?php echo $fet['building']; ?>,<?php echo $fet['address']; ?></p>
      <span><?php echo $fet['state']; ?>,</span><label><?php echo $fet['pin']; ?></label>
    
    </div>
    <div class="form-group">
      <p class="p-5 ">Subject: Annual <?php echo $fet['service_type'];?> maintainance of 1(one)No."Escon" makes <?php echo $fet['lift_cap'];?> lift serving from <?php echo $fet['serving_from']; ?> to <?php echo $fet['serving_to']; ?> at <?php echo $fet['building']; ?>,<?php echo $fet['address'];?>,<?php echo $fet['state'];?> -<?php echo $fet['pin'];?></p>
      <p>Dear Sir/Madam,</p>
      <p>With respect to the discussion and negotiation between you and Elevarse in connection with the Annual maintenance of the Lift we hereby agree and accept the appointment for annual maintenance of 1 (One) No. “Escon” make <?php echo $fet['lift_cap']; ?> Lift serving from <?php echo $fet['serving_from']; ?> to <?php echo $fet['serving_to']; ?> at <?php echo $fet['address']; ?>,<?php echo $fet['state']; ?> – <?php echo $fet['pin']; ?> for the period from <?php echo $fet['agreement_from']; ?> to <?php echo $fet['agreement_to']; ?> upon terms and conditions herein after contained Under this contract.  Elevarse shall maintain the lift equipment on the following terms and conditions.</p>
      <b> B.  SAFETY   TRAINING </b>
      <p> <b> Elevarse </b> will conduct a safety training for the users of the lift and also for the building management staff (security guards etc.) on the right usage of the lift as well as on the necessary steps that should be taken during emergency situations like rescuing people stuck in the lift. </p>
      <br>
      <br>
      <br>
      <br>
       <p style="text-align:left;">
     -----------------------------------------
    <span style="float:right;">
       ----------------------------------------------------------------
    </span>
     </p>

<p style="text-align:left;">
      (Signature: Customer)
    <span style="float:right;">
       (Signature: Elevarse Elevator Pvt. Ltd.)
    </span>
     </p>
<br>
      <p><b>C.  WORKING HOURS </b> <br>
      The Services provided under this Contract contemplates for all work to be done during regular working hours on regular working days.  However, Elevarse, on being informed, will provide full support in tackling emergency/out of control situations of this lift, rescuing passenger from any unsafe situation at any point of time on any day also breakdown of Lift service and working.
    </p>
       <p>
         <b>
           D. ELEVARSE SERVICES DOES NOT COVER <br>
           01.  Polishing, Painting, Repairing & Replacement of lift cage, supply & fitting lift doors including door closure & landing door sill.<br>
          02. Replacement of light and light fixtures inside the lift car.<br>
         03. Repair and replacement of damaged lift equipment due to misuse, mishandling, theft or any other cause other than normal wear and tear.<br>
         04. Repair & replacement of lift car flooring and platform.<br>
         05. Repair & replacement of battery operated emergency light and alarm.<br>
         06. Repair & replacement of annunciator in car if any.<br>
         07. Repair & Replacement of 400V A.C. Supply and its related parts.<br>
         </b>
         <br>
         <br>
         If the above-mentioned services be carried out by Elevarse, those will be separately charged. Prior to making any such repairs, Elevarse will check the status of any warranty that may be in effect and if the repairs are not covered by a warranty, Elevarse will provide the owner/ client with an estimate of the cost and obtain approval for any such repair.<br><br>
         <b>E.  OWNER/CLIENT’S RESPONSIBILITY </b><br>
         08.  Cleaning and white washing of the lift hoistway.<br>
09. The doors and windows of the machine room should be perfectly closed so that the machine room is protected from rain water.<br>
10. The lift pits should be kept in clean and dry condition.<br>
11. Providing constant supply voltage of 400A.C +/- 10% at 50Hz +/- 5% at the lift machine room.<br>
<b>NOTE: </b> Elevarse’sguidance and assistance will always be available to the customer for the proper use and maintenance of customer’s lifts.  Elevarse is ready to provide training to the users on safety issues at any point of time, as and when users require.
<br>
<br>
  <b>F. LIABILITY</b><br>
Elevarse shall not under any circumstances be liable under or by reason of this Agreement directly or indirectly for any accident, injury, breakage or damage to the lift or any machinery, appliances or property connected with the lift until & unless it is caused due to any technical glitch due to poor or non- maintenance or failure of safety mechanism. Elevarse will not, under any circumstances, be liable under or by reason of this Agreement directly or indirectly for any accident or injury to any persons whomsoever, expect Elevarse’s employees while riding on or about the lift unless the accident or injury is caused due to any technical glitch due to poor or non- maintenance or failure of safety mechanism. Elevarse will not be responsible or liable for any loss, damage, detention or delay in furnishing materials or failure to perform the inspection and maintenance service as provided in this Agreement when caused by fire, flood, strike, acts of civil or military authorities or by insurrection or riot or by any other cause that is unavoidable or beyond its control.
<br>
      <br>
      <br>
      <br>
       
      <p style="text-align:left;">
     -----------------------------------------
    <span style="float:right;">
       ----------------------------------------------------------------
    </span>
     </p>

<p style="text-align:left;">
      (Signature: Customer)
    <span style="float:right;">
       (Signature: Elevarse Elevator Pvt. Ltd.)
    </span>
     </p>
<br>
<p>
 <b> G.PRICE </b><br>
<?php $price=$fet['service_charge']; ?>
The service to be provided under and pursuant to this Agreement will be given for an annual maintenancefee of <?php echo "RS:$price/-" ?> <?php $gst=$fet['service_charge']*0.18;
       $sum= $gst+$fet['service_charge'];?>
 plus GST @ 18% =<?php echo "RS:$gst/-"; ?> Total maintenance charges for the period will be <?php echo   "RS:$sum/-"; ?> .
</p>


  </div>
  <b>H. TERMS OF PAYMENT</b>
  <p> Amount is payable <?php echo $fet['payment_type']; ?> in advance at the time of signing of this proposal.<br>

    <b> I. GOVERING LAW</b><br>
It is agreed that is Agreement will be governed by the Laws of India.<br><br>
 <b>J. MODIFICATION OF AGREEMENT</b><br>
Any modification of this agreement or additional obligation assumed by either party in connection with this Agreement will be binding only if evidence in writing signed by each party or an authorized representative of each party.<br><br>

  <b>K. ENTIRE AGREEMENT</b><br>
This agreement will constitute the entire agreement between the parties and any prior understanding or representation of any kind preceding the date of this agreement will not be binding upon either party except to the extent incorporated in this Agreement.<br><br>

</p>
  <b>L. TERM</b>
  <p>Elevarse agrees to provide services and maintenance of customer’smaintenance1 (One) No. “Escon” make <?php echo $fet['lift_cap']; ?> <?php echo $fet['agreement_from']; ?> to  <?php echo $fet['agreement_to']; ?> and continue thereafter until this agreement is terminated by 30 days’ notice given in writing by either party to this Agreement.<br><br>
<b>ACCEPTEDANDAGREED </b> all the terms and conditions here in before mentioned
  </p><br><br>
  <p style="text-align:left;">
      For Customer
    <span style="float:right;">
       For Elevarse Elevator Pvt. Ltd.
    </span>
  </p><br><br>
  <p>
    Signature________________________________<br><br>
    Name____________________________________<br><br>
   </p>
<p style="text-align:left;">
      Designation___________________________            
    <span style="float:right;">
Authorized Signatory
    </span>
  </p><br>
  <p>
    Mobile No:________________________________<br><br>
    Date____________________________Date_____________________<br>
  </p>
  <?php } ?>

</div>
</div>
<div id="editor"></div>
<div , class="form-group text-center ">
<button id="cmd" class="btn mt-4  rounded-pill btn-lg btn-primary  text-uppercase">Print</button>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="pdf.js"></script>
</body>
</html>