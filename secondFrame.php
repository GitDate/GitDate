<!DOCTYPE html>
<html>
	<head>
		<title>GitDate</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script
		  src="http://code.jquery.com/jquery-3.1.1.min.js"
		  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		  crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="topBar.css">
	</head>

	<body>

	<?php
	$myfile = fopen("database.txt", "a") or die("Unable to open file!");
	$email = $_POST['email'];
	$pass = $_POST['password'];
    $Username = $_POST['Username'];
	$txt = $Username . ':' . $email . ':' . $pass  ;
	fwrite($myfile, $txt);
	fclose($myfile);
	?> 

	<nav class="navbar navbar-custom">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-12">
  					<div style="font-size: 20px">GitDate</div>
  					<ul class="nav nav-tabs">
  						<li class="active"><a data-toggle="tab" href="#q1">Question 1</a></li>
  						<li><a data-toggle="tab" href="#q2">Question 2</a></li>
  						<li><a data-toggle="tab" href="#q3">Quesiton 3</a></li>
  						<li><a data-toggle="tab" href="#q4">Quesiton 4</a></li>
  						<li><a data-toggle="tab" href="#q5">Quesiton 5</a></li>
					</ul>
  				</div>
  			</div>
  		</div>
	</nav>


	<div class="tab-content">
		<div id="q1" class="tab-pane fade in active">
			<h3>Which meme best describes your life?</h3>
			<img src="https://img.memecdn.com/expectations-vs-reality-tech-support_o_148110.jpg" alt="q1Meme1" height="400px" width="400px">
			<img src="http://img.memecdn.com/just-life_c_1005322.jpg" alt="q1Meme2" height="400px" width="400px">
			<img src="http://www.animalmemes.com/wp-content/uploads/2015/01/funny-memes-screw-you-life.jpg" alt="q1Meme3" height="400px" width="400px">
			<div class="radio">
 				<form>
    				<div>
      					<label><input type="radio" name="meme" id="meme1">Meme 1</label>
   		 			</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme2">Meme 2</label>
    				</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme3">Meme 3</label>
    				</div>
  				</form>
   				<br>
   				<a class="btn btn-primary" href="#" id="btnReview0">Next</a><br>
			</div>
		</div>

		<div id="q2" class="tab-pane fade">
			<h3>Which meme best describes your personality?</h3>
			<img src="https://i.imgflip.com/x8ckm.jpg" alt="q2Meme1" height="400px" width="400px">
			<img src="http://s2.quickmeme.com/img/40/40549ef2aec54d88f80885b799b2dec73f6e56ce1332b04056fbc89cbba58ea2.jpg" alt="q2Meme2" height="400px" width="400px">
			<img src="https://s-media-cache-ak0.pinimg.com/564x/46/00/fd/4600fd802e57b94ec945ce911efbaf93.jpg" alt="q2Meme3" height="400px" width="400px">
			<div class="radio">
 				<form>
    				<div>
      					<label><input type="radio" name="meme" id="meme4">Meme 1</label>
   		 			</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme5">Meme 2</label>
    				</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme6">Meme 3</label>
    				</div>
  				</form>
   				<br>
   				<a class="btn btn-primary" href="#" id="btnReview1">Next</a><br>
			</div>
		</div>

		<div id="q3" class="tab-pane fade">
			<h3>Which meme is the dankest?</h3>
			<img src="http://samuel-warde.com/samuel-warde.com/wp-content/uploads/2016/11/15095005_1020885011370204_8056755327864821010_n.jpg" alt="q3Meme1" height="400px" width="400px">
			<img src="https://i.imgflip.com/15n326.jpg" alt="q3Meme2" height="400px" width="400px">
			<img src="https://cdn0.vox-cdn.com/uploads/chorus_asset/file/7127387/frog-funny-lmao-lol-Favim.com-3505820.jpg" alt="q3Meme3" height="400px" width="400px">
			<div class="radio">
 				<form>
    				<div>
      					<label><input type="radio" name="meme" id="meme7">Meme 1</label>
   		 			</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme8">Meme 2</label>
    				</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme9">Meme 3</label>
    				</div>
  				</form>
   				<br>
   				<a class="btn btn-primary" href="#" id="btnReview2">Next</a><br>
			</div>
		</div>

		<div id="q4" class="tab-pane fade">
			<h3>Which meme best describes your experience with programming?</h3>
			<img src="https://wyncode.co/wp-content/uploads/2014/08/171.jpg" alt="q4Meme1" height="400px" width="400px">
			<img src="https://wyncode.co/wp-content/uploads/2014/08/31.jpg" alt="q4Meme2" height="400px" width="400px">
			<img src="https://s3.amazonaws.com/rails-camp-tutorials/blog/programming+memes/states-of-a-programmer.png" alt="q4Meme3" height="400px" width="400px">
			<div class="radio">
 				<form>
    				<div>
      					<label><input type="radio" name="meme" id="meme10">Meme 1</label>
   		 			</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme11">Meme 2</label>
    				</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme12">Meme 3</label>
    				</div>
  				</form>
   				<br>
   				<a class="btn btn-primary" href="#" id="btnReview3">Next</a><br>
			</div>
		</div>

		<div id="q5" class="tab-pane fade">
			<h3>Which meme would Harambe pick?</h3>
			<img src="https://img.memecdn.com/harambe-come-back_o_6871339.jpg" alt="q5Meme1" height="400px" width="400px">
			<img src="https://pics.onsizzle.com/live-harambe-wasinnocent-q-omeg-michael-phelps-is-the-hero-3278030.png" alt="q5Meme2" height="400px" width="400px">
			<img src="http://i.imgur.com/hk4yXkBl.jpg" alt="q5Meme3" height="400px" width="400px">
			<div class="radio">
 				<form>
    				<div>
      					<label><input type="radio" name="meme" id="meme13">Meme 1</label>
   		 			</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme14">Meme 2</label>
    				</div>
    				<div>
      					<label><input type="radio" name="meme" id="meme15">Meme 3</label>
    				</div>
  				</form>
   				<br>
   				<a class="btn btn-primary" href="thirdFrame.php" id="btnSubmit">Submit</a><br>
			</div>
		</div>
		</div>
	</div>




<!--
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
-->

	<script src="getInfo.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>