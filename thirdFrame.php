<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 


<link rel="stylesheet" type="text/css" href="topBar.css">
</head>
<body>
<!-- <p>Welcome <?php echo $_POST['answer1']; ?></p>
<p>Welcome <?php echo $_POST['answer2']; ?></p>
<p>Welcome <?php echo $_POST['answer3']; ?></p> -->



<h1 style="text-align: center;">Your Top Matches</h1>

<div class="container">
  <?php 
$myfile = fopen("database.txt", "a") or die("Unable to open file!");
$randnum = rand(5,15);?>
<h2>Your Sense of Dankness is</h2>
  <p><?php echo $randnum ?> out of 15</p>
<?php
fwrite($myfile, ":" . $randnum . "\n");
  fclose($myfile);
  ?>




  <table class="table table-striped">
    <thead>
      <tr>
        <th>Username</th>
        <th>Human or Humbre</th>
        <th>Perfect Match</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
$myfile = fopen("database.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  $line = fgets($myfile) . "<br>";
  // echo $line; 
  $Username = substr($line , 0 , strpos($line ,":"));
  // echo $Username;
  $score = substr($line, strripos($line, ":")+1);
  // echo $score;
  if (strlen($Username) == 0) {
    break;
  }
  ?>
 
  <tr>
        <td><?php echo $Username ?></td>
        <td>Human</td>
        <td><?php echo $score ?></td>
      </tr>

<?php }
fclose($myfile);
?>


    </tbody>
  </table>
</div>

</body>
</html>