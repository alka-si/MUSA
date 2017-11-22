<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(!(isset($_SESSION["name"]))){
  $name=$_POST['uname'];
  $pwd=$_POST['pwd'];
  $link = mysqli_connect("localhost", "root", "", "project");
  $query="SELECT * from users";
  $res=mysqli_query($link,$query);
  $count=mysqli_num_rows($res);
  for($i=0;$i<$count;$i++)
  {
    $row=mysqli_fetch_assoc($res);
    $un=$row["uname"];
    $p=$row["pwd"];
    if($name == $un && $pwd == $p) 
            { 
                $_SESSION["logged_in"] = true; 
                $_SESSION["name"] = $name; 
        $_SESSION["text"]="Welcome,";
        break;
            }
  }
      mysqli_close($link);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
  if(!(isset($_SESSION["name"]))){
                $_SESSION["name"] =""; 
  $_SESSION["text"]="";}
}
?>

	
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="logo.png" type="image/gif" rel="shortcut icon" /> 
		<title>Musa</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">	
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 3,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });

        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });
      });

        $(document).ready(function() {
     $(window).scroll(function() {
      if($(document).scrollTop() > 150) {
        $('#nav').addClass('shrink');
      }
      else {
      $('#nav').removeClass('shrink');
      }
    });
  });

    </script>


	
    </head>
<body>
 <div id="a" class="main">
 <div class="back">
 <div class="topnav" id="nav">
 		<a class=“right” id="search"><img src="images/search_icon.png" alt="" style="width:20px; height:20px; cursor: pointer;"/></a>
    <?php if($_SESSION["name"]!=""){ echo "<a class='right' style='float:right;' href='index.php'>Logout</a>";} 
         else{
       echo "<a class='right' style='float:right;' href='index.php'>Login</a>";
     }    ?>
		<a class="right" href="artists/artist.php">Artists</a>
		<a class="right" href="http://localhost/Webtech_Project/top_charts.php">Top Charts</a>
		<a class="right" href="homepage.php">Home</a>
		<a id="log" href="homepage.php" target="_top"><img src="images/logo.png" alt="logo" height="50px" /></a>

	</div>
	<div  id="audi">
   <div class="listen"><?php echo $_SESSION["text"].$_SESSION["name"]; ?></div>
	 <div class="listen">START&nbsp&nbspLISTENING</div>
	 <div id="control"><input class='aud' id='au2' type='image' src='re.png' height='30px' width='30px' onclick='replay()' style='float:center;outline:none;'><input class='aud' id='au' type='image' src='play.png' height='90px' width='90px' onclick='play()' style='float:center;outline:none;opacity:0.8;'><input class='aud' id='au1' type='image' src='volume3.png' height='30px' width='30px' onclick='vol()' style='float:center;outline:none;'></div>
	 <div class="day">Song&nbsp&nbsp&nbsp&nbspof&nbsp&nbsp&nbsp&nbspthe&nbsp&nbsp&nbsp&nbspday</div>
	</div>
 </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1 style="text-align: center; font-family:fish;font-size:60px"> Discover Music</h1>
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
 


 <div class="alb">
 	<div class="text"> Featured Artists</div>
 	 <div id="carousel" style="padding-bottom: 55px">
	 <a href="artists/selena.php"><img src="http://localhost/Webtech_Project/artists/sg.jpg" id="item-4" height="400px" width="400px" /></a>
      <a href="artists/four.php"><img src="http://localhost/Webtech_Project/artists/1d.jpg" id="item-1" height="400px" width="400px" /></a>
      <a href="artists/harry.php"><img src="http://localhost/Webtech_Project/artists/harry.jpg" id="item-2" height="400px" width="400px" /></a>
      <a href="artists/imagine.php"><img src="http://localhost/Webtech_Project/artists/id.jpg" id="item-3" height="400px" width="400px" /></a>
      <a href="artists/whit.php"><img src="http://localhost/Webtech_Project/artists/wh.jpg" id="item-5" height="400px" width="400px" /></a>
      <a href="artists/harry.php"><img src="http://localhost/Webtech_Project/artists/harry.jpg" id="item-6" height="400px" width="400px" /></a>
      <a href="artists/taylor.php"><img src="http://localhost/Webtech_Project/artists/ts1.jpg" id="item-1" height="400px" width="400px" /></a>
      <a href="artists/sheeran.php"><img src="http://localhost/Webtech_Project/artists/ed.jpg" id="item-2" height="400px" width="400px" /></a>
      <a href="artists/adele.php"><img src="http://localhost/Webtech_Project/artists/ad.jpg" id="item-3" height="400px" width="400px" /></a>
    </div>
    </div>
</body>
<script src="http://localhost/Webtech_Project/search-modal.js"></script>
<script>

var count=0;
var count1=0;
var audio1=new Array();
audio1[0]=new Audio("FOUR/01 Steal My Girl.mp3");
audio1[1]=new Audio("FOUR/02 Ready to Run.mp3");
audio1[2]=new Audio("FOUR/03 Where Do Broken Hearts Go.mp3");
audio1[3]=new Audio("FOUR/04 18.mp3");
audio1[4]=new Audio("FOUR/05 Girl Almighty.mp3");
audio1[5]=new Audio("FOUR/06 Fool's Gold.mp3");
audio1[6]=new Audio("FOUR/07 Night Changes.mp3");
audio1[7]=new Audio("FOUR/11 Stockholm Syndrome.mp3");
audio1[8]=new Audio("FOUR/10 Spaces.mp3");
audio1[9]=new Audio("FOUR/09 Fireproof.mp3");
var s=0;
var a=new Array();
a[0]="Steal My Girl";
a[1]="Ready to Run";
a[2]="Where Do Broken Hearts Go";
a[3]="18";
a[4]="Girl Almighty";
a[5]="Fool's Gold";
a[6]="Night Changes";
a[7]="Stockholm Syndrome";
a[8]="Spaces";
a[9]="Fireproof";

audio1[s].onended=function(){
var d=document.getElementById("au");
d.src="play.png";
var audi=document.getElementById("audi");
var h=audi.children[1];
d.removeEventListener("click",pause,false);
d.addEventListener("click",play,false);
audi.removeChild(h);
count=0;
}

function pause(){
audio1[s].pause();
var d=document.getElementById("au");
d.src="play.png";
d.removeEventListener("click",pause,false);
d.addEventListener("click",play,false);
}


function play(){
  if(count==0){
s=Math.floor(Math.random() * 10);
  }
audio1[s].play();
var d=document.getElementById("au");
var audi=document.getElementById("audi");
d.src="pause2.png";
d.removeEventListener("click",play,false);
d.addEventListener("click",pause,false);

if(count==0)
{
var k=document.getElementById("control");
var o=document.createElement("div");
o.textContent=a[s];
o.style="color:white;font-family:paperdaisy;font-size:40px;padding-bottom:10px;";
audi.insertBefore(o,k);
count++;
}
}

function replay()
{
audio1[s].load();
play();
}
function vol()
{
var d=document.getElementById("au1");
if(count1==0)
{
d.src="volume2.png";
audio1[s].volume=0.5;
count1=1;
}
else if(count1==1)
{
d.src="volume1.png";
audio1[s].volume=0.0;
count1=2;
}
else if(count1==2)
{
audio1[s].volume=1.0;
d.src="volume3.png";
count1=0;
}
}

</script>

</html>

