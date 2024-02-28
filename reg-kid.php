<?php
session_start();
include("confun/connection.php");
include("confun/function.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register Form</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, Intial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<style>
	.good {
		margin: 45px auto;
		border-radius: 10px;
		border: 1px solid pink;
		background: yellow;
		text-align: left;
		color: green;
		padding: 1px;
		right: 0px;
	}

	.form_btn {
		box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
		border: none;
		color: #fff;
		width: 280px;
	}

	.row {
		margin-bottom: 30px;
	}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-5"
				style="box-shadow: 0 8px 16px 14px rgba(0, 0, 0, 0.2), 0 10px 30px 0 rgba(0, 0, 0, 0.19); margin-top:20px">
				<div class="card-header" style="top:10px">
					<center>
						<h2 class="panel-title">Kids Details</h2>
					</center>
				</div>
				<div class="card" style="text-align:center justify;">
					<center>
						<?php
						if(isset($_POST['submit']))
						{
							
							//for image files
							$original = $_FILES["upload_file"]["name"];
	                        $tempfile =  $_FILES["upload_file"]["tmp_name"];
	                        $folder = "kid_image/".$original;
	                        move_uploaded_file($tempfile, $folder);
							
							$user_name = $_POST['name'];
                         	$age = $_POST['age'];
	           				$gender = $_POST['gender'];
							$state = $_POST['state'];
							$district = $_POST['district'];
							$orgname = $_POST['orgname'];
							$class = $_POST['class'];
							$disability = $_POST['disable'];
							$disability_type =  $_POST['disable_name'];
							$sibling = $_POST['sib'];
						    $sibling_name = $_POST['sibling_name'];
							$description = $_POST['desc'];

							if(isset($_POST['submit']))
								{
									$kid_id = random_num(10);
									$user_id=$_SESSION['user_id'];
									$query = "insert into kid_details(kid_id,id,image,name, age, gender, state, district, orgname, class, disability, typedis, sibling, siblname, description) values(' $kid_id','$user_id ','$folder','$user_name','$age','$gender','$state','$district','$orgname','$class','$disability ','$disability_type ','$sibling','$sibling_name ','$description')";
								    mysqli_query($con,$query);
							?>
						<p class="good">
							<?php
                                 echo "Kid Details Registered successfully";
								}
							}
                                
					        ?>
						<form action=" " name="my_form" method="post" style="border:2px;" enctype="multipart/form-data">
					</center>
					<div class="form-group">
					<input type="text" placeholder="Enter your name" name="id" hidden>
						<input type="text" placeholder="Enter your name" name="kid_id" hidden>
						<img src="" width="100px" height="100px" />
						<input type="file" name="upload_file" id="file">
					</div></br>
					<div class="form-group">
						<label>Name : </label>
						<input type="text" placeholder="Enter your name" name="name" required>
					</div></br>
					<div class="form-group">
						<label>Age : </label>
						<input type="number" value="Enter your name" min=0 name="age" required>
					</div></br>
					<div class="form-group">
						<label>Gender
							<select name="gender">
								<option value="male">Male</ption>
								<option value="fOtheremale">Female</option>
								<option value="other">Other</option>
							</select>
						</label>
					</div></br>
					<div class="form-group col-md-4">
						<label for="inputState">State</label>
						<select class="form-control" id="inputState" name="state">
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
							<option value="">-- select one -- </option>
						</select>
					</div></br>
					<div class="form-group">
						<label>Organization Name : </label>
						<input type="text" placeholder="Enter name of organization The kid is in" name="orgname"
							required>
					</div></br>
					<div class="form-group">
						<label>Class : </label>
						<input type="text" placeholder="Enter the class in which the kid is studying" name="class">
					</div></br>
					<div class="form-group">
						<label for="">Does the kid suffering frm any disability</label>
						<label for="Yes" class="radio-inline"><input type="radio" name="disable" id="btn1" value="yes"
								id="yes">Yes
							<label for="NO" class="radio-inline"><input type="radio" name="disable" id="btn2" value="no"
									id="NO">No</br>
					</div></br>
					<div id="form-group-add"><label>Type of dissability : </label> <input type='text'
							name='disable_name' id='disable_type' placeholder='Any dissability '> </div></br>
					<script>
					$('#form-group-add').hide();
					$(document).ready(function() {
						$("#btn1").click(function() {
							$("#form-group-add").show();
						});
					});
					</script>
					<div class="form-group">
						<label>Is Sibling : </label>
						<label for="Yes" class="radio-inline"><input type="radio" name="sib" id="btn3" value="yes"
								id="yes">Yes
							<label for="NO" class="radio-inline"><input type="radio" name="sib" id="btn4" value="no"
									id="NO">No</br>
					</div></br>
					<div id="form-group-add1"><input type="text" name="sibling_name" id="show"> </div></br>
					<script>
					$('#form-group-add1').hide();
					$(document).ready(function() {
						$("#btn3").click(function() {
							$("#form-group-add1").show();
						});
					});
					</script>
					<div class="form-group">
						<label>Description About The Kid : </label>
						<input type="textarea" placeholder="" name="desc">
					</div></br>
					<div class="form-group">
						<center><input id="button" class="btn btn-success btn-lg" type="submit" value="submit"
								name="submit" style="border-radius:20px">
							<a href="index.php" class="btn btn-info" style="border-radius:15px">Get Back</a>
						</center>
					</div></br>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<script src="script/state.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
		integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
		integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
	</script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</html>