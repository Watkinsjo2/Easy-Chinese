<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = $_POST['password'];
//The sql variable is storing the search query for our database. Will be used to compare registered users.
	$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql); 
	$num = mysqli_num_rows($result);
	// If the loop brings back a 1 then the user should start their session. 
	if($num == 1){ 
		$_SESSION['username'] = $username;
		//probably going to use a template for every user to log in.
	}else{
		$fmg = "Password or Username is incorrect";
		//echo was not very effective
	}
}
		if(isset($_SESSION['username'])){
			//header('location: profile.php?id=' .$id);
			$smg = "Logged In. Enjoy the site";	
				
				
}


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="indexlogin.css" />
	<title>Login</title>
	<!--
	were using boot strap helps to create user interface for our site.
	
	-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<ul id="menu" style="margin-top:-35px">
<A class ="link-header link" href ="index.php" style="color: orange"> Home</a>
<A class ="link-header link" href ="wordSearch.php" style="color: orange"> Search For Words To Use</a>
<A class="link-header link" href ="phraseSearch.php" style="color: orange"> Search For Phrases To Use</a>
<A class="link-header link" href="phrasesPage.php" style="color: orange"> List of Phrases</a>
<A class="link-header link" href="wordPage.php" style="color: orange"> List of Words</a>
<A class="link-header link" href="ChineseCulture.php" style="color: orange"> Learn Chinese Culture</a>
<A class="link-header link" href="WordsQuiz.php" style="color: orange"> Take a Quiz(words)</a>
<A class="link-header link" href="PhrasesQuiz.php" style="color: orange"> Take a Quiz(phrases)</a>
<A class="link-header link" href="addtopic.php" style="color: orange"> Topic Creation</a>
<A class="link-header link" href="showtopic.php" style="color: orange"> Discussion Board</a>
<A class="link-header link" href="imageGallery.php" style="color: orange"> Image Gallery</a>
</ul>

<style type="text/css">
<!--
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #192932;
}
h2.form-signin-heading{
	color: white;
	font-size: 35px;
	font-family: sans-serif;
	text-align: center;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}

.form-signin input{
	display: block;
	width: 320px;
	height: 20px;
	padding: 10px;
	font-size: 20px;
	font-family: sans-serif;
	color: white;
	background: rgba(0,0,0,0.3);
	outline: none;
	border:1px solid rgba(0,0,0,0.3);
	border-radius: 5px;
	box-shadow: inset 0px -5px 45px rgba(100,100,100,0.2), 0px 1px 1px rgba(255, 255, 255, 0.2);
	margin-bottom: 10px;
}

.btl {
	-moz-box-shadow: 0px 4px 7px 2px #9fb4f2;
	-webkit-box-shadow: 0px 4px 7px 2px #9fb4f2;
	box-shadow: 0px 4px 7px 2px #9fb4f2;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
	background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
	background-color:#7892c2;
	-moz-border-radius:17px;
	-webkit-border-radius:17px;
	border-radius:17px;
	border:4px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:19px;
	padding:2px 12px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.btl:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}
.btl:active {
	position:relative;
	top:1px;
}
}	
.centerText {
	text-align:center;
}
.boxed{
	border: 8px solid orange;
}
h1{
	color: orange;
}

p{
	text-indent: 50px;
	color: white;
	font-family: sans-serif;
	padding: 5px;
}
.link-header{
	display: inline-block;
	padding: 5px;
}

.headerText {
	font-family: Helvetica, sans-serif, Arial;
	font-size: 20pt;
	font-weight: bold;
	text-align: center;
}

img.logo {
	width: 800px;
	height: 300px;
	padding: 5px;
}

.container {
	width:100%;
}

img.sideImageLeft {
	left: 0;
	height: 800px;
	width: 200px;
	float: left;
}

img.sideImageRight {
	height: 800px;
	width: 200px;
	float: right;
}

.infoText {
	font-family: Times New Roman, Arial;
	font-size: 14pt;
	text-align: justify;
	position: relative;
	color: white;
}

img.login {
	height: 50px;
	width: 120px;
	position: relative;
	top: 15px;
}

img.register {
	height: 50px;
	width: 170px;
	position: relative;
	top: 15px;
}

.userText {
	font-family: Times New Roman, Arial;
	font-size: 14pt;
	position: relative;
	color: white;
}
.wordName{
	font-family: Times New Roman, Arial;
	font-size: 25pt;
	position: relative;
	color: white;
	text-align:center;
}
.wordOfTheDay{
	font-family: Times New Roman, Arial;
	font-size: 32pt;
	position: relative;
	color: white;
}
.wordPronunciation{
	font-family: Times New Roman, Arial;
	font-size: 18pt;
	position: relative;
	color: white;
}
.link{
 border: 9px outset;
 padding: 22px;
 text-decoration: none;
 }
 a:active {
 border: 10px inset;
 }
 .link-header{
	display: inline-block;
	padding: 5px;
}
menu{
	display: inline;
	padding: 10px 40px;
}
-->
</style>
</head>
	<body>
		<div style="text-align:center"><img class="logo" src="logo.png" alt="EZ Chinese Logo" /></div>

		<div style="height:500;">
			<img class="sideImageLeft" src="CH_drgn.png" />
			<img class="sideImageRight" src="WEST_drgn.png" />
	
			<div class="container">
				<form class="form-signin" method="POST">
				<h2 class="form-signin-heading">Login</h2>
        
				<div class="input-group">
					<input type="text" name="username" class="form-control" placeholder="Username" required>
				</div>
	
	
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<button class="btl" type="submit">Login</button>
				</form>
				
				<?php if(isset($smg)){ ?><div class = "alert alert-sucess" style="text-align:center" role="alert"><p> <?php echo $smg; ?></p></div> 
<?php } ?>
<?php if(isset($fmg)){ ?><div class = "alert alert-danger" style="text-align:center" role="alert"><p> <?php echo $fmg; ?></p></div></div> 
<?php } ?>
			</div>
		</div>	
	</body>
</html>