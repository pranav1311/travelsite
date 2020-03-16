<?php
session_start();
$count=4;
  if(!(isset($_SESSION['username']))){
      echo "YOU HAVE TO LOGIN FIRST";
      header('location:login.php');
      die();
    }
    if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.html");
	}

 ?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style2.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Congratulations You have booked your seat!!!</h1>
							<p><?php echo"Hello".$_SESSION['username'] ?>
                            </p>
                            <p>Your booking id is: <?php $count++; if(isset($_GET['submit'])){
$selected_val = $_GET['dest'];  // Storing Selected Value In Variable
echo  substr($selected_val,0,4)."_".substr($_SESSION['username'],0,4)."_".$count;  // Displaying Selected Value
}?>
                            </p>
                            <p>Complete Your payment within 5 days at branch to confirm the booking
    </p>
    <p> KEEP TRAVELLING </P>
						</div>
                    </div>

                    <div class="booking-cta">
                   <p> <a href="booked.php?logout='1'" class="btn btn-primary">LOGOUT</a></p>

</div>

                    
					
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

