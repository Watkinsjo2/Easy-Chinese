<?php
 //check for required info from the query string
 if (!$_GET['topic_id']) {
    header("Location: topicList.php");
    exit;
 }
 
 //connect to the database
$link = mysqli_connect("localhost", "root", "", "messageboard");

// Check connection
if($link === false){
	die("ERROR: Coud not connect.".mysqli_connect_error());
}
  
  //verify the topic exists
  $verify_topic = "SELECT topic_title FROM forum_topics WHERE topic_id = $_GET[topic_id]";
  $verify_topic_res = mysqli_query($link, $verify_topic) or die(mysqli_error($link));
 
 if (mysqli_num_rows($verify_topic_res) < 1) {
     //this topic does not exist
    $display_block = "<P><em>You have selected an invalid topic.
     Please <a href=\"topicList.php\">try again</a>.</em></p>";
 } else {
     //get the topic title
    $topic_title = stripslashes(mysqli_num_rows($verify_topic_res));
 
    //gather the posts
    $get_posts = "SELECT post_id, post_text, date_format(post_create_time,
         '%b %e %Y at %r') AS fmt_post_create_time, post_owner FROM
         forum_posts WHERE topic_id = $_GET[topic_id]
         ORDER BY post_create_time asc";
 
    $get_posts_res = mysqli_query($link, $get_posts) or die(mysqli_error($link));
 
    //create the display string
    $display_block = "
    <P>Showing posts for the <strong>$topic_title</strong> topic:</p>
 
    <table width=100% cellpadding=3 cellspacing=1 border=1>
    <tr>
    <th><p>AUTHOR</p></th>
    <th><p>POST</p></th>
    </tr>";
 
    while ($posts_info = mysqli_fetch_array($get_posts_res)) {
        $post_id = $posts_info['post_id'];
        $post_text = nl2br(stripslashes($posts_info['post_text']));
        $post_create_time = $posts_info['fmt_post_create_time'];
        $post_owner = stripslashes($posts_info['post_owner']);
 
        //add to display
        $display_block .= "
        <tr>
        <td width=35% valign=top>$post_owner<br>[$post_create_time]</td>
        <td width=65% valign=top>$post_text<br><br>
          <a href=\"replytopost.php?post_id=$post_id\"><strong>REPLY</strong></a></td>
        </tr>";
    }
 
    //close up the table
    $display_block .= "</table>";
 }
 ?>
 <html style="background-color:#192932">
 <head>
 <title>Posts in Topic</title>
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

 </head>
 
 <body>
 <h1>Posts in Topic</h1>
 <?php print $display_block; ?>
 </body>
 </html>