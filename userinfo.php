<?php
$con = mysqli_connect('localhost','root');
if($con){  
	echo "Your record has been submitted successfully";
}else{
	echo "Connection not successful";
}

mysqli_select_db($con,'websiteuserdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query="insert into userinfo (user,email,mobile,comments) values ('$user','$email','$mobile','$comments')";
mysqli_query($con,$query);
header('location:index.php')


?>S