<?php
session_start();
if(isset($_POST['login']))
{
	
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
   
	}
	 else {
		$username= $_POST['username'];
		$password= $_POST['password'];
		
		$query = "SELECT* FROM register WHERE username='$username' AND password='$password'";

            $result = mysqli_query($conn, $query) or die("Query Fail.");

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

                    session_start();
                    $_SESSION['username']=$row['username'];
                          
                    header("Location: userindex.php");
                    mysqli_close($conn);
                } 
            }              
             else {
                header("Location: Login.php?error=Invalid Credential");
                exit();
            }
	 }
}
		 


		 




?>
<!DOCTYPE html>
<html>
<head>
	<title>login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
					<h2>Login Form</h2>
				</div>
				<div class="card-body">
					<form action="login.php" method="POST">

                    <?php if (isset($_GET['error'])) {  ?>

					<p class="error"> *<?php echo $_GET['error'] ?> ! </p>

					<?php } ?>

						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" id="username" class="form-control" name="username" required/>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" required />
						</div>
						<input type="submit" name ="login" class="btn btn-primary w-100" value="Login" name="">
					</form>
				</div>
			
			</div>
		</div>
	</div>
</body>
</html>