<?php
session_start();

include("confun/connection.php");	
include("confun/function.php");
 


?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User Login Form</title>
		<meta charset ="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, Intial-scale=1.0">
		<link rel="stylesheet" href="css/style2.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

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

	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	{

		//read from database
	
        $query = "select * from parent_user where user_name = '$user_name' limit 1 ";

		$result = mysqli_query($con,$query);
       
        if($result)
		{ 
			if($result && mysqli_num_rows($result)>0)
			{
				$user_data = mysqli_fetch_assoc($result);
			
				if($user_data['password']=== $password)
				{
					 $_SESSION['user_id'] = $user_data['user_id'];
					
					header("location:new_index.php");
					die;
				}
			}
		}?>
		<p class="danger">
		<?php
			echo"Wrong username or password!";
	}
}
?>
</p>
			
</div>
			
                <div class="col-sm-4">
					<div class="login-form">
						<img src="images1/weconnect.jpg" alt="no image" class="logo img-fluid" />
					<form action="" method="post">
<div class="form-group">
	<label for="label-text">Username</label>
    <input type="text" name="user_name" class="form-control" >
  </div>
  <div class="form-group">
	<label for="label-text">Password</label>
	<input type="password" name="password" class="form-control">
	</div>	
	<button type="submit" class="form_btn btn btn-warning" style="background-color: #fb641b;">Login</button>	

</form>


<p>Don't have an account? <a href="user_signup.php">Signup</a></p>
<center><p>Get Back to main page<a href="index_main.php">index</a></p></center>
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


