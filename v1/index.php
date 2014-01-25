<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<title> RightCite!</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->	
	</head>
	<body>
		<h1>RightCite</h1>
		<div class = "container">
			<div class = "row">
				<div class = "col-md-6">
					<h2>Produce a well cited text with our easy to use and intuitive application.</h2>
					<form action="#" method="post">
						<textarea class = "form-control" rows = "6" type="text" name="essay" id="essay"></textarea>
						<input class = "btn btn-default" type="submit">
					</form>
				</div>
				<div class = "col-md-6">
					<?php
						if (isset($_POST['essay']))
						{
							echo 'You pressed submit!';
						}
					?>
				</div>
			</div>
		</div>		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://code.jquery.com/jquery.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="js/bootstrap.min.js"></script>
	</body>

</html>