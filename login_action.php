<?php
session_start();
include 'connect.php';
$user=$_POST['user_name'];
$password=md5($_POST['psw']);

$query=mysqli_query($con, "SELECT * FROM `user` WHERE `user_name`='$user' AND `psw`='$password'") or die(mysqli_error($con));

           
			while ( $fet=mysqli_fetch_array($query)) {
			$flag='ok';
      echo  $_SESSION['usr']=$fet['name'];
         				 }
          if (isset($flag)) {
          	echo "<script>alert('login sucess')</script>";
			echo "<script>window.location='../lift_pro/home/index.php'</script>";
          	
          }
       else{
       		echo "<script>alert('Something went worng')</script>";
			echo "<script>window.location='index.php'</script>";
		}
 ?>