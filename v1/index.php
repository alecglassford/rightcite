<html>

<head>
	<title> RightCite!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

<h1>RightCite</h1>


<div class = "section">
	Produce a well cited text with our easy to use and intuitive application.
</div>

<div class = "section">
	<form action="#" method="post">
		<textarea type="text" name="essay" id="essay"></textarea>
		<input type="submit">
	</form>
</div>

<?php
	if (isset($_POST['essay']))
	{
		echo '<div class = "section">You pressed submit!</div>';
	}
?>


</body>

</html>