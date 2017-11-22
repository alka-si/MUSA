<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $email = $pwd ="";
$link = mysqli_connect("localhost", "root", "", "project");
$name = mysqli_real_escape_string($link, $_POST['uname']);
$pwd = mysqli_real_escape_string($link, $_POST['pwd']);
$email = mysqli_real_escape_string($link, $_POST['email']);

$sql = "INSERT INTO users (email,uname,pwd) VALUES ('$email', '$name', '$pwd')";
mysqli_query($link,$sql);
mysqli_close($link);
}

session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		@font-face {
   font-family: paperdaisy;
    src: url("fonts/paperdaisy.ttf");
}

@font-face {
   font-family: dreams;
    src: url("fonts/dreams.ttf");
}
		img{
			position: absolute;
		}
		#img{
			margin: 0;
			padding: 0;
			height: 100%;
			width: 100%;
		}

		#yellow{
            margin-left: 45.2%;
            margin-top: 42.5%;
            height:100px;
            position: absolute;
            cursor: pointer;
        }


		#gif{
			margin-left: 43%;
            margin-top: 7.7%;
			height: 200px;
			-webkit-animation: rotation 3s infinite linear;
		}


		@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}
		.button {
   		    position: absolute;
		    top: 50%;
		    left: 51.2%;
		    transform: translate(-50%, -50%);
		    color: #ffffffff;
		    font-family: paperdaisy;
		    font-size: 45px;
}

		body{
			margin: 0;
			padding: 0;
		}

        /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    .error {
      color: rgba(0,191,255,0.8);
      float: right;}

    /* Set a style for all buttons */
    button,#g {
        font-family: dreams;
        font-size: initial;
        background-color:black;
        color: white;
        padding: 14px 20px;
        margin: 8px 0px;
        border: none;
        cursor: pointer;
        width: 50%;
      text-align:center;
      border:1px solid rgba(0,191,255,0.8);
    }

    button:hover,#g:hover {
      background-color:rgba(0,191,255,0.5);
        opacity: 0.9;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 14px 50px;
        background-color: black;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 20%;
        border-radius: 20%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.1); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: rgba(0,0,0,0.9);
        margin:auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 40%; /* Could be more or less, depending on screen size */
      color:white;
    }

    .modal-content-main {
        background-color: rgba(0,0,0,0.95);
        margin:auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 40%; /* Could be more or less, depending on screen size */
      color:white;
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color:white;
        font-size: 35px;
        font-weight: bold;
    }
	.close1 {
    //position: absolute;
	float:right;
  margin-right: 10px;
    top: 0;
    color:white;
    font-size: 35px;
    font-weight: bold;
}

    .close:hover,
    .close:focus,.close1:hover,.close1:focus {
        color: rgba(0,191,255,0.5);
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
    }
        
    @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
    }

    label{
      font-family: dreams;
    }

	

	</style>
</head>
<body>
	<img id="img" src="backk.jpg" alt="main" >
	
	<div class="detail" onclick="document.getElementById('plug').style.display='block'" style="cursor: pointer;">
	<div class="button">PLUG IN</div> 
	<img id="gif" src="cdisc.png" alt="musa"></div>
	<div id="yellow"> <img src="logo.png" id="logo" onclick=" "></div>

	<div id="plug" class="modal">
  
  <div class="modal-content-main animate">
    <div>
	<span onclick="document.getElementById('plug').style.display='none'" class="close1" title="Close Modal">&times;</span>
    <br>
		<button onclick="document.getElementById('id01').style.display='block'" style="width:80%; margin: 22px 48px">LOGIN</button><br></div>

	
<div>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
echo "<h3 style='color:white;'>User created successfully</h3>";}
?>	
<button onclick="document.getElementById('id02').style.display='block'" style="width:80%;margin: 22px 48px">SIGN UP</button><br></div>
<div><form method="get" action="homepage.php">
 <a href="homepage.php"><input type="submit" id="g" style="width:80%;margin: 22px 48px" name="sub" value="ENTER AS GUEST"></a><br/><br/>
 </form></div>
</div>
</div>

<div id="id01" class="modal">

  
  <form class="modal-content animate" method="post" action="homepage.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="music.png" alt="Avatar" class="avatar" style="position: relative;">
    </div>

    <div class="container">
      <label><b>Username*</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password*</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>
      <input type="checkbox" checked="checked"> Remember me 
      
    </div>

    <div class="container">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" style="float:right;">Login</button><br>
    </div>
   </form>
</div>
	<?php/*
// define variables and set to empty values
$nameErr = $emailErr ="";
$name = $email = $pwd = $pwd1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $name = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/
?>

<div id="id02" class="modal">
  
  <form class="modal-content animate" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container">
	<h2 style="text-align:center;color:rgba(0,191,255,0.8)">Sign Up<span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span></h2>
	<p><span class="error">* required field.</span></p>
      <label><b>Email*</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
     
	  
	  <label><b>Username*</b></label>
      <input type="text" placeholder="Enter username" name="uname" required>

	  
      <label><b>Password*</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>

      <input type="checkbox" checked="checked">Remember me
      <p style="font-family: dreams;">By creating an account you agree to our <a href="#" style="color:cornflowerblue;">Terms & Privacy</a></p>

      <div class="container">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" style="float:right;">Sign Up</button>
      </div>
    </div>

  </form>

	</div>
</div>
</body>
<script>
	function f(){
		alert("HELLOO");
	}

  var modal = document.getElementById('plug');
	var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2 || event.target == modal) {
        modal.style.display = "none";
		modal1.style.display = "none";
    }
}
</script>
</html>