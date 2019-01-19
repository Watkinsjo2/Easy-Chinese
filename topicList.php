<!DOCTYPE html>
<html style="background-color:#192932">
<head>
<title>Topics in My Forum</title>

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
td{
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
			<h1 style="margin-left:850px; margin-top:100px">Topics in My Forum</h1>
  
  <?php
 //connect to the database
$link = mysqli_connect("localhost", "root", "", "messageboard");

// Check connection
if($link === false){
	die("ERROR: Coud not connect.".mysqli_connect_error());
}

 //gather the topics
 $get_topics = "SELECT topic_id, topic_title, date_format(topic_create_time, '%b %e %Y at %r') AS fmt_topic_create_time,
 topic_owner FROM forum_topics ORDER BY topic_create_time desc";
 $get_topics_res = mysqli_query($link, $get_topics) or die(mysqli_error($link));
 if (mysqli_num_rows($get_topics_res) < 1) {
 //there are no topics, so say so
 $display_block = "<P><em>No topics exist.</em></p>";
 } else {
 //create the display string
 $display_block = "
 <table style=\"margin-left:750px; margin-top:50px\" cellpadding=3 cellspacing=1 border=1>
 <tr>
 <th>TOPIC TITLE</th>
 <th># of POSTS</th>
    </tr>"; 
     while ($topic_info = mysqli_fetch_array($get_topics_res)) {
         $topic_id = $topic_info['topic_id'];
         $topic_title = stripslashes($topic_info['topic_title']);
         $topic_create_time = $topic_info['fmt_topic_create_time'];
         $topic_owner = stripslashes($topic_info['topic_owner']);
  
         //get number of posts
         $get_num_posts = "SELECT post_id FROM forum_posts
              WHERE topic_id = $topic_id";
         $get_num_posts_res = mysqli_query($link, $get_num_posts) or die(mysqli_error($link));
         $num_posts = mysqli_num_rows($get_num_posts_res);
  
         //add to display
         $display_block .= "
         <tr>
         <td class=stuff><a href=\"showtopic.php?topic_id=$topic_id\">
         <strong>$topic_title</strong></a><br>
         Created on $topic_create_time by $topic_owner</td>
         <td align=center>$num_posts</td>
         </tr>";
     }
  
     //close up the table
     $display_block .= "</table>";
  }
  ?>
  
  <?php print $display_block; ?>


  <P style="margin-left:750px">Would you like to <a class="link-header link" href="addtopic.php">add a topic?</a></p>
		</div>
  </body>
  </html>