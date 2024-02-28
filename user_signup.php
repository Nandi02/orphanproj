<?php
session_start();

include("confun/connection.php");	
include("confun/function.php");
 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset ="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, Intial-scale=1.0">
		<link rel="stylesheet" href="css/style2.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<style>
			.good{
	                  margin: 45px auto;
                      border-radius: 5px;
                      border: 1px solid pink;
                      background: yellow;
					  position: relative;
					  left:380px;
                      text-align: center;
                      color: green;
                      padding: 1px;
}
		</style>
		</head>
		<body>
			<div class="container">
				<div class="row">
				<div class="col-sm-4">
					<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$number = $_POST['phnumber'];

	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	{
		$user_id = random_num(12);
        $query = "insert into parent_user (users_id,user_name,email,phnumber, password) values('$user_id','$user_name','$email','$number','$password')";

		mysqli_query($con,$query);
		?>
		<p class="good">
		<?php
		
         echo "User Registered successfully";
		
	}
}

					?></p>
</div>
                <div class="col-sm-4">
					<div class="login-form">
						<img src="images1/weconnect.jpg" alt="no image" class="logo img-fluid" />
						<form action="" method="post">
<div class="form-group">
	<label for="label-text">Username</label>
    <input type="text" class="form-control" name="user_name" >
  </div>
  <div class="form-group">
	<label for="label-text">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="form-group">
	<label for="label-text">Phone Number</label>
    <input type="text" class="form-control" name="phnumber" pattern="[6-9]{1}[0-9]{9}" >
  </div>
  <div class="form-group">
	<label for="label-text">Password</label>
	<input type="password" class="form-control" name="password">
	</div>	
	<button type="submit" class="form_btn btn btn-primary" style="background-color: #fb641b;">Sign Up</button>	

</form>


<p>Don't have an account? <a href="user_login.php">Login</a></p>
</div>
</div>

</div>
                <div class="col-sm-4">
</div>
					<div class="form-group">				
</div>
			</div>
		</body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
		</html>


