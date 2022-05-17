<?php
 

 if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$username= $_POST['username'];
	$password= $_POST['password'];
	$email = $_POST['email'];
   
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
   
	}
	else {
	   $stmt = $conn->prepare("insert into register(name , username, password,email) values(?, ?, ?, ?)");
	   $stmt->bind_param("ssss", $name , $username ,$password  , $email); 
	   $execval = $stmt->execute();
	   echo $execval;
	   header("Location: registersucces.html");
	   $stmt->close();
	   $conn->close();
   }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
					<h2>Registration Form</h2>
				</div>
				<div class="card-body">
					<form action="registration.php" method="POST">
                    <div class="form-group">
							<label for="name">Name</label>
							<input type="text" id="name" class="form-control" name="name" required		 />
						</div>
						<div class="form-group">
	                        <label for="username">Username</label>
							<input type="text" id="username" class="form-control" name="username" />
						</div>
                        <div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" />
						</div>
                        <div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" class="form-control" name="email" />
						</div>
						
						<input type="submit" name ="submit" class="btn btn-primary w-100" value="Register" name="">
						<a style="color:#ffa500;" href="login.php" class="btn">Already register click here</a>
					</form>
				</div>
			
			</div>
		</div>
	</div>
</body>
</html>