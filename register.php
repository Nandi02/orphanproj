<?php
session_start();
include("confun/connection.php");	
include("confun/function.php");

$successMessage="";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	//something was posted
	$machine_kind = $_POST['machine_kind'];
	$model = $_POST['model'];
	$age = $_POST['age'];
	$Amc = $_POST['amc'];
	$id = $_POST['user_id'];
  
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		
	
		$Machine_id =  random_int(1,255);
        $query = "insert into machine (id,Machine_id,Machine_kind,model_type,Age,amc) values('$id','$Machine_id','$machine_kind','$model','$age','$Amc')";
         
		mysqli_query($con,$query);

		$successMessage="Registered Successfully";
	}
}
?>
		
<!DOCTYPE html>
<html>
	<head>
		<title>Register Form</title>
		<meta charset ="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, Intial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<style>
			.good{
	                  margin: 45px auto;
                      border-radius: 5px;
                      border: 1px solid pink;
                      background: yellow;
                      text-align: left;
                      color: green;
                      padding: 1px;
}
.form_btn{
	box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2);
	border: none;
	color: #fff;
	width: 280px;
}
		</style>

		
	</head>
	<body>
		<div class="container">
            <div class="row">
			  <div class="col-md-6">
				<center>	<form action=""	method="post" style="border:2px;">
                            <center> <h2 class="panel-title">Kids Details</h2></center>
                            <table border="0" align="center">   
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
							//print_r($user_data['date']);
                                ?>
								<div class="form-group">
								 <tr>
									
								
									<td><input type="hidden" class="form-control"  name="user_id" value="<?php echo $user_data['id']?>"></td>
                                 </tr>
								 </div>
								 <?php 
								 }
								}
							}?>

							<div class="form-group">
								
									<tr>
										<td><label>Pick Machine Kind</td>
									<td><select name="machine_kind">
										<option value="grinder">Grinder</option>
										<option value="washing machine">washing machine</option>
										<option value="fridge">Fridge</option>
									</select>
									</label></td>
								 </div>
								 <div class="form-group">
								 <tr>
									<td><label for="">Model Type ?</label></td>
									<td><input type="text" class="form-control"  name="model"></td>
                                 </tr>
								 </div>
								 <div class="form-group">
                                 <tr>
									<td>
										<label for="">Age of the Machine</label></td>
										<td><select name="age">
										<option value="1-10">1-10</option>
										<option value="11-20">11-20</option>
										<option value="21-30">21-30</option>
									</select>
                                    </td>	
								 </tr>
								 </div>

								 <div class="form-group">
								 <tr>
									<td><label for="">Was a recent AMC done</label></td>
									<div>
									<td>&nbsp;&nbsp;<label for="Yes" class="radio-inline"><input type="radio" name="amc" value="yes" id="yes">Yes
									<label for="NO" class="radio-inline"><input type="radio" name="amc" value="n0" id="NO">No</td>
									</div>
                                    </tr>

								 </div>
								 </table>
								 <br>
								<button id="button" type="submit" class="btn btn-primary form_btn" value="Register" >Register</button>
								<a class="btn btn-primary" href="dashbord.php" role="button">Dashbord</a>
                    </form> </center>
					<div class="class">
					<?php
if (!empty($successMessage) ) {
echo "
<div class='row mb-3'>
<div class='offset-sm-3 col-sm-6'>
<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$successMessage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert'></button>
</div>
</div>
</div>";
}
?>
	</div>
                </div>
            </div>
        </div>
                      
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
</html>