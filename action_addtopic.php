<?php
$link = mysqli_connect("localhost","root","", "messageboard") or die(mysqli_error());
	


if((!$_POST['topic_owner']) || (!$_POST['topic_title']) || (!$_POST['post_text'])){
	
		
}
			

		
		
// connect to the database after just in case



$add_topic ="INSERT INTO forum_topics VALUES ('', '$_POST[topic_title]' now(), '$_POST[topic_owner]')";
mysqli_query($link, $add_topic) or die(mysqli_error());

// Get the id of the topic 

$topic_id =mysqli_insert_id();

$add_post = "INSERT INTO forum_posts VALUES ('', '$topic_id','$_POST[post_text]', now(), '$_POST[topic_owner]')";
//very long query >.>

mysqli_query($link, $add_post) or die(mysqli_error());

//Lets warn our users that they have created a topic

$smsg ="<P> The <strong>$topic_title</strong>Your Topic Has Been Submitted.</p>";

?>
<html>
<head>
<title>New Topic added</title>
</head>
<body>
<h1>New Topic added</h1>
<?php print $smsg; ?>
</body>
</html>