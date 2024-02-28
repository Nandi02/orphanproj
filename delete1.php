<?php
session_start();
include("confun/connection.php");
if(isset($_GET["id"])){
	$id=$_GET["id"];
    $sql= "DELETE FROM kid_details WHERE kid_id = '$id' ";
    $result= $con->query($sql);
    if(!$result)
    {
        echo"<script>alert('Record Not Deleted')</script>";
        die("Invalid query: ".$con->error);
    }

        echo"<script>alert('Record Deleted')</script>";
        echo"<script>window.open('dashbord.php','_self')</script>";
   

}

?>
