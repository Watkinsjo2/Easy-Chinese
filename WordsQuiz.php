<!DOCTYPE html>
<html style="background-color:#192932">
<head>
<meta charset="utf-8">
<title>Chinese Words Quiz</title>

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
 <h2 id="test_status">Chinese Quiz</h2>
 <h3 id="timeleft">Time left</h3>
</div>
<div id="test">
</div>

<p style="color:white;"> GOOD LUCK </p>

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

    var maxQues = prompt("How many questions do you want to answer?", "10");
    var rand = Math.floor(Math.random() * maxQues);

var pos = 0, posn, choice, correct = 0, rscore = 0;
var maxtimelimit = 60, timelimit = maxtimelimit;  // At least do 60 seconds per question

var questions = [
    
     [ "Which is Hello in Chinese?", "你好", "idk", "Hello", "A" ],
	 [ "What does 妈妈 mean?", "Mother", "Father", "Fast-Food", "A" ],
     [ "Which word means Family?", "飞机", "家庭", "爸爸", "B" ],
     [ "What does 否 mean?", "Name", "Yes", "No", "C" ],
     [ "What is the word for Help? ", "上", "帮助", "64", "B" ],
     [ "What is the word for hospital?", "学校","浴室","医院", "C"],
     [ "地图 means?", "10", "Map", "Location", "B" ],
     [ "How do you say \"grandpa\" in Chinese?", "爷爷", "妈妈", "警察", "A"],
     [ "How do you say \"Aunt\" in Chinese?", "爷爷", "妈妈", "阿姨", "C"],
     [ "What is the Chinese word for bathroom?", "银行", "浴室", "医院", "B"],
	 [ "What is the most important thing you must bring when you are traveling?", "电视", "杂货", "身份证", "C"],
	 [ "What is English word for 餐厅?", "Restaurant", "Identification", "Hospital", "A"],
     [ "What is the Chinese word for \"cousin\"?", "表兄弟", "朋友", "叔叔", "A"],
     [ "What does 时间 mean?" , "Time", "Turn", "Trains", "A"],
	 [ "How do you say \"Uncle\" in Chinese?", "男人", "叔叔", "妈妈", "B"],
     [ "How do you say \"Grandma\" in Chinese?", "妈妈", "女人", "奶奶", "A"],
     [ "What does 帮助 mean?", "Yes", "Help", "Please", "B"],
     [ "What does 家庭 mean?", "Family", "Groceries", "Friends", "A"],
     [ "What does 电脑 mean?", "Television", "Computer", "Luggage", "B"],
     [ "What does 理发 mean?", "Barber", "Translator", "Maybe", "A"],
	 [ "What does 银行 mean?", "Street", "Bank", "Bus", "B"],
     [ "Which is the translation for \"Phone\"?", "电话", "电视", "电脑", "A"],
     [ "What does 节日 mean?", "School", "Translator", "Festival", "C"],
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
		<a class="link-header link" href ="PhrasesQuiz.php" style= "color: silver"> Test Your Knowledge of Chinese Phrases</a>

</body>
</html> 

