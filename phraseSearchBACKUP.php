<!DOCTYPE html>
<html style="background-color:#292931; width:100%;">
<head>
<link rel="stylesheet" href="searchBar.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>EZ Chinese Homepage</title>

<ul id="menu">
<A HREF ="pages/ChineseWords.php">Chinese Words To Use!</A>
<A HREF ="pages/Quizzes.php">Test Your Chinese!</A>
</ul>

<style type="text/css">
<!--
.centerText {
	text-align:center;
}

.menu{
	display: inline;
	padding: 10px 40px;
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
	border: #000000 7px solid;
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
	width:60%;
	position: relative;
	left: 14%;
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
-->
</style>
</head>

<body>
<div style="text-align:center;"><img class="logo" src="logo.png" alt="EZ Chinese Logo" /></div>

<img class="sideImageLeft" style="display:inline;" src="CH_drgn.png" />
<img class="sideImageRight" src="WEST_drgn.png" />

<div style="margin-left:350px; margin-bottom:100px">
<h3 class="wordName">Chinese Phrases</h3>
<p class="wordPronunciation">You may search for a phrase</p>
<form method="post" action="phraseSearch.php?go" id="searchform">
<input type="text" name="name">
<input type="submit" name="submit" value="Search">
</form>
</div>

<?php
header("Content-Type: text/html;charset=UTF-8");
if(isset($_POST['submit'])){
if(isset($_GET['go'])){
if((preg_match("/[A-Z | a-z]+/", $_POST['name'])) or (preg_match("/\p{Han}+/u", $_POST['name']))){
$text=$_POST['name'];

//connect to the database
$link = mysqli_connect("localhost", "root", "", "ezchinesephrase");

// Check connection
if($link === false){
	die("ERROR: Coud not connect.".mysqli_connect_error());
}

//-query the database table
mysqli_query($link,"set names 'utf8'");
$sql = "SELECT id, phrase, translation FROM chinesephrase WHERE translation LIKE '%$text%' OR phrase LIKE '%$text%'";

//-run the query against the mysql query function
$result=mysqli_query($link, $sql) or die(mysqli_error($link));

//-create while loop and loop through result set
while($row = mysqli_fetch_array($result)){

	$phrase =$row['phrase'];
	$translation=$row['translation'];
	$id=$row['id'];
		
//display the result of the array
echo "<div style=\"margin-left:425px; margin-bottom:100px;\">";
echo 	"<table style=\"border:#000000 7px solid; padding:5px; width:40%;\">\n";
echo 		"<tr>\n";
echo			 "<th class=\"wordOfTheDay\" colspan=\"2\">" ."PHRASE" . "</th>\n";
echo 		"</tr>\n";
echo 		"<tr>\n";
echo 			"<td class=\"wordName\">" .$phrase . "</td>\n";
echo 		"</tr>\n";
echo 		"<tr>\n";
echo 			"<td class=\"wordPronunciation\">English Pronunciation<audio controls>\n";
echo 				"<source src=\"01 NieR Automata OST - Bipolar Nightmare Engels Boss Theme ( VOCALS ).mp3\" type=\"audio/mp3\" />\n";
echo 			"</td>\n";
echo 			"<td class=\"wordPronunciation\">Chinese Pronunciation<audio controls>\n";
echo 				"<source src=\"1-07 遊園施設.flac\" type=\"audio/flac\" />\n";
echo 			"</td>\n";
echo 		"<tr></tr>\n";
echo 		"<tr>\n";
echo 			"<td class=\"userText\" colspan=\"2\">" .$translation . "</td>\n";
echo 		"</tr>\n";
echo 	"</table>\n";
echo "</div>";
	}
}
else{
	echo "<p class=\"userText\" style=\"margin-left:350px; margin-top:-70px;\">Search found no results. Please search again with a different term.</p>";
}
	}
}
?>
</div>
</body>

</html>