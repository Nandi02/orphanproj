<?php
session_start();
include("confun/connection.php");


If($_SERVER['REQUEST_METHOD'] == 'GET')
{
  if(!isset($_GET["id"])){
  header("location: dashbord.php");
  die;
  }
  $id = $_GET["id"];

  $sql= "select * from kid_details where kid_id='$id'";
  $result= $con->query($sql);
  $row =$result->fetch_assoc();
  if(!$row)
  {
    die("Invalid query: ".$con->error);
  }
}else
{
  $original = $_FILES["upload_file"]["name"];
 $tempfile =  $_FILES["upload_file"]["tmp_name"];
	$folder = "kid_image/".$original;
	move_uploaded_file($tempfile, $folder);
							$id = $_POST['kid_id'];
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
  $sql ="UPDATE `kid_details` SET `image`='$folder',`name`='$user_name',`age`='$age',`gender`='$gender',`state`='$state',`district`='$district',`orgname`='$orgname',`class`='$class',`disability`='$disability',`typedis`='$disability_type',`sibling`='$sibling',`siblname`='$sibling_name',`description`='$description' WHERE kid_id='$id'";
//  $sql= "UPDATE kid_details SET 'image'='$folder','name'='$user_name', age='$age', gender='$gender', 'state'='$state', district='$district', orgname='$orgname', class='$class', disability='$disability', typedis='$disability_type', sibling='$sibling', siblname='$sibling_name', 'description'='$description' WHERE kid_id='$id'";
  $result= $con->query($sql);
  if($result){
    $con->error;
    echo "edited";
  }
  header("location:dashbord.php");
}





?>

<!DOCTYPE html>
<html>

<head>
	<title>Register Form</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, Intial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
	.button:hover {
		box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
	}
	</style>


</head>

<body>
	<div class="container">

		<div class="row">

			<div class="card">
				<h1>Edit Details</h1>
				<div class="card-header">
					<form action=" " name="my_form" method="post" style="border:2px;" enctype="multipart/form-data">
						</center>
						<div class="form-group">
							<input type="text" placeholder="Enter your name" name="id" hidden>
							<input type="text" placeholder="Enter your name" name="kid_id" value="<?php echo $row['kid_id']; ?>" hidden>
							<img src="" width="100px" height="100px" />
							<input type="file" name="upload_file" id="file">
						</div></br>
						<div class="form-group">
							<label>Name : </label>
							<input type="text" placeholder="Enter your name" name="name"
								value="<?php echo $row['name']; ?>" required>
						</div></br>
						<div class="form-group">
							<label>Age : </label>
							<input type="text" min=0 name="age" value="<?php echo $row['age']; ?>" required>
						</div></br>
						<div class="form-group">
							<label>Gender
								<select name="gender" value="<?php echo $row['gender']; ?>">
									<option value="male">Male</ption>
									<option value="fOtheremale">Female</option>
									<option value="other">Other</option>
								</select>
							</label>
						</div></br>
						<div class="form-group col-md-4">
							<label for="inputState">State</label>
							<select class="form-control" id="inputState" name="state"
								value="<?php echo $row['state']; ?>">
								<option value="<?php echo $row['state']?>"><?php echo $row['state']?></option>
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
								<option value="<?php echo $row['district']?>"><?php echo $row['district']?></option>
								<option value=" ">-- select one -- </option>
							</select>
						</div></br>
						<div class="form-group">
							<label>Organization Name : </label>
							<input type="text" placeholder="Enter name of organization The kid is in" name="orgname"
								value="<?php echo $row['orgname']; ?>" required>
						</div></br>
						<div class="form-group">
							<label>Class : </label>
							<input type="text" placeholder="Enter the class in which the kid is studying" name="class"
								value="<?php echo $row['class']; ?>">
						</div></br>
						<div class="form-group">
							<label for="">Does the kid suffering frm any disability</label>
							<label for="Yes" class="radio-inline"><input type="radio" name="disable" id="btn1"
									value="yes" id="yes">Yes
								<label for="NO" class="radio-inline"><input type="radio" name="disable" id="btn2"
										value="no" id="NO">No</br>
						</div></br>
						<div id="form-group-add"><label>Type of dissability : </label> <input type='text'
								name='disable_name' id='disable_type' placeholder='Any dissability '
								value="<?php echo $row['typedis']; ?>"> </div></br>

						<div class="form-group">
							<label>Is Sibling : </label>
							<label for="Yes" class="radio-inline"><input type="radio" name="sib" id="btn3" value="yes"
									id="yes">Yes
								<label for="NO" class="radio-inline"><input type="radio" name="sib" id="btn4" value="no"
										id="NO">No</br>
						</div></br>
						<div id="form-group-add1"><input type="text" name="sibling_name" id="show"
								value="<?php echo $row['siblname']; ?>"> </div></br>

						<div class="form-group">
							<label>Description About The Kid : </label>
							<input type="textarea" placeholder="" name="desc" value="<?php echo $row['description']; ?>">
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
	</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</html>