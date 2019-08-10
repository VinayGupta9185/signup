<?php
$name = $_POST['uname'];
$email = $_POST['uemail'];
$password = $_POST['upassword'];
$conn = mysqli_connect("localhost","root","","try");
if($conn){
	$sql = "SELECT email FROM user WHERE email='$email'";
	$r =mysqli_query($conn,$sql);
	if(mysqli_num_rows($r)>0){
		echo "<script>
		       alert('Email already exist.try with different email');
			   window.location='signup.html';
			   </script>";
	}else{
	$query ="INSERT INTO user(name,email,password) VALUE ('$name','$email','$password')";
	$result = mysqli_query($conn,$query);
	if($result){
		header ('location:redirect.php');
	}else{
		echo mysqli_error($conn);
	}
}
}
else{
	echo mysqli_error($conn);
}
?>