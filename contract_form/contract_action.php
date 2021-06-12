<?php 
include '../connect.php';
session_start(); 
 


            
$name=$_POST['fullname'];
$address=$_POST['Address'];
$state=$_POST['State'];
$pin=$_POST['Pin'];
$service_type=$_POST['service_type'];
$service_charge=$_POST['service_charge'];
$Lift_cap=$_POST['Lift_cap'];
$serving_from=$_POST['serving_from'];
$serving_to=$_POST['serving_to'];
date_default_timezone_set('Asia/Kolkata'); 
$dt=date('Y-m-d');
$date_=date('y-d');
/*
$checkbox1=$_POST['cover']; 
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

   $checkbox2=$_POST['not_cover']; 
$chkn="";  
foreach($checkbox2 as $chk2)  
   {  
      $chkn .= $chk2.",";  
   } 
*/
$payment_type=$_POST['payment_type'];
$agreement_from=$_POST['agreement_from'];
$agreement_to=$_POST['agreement_to'];
$building=$_POST['building'];

/*
$machine_type=$_POST['machine_type'];
$m_model_no=$_POST['m_model_no'];
$capacity=$_POST['capacity'];


$insert=mysqli_query($con, "INSERT INTO `lift_information`(`machine_type`, `m_model_no`, `capacity`) VALUES ('$machine_type', '$m_model_no', '$capacity')") or die(mysqli_error($con));



$insert=mysqli_query($con, "INSERT INTO `warranty`(`cover`,`not_cover`) VALUES ('$chk','$chkn')") or die(mysqli_error($con));
//$in=mysqli_query($con, "INSERT INTO `warranty`(`not_cover`) VALUES ('$chkn')") or die(mysqli_error($con));
*/

$insert=mysqli_query($con, "INSERT INTO `contract_form`(`form_id`, `name`, `address`, `state`, `pin`, `service_type`, `service_charge`, `lift_cap`, `serving_from`, `serving_to`, `date`, `payment_type`, `agreement_from`, `agreement_to`, `building`) VALUES (null,'$name','$address','$state','$pin','$service_type','$service_charge','$Lift_cap','$serving_from','$serving_to','$dt','$payment_type','$agreement_from','$agreement_to','$building')") or die(mysqli_error($con));



if ($insert) {
	$id=mysqli_insert_id($con);
  /*
	 $_SESSION['name']= $_SESSION['name']; 


     $split= explode(' ',$_SESSION['name']);
            $first= $split[0];
            $last= $split[1];

             $fn=$first[0];
             $ln=$last[0];
      $proposal_no='EMP-'.$id.'/'.'EE'.'/'.$fn.$ln.'/'.$dt;
      $up=mysqli_query($con, "UPDATE `contract_form` SET `proposal_no`='$proposal_no' WHERE `form_id`='$id'") or die(mysqli_error($con));
      */
     
          	echo "<script>alert('Proposal Letter Created')</script>";
			echo "<script>window.location='../contract_form/letter.php?id=".$id."'</script>";
          	
          }
       else{
       		echo "<script>alert('ERROR')</script>";
			echo "<script>window.location='../contract/contract_form.php'</script>";
		}




 ?>