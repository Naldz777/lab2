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
		<img src = "AM pic.png" class = "AM_pic">
		<div id = "info">	
		<h1> About me</h1>
		<p>Bata pa lamang si David kinailangan niya nang magbanat ng buto para sa kanyang <br> pamilya. 
		Sa kabila ng kaniyang paghihirap nanatili ang kaniyang pagiging matatag <br> sa buhay Charot...
		David is an aspiring data analyst, he is currently studying <br> Computer Science Specializing in Cybersecurity
		and Forensics.
		</p>
		<h1>Background</h1>		
		<p> Name: David Naldo
		<br>age: 20 <br>Date of birth: July 17, 2003<br>
		<span onclick = "this.innerHTML = 'Civil status: Single and ready to Mingle'">Civil status: Single</span><br>
		Hobbies: Video Games, Cooking, Singing
		</p>
		<p> Kindergarten: Binan Faith Christian School<br>
		Elementary: Sto.Tomas Elementary School<br>
		Highschool: Binan Secondary School of Applied Academics<br>
		Senior Highschool: Binan Integrated National Highschool<br>
		Course: Bachelors in Computer Science Specialization in Cybersecurity and Forensics<br>
		<input type="button" value = "Enhance font" onclick="increaseFontSizeBy1px()" class = "Sizer">
		<p id="info"></p>
		</div>
	</div>
<?php
$lol = "Available";
?>	
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