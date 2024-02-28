<?php
require __DIR__ . "/vendor/autoload.php";
include("confun/connection.php");	

use Dompdf\Dompdf;
If($_SERVER['REQUEST_METHOD'] == 'GET')
						{
						  if(!isset($_GET["id"])){
						  header("location: dashbord.php");
						  die;
						  }
						else{
							
							$id = $_GET["id"];
							$sql= "select * from kid_details where kid_id='$id' limit 1 " ;

						$result = mysqli_query($con,$sql);
						$user_data = mysqli_fetch_assoc($result);
						if(empty($user_data)) {
							echo"no data available for this id.";
						
						}else{								
$html = "<h1 style='position:relative; margin-left:40%'>Kid Details</h1>";
$html .= "<h4>Name: $user_data[name]</h4>";
$html .= "<br/>";
$html .= "<img src='$user_data[image]' height='250px' width='300px'><br/><br/>";
$html .= "<br/>";
$html .= "<h4>Age: $user_data[age]</h4>";
$html .= "<h4>Gender: $user_data[gender]</h4>";
$html .= "<h4>Education: $user_data[class]</h4>";
$html .= "<h4>Description: $user_data[description]</h4>";



$dompdf = new Dompdf(["chroot"=>__DIR__]);
// Load HTML content
$dompdf ->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
//$dompdf->loadHtmlFile("template.html");

$dompdf ->render();
$dompdf ->stream("kid_details.pdf",["Attachment"=>0]);
						}}}
						
?>