<!DOCTYPE html>
<html>
<head>
	<title>GitDate</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="topBar.css">
</head>
<body>

	 <?php
	$myfile = fopen("database.txt", "a") or die("Unable to open file!");
	$email = $_POST['email'];

	$pass = $_POST['password'];

	$txt = $email . ':' . $pass . "\n";

fwrite($myfile, $txt);
fclose($myfile);
?> 
	<form action="thirdFrame.php" method="post">
		<label>Question1</label>
		<input type="radio" name="answer1" value="oneA"> 
		<input type="radio" name="answer1" value="oneB"> 
	

	
		<label>Question1</label>
		<input type="radio" name="answer2" value="twoA"> 
		<input type="radio" name="answer2" value="twoB"> 
	

	
		<label>Question1</label>
		<input type="radio" name="answer3" value="threeA"> 
		<input type="radio" name="answer3" value="threeB"> 
		<button type="submit" class="btn btn-default" id="loginSubmit">Submit</button>
	</form>

	
</body>
</html>