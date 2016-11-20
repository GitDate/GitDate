<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	 <?php
$myfile = fopen("/Users/apple/Desktop/WildHacks/GitDate/database.txt", "a") or die("Unable to open file!");
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