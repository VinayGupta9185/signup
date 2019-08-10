<?php
$conn =mysqli_connect("localhost","root","","try");
$email = $_POST['uemail'];
$pass = $_POST['upass'];
if($conn){
	$sql = "SELECT email,password FROM user WHERE email='$email' AND password ='$pass'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		session_start();
		$_SESSION['value'] = $email;
		header('location:dashboard.php');
     }else{
		echo "<script>
			alert('Email or Password is Wrong');
			window.location= 'login.php';
			</script>";
		
	}
}else{
	echo mysqli_error($conn);
}
?>