<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.6.4
 */

/**
 * Database `registration`
 */

/* `registration`.`englishchinesewords` */
$englishchinesewords = array(
  array('English' => 'Aunt','Chinese' => '阿姨','Definition' => 'Sister of one\'s parents.'),
  array('English' => 'Bank','Chinese' => '银行','Definition' => 'Financial institution where one can deposit or withdraw currency.'),
  array('English' => 'Barber','Chinese' => '理发','Definition' => 'Person who cuts hair.'),
  array('English' => 'Bathroom','Chinese' => '浴室','Definition' => 'Room containing a toilet and sink.'),
  array('English' => 'Book','Chinese' => '书','Definition' => 'Written or printed work containing pages glued or sown together and bound in covers.'),
  array('English' => 'Bus','Chinese' => '巴士','Definition' => 'Large motor vehicle that carries passengers.'),
  array('English' => 'Children','Chinese' => '孩子','Definition' => 'Offspring of two people in love. '),
  array('English' => 'Computer','Chinese' => '电脑','Definition' => 'Electronic device for storing and processing data. '),
  array('English' => 'Cousin','Chinese' => '表兄弟','Definition' => 'Child of one\'s uncle or aunt.'),
  array('English' => 'Down','Chinese' => '下','Definition' => 'Lower place or position.'),
  array('English' => 'Family','Chinese' => '家庭','Definition' => 'Group consisting of parents and children living together.'),
  array('English' => 'Father','Chinese' => '爸爸','Definition' => 'Man in relation to his natural child/children. '),
  array('English' => 'Festival','Chinese' => '节日','Definition' => 'Day or period of celebration.'),
  array('English' => 'Food','Chinese' => '食物','Definition' => 'Consumable nutritious substance that all living organisms need to survive. '),
  array('English' => 'Friends','Chinese' => '朋友','Definition' => 'Person one knows and trust through a bond of mutual affection. '),
  array('English' => 'Grandma','Chinese' => '奶奶、外婆','Definition' => 'Mother of one\'s parents.'),
  array('English' => 'Grandpa','Chinese' => '爷爷、外公','Definition' => 'Father of one\'s parents.'),
  array('English' => 'Groceries','Chinese' => '杂货','Definition' => 'Items, usually food or drinks, bought from a local store.'),
  array('English' => 'Hello','Chinese' => '你好','Definition' => 'An everyday greeting between two people.'),
  array('English' => 'Help','Chinese' => '帮助','Definition' => 'Assisting one or needing assistance. '),
  array('English' => 'Hospital','Chinese' => '医院','Definition' => 'Institution that provides medical and surgical treatment for the sick and injured.'),
  array('English' => 'Identification','Chinese' => '身份证','Definition' => 'A person\'s identity. '),
  array('English' => 'Left','Chinese' => '左','Definition' => 'Towards the west side of a person\'s point of view.'),
  array('English' => 'Luggage','Chinese' => '行李','Definition' => 'Bag containing one\'s personal belongings when traveling. '),
  array('English' => 'Man','Chinese' => '男人','Definition' => 'Adult human male.'),
  array('English' => 'Map','Chinese' => '地图','Definition' => 'Diagrammatic representation of a geographical area of land or sea. '),
  array('English' => 'Maybe','Chinese' => '可能','Definition' => 'Possibly.'),
  array('English' => 'Mother','Chinese' => '妈妈','Definition' => 'Woman related to her natural child/children. '),
  array('English' => 'No','Chinese' => '否','Definition' => 'A negative response to a question, statement, etc. '),
  array('English' => 'Phone','Chinese' => '电话','Definition' => 'Device used to communicate with someone from long range. '),
  array('English' => 'Plane','Chinese' => '飞机','Definition' => 'Aircraft used to travel long distances. '),
  array('English' => 'Please','Chinese' => '拜托','Definition' => 'Used in polite requests or questions. '),
  array('English' => 'Police','Chinese' => '警察','Definition' => 'Civil force of a national or local government charged with detecting and preventing crime as well as maintaining public order. '),
  array('English' => 'Restaurant','Chinese' => '餐厅','Definition' => 'Place where people pay to sit and eat cooked meals. '),
  array('English' => 'Right','Chinese' => '右','Definition' => 'Towards the east side of a person\'s point of view.'),
  array('English' => 'School','Chinese' => '学校','Definition' => 'Institution for educating children. '),
  array('English' => 'Sorry','Chinese' => '对不起','Definition' => 'An apology for one\'s actions.'),
  array('English' => 'Stop','Chinese' => '停止','Definition' => 'An action to come to an end. '),
  array('English' => 'Store','Chinese' => '商店','Definition' => 'Retail establishment that sells items to the public.'),
  array('English' => 'Street','Chinese' => '街道','Definition' => 'Public road in a city or town '),
  array('English' => 'Taxi','Chinese' => '的士','Definition' => 'Form of transportation used to convey passengers in return for payment. '),
  array('English' => 'Television','Chinese' => '电视','Definition' => 'Device that receives signals and reproduces them on a screen.'),
  array('English' => 'Time','Chinese' => '时间','Definition' => 'Indefinite continued progress of existence measured in hours and minutes.'),
  array('English' => 'Trains','Chinese' => '火车','Definition' => 'Series of railroad cars moved by a large locomotive or integral motors.'),
  array('English' => 'Translator','Chinese' => '翻译器','Definition' => 'Person capable of translating one language to another. '),
  array('English' => 'Turn','Chinese' => '转向','Definition' => 'Act of moving in a circular direction around an axis or point.'),
  array('English' => 'Uncle','Chinese' => '叔叔','Definition' => 'Brother of one\'s parents.'),
  array('English' => 'Up','Chinese' => '上','Definition' => 'Towards the sky or a higher position.'),
  array('English' => 'Woman','Chinese' => '女人','Definition' => 'Adult human female.'),
  array('English' => 'Yes','Chinese' => '是','Definition' => 'An affirmative response.')
);

