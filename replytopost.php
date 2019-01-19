<!DOCTYPE html>
<html style="background-color:#192932">
<head>
<title>Post reply</title>
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
 
 <?php
 
  //connect to the database
$link = mysqli_connect("localhost", "root", "", "messageboard");

// Check connection
if($link === false){
	die("ERROR: Coud not connect.".mysqli_connect_error());
}

 //check to see if we're showing the form or adding the post
 if (isset($_POST["op"]) != "addpost") {
    // showing the form; check for required item in query string
    if (!$_GET['post_id']) {
        header("Location: topiclist.php");
        exit;
    }
 
      //still have to verify topic and post
    $verify = "SELECT ft.topic_id, ft.topic_title FROM
     forum_posts AS fp left join forum_topics AS ft on
     fp.topic_id = ft.topic_id WHERE fp.post_id = $_GET[post_id]";

    $verify_res = mysqli_query($link, $verify) or die(mysqli_error($link));
     if (mysqli_num_rows($verify_res) < 1) {
        //this post or topic does not exist
        header("Location: topiclist.php");
        exit;
    } else {
        //get the topic id and title
		$row = mysqli_fetch_array($verify_res);
        $topic_id = $row['topic_id'];
        $topic_title = stripslashes($row['topic_title']);
 
        print "
        <head>
        <title>Post Your Reply in $topic_title</title>
        </head>
        <body>
		<div style=\"text-align:center\">
        <h1>Post Your Reply in $topic_title</h1>
        <form method=post action=\"$_SERVER[PHP_SELF]\">
 
        <p><strong>Username:</strong><br>
        <input type=\"text\" name=\"post_owner\" size=40 maxlength=150>
 
        <P><strong>Post Text:</strong><br>
        <textarea name=\"post_text\" rows=8 cols=40 wrap=virtual></textarea>
 
        <input type=\"hidden\" name=\"op\" value=\"addpost\">
        <input type=\"hidden\" name=\"topic_id\" value=\"$topic_id\">
 
       <P><input type=\"submit\" name=\"submit\" value=\"Add Post\"></p>
 
        </form>
		</div>
        </body>";
    }
 } else if (isset($_POST["op"]) == "addpost") {
    //check for required items from form
    if ((!$_POST['topic_id']) || (!$_POST['post_text']) ||
     (!$_POST['post_owner'])) {
        header("Location: topiclist.php");
        exit;
    }
	
	$post_id =mysqli_insert_id($link);
 
    //add the post
    $add_post = "insert into forum_posts(post_id, topic_id, post_text, post_owner) values('$post_id', '$_POST[topic_id]', '$_POST[post_text]', '$_POST[post_owner]')";
    mysqli_query($link, $add_post) or die(mysqli_error($link));
 
    //redirect user to topic
    header("Location: showtopic.php?topic_id=$topic_id");
    exit;
 }
 ?>
 </div>
 </body>
 </html>