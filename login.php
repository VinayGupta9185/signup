<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu&display=swap" rel="stylesheet">
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Roboto', sans-serif;
            font-family: 'Ubuntu', sans-serif;
		}
		body{
			background: #fafafa;
		}
		.container{
		
			height: auto;
			width:25%;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.container h1{
			color: #555;
		}
		label{
			font
		}
		input{
			width: 100%;
			padding: 10px 10px;
			border: none; 
			background:transparent;
			color: black;
			border-bottom: 2px solid grey;
			margin: 10px auto;
			
		}
		input:focus{
			outline: none;
			font-size: 20px;
			transition: 0.2s;
			border-bottom: 2px solid dodgerblue;
			box-shadow: 0px 0px 20px rgba(0,0,0,0.3);
		}
		input[type='submit']{
			width: 50%;
			border: 2px;
			background: tomato;
			color: white;
			transition: 0.3s;
			border-radius: 20px;
		}
	</style>
</head>
<body>
	<div class= "container">
		<center><img src="lion.png">
		         <h1>Login</h1></center><br>
		         <form action="redirect1.php" method="post" onsubmit="return check()">
					
		         <input type="email" id="email" name="uemail" placeholder="Enter Email here" autofocus ><br>
		         
		         <input type="password" id="password" name="upass" placeholder="Enter Password here" autofocus><br>
		         <center><input type="submit" value="login"><br>
					 <a href="signup.html">signup here</a></center>
					 
		</form>
	</div>
</body>
</html>
<script>
	function check(){
		var e = document.getElementById("email");
		var p = document.getElementById("password");
		 if(e.value == ''){
			alert("Please enter email.");
			 return false;
		 }
		else if(p.value.length < 6){
			alert("Password can not be less than 6 character.");
			return false;
		}
			else{
				return true;
			}
	}
</script>