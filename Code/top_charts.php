<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-image:url('album.jpg');
}
	@font-face {
    font-family: luna;
    src: url("fonts/Luna.ttf");
}
	@font-face {
    font-family: carrot;
    src: url("fonts/DK Carrot Juice.otf");
	}
@font-face {
    font-family: short;
    src: url("fonts/Shorthalt Personal Use.otf");
}
	@font-face {
    font-family: shorelines;
    src: url("fonts/shorelines.otf");
}
	
	@font-face {
    font-family: prisma;
    src: url("fonts/Prisma.ttf");
}

	@font-face {
    font-family: paperdaisy;
    src: url("fonts/paperdaisy.ttf");
}

	@font-face {
    font-family: fifty;
    src: url("fonts/fifty-five.otf");
}

	@font-face {
    font-family: fish;
    src: url("fonts/fishchips.ttf");
}

	@font-face {
    font-family: champagne;
    src: url("fonts/champagne.ttf");
}
.text{
	text-align:center; 
	color: white; 
	font-family:prisma; 
	font-size: 80px; 
	padding: 20px 30px 10px 80px;
	font-face:bold;
}
#log{
	float:left;
}	

.cha{
	margin:15px;
	margin-top:0px;
	margin-left:54px;
	width:100%;
	}
.charts{
	color:white;
	background-color:rgba(0,0,0,0.6);
	width:24%;
	padding: 7px;
	font-family:luna;
	font-weight:bold;
	font-size:35px;
	display:inline-block;
	height:700px;
	margin-right:100px;
	
}	
.list{
	font-size:30px;
}

button{
background-color:rgba(0,0,0,0.6);
color:rgba(0,191,255,0.5);
font-family:carrot;
font-weight:italic;
font-size:31px;
outline:none;
margin:none;
border:none;
padding-top:13px;
padding-left:15px;
}
#img{margin-left:20px;margin-top:0px;height:600px;width: 49%;text-align:center;float:left;}

#au{
margin-top:20px;
}
#au1{
margin-left:40px;
}
#au5{
margin-right:40px;
}
.aud,button
{
-webkit-transition:all 0.5s linear;
-moz-transition:all 0.5s linear;
-o-transition:all 0.5s linear;
transition:all 0.5s linear;
-moz-box-shadow: 2px 2px 4px 0px #006773;
-webkit-box-shadow:  2px 15px 4px 0px #006773;
box-shadow: 0px 0px 0px 0px #006773;
-moz-border-radius:7px 7px 7px 7px ;
-webkit-border-radius:7px 7px 7px 7px ;
border-radius:7px 7px 7px 7px ;
}
.aud:active,.aud:hover,.aud:focus,button:focus,button:active
{

-webkit-transform: scale(1.10);
-moz-transform: scale(1.10);
transform: scale(1.10);
color:white;
}
button:hover
{

-webkit-transform: scale(1.10);
-moz-transform: scale(1.10);
transform: scale(1.10);
color:rgb(42,149,225);
outline:none;
}
.alb{
width:100%;
text-align:center;

	}
.player{
	text-align:center;
	margin-left:250px;
	width:50%;}
