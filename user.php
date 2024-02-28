<?php
session_start();

include("confun/connection.php");	
include("confun/function.php");
 


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Simple form</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, Intial-scale=1.0">
	<script src="https://kit.fontawesome.com/2c8f5e279a.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body style="background-image: url(echofy.jpg);">
	<div class="container">
		<h1>User Profile</h1>
		<?php
					if(isset($_GET['success']))
					{
						
							?>
		<small class="alert alert-success">User Updated Successfully.</small>
		<br>
		<?php
					}
				if(isset($_GET['error']))
				{
					?>
		<small class="alert alert-danger">Name,Email and Password is requied.</small>
		<br>

		<?php
				}
				?>
		<form action="update.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			</div>
			<?php
						//read from database
					$user_name= $_SESSION['user_id'];
						$query = "select * from users where user_id = '$user_name' limit 1 ";
				
						$result = mysqli_query($con,$query);
					   
						if($result)
						{ 
							if($result && mysqli_num_rows($result)>0)
							{
							while(	$user_data = mysqli_fetch_assoc($result))
							{
							print_r($user_data['date']);
                                ?>
			<br>
			<div class="form-group">
				<br>
				<center>&nbsp;<img src="<?php echo $user_data['img_user']?>" width="100px" height="100px" /></center>
				<br>
				<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
						type="file" name="upload_file" id="file"></center>

			</div><br>
			<div class="form-group">
				<label for="">User_id</label>
				<input type="label" name="user_id" class="form-control" value="<?php echo $user_data['user_id']?>">


			</div>

			<div class="form-group">
				<label for="">Username</label>
				<input type="text" name="user_name" class="form-control" value="<?php echo $user_data['user_name']?>">


			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $user_data['Email']?>">


			</div>
			<div class="form-group">
				<label for="">Phone Number</label>
				<input type="text" name="phnumber" class="form-control" pattern="[6-9]{1}[0-9]{9}" value="<?php echo $user_data['phnumber']?>" required>


			</div>


			<div class="form-group">
				<label for="">Password</label>
				<input type="text" name="password" class="form-control" value="<?php echo $user_data['password']?>">


			</div>
			<div class="form-group col-md-4">
				<label for="inputState">State</label>
				<select class="form-control" id="inputState" name="state">
					<option value="<?php $user_data['state']?> "><?php echo $user_data['state']?></option>
					<option value="SelectState">Select State</option>
					<option value="Andra Pradesh">Andra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Madya Pradesh">Madya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Orissa">Orissa</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttaranchal">Uttaranchal</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="West Bengal">West Bengal</option>
					<option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
					<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Delhi">Delhi</option>
					<option value="Lakshadeep">Lakshadeep</option>
					<option value="Pondicherry">Pondicherry</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="inputDistrict">District</label>
				<select class="form-control" id="inputDistrict" name="district">
					<option value="<?php echo $user_data['district']?>"><?php echo $user_data['district']?></option>
					<option value="">-- select one -- </option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Organization Name</label>
				<input type="text" name="orgname" class="form-control" value="<?php echo $user_data['orgname']?>">


			</div>
			<div class="form-group">
				<label for="">Organization Description</label>
				<input type="textarea" name="orgdesc" class="form-control" placeholder="please give a lengthy descritpion " value="<?php echo $user_data['orgdesc']?>">


			</div>
			<div class="form-group">
				<label for="">Job Role</label>
				<input type="text" name="jobrole" class="form-control" value="<?php echo $user_data['jobrole']?>">


			</div>
			<div class="form-group">
				<label for="">date</label>
				<input type="text" name="date" class="form-control" value="<?php echo $user_data['date']?>">


			</div>
			<?php
							}
									}
						}else
						{
							echo"No such data field";
						}
					?>
			<center><input id="button" class="btn btn-primary btn-lg" type="submit" value="update" name="update"
					style="border-radius:20px">
				<a href="index.php" class="btn btn-info" style="border-radius:20px">Get Back</a>
			</center>
		</form>
	</div>
	<script src="script/state.js"></script>
</body>

</html>