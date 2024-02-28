<?php
session_start();
error_reporting(E_ALL);
	

 if(isset($_POST['update']))
 {
	include("confun/connection.php");
	$original = $_FILES["upload_file"]["name"];
	$tempfile =  $_FILES["upload_file"]["tmp_name"];
	$folder = "images1/".$original;
	move_uploaded_file($tempfile, $folder);

	$uid = $_POST['user_id'];
	$uname= $_POST['user_name'];
	$uemail= $_POST['email'];
	$upassword=$_POST['password'];
	$state = $_POST['state'];
	$district = $_POST['district'] ;
	$orgname= $_POST['orgname'];
	$org = $_POST['orgdesc'];
	$jobrole = $_POST['jobrole'];
	$phnumber = $_POST['phnumber'];


if(!empty($uname) && !empty($uemail) && !empty($upassword)){
 
	$user= $_SESSION['user_id'];
	//echo $user;
	$sql="UPDATE users set img_user='$folder', user_name='$uname' , email='$uemail' ,phnumber='$phnumber', password='$upassword',state='$state',district='$district',orgname='$orgname',orgdesc = '$org',jobrole='$jobrole' where user_id ='$user' ";
	//echo $sql;
	$result = mysqli_query($con,$sql);
	
header('location: user.php?success=userupdated');
die;
}
else{
 header('location: user.php?error=emptynameandemptyemail');
 die;
}	

 }


?>