</style>
<link href="logo.png" type="image/gif" rel="shortcut icon" />
<title>MUSA</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
 <div class="topnav" id="nav">
 		<a class=“right” id="search"><img src="search_icon.png" alt="" style="width:20px; height:20px; cursor: pointer;"/></a>
 		<?php if($_SESSION["name"]!=""){ echo "<a class='right' style='float:right;' href='index.php'>Logout</a>";} 
         else{
       echo "<a class='right' style='float:right;' href='index.php'>Login</a>";
     }    ?>
		<a class="right" href="http://localhost/Webtech_Project/artists/artist.php">Artists</a>
		<a class="right" href="http://localhost/Webtech_Project/top_charts.php">Top Charts</a>
		<a class="right" href="http://localhost/Webtech_Project/homepage.php">Home</a>
		<a id="log" href="http://localhost/Webtech_Project/homepage.php" target="_top"><img src="logo.png" alt="logo" height="50px" /></a>
		<p style="float:left;color:white;font-family:fish;font-size:27px;text-align:center;">
		<?php if($_SESSION["name"]!=""){echo $_SESSION["text"]." ".$_SESSION["name"]."!"; }?>
		</p>
	</div>
	
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1 style="text-align: center; font-family:fish;font-size:60px">Discover Music</h1>
    </div>
    <div class="modal-body">
      
  <input type="text" class="searchb" list="artists" name="userName" placeholder="Artists/Songs" value="" list="user-datalist" required autofocus>
  <datalist id="artists">
    <option id="1d" value="One Direction">One Direction</option>
	<option id="ts" value="Taylor Swift">Taylor Swift</option>
	<option id="mj" value="Michael Jackson">Micael Jackson</option>
    <option id="imagine" value="Imagine Dragons">Imagine Dragons</option>
	<option id="beatles" value="The Beatles">The Beatles</option>
	<option id="lp" value="Linkin Park">Linkin Park</option>
	<option id="hs" value="Harry Styles">Harry Styles</option>
	<option id="wh" value="Whitney Houston">Whitney Houston</option>
	<option id="ed" value="Ed Sheeran">Ed Sheeran</option>
	<option id="cp" value="Coldplay">Coldplay</option>
    <option id="bb" value="Breaking Benjamin">Breaking Benjamin</option>
    <option id="ad" value="Adele">Adele</option>
	<option id="sg" value="Selena Gomez">Selena Gomez</option>
	<option id="em" value="Eminem">Eminem</option>
	<option id="or" value="One Republic">One Republic</option>
	<option id="ss" value="Sam Smith">Sam Smith</option>
	
	
  </datalist>
  <input class="sear" id="sub" type="submit" value="Search">
    </div>
  </div>
</div>	

<div class="text">Top Charts
				
				</div><br>