$randomWords = $englishchinesewords[rand(0, count($englishchinesewords) - 1)];
$wordEnglish = $randomWords['English'];
$wordChinese = $randomWords['Chinese'];
$wordDefinition = $randomWords['Definition'];

?>
<!--
	Word of the day code is above.
-->

<!DOCTYPE html>
<html style="background-color:#192932;">
<head>
<meta charset="utf-8" />
<title>EZ Chinese Homepage</title>

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
	text-align: center;
	margin-left:475px;
	color: white;
	width: 50%;
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

<div><h1 class="headerText" style="color: white" >Welcome to the EZ Chinese homepage</h1></div>

	<p class="infoText">
	If you've made it to this page, it's because you're interested in brushing up on your Chinese terminology. 
	Or perhaps you're a beginner who doesn't know how to start learning. Either way, you're in luck! We'll help you cover the basics of Chinese 
	vocabulary and phrases that will help you communicate with native Chinese speakers, travel abroad, or just show off to your friends (if 
	that's your thing). Once you've mastered our auto generated list of topics, feel free to add your own to keep on learning at your own pace.
	</p>

	<div style="margin-bottom:100px">
	<p class="userText" style="text-align:center;">Already a user?<a href="login.php"><img class="login" src="login.png" /></a></p>
	<p class="userText" style="text-align:center;">Are you a new user?<a href="register.php"><img class="register" src="register.png" /></a></p>
	</div>

	<div style="margin-left:760px; margin-bottom:100px;">
		<table style="border:#000000 7px solid; padding:5px; width:40%;">
			<tr>
				<th class="wordOfTheDay" colspan="2">WORD OF THE DAY</th>
			</tr>
			<tr>
				<td class="wordName"><?php echo $wordEnglish; ?></td>
				<td class="wordName"><?php echo $wordChinese; ?></td>
			</tr>
			<tr>
				<td class="userText" style="text-align:center;" colspan="2"><?php echo $wordDefinition; ?></td>
			</tr>
		</table>
	</div>
</div>


</body>

</html>

