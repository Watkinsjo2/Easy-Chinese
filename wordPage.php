<!DOCTYPE html>
<html style="background-color:#192932">
<head>
<link rel="stylesheet" href="searchBar.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>EZ Chinese Word List</title>

<ul id="menu">
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
.centerText {
	text-align:center;
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

<img class="sideImageLeft" style="display:inline;" src="CH_drgn.png" />
<img class="sideImageRight" src="WEST_drgn.png" />

<div style="text-align:center">
<h3 class="wordName">Chinese Words</h3>
</div>

<?php
header("Content-Type: text/html;charset=UTF-8");

//connect to the database
$link = mysqli_connect("localhost", "root", "", "englishchinesewords");

// Check connection
if($link === false){
	die("ERROR: Coud not connect.".mysqli_connect_error());
}

//-query the database table
mysqli_query($link,"set names 'utf8'");
$sql = "SELECT English, Chinese FROM englishchinesewords";

//-run the query against the mysql query function
$result=mysqli_query($link, $sql) or die(mysqli_error($link));

//-create while loop and loop through result set
 
$engList = array();
$chnList = array();

while( $row = mysqli_fetch_array( $result)){
    $engList[] = $row['English']; // Inside while loop
	$chnList[] = $row['Chinese'];
}

echo "<div style=\"margin-left:425px; margin-bottom:10px;\">";
echo "<div style=\"float:left;\">";
$half = ceil(mysqli_num_rows($result)/2);
for($i = 0; $i < $half; $i++){
	echo  "<ul>\n";
	echo  "<li class=\"userText\">" .$engList[$i] ." / " .$chnList[$i] .  "</li>\n"; 
	echo  "</ul>";
}
echo "</div>";

echo "<div style=\"float:right; margin-right:200px;\">";
for($i = 0; $i < $half; $i++){
	$val = $i + $half;
	echo  "<ul>\n";
	echo  "<li class=\"userText\">" .$engList[$i + $half] ." / " .$chnList[$i + $half] .  "</li>\n"; 
	echo  "</ul>";
}
echo "</div>";
echo "</div>";
?>
</body>

</html>