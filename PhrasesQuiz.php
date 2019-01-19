<!DOCTYPE html>
<html style="background-color:#192932">
<head>
<meta charset="utf-8">
<title>Chinese Phrases Quiz</title>

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
div#test{ 
	padding:10px 40px 40px 40px; 
}
#timeleft{
	color: white;
}	
#test_status{
	color: white;
}
body{
	background: #192932;
}
#test{
	color: white;
	font-size: 23px;
}
.link{
	border: 9px outset;
	padding: 22px;
	text-decoration: none;
}
a:active{
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
<div>
 <h2 id="test_status">Chinese Word Quiz</h2>
 <h3 id="timeleft">Time left</h3>
</div>
<div id="test"></div>

<p style="color:white;"> GOOD LUCK </P>

<script>
var myVar;
function startTimer() {
  myVar = setInterval(function(){myTimer()},1000);
  timelimit = maxtimelimit;
}
function myTimer() {
  if (timelimit > 0) {
    curmin=Math.floor(timelimit/60);
    cursec=timelimit%60;
    if (curmin!=0) { curtime=curmin+" minutes and "+cursec+" seconds left"; }
              else { curtime=cursec+" seconds left"; }
    $_('timeleft').innerHTML = curtime;
  } else {
    $_('timeleft').innerHTML = timelimit+' - Out of Time - no credit given for answer';
    clearInterval(myVar);
  }
  timelimit--;
}

    var maxQues = prompt("How many questions do you want to answer?", "5");
    var rand = Math.floor(Math.random() * maxQues);

var pos = 0, posn, choice, correct = 0, rscore = 0;
var maxtimelimit = 60, timelimit = maxtimelimit;  // At least do 60 seconds per question

var questions = [
    
    [ "What does 你的爱好是什么？ mean?", "How are you?", "What's your name?", "What are your hobbies?", "C" ],
    [ "When you feel sick, how do you say it in chinese?", "我身体感觉不适", "你还好吗", "我很好", "A" ],
    [ "很高兴见到你 means?", "Oh my gosh", "Pleased to meet you", "11", "B" ],
    [ "How do you say, I am from USA, in chinese?", "好久不见", "请帮助我", "我来自美国", "C" ],
	[ "If someone ask \“How are you?\” what do you say in Chinese to them?", "我很好", "我不知道", "走开", "A"],
	[ "It is New Year's Eve, after 12:00, what do you say in Chinese to your families or friends?", "新年快乐", "走开", "呼叫警察", "A"],
	[ "When someone helps you, what do you say in Chinese?", "走开", "不用谢", "谢谢", "C"],
	[ "If someone says 你好吗？What do you say in English?", "Sorry", "You look good today", "I'm fine", "C"],
	[ "What is the translation for 我不知道 in English?", "I don't know", "See you later", "I am a traveler", "A"],
	[ "When someone asks a question that you don't understand, how do you respond in Chinese?", "我不知道", "对不起", "打扰一下", "A"],
	[ "How do you respond to \"Thank you\" in Chinese?", "再见", "不用谢", "走开", "B"],
	[ "Translate \"Where is the nearest hospital\" from English to Chinese", "最近的旅店在哪里?", "最近的医院在哪里？", "医院在哪里?", "A"],
	[ "How do you say \"Where is the nearest hotel?\" in Chinese", "最近的旅店在哪里?", "最近的医院在哪里？", "厕所在哪里？", "A"],
	[ "When you try to find  the nearest transportation, how do you say it in Chinese?", "最近的交通在哪里?", "你在哪里工作?", "最好吃的地方在哪里？", "A"],
	[ "When you try to find the best place to eat, what do you say in Chinese?", "最近的旅店在哪里？", "谁是最好的导游？", "最好吃的地方在哪里？", "C"],
	[ "How do you say \"Can I use your internet\" in Chinese?", "我能使用网络吗？", "你叫什么名字？", "你有来过美国吗？", "A"],
	[ "How do you say \"I'm from USA\" in Chinese?", "我来自美国.", "很高兴见到你.", "今天你看起来很好.", "A"],
	[ "When you see someone fall, what do you say?", "呼叫警察", "你还好吗?", "你讲英语吗？", "B"],
	[ "How do you ask someone's age in Chinese?", "多少钱?", "你多少岁了？", "你的爱好是什么？", "B"],
	[ "How do you ask \"Where is the best tour guide?\" in Chinese?", "你在哪里工作？", "谁是最好的导游？", "我能有你的电话号码吗？", "A"],
	[ "When you lose your luggage, what do you say in Chinese?", "我找不到我的行李.", "很高兴见到你!", "今天你看起来很好.", "A"],
	[ "How do you ask someone to speak english?", "你有来过美国吗？", "你多少岁了？", "你讲英语吗？", "C"],
	[ "Translate \"Have you ever been to the United States?\"", "我来自美国.", "你有来过美国吗？", "最好吃的地方在哪里？", "B"],
];

var questionOrder = [];
function setQuestionOrder() {
  questionOrder.length = 0;
  for (var i=0; i<maxQues; i++) { questionOrder.push(i); }
  questionOrder.sort(randOrd);   // alert(questionOrder);  // shuffle display order
  pos = 0;  posn = questionOrder[pos];
}

function $_(IDS) { return document.getElementById(IDS); }
function randOrd() { return (Math.round(Math.random())-0.5); }
function renderResults(){
  var test = $_("test");
  test.innerHTML = "<h2>You got "+correct+" of "+maxQues+" questions correct</h2>"; 
  $_("test_status").innerHTML = "Test Completed";
  $_('timeleft').innerHTML = '';
  test.innerHTML += '<button onclick="location.reload()">Re-test</a> ';
  setQuestionOrder();
  correct = 0;
  clearInterval(myVar);
  return false;
}
function renderQuestion() {
  var test = $_("test");
  $_("test_status").innerHTML = "Question "+(pos+1)+" of "+ maxQues; //number of questions
  if (rscore != 0) { $_("test_status").innerHTML += '<br>Currently: '+(correct/rscore*100).toFixed(0)+'% correct'; }
  var question = questions[posn][0];
  var chA = questions[posn][1];
  var chB = questions[posn][2];
  var chC = questions[posn][3];
  test.innerHTML = "<h3>"+question+"</h3>";
  test.innerHTML += "<label><input type='radio' name='choices' value='A'> "+chA+"</label><br>";
  test.innerHTML += "<label><input type='radio' name='choices' value='B'> "+chB+"</label><br>";
  test.innerHTML += "<label><input type='radio' name='choices' value='C'> "+chC+"</label><br><br>";
  test.innerHTML += "<button onclick='checkAnswer()'>Submit Answer</button>";
  timelimit = maxtimelimit;
  clearInterval(myVar);
  startTimer();
}

function checkAnswer(){
  var choices = document.getElementsByName("choices");
  for (var i=0; i<choices.length; i++) {
    if (choices[i].checked) { choice = choices[i].value; }
  }
  rscore++;
  if (choice == questions[posn][4] && timelimit > 0) { correct++; }
  pos++;  posn = questionOrder[pos];
  if (pos < maxQues) { renderQuestion(); } else { renderResults(); }
}

window.onload = function() {
  setQuestionOrder();
  renderQuestion();

}
</script>
        <A class="link-header link" href ="index.php" style="color: silver"> Homepage</a>
		<a class="link-header link" href ="WordsQuiz.php" style= "color: silver"> Test Your Knowledge of Chinese Words</a>
</body>
</html> 