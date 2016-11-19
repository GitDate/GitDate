<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Welcome <?php echo $_POST['email']; ?>

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