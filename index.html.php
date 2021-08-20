<!DOCTYPE html>
<html>
<head>
	<title> MY RESUME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="resume">
		<div class="left">
			<div class="profile">
				<img src="mypic.jpg" alt="my profile picture">
			</div>
			<div class="content"> 
				<div class="resume_item resume_info">
					<div class="title">
					<p class="bold"><?php echo'OLUSOGA MUYIWA'?></p>
					<p class="regular"> BackEnd Developer</p>
					
				</div>
				<ul>
					<li>
						<div class="icon"></div>
						<div class="data">
							Ojuelegba, Surulere, Lagos State</br>Nigeria
						</div>
					</li>
					<li>
						<div class="icon"></div>
						<div class="data">
							+234 9090558734
						</div>
					</li>
					<li>
						<div class="icon"></div>
						<div class="data">
							Olusogamuyiwa@gmail.com
						</div>
					</li>
					<li>
						<div class="icon"></div>
						<div class="data">
							www.ngpheyie.com
						</div>
					</li>
					
				</ul>
			</div>
				<div class="resume_item resume_skills">
					<div class="title">
					<p class="bold"> SKILLS</p>	
				</div>
				<ul>
					<li>
						<div class="skill_name">
							PHP
						</div>

					</li>
					<li>
						<div class="skill_name">
							PYTHON
						</div>

					</li>
					<li>
						<div class="skill_name">
							DATA ANALYSIS
						</div>

					</li>
				</ul>


				</div>
				<div class="resume_item resume_social">
						<div class="title">
					<p class="bold"> Contact me</p>	
				</div>

				
		        <form action="form.php" method="post" enctype="multipart/form-data">
		            <p><label for="fullName">Full name:</label><br>
		            <input type="text" name="fullname"><br></p>

		            

		           <p> <label for="email">Email:</label><br>
		            <input type="email" name="email"><br></p>

		             <p>  <label for="phonenumber">Phone Number:</label><br>
            		<input type="number" name="phonenumber" ><br></p> 

		            <p> <label for="message">MESSAGE:</label><br>
		            <input type="text" name="message"><br></p>

		            <input type="submit" value="Submit" name="submit"> 
		        </form>
				<!-- <ul>
					<li>
						<div class="icon">
						</div>
						<p class="semi-bold">
							FACEBOOK
						</p>
						<p>olusogamuyiwa@gmail.com</p>
					</li>
					<li>
						<div class="icon">
						</div>
						<p class="semi-bold">
							TWITTER
						</p>
						<p>olusogamuyiwa@gmail.com</p>
					</li>
					<li>
						<div class="icon">
						</div>
						<p class="semi-bold">
							GITHUB
						</p>
						<p>olusogamuyiwa@gmail.com</p>
					</li>
				</ul> -->
				</div>
			</div>
		</div>
		<div class="right">
			<div class="resume_item resume_about">
				<div class="title">
					<p class="bold">ABOUT ME</p>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="resume_item resume_work">
				<div class="title">
					<p class="bold">Work Experience</p>
				</div>
				<ul>
					<li>
						<div class="date">2013-2015 </div>
						<div class="info">
							<p class="semi_bold">Lorem ipsum dolor sit amet,</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation</p>
						</div>
					</li>
						<li>
						<div class="date">2013-2015 </div>
						<div class="info">
							<p class="semi_bold">Lorem ipsum dolor sit amet,</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation</p>
						</div>
					</li>
						<li>
						<div class="date">2013-2015 </div>
						<div class="info">
							<p class="semi_bold">Lorem ipsum dolor sit amet,</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation</p>
						</div>
					</li>
						<li>
						<div class="date">2013-2015 </div>
						<div class="info">
							<p class="semi_bold">Lorem ipsum dolor sit amet,</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation</p>
						</div>
					</li>
				</ul>
			</div>

			<div class="resume_item resume_education">
				<div class="title">
					<p class="bold">Education</p>
				</div>
				<ul>
						<li>
						<div class="date">2013-2015 </div>
						<div class="info">
							<p class="semi_bold">NATIONAL OPEN UNIVERSITY OF NIGERAI,</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				quis nostrud exercitation</p>
						</div>
					</li>
					<li>
						<div class="date">2013-2015 </div>
						<div class="info">
							<p class="semi_bold">NATIONAL OPEN UNIVERSITY OF NIGERAI,</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				quis nostrud exercitation</p>
						</div>
					</li>
					<li>
						<div class="date">2013-2015 </div>
						<div class="info">
							<p class="semi_bold">NATIONAL OPEN UNIVERSITY OF NIGERAI,</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				quis nostrud exercitation</p>
						</div>
					</li>
					<li>
						<div class="date">2013-2015 </div>
						<div class="info">
							<p class="semi_bold">NATIONAL OPEN UNIVERSITY OF NIGERAI,</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				quis nostrud exercitation</p>
						</div>
					</li>
				</ul>
			</div>

			<div class="resume_item resume_online">
				<div class="title">
					<p class="bold">ONLINE TUTORS</p>
					<p class="bold"><a href="https://internship.zuri.team/"> HNGi8 Internship Program</a></p>


					<ul>
						<li><img src="hng.png" alt="hng.png" width="100%" height="100%">
						</li>
						<li><img src="i4g.png" alt="i4g.png" width="100%" height="100%">
						</li>
						<li><img src="zuri.png" alt="zuri.png" width="100%" height="100%">
						</li>

					</ul>
				</div>
				
			</div>

		</div>
	</div>

</body>
</html>