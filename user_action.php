<?php
include 'connect.php';
$name=$_POST['name'];
$user_name=$_POST['user_name'];
$phone=$_POST['phone'];
$psw=md5($_POST['psw']);;

$insert=mysqli_query($con, "INSERT INTO `user`(`name`, `user_name`, `phone`, `psw`) VALUES ('$name', '$user_name', '$phone','$psw')") or die(mysqli_error($con));
if ($insert) {
	$id=mysqli_insert_id($con);
	
          	echo "<script>alert('signup successfull')</script>";
			echo "<script>window.location='index.php?id=".$id."'</script>";
          	
          }
       else{
       		echo "<script>alert('ERROR')</script>";
			echo "<script>window.location='signup.php.php'</script>";
		}
		?>