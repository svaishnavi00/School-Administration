<?php

$con = mysqli_connect("localhost","root","","edi")or die(mysqli_error($con));
$name=$_POST['Name'];
$username=$_POST['Username'];
$password =$_POST['Password'];
$gender=$_POST['Gender'];
$email=$_POST['Email'];
$phonenumber=$_POST['Phone'];
$address=$_POST['Address'];
$query = "select * from teachersR where Email='$email'";
$res = mysqli_query($con,$query)  or die("failed ".mysqli_error($con));
$num = mysqli_num_rows($res);
$array = mysqli_fetch_array($res);
if($num == 1)
{
	echo "<h3>User already exists! </h3>";
}
else
{
	$insert = "INSERT INTO teachersr(Name,Username,Password,Gender,Email,Phone,Address) VALUES ('$name','$username','$password','$gender','$email','$phonenumber','$address')";

	$r = mysqli_query($con,$insert)  or die("failed ".mysqli_error($con));
	echo "Registration Successful";


	header('location:edifile(p).html');
}
?>
