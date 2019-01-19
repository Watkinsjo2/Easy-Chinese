<!DOCTYPE html>
<html style="background-color:#292931; width:100%;">
<head>
<link rel="stylesheet" href="searchBar.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>EZ Chinese Word Search</title>

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
<h3 class="wordName">Chinese Words</h3>

<div>
<?php echo for($i = 0; $i < $half; $i++){ ?>
				<?php echo  "<ul>\n";?>
				<?php echo  "<li>" .$list[$i] .  "</li>\n"; ?>
				<?php echo "</ul>"; ?>
	<?php echo} ?>
	<div style="margin-left:200px; margin-bottom:10px">
	<table style="border:#000000 7px solid; padding:5px;">
	<tr>
		<td class="wordName"><?php echo $wordEnglish; ?> / <?php echo $wordChinese; ?></td>
	</tr>
	<tr>
		<td class="wordPronunciation">English Pronunciation<audio controls>
			<source src="01 NieR Automata OST - Bipolar Nightmare Engels Boss Theme ( VOCALS ).mp3" type="audio/mp3" />
		</td>
		<td class="wordPronunciation">Chinese Pronunciation<audio controls>
			<source src="1-07 遊園施設.flac" type="audio/flac" />
		</td>
	<tr></tr>
	<tr>
		<td class="userText" colspan="2"><?php echo $wordDefinition; ?></td>
	</tr>
</table>
</div>
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
 
$list = array();
while( $row = mysqli_fetch_array( $result)){
    $list[] = $row['English']; // Inside while loop
}

//echo "<div style=\"margin-left:425px; margin-bottom:10px;\">";
$half = ceil(mysqli_num_rows($result)/2);
//for($i = 0; $i < $half; $i++){
//	echo  "<ul>\n";
//	echo  "<li>" .$list[$i] .  "</li>\n"; 
//	echo  "</ul>";
//}
//echo "</div>";

echo "<div style=\"margin-left:425px; margin-bottom:10px;\">";
for($i = 0; $i < $half; $i++){
	$val = $i + $half;
	echo  "<ul>\n";
	echo  "<li>" .$list[$i + $half] .  "</li>\n"; 
	echo  "</ul>";
}
echo "</div>";

?>
</body>

</html>