<!DOCTYPE html>
<html style="background-color:#192932">
<head>
<title>Add a Topic</title>

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
h1{
	font-family: Times New Roman, Arial;
	font-size: 28pt;
	position: relative;
	color: white;
}
p{
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

<div style="text-align:center" margin-top:100px;">
<h1>Add a topic</h1>
<form method = post action = "addtopic.php">
	<P><strong>Username:</strong><br>
	<input type="text" name="topic_owner" size =40 maxlength=150>
	
	<p><strong>Topic Title:</strong><br>
	<input type = "text" name="topic_title" size=40 maxlength=150>
	
	<p><strong>Post Text:</strong><br>
	<textarea name="post_text" rows=8 cols=40 wrap="virtual"></textarea>
	<P><input type="submit" name="submit" value="Add Topic"></p>
	</form>
</div>	
</div>	
</body>




<?php

if(isset($_POST['submit'])){
	//if((isset($_POST['topic_owner'])) || (isset($_POST['topic_title'])) || (isset($_POST['post_text'])){
	$owner=$_POST['topic_owner'];
	$title=$_POST['topic_title'];
	$post=$_POST['post_text'];
	//}

	$link = mysqli_connect("localhost","root","", "messageboard") or die(mysqli_error());
	
	if($link === false){
	die("ERROR: Coud not connect.".mysqli_connect_error());
	}
// connect to the database after just in case



$add_topic ="INSERT INTO forum_topics(topic_title, topic_owner) VALUES ('$title', '$owner')";
mysqli_query($link, $add_topic) or die(mysqli_error($link));

// Get the id of the topic 

$topic_id =mysqli_insert_id($link);
$post_id =mysqli_insert_id($link);

$add_post = "INSERT INTO forum_posts(post_id, topic_id, post_text, post_owner) VALUES ('$post_id', '$topic_id', '$post', '$owner')";
//very long query >.>

mysqli_query($link, $add_post) or die(mysqli_error($link));

//Lets warn our users that they have created a topic

$smsg ="<P> The <strong>$title</strong> topic Has Been submitted.</p>";
echo $smsg;
}
?>


</html>