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
				<img src="images/mypic.jpg" alt="my profile picture">
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
				<p>Seeking a challenging career with a progressive organization that provides an opportunity to showcase and improve my technical skills and ability in the field of information technology</p>
			</div>
			<div class="resume_item resume_work">
				<div class="title">
					<p class="bold">Work Experience</p>
				</div>
				<ul>
					<li>
						<div class="date">PROJECT ASSISTANT, 10/2018 TO 05/2020</div>
						<div class="info">
							<p class="semi_bold">De-UNITED FOODS INDUSTRIES LIMITED </p>
							<p>	Video Content Analysis</br>
							Maintaining of Assets<br>
							Collection, Arrangement and Distribution of Data<br>
							Solving Various Problems Faced by the Project<br>
								</p>
						</div>
					</li>
						<li>
						<div class="date">Supervisor, 2015 to current</div>
						<div class="info">
							<p class="semi_bold">Delamp’s Place (bet9ja) </p>
							<p>	Directed calls to appropriate individuals and departments.<br>
								Learned, referenced and applied product knowledge information.<br>
								Developed reputation as an efficient service provider with high levels of accuracy.<br>
								Served as liaison for customers, management and sales team.<br>
							</p>
						</div>
					</li>
						<li>
						<div class="date">Sales Representative, 10/2014 to 11/2015 </div>
						<div class="info">
							<p class="semi_bold">White Hope Logistics</p>
							<p>
									Used a consultative sales approach to understand and meet customer needs.<br>
									Collected and processed payments.<br>
								Contacted satisfied customers to offer additional services.<br>

							</p>
						</div>
					</li>
						<li>
						<div class="date">Supervisor, 02/2011 to 04/2014 </div>
						<div class="info">
							<p class="semi_bold">High Lamp Farms </p>
							<p>	Oversaw the loading and unloading of packages in the warehouse.<br>
								Marked clearance items down and moved the merchandise to its proper area of the store.<br>
								Resolved all customer complaints in a professional manner while prioritizing customer satisfaction.<br>
							</p>
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
						<div class="date">2017-2021 </div>
						<div class="info">
							<p class="semi_bold">NATIONAL OPEN UNIVERSITY OF NIGERAI,</p>
							<p>BSC ECONOMICS</p>
						</div>
					</li>
					<li>
						<div class="date">2013-2015 </div>
						<div class="info">
							<p class="semi_bold">Aptech Computer Institute</p>
							<p>Advanced Diploma: Software Engineering</p>
						</div>
					</li>
					
				</ul>
			</div>

			<div class="resume_item resume_online">
				<div class="title">
					<p class="bold">ONLINE TUTORS</p>
					<p class="bold"><a href="https://internship.zuri.team/"> HNGi8 Internship Program</a></p>


					<ul>
						<li><img src="images/hng.png" alt="hng.png" width="100%" height="100%">
						</li>
						<li><img src="images/i4g.png" alt="i4g.png" width="100%" height="100%">
						</li>
						<li><img src="images/zuri.png" alt="zuri.png" width="100%" height="100%">
						</li>

					</ul>
				</div>
				
			</div>

		</div>
	</div>

</body>
</html>