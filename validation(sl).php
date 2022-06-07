<?php
// $con = mysqli_connect("localhost","root","","edi")or die(mysqli_error($con));
//
// $username=$_POST['Username'];
// $password=$_POST['Password'];
//
//
// $query = "select * from studentsr where Username='$username' and Password='$password'";
// $res = mysqli_query($con,$query) or die("failed ".mysqli_error($con));
// $num = mysqli_num_rows($res);
// if($num == 1)
// {
//     echo "Success";
//     if(isset($username))
// {
//         session_start();
// 		$query = "select id from studentsr where Username ='$username'";
// 		$res = mysqli_query($con,$query) or die("failed ".mysqli_error($con));
// 		$row = mysqli_fetch_assoc($res);
//         echo "Success";
// }
//
//
// }
// else
// {
// 	echo "Failure";
// 	header('location:edi(sL).html');
// }

$con = mysqli_connect("localhost","root","","edi")or die(mysqli_error($con));
$username=$_POST['Username'];
$password=$_POST['Password'];


$query = "select * from studentsR where Username='$username' and Password='$password'";
$res = mysqli_query($con,$query) or die("failed ".mysqli_error($con));
$num = mysqli_num_rows($res);
if($num == 1)
{
    echo "Success";
    if(isset($username))
{
        session_start();
		$query = "select id from studentsR where Username ='$username'";
		$res = mysqli_query($con,$query) or die("failed ".mysqli_error($con));
		$row = mysqli_fetch_assoc($res);
        echo "Success";
        header('location:homepage(s).html');
}


}
else
{
	echo "Failure";
  header('location:validation(sl).php');
}
?>
