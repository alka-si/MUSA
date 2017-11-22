<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="logo.png" type="image/gif" rel="shortcut icon" />
<title>MUSA</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="artists.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
 <div class="topnav" id="nav">
 		<a class=“right” id="search"><img src="search_icon.png" alt="" style="width:20px; height:20px; cursor: pointer;"/></a>
    <?php if($_SESSION["name"]!=""){ echo "<a class='right' style='float:right;' href='../index.php'>Logout</a>";} 
         else{
       echo "<a class='right' style='float:right;' href='../index.php'>Login</a>";
     }    ?>
		<a class="right" href="artist.php">Artists</a>
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
 
 <!-- The Modal -->
<div id="myModall" class="modall">

  <!-- Modal content -->
  <div class="modal-contentl">
    <div class="modal-headerl">
      <span class="closel">&times;</span>
      <h1 style="text-align: center; font-family:fish;font-size:60px">Lyrics</h1>
	  <pre style="text-align:center; font-family:champagne"> </pre>
    </div>
    <div class="modal-bodyl">

    </div>
  </div>

</div>

 <div class="text">Taylor Swift</div>
     <div id="img" style="background: url('ts1.jpg') no-repeat center; float:left; background-size: contain;"></div>
<div class="play">
<button id="0">1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou Belong With Me</button><br/>
<button id="1">2&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBlank Space</button><br/>
<button id="2">3&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLove Story</button><br/>
<button id="3">4&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspI Knew You Were Trouble</button><br/>
<button id="4">5&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStory Of Us</button><br/>
<button id="5">6&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMine</button><br/>
<button id="6">7&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWhite Horse</button><br/>
<button id="7">8&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTeardrops On My Guitar</button><br/>
<button id="8">9&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBad Blood</button><br/>
<button id="9">10&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFifteen</button><br/>
</div>
</body>
<script>
var bg='ts1';
var id=0;
var count1=0;
var au=document.getElementsByTagName("button");
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
</script>
<script type="text/javascript" src="artists_final.js"></script>

<script type="text/javascript" src="http://localhost/Webtech_Project/search-modal.js"></script>

 </html>