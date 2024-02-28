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
				
				<br>
				<table class="table">
					<thead>
						<tr>
						
							<th>User_ID</th>
						
							<th>State</th>
							<th>District</th>
							<th>organization Name</th>
							
						    <th>Description</th>
							<th>Contact Number</th>
							<th>Visit</th>
						    
						</tr>
					</thead>
					<tbody>
						<?php
						$user_id=$_SESSION['user_id'];
                        // read all rows from table "users"
                         
						$sql= "select * from users " ;
						$result = mysqli_query($con,$sql);
						if($result && mysqli_num_rows($result)>0)
						{
						while(	$user_data = mysqli_fetch_assoc($result))
						{
						
							
							echo "
							<tr>
						
						
							<td>$user_data[user_id]</td>
							<td>$user_data[state]</td>
							<td>$user_data[district]</td>
							<td>$user_data[orgname]</td>
							<td>$user_data[orgdesc]</td>
							<td>$user_data[phnumber]</td>
							<td>
								<a class='btn btn-primary' href='kid_dash.php?id=$user_data[user_id]' role='button'>Visit</a>
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