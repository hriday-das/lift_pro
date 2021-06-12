 <?php include'../connect.php';
 session_start();
 $_SESSION['bank']=$_POST['bank'];
 $_SESSION['proposal_no']=$_POST['proposal_no'];
$contract_price=$_POST['Contract-Price'];
$contract_timeline=$_POST['contract_timeline'];
$payment_term=$_POST['payment_term'];
$mobile=$_POST['mobile_py'];
$email=$_POST['email_py'];
$name_py=$_POST['name_py'];
$address_py=$_POST['address'];
$proposal_no=$_POST['proposal_no'];
$invoice_no=$_POST['invoice_no'];
date_default_timezone_set('Asia/Kolkata'); 
$py_date=date('Y-M-d');


$insert=mysqli_query($con,"INSERT INTO `payment`(`payment_id`, `contract_price`, `contract_timeline`, `contract_term`, `mobile`, `email`, `py_date`, `proposal_no`, `invoice_no`, `fullname`, `address`) VALUES (NULL,'$contract_price','$contract_timeline','$payment_term','$mobile','$email','$py_date','$proposal_no','$invoice_no','$name_py','$address_py')") or die(mysqli_error($con));
if ($insert) {
	
	
          	echo "<script>alert('complete')</script>";
			echo "<script>window.location='../payment_form/payment_print.php?id=".$proposal_no."'</script>";
          	
          }
       else{
       		echo "<script>alert('ERROR')</script>";
			echo "<script>window.location='../payment_form/payment.php'</script>";
		}



 ?>