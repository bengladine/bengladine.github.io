<!-- Website made by Ben Gladiné -->
<!DOCTYPE html>
<html>
	<head>
		<?php
			$title = "Ben Gladiné's Portfolio";
			$styleSheetName = "style.css";
			include "head.php"
		 ?>
		 <!-- smooth scroll -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <script>
		 $(document).ready(function(){
		   // Add smooth scrolling to all links
		   $("a").on('click', function(event) {

		     // Make sure this.hash has a value before overriding default behavior
		     if (this.hash !== "") {
		       // Prevent default anchor click behavior
		       event.preventDefault();

		       // Store hash
		       var hash = this.hash;
					 var targetOffset = $(hash).offset().top - 70;
		       // Using jQuery's animate() method to add smooth page scroll
		       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		       $('html, body').animate({
		         scrollTop: targetOffset
		       }, 800, function(){

		         // Add hash (#) to URL when done scrolling (default click behavior)
		       });
		     } // End if
		   });
		 });
		 </script>

	</head>
	<body>
		<nav>
			<?php include "navBar.php" ?>
		</nav>
		<article id="welcome">
			<img id="welcomeImage" src="./Resources/me.png">
			<div id="welcomeMessage">
				<h1 style="text-decoration: underline; text-underline-offset: 10px; ">Greetings Reader</h1>
				<p>I'm Ben Gladiné and welcome to my website. I'm 24 years old and I have a bachelor
					in <b>Teacher Mathematics and Physics for secondary school</b> and in
					<b>Game Development</b>. What I offer is a wide variety of skills and an active
					participating attitude. For details regarding experience, I refer you to the
					<a href="#projectsPage" alt="./index.php"><b><u>projects section</b></u></a>.
					More info regarding my background, have a look over <a target="_self" href="aboutme.php"><b><u>here</u></b></a>.
					<br><br>
					Thanks for visiting and perhaps see you soon.
					<br><br>
					Ben Gladiné
				</p>
			</div>
		</article>
		<hr>
		<div id="projectsPage" class="container">
			<h1 class="tab" >Projects</h1>
			<h2>Research & Development<hr class="titleLine"></h2>
			<div class="projectSection">
				<div = class="project">
					<h3>Research on Plantgrowth @Aeroplane</h3>
					<a href="aeroplane.php" ><img class="hoverImage projectImage" src="./Resources/ResearchAtAeroplane.png" alt="Sorry, could not load image." /></a>
				</div>
			</div>
			<h2>Coding Projects<hr class="titleLine"></h2>
			<div class="projectSection" style="align-items: center;">
				<div class="project" style="align-self: center;">
					<h3>Hit The Tower</h3>
					<a href="hitTheTower.php"><img class="hoverImage projectImage" src="./Resources/HitTheTower_1.png" alt="Sorry, could not load image." /></a>
				</div>
				<div class="project">
					<h3>2D engine</h3>
					<a href="minigin.php"><img class="hoverImage projectImage" src="./Resources/2D_engine.png" alt="Sorry, could not load image."/></a>
				</div>
				<div class="project">
					<h3>AI BOT</h3>
					<a href="aibot.php"><img class="hoverImage projectImage" src="./Resources/AI_Bot_2.png" alt="Sorry, could not load image."/></a>
				</div>
				<div class="project">
					<h3>Portal effect</h3>
					<a href="portals.php"><img class="hoverImage projectImage" src="./Resources/Portal/portalEffect.png" alt="Picture of portal effect."/></a>
				</div>
			</div>
			<h2>Art Projects<hr class="titleLine"></h2>
			<div class ="projectSection">
				<div class="project">
					<h3>Creating a simple level</h3>
					<a href="level.php"><img class="hoverImage projectImage" src="./Resources/LevelEditing/LevelEditing_Main.png" alt="Picture of level."/></a>
				</div>
				<div class="project">
					<h3>Optimizing, texturing and rigging a premade model</h3>
					<a href="robot.php"><img class="hoverImage projectImage" src="./Resources/Robot_Main.png" alt="Picture of textured robot."/></a>
				</div>
			</div>
			<h2>Other<hr class="titleLine"></h2>
			<div class="projectSection">
				<div class="project">
					<h3>Recording and adapting Foley sounds</h3>
					<a href="foley.php"><img class="hoverImage projectImage" src="./Resources/foley_Mic.jpg" alt="Picture foley mic, Neumann KM-184."/></a>
				</div>
			</div>
		</div>
		<br>
		<hr>
		<div id="skills">
			<h1 class="tab skillsContainer">Skills</h1>
			<!-- Hard Skills -->
			<h2 style="text-align:center; color: #eceee3;">Languages</h2>
			<div id="skillsTab">
				<div >
					<h3  style="color: #eceee3;">Computer Languages<hr style="color: #eceee3; max-width: 80%;"></h3>
						<div id="setSkills">
								<div class="skillResult">
									<h4 style="color: #eceee3;">C++</h4>
									<h4>Good</h4>
								</div>
								<div class="skillResult">
									<h4 style="color: #eceee3;">C#</h4>
									<h4>Good</h4>
								</div>
								<div class="skillResult">
									<h4 style="color: #eceee3;">HTML/CSS/PHP/JS</h4>
									<h4>This Website</h4>
								</div>
						</div>
				</div>
				<div >
					<h3 style="color: #eceee3;">Human Languages<hr style="color: #eceee3; max-width: 80%;"></h3>
						<div id="setSkills">
							<div class="skillResult">
								<h4 style="color: #eceee3;">Dutch</h4>
								<h4>Native</h4>
							</div>
							<div class="skillResult">
								<h4 style="color: #eceee3;">English</h4>
								<h4>Fluent</h4>
							</div>
							<div class="skillResult">
								<h4 style="color: #eceee3;">French</h4>
								<h4>Mediocre</h4>
							</div>
						</div>
				</div>
			</div>
			<!-- Soft Skills -->
			<h2 style="text-align:center; color: #eceee3;">Competences</h2>
			<div id="skillsTab">
				<h4>Flexible</h4>
				<h4>Social</h4>
				<h4>Eager to learn</h4>
				<h4>Enthousiastic</h4>
				<h4>Adaptive</h4>
			</div>
		</div>
		<br>
		<hr>
		<div id="contact">
			<h1 class="tab" >Contact</h2>
			<div class="contactContainer">
				<a href="mailto:gladine.ben@gmail.com"><img style="width: 100px;" class="icon" src="./Resources/mail.png"></a>
				<a href="http://www.linkedin.com/in/bengladine" target="_blank"><img style="width: 100px;" class="icon" src="./Resources/linkedin.png"></a>
			</div>
		</div>
		<br>
		<hr>
		<?php include "footer.php" ?>
	</body>
</html>
