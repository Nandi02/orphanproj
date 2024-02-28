<?php
session_start();

include("confun/connection.php");	
include("confun/function.php");
 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//something was posted
	$user_name = $_POST['user_name'];
	

	
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Simple form</title>
		<meta charset ="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, Intial-scale=1.0">
		<script src="https://kit.fontawesome.com/2c8f5e279a.js" crossorigin="anonymous"></script>
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

		</head>
		<body style="background-image: url(echofy.jpg);">
			<div class="container">
				<h1>User Profile</h1>
				
				<form action="" method="post">
				<div class="form-group">
				
				<input type="text" name="user_name" class="form-control" placeholder="Enter Your Name" required>
				
			</div>
					<?php
					if(!empty($user_name)  && !is_numeric($user_name))
					{
				
						//read from database
					
						$query = "select * from users where user_name = '$user_name' limit 1 ";
				
						$result = mysqli_query($con,$query);
					   
						if($result)
						{ 
							if($result && mysqli_num_rows($result)>0)
							{
							while(	$user_data = mysqli_fetch_assoc($result))
							{
							//print_r($user_data['date']);
                                ?>

<div class="form-group">
			
				<input type="label" name="user_id" class="form-control" value="<?php echo $user_data['user_id']?>">
				<label for="">User_id</label>
				
			</div>
			<div class="form-group">
			
				<input type="text" name="user" class="form-control" value="<?php echo $user_data['user_name']?>">
				<label for="">Username</label>
				
			</div>
			<div class="form-group">
			
				<input type="text" name="user" class="form-control" value="<?php echo $user_data['Email']?>">
				<label for="">Email</label>
				
			</div>

			
			<div class="form-group">
			
				<input type="text" name="password" class="form-control" value="<?php echo $user_data['password']?>">
				<label for="">Password</label>
				
			</div>
			<div class="form-group">
			
				<input type="text" name="date" class="form-control" value="<?php echo $user_data['date']?>">
				<label for="">date</label>
				
			</div>
		
		
				

								<?php
							}
							
								
							}
				
					
						}else
						{
							echo"No such data field";
						}
					
						
					}
					?>
					<input id="button" type="submit" value="Show data" >
						
						<a href="userprofile.php">userprofile</a>                  
					


					

					
				</form>
			</div>
		</body>
</html>