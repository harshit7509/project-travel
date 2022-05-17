<?php
    $name = $_POST['name'];
    $email= $_POST['email'];
    $number= $_POST['number'];
    $message = $_POST['message'];
  
    // Database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into contact(name , email, number, message) values(?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name , $email ,$number  , $message); 
        $execval = $stmt->execute();
        echo $execval;
        echo "";
        $stmt->close();
        $conn->close();
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>your query has been submitted succesfully</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
					<h2>YOUR QUERY HAS BEEN SUBMITTED SUCCESFULLY 
                        <BR>
                        <BR>
                        WE WILL CONTATCT YOU SOON </h2>
				</div>
				
			
			</div>
		</div>
	</div>
</body>
</html>