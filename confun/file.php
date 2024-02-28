<?php
session_start();
error_reporting(0);
include("confun/connection.php");	
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	$original = $_FILES["upload_file"]["name"];
	$tempfile =  $_FILES["upload_file"]["tmp_name"];
	$folder = "images1/".$original;
	
	
	move_uploaded_file($tempfile, $folder);


	$user= $_SESSION['user_id'];

	$sql="UPDATE users set img_user='$folder' where user_id ='$user' ";
	
	$result = mysqli_query($con,$sql);
		?>
		<p class="good">
		<?php
		
         echo "User Registered successfully";
	
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>File upload</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="upload_file" id="file"><br><br>
            <input type="submit" value="Upload">
        </form>
	</body>
</html>
<?php
	
  


echo"<img src='$folder' height='100px' width='100px'>";
//print_r($_FILES["upload_file"]);
?>