<div class="cha">				
<div class="charts" id="pop"> <span style="align:center; padding-left:110px;">POP </span><br>
<div class="list">
<button id="0">1&nbsp&nbsp&nbspAttention</button><br/>
<button id="1">2&nbsp&nbsp&nbspDusk Till Dawn</button><br/>
<button id="2">3&nbsp&nbsp&nbspI See Fire</button><br/>
<button id="3">4&nbsp&nbsp&nbspLove Yourself</button><br/>
<button id="4">5&nbsp&nbsp&nbspNew Rules</button><br/>
<button id="5">6&nbsp&nbsp&nbspPerfect</button><br/>
<button id="6">7&nbsp&nbsp&nbspRockabye</button><br/>
<button id="7">8&nbsp&nbsp&nbspSign of the Times</button><br/>
<button id="8">9&nbsp&nbsp&nbspWe Found Love</button><br/>
<button id="9" style="font-size: unset">10&nbsp&nbspYoung Dumb & Broke</button><br/>
</div></div>
<div class="charts" id="top"><span style="align:center; padding-left:60px;">TOP 10 </span><div class="list">
<button id="10">1&nbsp&nbsp&nbspBlackbird</button><br/>
<button id="11">2&nbsp&nbsp&nbspBohemian Rhapsody</button><br/>
<button id="12">3&nbsp&nbsp&nbspCareless Whisper</button><br/>
<button id="13">4&nbsp&nbsp&nbspFix You</button><br/>
<button id="14">5&nbsp&nbsp&nbspHalo</button><br/>
<button id="15">6&nbsp&nbsp&nbspI Go To Sleep</button><br/>
<button id="16">7&nbsp&nbsp&nbspRoyals</button><br/>
<button id="17">8&nbsp&nbsp&nbspSay You Won't Let Go</button><br/>
<button id="18">9&nbsp&nbsp&nbspSomeone Like You</button><br/>
<button id="19">10&nbsp&nbspTake me to Church</button><br/>
</div></div>
<div class="charts" id="country"><span style="align:center; padding-left:50px;">COUNTRY</span><div class="list">
<button id="20">1&nbsp&nbsp&nbspI'll Name The Dogs</button><br/>
<button id="21">2&nbsp&nbsp&nbspJust a Kiss</button><br/>
<button id="22">3&nbsp&nbsp&nbspLosing Sleep</button><br/>
<button id="23">4&nbsp&nbsp&nbspNeed You Now</button><br/>
<button id="24">5&nbsp&nbsp&nbspOur Song</button><br/>
<button id="25">6&nbsp&nbsp&nbspSomebody Like You</button><br/>
<button id="26">7&nbsp&nbsp&nbspTake Your Time</button><br/>
<button id="27">8&nbsp&nbsp&nbspWanted</button><br/>
<button id="28">9&nbsp&nbsp&nbspWe Owned the Night</button><br/>
<button id="29">10&nbsp&nbspWritten in the Sand</button><br/>
</div></div>
<div class="alb">
<div class="player">
<input class='aud' id='au5' type='image' src='http://localhost/Webtech_Project/artists/speaker3.png' onclick='vol()' height='50px' width='50px' style='float:center;outline:none;'><input class='aud' id='au3' type='image' src='http://localhost/Webtech_Project/artists/prev.png' height='75px' width='75px' onclick='prev()' style='float:center;outline:none;'><input class='aud' id='au' type='image' src='http://localhost/Webtech_Project/artists/play1.png' height='130px' width='130px' onclick='pause()' style='float:center;outline:none;'><input class='aud' id='au4' type='image' src='http://localhost/Webtech_Project/artists/next1.png' height='75px' width='75px' onclick='next()' style='float:center;outline:none;'><input class='aud' id='au1' type='image' src='http://localhost/Webtech_Project/artists/replay.png' height='50px' width='50px' onclick='replay()' style='float:center;outline:none;'><br/>
</div>
</div>
</body>
<script type="text/javascript" src="http://localhost/Webtech_Project/search-modal.js"></script>
<script>
var id=0;
var count1=0;
var au=document.getElementsByTagName("button");
var audio1=new Array();
audio1[0]=new Audio("http://localhost/Webtech_Project/songs/pop/Attention.mp3");
audio1[1]=new Audio("http://localhost/Webtech_Project/songs/pop/Dusk Till Dawn.mp3");
audio1[2]=new Audio("http://localhost/Webtech_Project/songs/pop/I See Fire.mp3");
audio1[3]=new Audio("http://localhost/Webtech_Project/songs/pop/Love Yourself.mp3");
audio1[4]=new Audio("http://localhost/Webtech_Project/songs/pop/New Rules.mp3");
audio1[5]=new Audio("http://localhost/Webtech_Project/songs/pop/Perfect.mp3");
audio1[6]=new Audio("http://localhost/Webtech_Project/songs/pop/Rockabye.mp3");
audio1[7]=new Audio("http://localhost/Webtech_Project/songs/pop/Sign of the Times.mp3");
audio1[8]=new Audio("http://localhost/Webtech_Project/songs/pop/We Found Love.mp3");
audio1[9]=new Audio("http://localhost/Webtech_Project/songs/pop/Young Dumb & Broke.mp3");
audio1[10]=new Audio("http://localhost/Webtech_Project/songs/top/Blackbird.mp3");
audio1[11]=new Audio("http://localhost/Webtech_Project/songs/top/Bohemian Rhapsody.mp3");
audio1[12]=new Audio("http://localhost/Webtech_Project/songs/top/Careless Whisper.mp3");
audio1[13]=new Audio("http://localhost/Webtech_Project/songs/top/Fix You.mp3");
audio1[14]=new Audio("http://localhost/Webtech_Project/songs/top/Halo.mp3");
audio1[15]=new Audio("http://localhost/Webtech_Project/songs/top/I Go To Sleep.mp3");
audio1[16]=new Audio("http://localhost/Webtech_Project/songs/top/Royals.mp3");
audio1[17]=new Audio("http://localhost/Webtech_Project/songs/top/Say You Won't Let Go.mp3");
audio1[18]=new Audio("http://localhost/Webtech_Project/songs/top/Someone Like You.mp3");
audio1[19]=new Audio("http://localhost/Webtech_Project/songs/top/Take Me To Church.mp3");
audio1[20]=new Audio("http://localhost/Webtech_Project/songs/country/I'll Name The Dogs.mp3");
audio1[21]=new Audio("http://localhost/Webtech_Project/songs/country/Just a kiss.mp3");
audio1[22]=new Audio("http://localhost/Webtech_Project/songs/Losing Sleep.mp3");
audio1[23]=new Audio("http://localhost/Webtech_Project/songs/country/Losing Sleep.mp3");
audio1[24]=new Audio("http://localhost/Webtech_Project/songs/country/Need You Now.mp3");
audio1[25]=new Audio("http://localhost/Webtech_Project/songs/country/Our Song.mp3");
audio1[26]=new Audio("http://localhost/Webtech_Project/songs/country/Somebody Like You.mp3");
audio1[27]=new Audio("http://localhost/Webtech_Project/songs/Take Your Times.mp3");
audio1[28]=new Audio("http://localhost/Webtech_Project/songs/country/We Owned the Night.mp3");
audio1[29]=new Audio("http://localhost/Webtech_Project/songs/country/Written in the Sang.pm3.mp3");


