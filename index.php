<?php
session_start();
include("confun/connection.php");
include("confun/function.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mainform</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, Intial-scale=1.0">
	<link rel="stylesheet" href="css/style2.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
		integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
		crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
		crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="Stylesheet" href="css/mainstyle.css" />
	<style>
	.card {
		border: 2px;
		border-style: solid;
		border-width: 5px;
		border-radius: 40px;
		margin-top: 0px;
		margin-bottom: 70px;
		width: 990px;
		left: 140px;
	}

	p {
		display: block;
		margin-block-start: 1em;
		margin-block-end: 1em;
		margin-inline-start: 0px;
		margin-inline-end: 0px;

	}

	.img {
		margin-left: 1150px;
		position: absolute;
	}

	.img-logo {
		position: relative;
		z-index: -2;
	}
	</style>
</head>

<body>

	<div class="img">
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
						
                                ?>
		<a href="user.php"><img src="<?php echo $user_data['img_user']?>" width="80px" height="80px" alt="no image"
				style=" border-radius: 50%;" /></a>
		<div class="sep">
			<label><b><?php echo $user_data['user_name']?></b></label>
			<a href="logout.php"><label style="color:black">Log Out</label></a>
		</div>
		<?php
                            }}}
    ?>
	</div>
	<div class="img-logo">
		<center><img src="images1/weconnect.jpg" alt="no image" width="750px" height="300px"></center>
	</div>
	<div class="owl-carousel owl-theme">
		<div class="item"><img src="image/img1.jpg" height="240px" alt="no image"></div>
		<div class="item"><img src="image/img2.jpg" height="240px" alt="no image"></div>
		<div class="item"><img src="image/img3.jpeg" height="240px" alt="no image"></div>
		<div class="item"><img src="image/img4.jpg" height="240px" alt="no image"></div>
		<div class="item"><img src="image/img5.jpg" height="240px" alt="no image"></div>
		<div class="item"><img src="image/img6.jpg" height="240px" alt="no image"></div>
		<div class="item"><img src="image/img7.jpg" height="240px" alt="no image"></div>
		<div class="item"><img src="image/img8.jpg" height="240px" alt="no image"></div>

	</div>

	<div class="card">
		<p style="text-align:justify;">
		<h6>In the heart of every child is a hunger for home. Not just for food and a place to sleep, but for safety and
			community. </br>
			Most importantly: for love.</br>
			We are a family, where love guides us all as we grow and expand year after year. Not just a regular
			children’s home, we are a nearly self-sustaining organization;</br> a working farm, a vibrant school,
			receiving no government assistance of any kind. Take a look around and if you have any questions just get in
			contact with us via the menu above</h6>
		</p>

		<br><br><br>
		<div class="card2">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="dashbord.php" role="button" class="btn btn-primary" style="border-radius:15px;">Dashbord</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="reg-kid.php" role="button" class="btn btn-primary" style="border-radius:15px">Register</a>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
		integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		dots: false,
		autoplay: true,
		autoplayTimeout: 1000,
		stagepadding: 50,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	})
	</script>
	<script src="script/script.js"></script>
</body>

</html>