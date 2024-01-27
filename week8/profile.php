<html>
<head>
<title> David Naldo: Profile</title>
<link rel="stylesheet" href="ul {.css">
</head>

<body>
<div id = "header">
	<div class = "container">
		<nav>
			<a href = "wafu.php"><img src = "logo.png" class = "logo" title = "Click for Kiss of heaver" onclick ="Pogi()"></a>
			<img src = "1.png" class = "name">
			<ul>
				<li><a href=>Home </a></li>
				<li><a href="#AM">About </a></li>
				<li><a href=>Gallery </a></li>
				<li><a href=>Portfolio </a></li>
				<li><a href=>Contact</a></li>
			</ul>
			<img src = "bar.png" class ="menu" onclick ="openmenu()">
			<div class = "menu-box" id = "menu">
				<div class = "right-L">
					<img src ="close.png" onclick = "closemenu()" class = "close">
				</div>
				<div class = "links">
					<a href ="#">Home</a><br>
					<a href ="#AM">About</a><br>
					<a href ="#">Service</a><br>
					<a href ="#">Portfolio</a><br>
					<a href ="#">Contact</a>
				</div>	
			</div>
		</nav>
	</div>
<div class = "vid_container">
<video autoplay muted class = "myvideo">
	<source src = "Show.mp4" type = "video/mp4">
</video>
</div>
	<div id ="AM">
		<div class = "content">
		<div id = "info">	
			<div id = "info_box">
				<img src = "AM pic.png" class = "AM_pic">
				<h1> About me</h1>
				<p>Bata pa lamang si David kinailangan niya nang magbanat ng buto para sa kanyang <br> pamilya. 
				Sa kabila ng kaniyang paghihirap nanatili ang kaniyang pagiging matatag <br> sa buhay Charot...
				David is an aspiring data analyst, he is currently studying <br> Computer Science Specializing in Cybersecurity
				and Forensics.
				</p>
			</div>
			<div id="info_box1">
				<h1>Background</h1>		
				<p> Name: David Naldo
				<br>age: 20 <br>Date of birth: July 17, 2003<br>
				<span onclick = "this.innerHTML = 'Civil status: Single and ready to Mingle'">Civil status: Single</span><br>
				hobby: Singing, cooking, Video-games <br>
				<p> Kindergarten: Binan Faith Christian School<br>
				Elementary: Sto.Tomas Elementary School<br>
				Highschool: Binan Secondary School of Applied Academics<br>
				Senior Highschool: Binan Integrated National Highschool<br>
				Course: Bachelors in Computer Science Specialization in Cybersecurity and Forensics<br>
				<input type="button" value = "Enhance font" onclick="increaseFontSizeBy1px()" class = "Sizer">
				<p id="info"></p>
				</p>
			</div>
		</div>
	</div>
</div>
<div class = "contact"><?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
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
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</div>
<script>
function increaseFontSizeBy1px() {
    txt = document.getElementById('info');
    style = window.getComputedStyle(txt, null).getPropertyValue('font-size');
    currentSize = parseFloat(style);
    txt.style.fontSize = (currentSize + 1) + 'px';
}

var menu = document.getElementById("menu");
function openmenu(){
	menu.style.top = "17%";
	menu.style.display ="inline-block";
}
function closemenu(){
	menu.style.top = "-100vh";
}
function Pogi() {
  alert("Ayy!! pogii!!!");
}
</script>

</body>

</html>