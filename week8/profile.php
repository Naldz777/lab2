<html>
<head>
<title> David Naldo: Profile</title>
<link rel="stylesheet" href="ul {.css">
</head>

<body>
  <audio autoplay src="ladyfingers.mp3"></audio>
<div id = "header">
	<div class = "container">
		<nav>
			<a href = "wafu.html"><img src = "logo.png" class = "logo" title = "Click for Kiss of heaver" onclick ="Pogi()"></a>
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
	<div class = "Favorites">
		<div class = "My_Favorites">
			<div data-tab-target = "mainfav" class="fav_head" class ="active tab" >
				<h1> My Favorites<h1>
			</div>
			<div data-tab-target = "#subfavorite" id = "sub_fav" class ="tab">
				<p>Movies</p>
			</div>
			<div  data-tab-target ="#subfavorite1" id = "sub_fav1" class ="tab">
				<p>Music<p>
			</div>
			<div data-tab-target= "#subfavorite2" id = "sub_fav2" class ="tab">
				<p>Games</p>
			</div>
			<div data-tab-target= "#subfavorite3" id = "sub_fav3" class ="tab">
				<p>Foods</p>
			</div>
			<div class="tab-content">
				<div id = "mainfav" data-tab-content class ="active">
				<iframe style = "margin-left:230px; margin-top: 60px" width="900" height="505" src="https://www.youtube.com/embed/CFh5FzXIeBg?si=8SVLQtPmUvoZcEmQ" 
				title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div id ="subfavorite" data-tab-content class>
					<img src = "Movies.png" class = "Mov_img">
				</div>
				<div id ="subfavorite1" data-tab-content>
				<iframe style="border-radius:12px; margin-top: 80px" src="https://open.spotify.com/embed/artist/4xXCRXOfQKQ2gjWxNhNzYW?utm_source=generator" 
				width="30%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				<iframe style="border-radius:12px margin-top: 80px; margin-left:50px" src="https://open.spotify.com/embed/artist/6O74knDqdv3XaWtkII7Xjp?utm_source=generator" 
				width="30%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				<iframe style="border-radius:12px; margin-top: 80px; margin-left:50px"" src="https://open.spotify.com/embed/artist/0rvjqX7ttXeg3mTy8Xscbt?utm_source=generator"
				width="30%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>	
				<div id = "subfavorite2" data-tab-content>
					<img src = "Games.png" class = "Gam_img">
				</div>
				<div id = "subfavorite3" data-tab-content>
					<img src = "foods.png" class = "Food_img">
				</div>
			</div>
<script>
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
})
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