var g=0;
//audio1.onecanplaythrough=function(){}
audio1[parseInt(g)].onended=function(){
var d=document.getElementById("au");
d.src="http://localhost/Webtech_Project/artists/play1.png";
d.removeEventListener("click",pause,false);
d.addEventListener("click",play,false);
}
function pause(){
audio1[g].pause();
var d=document.getElementById("au");
d.src="http://localhost/Webtech_Project/artists/play1.png";
d.removeEventListener("click",pause,false);
d.addEventListener("click",play,false);
}

function play(){

audio1[g].play();
var d=document.getElementById("au");
d.src="http://localhost/Webtech_Project/artists/pause1.png";
d.removeEventListener("click",play,false);
d.addEventListener("click",pause,false);
}

function replay()
{
audio1[parseInt(g)].load();
play();
}

function prev(){
for(var i=0;i<=29;i++)
{
audio1[parseInt(g)].pause();
if(id==1)
{
au[parseInt(g)].removeChild(au[parseInt(g)].lastChild);
id=0;
}
}
audio1[parseInt(g)-1].load();
audio1[parseInt(g)-1].play();
var d=document.getElementById("au");
d.src="http://localhost/Webtech_Project/artists/pause1.png";
d.removeEventListener("click",play,false);
d.addEventListener("click",pause,false);
au[parseInt(g)].style="color:#006773;"
au[parseInt(g)].style=":hover{color:rgb(42,149,225);}"
au[parseInt(g)-1].style="color:white;"
if(id==0){
var i=document.createElement("img");
i.src="http://localhost/Webtech_Project/artists/musical.png";
i.style="height:30px;width:30px;padding-left:10px;"
au[parseInt(g)-1].appendChild(i);
id=1;
}
g=parseInt(g)-1;
}

function next(){
for(var i=0;i<=29;i++)
{
audio1[parseInt(g)].pause();
if(id==1)
{
au[parseInt(g)].removeChild(au[parseInt(g)].lastChild);
id=0;
}
}
audio1[parseInt(g)+1].load();
audio1[parseInt(g)+1].play();
var d=document.getElementById("au");
d.src="http://localhost/Webtech_Project/artists/pause1.png";
d.removeEventListener("click",play,false);
d.addEventListener("click",pause,false);
au[parseInt(g)].style="color:#006773;"
au[parseInt(g)].style=":hover{color:rgb(42,149,225);}"
au[parseInt(g)+1].style="color:white;"
if(id==0){
var i=document.createElement("img");
i.src="http://localhost/Webtech_Project/artists/musical.png";
i.style="height:30px;width:30px;padding-left:10px;"
au[parseInt(g)+1].appendChild(i);
id=1;
}
g=parseInt(g)+1;
}

function vol()
{
var d=document.getElementById("au5");
if(count1==0)
{
d.src="http://localhost/Webtech_Project/artists/speaker2.png";
audio1[g].volume=0.5;
count1=1;
}
else if(count1==1)
{
d.src="http://localhost/Webtech_Project/artists/speaker1.png";
audio1[g].volume=0.0;
count1=2;
}
else if(count1==2)
{
audio1[g].volume=1.0;
d.src="http://localhost/Webtech_Project/artists/speaker3.png";
count1=0;
}
}


function playsong(e)
{
for(var i=0;i<=29;i++)
{
audio1[parseInt(g)].pause();
au[parseInt(g)].style="color:#006773;"
au[parseInt(g)].style=":hover{color:rgb(42,149,225);}"
if(id==1)
{
au[parseInt(g)].removeChild(au[parseInt(g)].lastChild);
id=0;
}

}
var d=e.target;
g=d.id;
audio1[parseInt(g)].load();
audio1[parseInt(g)].play();
var d=document.getElementById("au");
d.src="http://localhost/Webtech_Project/artists/pause1.png";
d.removeEventListener("click",play,false);
d.addEventListener("click",pause,false);
au[parseInt(g)].style="color:white;font-size:31px;"
if(id==0){
var i=document.createElement("img");
i.src="http://localhost/Webtech_Project/artists/musical.png";
i.style="height:30px;width:30px;padding-left:10px;"
au[parseInt(g)].appendChild(i);
id=1;
}
}

for(var i=0;i<30;i++)
{
au[i].addEventListener("click",playsong,false);
}

</script>

</html>

