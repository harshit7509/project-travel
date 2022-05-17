<?php
    @$source= $_POST['source'];
    @$destination= $_POST['destination'];
    @$guests= $_POST['guests'];
    @$child= $_POST['child'];
    @$indate= $_POST['indate'];
    @$outdate= $_POST['outdate'];
  

    // Database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into booking(source, destination, guests, child,  indate, outdate) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiiss", $source, $destination, $guests, $child, $indate , $outdate); 
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
	<title>Your Booking has been done</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
					<h2>YOUR BOOKING DETAILS HAVE BEEN SAVED
                    <a style="color:WHITE;" href="payment.html" class="btn">PROCEED TO PAY 5000</a>
                    </h2>
				</div>
				
			
			</div>
		</div>
	</div>
</body>
</html>