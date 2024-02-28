 <?php
session_start();
include("confun/connection.php");	
include("confun/function.php");


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dashbord</title>
		<meta charset ="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, Intial-scale=1.0">
		<script src="https://kit.fontawesome.com/2c8f5e279a.js" crossorigin="anonymous"></script>
	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<style>
.button {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 15px;
  color: #ffffff;
  padding: 15px;
  width: 150px;
  text-align: center;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
</style>

		</head>
		<body>
			<div class="container my-5">
				<h2>DASHBORARD</h2>
				<a class="btn btn-primary button" href="reg-kid.php" role="button">New Register</a>
				<br>
				<table class="table">
					<thead>
						<tr>
						<th>Kid_Image</th>
							<th>Kid_ID</th>
						
							<th>Name</th>
							<th>Age</th>
							<th>Gender</th>
							<th>class</th>
							<th>Disability</th>
						    <th>Description</th>
						    <th>update/delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$user_id=$_SESSION['user_id'];
                        // read all rows from table "users"
                         
						$sql= "select * from kid_details where id = (select user_id from users where user_id = '$user_id' limit 1 )" ;
						$result = mysqli_query($con,$sql);
						if($result && mysqli_num_rows($result)>0)
						{
						while(	$user_data = mysqli_fetch_assoc($result))
						{
						
							
							echo "
							<tr>
						
							<td>$user_data[kid_id]</td>
							<td><img src='$user_data[image]' style='width:240px'></td>
							<td>$user_data[name]</td>
							<td>$user_data[age]</td>
							<td>$user_data[gender]</td>
							<td>$user_data[class]</td>
							<td>$user_data[typedis]</td>
							<td>$user_data[description]</td>
							
							<td>
								<a class='btn btn-primary' href='edit.php?id=$user_data[kid_id]' role='button'>Edit</a>
                                <a class='btn btn-danger'  href='delete1.php?id=$user_data[kid_id]' role='button' onclick = 'return check_delete()'>Delete</a>
                            </td>
							</td>
						</tr>
							";
						}
					}else {
						echo "<div class='alert alert-danger'>No data found!</div>";
					}?>
					
						
					</tbody>
				</table>
				<script>
					function check_delete()
                    {
                        if(confirm("Are you sure you want to delete this record?"))
                        {
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
					</script>
        
			</div>
		</body>
</html>