<?php 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Namah Shrestha</title>
		
		<!--viewport for responsive design-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--bootstrap css library import-->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		
		<!--custom css-->
		<link rel="stylesheet" href="css/index_style.css"/>
		
		<!--custom font-->
		<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

	</head>
	<body>
		<div id="hero_slider" class="carousel slide" data-ride="carousel" data-interval="3000">
			
			<!--carousel indicators-->
			<ol class="carousel-indicators">
				<li data-target="#hero_slider" data-slide-to="0" class="active"></li>
				<li data-target="#hero_slider" data-slide-to="1"></li>
				<li data-target="#hero_slider" data-slide-to="2"></li>
			</ol>
			
			<!--Carousel imgaes-->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/3.jpg" alt="web_dev" id="bck_img1"/>
					<div class="carousel-caption" id="caption1">
						<img src="img/profile_work.jpg" id="dp"/>
						<h1 id="header1">Namah Shrestha</h1>
						<h2 id="semi1">Hi, I am Namah Shrestha. I am a web development enthusiast. To know what I work with, you can visit the skills page.
						To know more about me visit the about me page. It is a pleasure to have you here. I am really very excited to work with you. 
						</h2>
						<p class="semi_para1">(To know more about me, visit the about page).</p>
					</div>
				</div>
				<div class="item">
					<img src="img/2.jpg" alt="coffee" id="bck_img2"/>
					<div class="carousel-caption" id="caption2">
						<h1 id="header2">Contact me</h1>
						<h2 class="semi2">To contact me, you can visit my contacts page. You can also visit my social media profiles (add me as a friend).</h2>
						
					</div>
				</div>
				<div class="item">
					<img src="img/1.jpg" alt="table" id="bck_img3"/>
					<div class="carousel-caption" id="caption3">
						<h1 id="header3">Hire Me?</h1>
						<h2 class="semi3">Trust me, you will not regret this</h2>
						<!--herealso-->
						<a href="#" class="btn btn-default" align="center" data-toggle="modal" data-target="#hire_modal" type="button" id="hire-send">Hire me?</a>
					</div>
				</div>
			</div>
			
			<!--carousel next and prev buttons-->
			<a class="left carousel-control" href="#hero_slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#hero_slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			
		</div>
		
		<!--Modal for content contact-->
		<div class="modal fade" id="contact_modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" id="contact-modal-close">x</button>
						<h1 class="modal-title" align="center" style="font-size:1.5em;" id="contact-modal-header-h1"></h1>
						<h2 class="modal-title" align="center" style="font-size:0.8em;" id="contact-modal-header-h2"></h2>
					</div>
					<div class="modal-body">
						<div id="modal-body-one" style="display:none;">
							<form class="form-horizontal" style="padding:20px;" id="contact-modal-form">
								<div class="form-group">
									<label for="confirm-code" class="col-xs-3 control-label">Code:</label>
									<div class="col-xs-9">
										<input type="text" class="form-control" name="confirm-code" id="confirm-code-input" placeholder="Enter Code"/>
									</div>
								</div>
								<div class="col-xs-3 col-xs-offset-3">
									<a href="#" name="sub" class="btn btn-default" align="center" style="background:#000;color:white;" id="confirm-submit">Go</a>
								</div>
							</form>
						</div>
						<div id="modal-body-two" style="display:none;">
							<h2 align="center" id="contact-modal-dp2-h2" style="font-size:0.8em;">Your message has been successfully sent. Thank you for contacting me. I will contact you shortly.</h2>
						</div>
						<div id="modal-body-three" style="display:none;">
							<h2 align="center" id="contact-modal-dp3-h2" style="font-size:0.8em;"></h2>
						</div>
					</div>
				</div><!--End modal content-->
			</div><!--End modal dialog-->
		</div><!--End modal-->
		<!--Modal end-->
		
		<!--Modal For hire-->
		<div class="modal fade" id="hire_modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" id="hire-modal-close">x</button>
						<h1 class="modal-title" align="center" style="font-size:1.5em;" id="hire-modal-header-h1">Hire Me</h1>
						<h2 class="modal-title" align="center" style="font-size:0.8em;" id="hire-modal-header-h2">Please fill in your credentials.</h2>
					</div>
					<div class="modal-body">
						<div id="hire-modal-body-one" style="display:block;">
							<form class="form-horizontal" style="padding:20px;" id="hire-modal-form">
								<div class="form-group">
									<label for="email-code" class="col-xs-3 control-label">Email:</label>
									<div class="col-xs-9">
										<input type="text" class="form-control" name="email-code" id="email-code-input" placeholder="Email"/>
									</div>
								</div>
								<div class="form-group">
									<label for="workdef-code" class="col-xs-3 control-label">Work:</label>
									<div class="col-xs-9">
										<input type="text" class="form-control" name="workdef-code" id="workdef-code-input" placeholder="Please enter work Description.Please do not begin with a blank space."/>
									</div>
								</div>
								<div class="form-group">
									<label for="skillsreq-code" class="col-xs-3 control-label">Skills:</label>
									<div class="col-xs-9">
										<input type="text" class="form-control" name="skillreq-code" id="skillsreq-code-input" placeholder="Please type the skills required.Please do not begin with a blank space."/>
									</div>
								</div>
								<div class="col-xs-3 col-xs-offset-3">
									<a href="#" type="button" class="btn btn-default" align="center" style="background:#000;color:white;" id="hire-form-submit">Submit</a>
								</div>
							</form>
						</div>
						<div id="hire-modal-body-two" style="display:none;">
							<form class="form-horizontal" style="padding:20px;" id="hire-modal-form">
								<div class="form-group">
									<label for="hire-confirm-code" class="col-xs-3 control-label">Code:</label>
									<div class="col-xs-9">
										<input type="text" class="form-control" name="hire-confirm-code" id="hire-confirm-code-input" placeholder="Enter confirmation code"/>
									</div>
								</div>
								<div class="col-xs-3 col-xs-offset-3">
									<a href="#" type="button" class="btn btn-default" align="center" style="background:#000;color:white;" id="hire-confirm-submit">Submit</a>
								</div>
							</form>
						</div>
						<div id="hire-modal-body-three" style="display:none;">
							<h2 align="center" id="hire-modal-dp3-h2" style="font-size:0.8em;"></h2>
						</div>
					</div>
				</div><!--End modal content-->
			</div><!--End modal dialog-->
		</div><!--End modal-->
		<!--Modal end-->
		
		<!--navigation menu-->
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li id="homebtn" class="act">Home</li>
				<li id="abtbtn" class="">About Me</li>
				<li id="skillbtn" class="">Skills</li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li id="contactbtn" class="">Contact Me<span class="glyphicon glyphicon-earphone"></span></li>
				<li id="hirebtn"class="">Hire Me<span class="glyphicon glyphicon-usd"></span></li>
			  </ul>
			</div>
		 </div>
		 <div class="nav_extension" style="display:none;">
			<h1 align="center">Welcome</h1>
			<h2 align="center" id="changetext">You are at the Home page</h2>
		 </div>
		</nav>
		
		<!-- now the content -->
		<div class="content">
			<div class="content-home">
				<div class="container">
					<div class="row">
						<div class="col-xs-12" id="work_header">
							<h1>Home Page</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12" id="work">
							<h1 align="center">Work</h1>
							<h2 align="center">I provide the following services</h2>
							<div class="row" id="work_type">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="work_frontend">
									<h1 align="center">Front-end</h1>
									<div>
										<img src="img/responsive.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
									</div>	
									<div style="margin-top:30px;">
										<h2 align="center">I use bootstrap, jquery and css (with media queries), to create beautiful and responsive pages.</h2>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="work_backend">
									<h1 align="center">Back-end</h1>
									<div>
										<img src="img/one.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
									</div>	
									<div style="margin-top:25px;">
										<h2 align="center">I like to use a combination of PHP, AJAX and MySQL to work server-side along with databases.</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12" id="work_footer">
									<h2 align="center">For further details on what I do visit the skills page</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="aboutsite">
						<h1 align="center">About this site</h2>
						<h2 align="center">This section describes what you'll find in the other pages</h2>
						<div class="col-xs-12" id="#aboutsite_aboutme">
							<h2 align="center" style="font-weight:bold;">About me Page</h2>
							<h2 align="center" style="margin-top:10px;">This section contains my personal information such as my objectives, hobbies, educational details, location,etc.</h2>
						</div>
						<div class="col-xs-12" id="#aboutsite_skills">
							<h2 align="center" style="font-weight:bold;">Skills Page</h2>
							<h2 align="center" style="margin-top:10px;">This section contains information on all the skills I posess. These include front-end technologies, back-end technologies, data transfer technologies, Frameworks, API, version control, etc. The areas under progress are technologies that I am currently working on. However, I have got an understanding of what they are and how they work.</h2>
						</div>
						<div class="col-xs-12" id="#aboutsite_contactme">
							<h2 align="center" style="font-weight:bold;">Contact me Page</h2>
							<h2 align="center" style="margin-top:10px;">This section contains my contact information which inlcudes my email, contact number, as well as links to my social media profiles</h2>
						</div>
						<div class="col-xs-12" id="#aboutsite_hireme">
							<h2 align="center" style="font-weight:bold;">Hire me Page</h2>
							<h2 align="center" style="margin-top:10px;">This section is meant for those who take an interest in my work. You can enter your credentials in order to hire me. Upon completion, you will be asked to enter conformation code provided to you. You can also view the total number of hires and the total number of visits to this website.</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="content-abt">
				<div class="container">
					<div class="row" id="abtme_header">
						<div class="col-sm-12">
							<h1>About Me</h1>
						</div>
					</div>
					<div class="row" id="abtme_summary">
						<div class="col-sm-12">
							<h1 align="center">BIO</h1>
								<div id="dl1">	
									<dl class="dl-horizontal">
										<dt>Name</dt>
										<dd>Namah Shrestha</dd>
										<dt>Age</dt>
										<dd>22</dd>
										<dt>Gender</dt>
										<dd>Male</dd>
										<dt>DOB</dt>
										<dd>09/07/1995</dd>
										<dt>Marital Status</dt>
										<dd>Unmarried</dd>
										<dt>Blood Group</dt>
										<dd>O+ve</dd>
										<dt>Address</dt>
										<dd>Limbu Basty, Checkpost, Siliguri, WestBengal, India</dd>
										<dt>Nationality</dt>
										<dd>Indian</dd>
									</dl>
								</div>
						</div>
					</div>
					<div class="row" id="abtme_objectives">
						<div class="col-sm-12">
							<h1 align="center">Summary</h1>
							<div id="wrp">
								<h2 style="padding:5px;margin-top:7px;">I am enthusiastic, hardworking, always ready to face new challenges and always ready to learn new things.</h2>
								<h2 style="padding:5px;">I love software development and have decided to choose web development as a field of interest.</h2>
							</div>
						</div>
					</div>
					<div class="row" id="abtme_hobbies">
						<div class="col-sm-12">
							<h1 align="center">Hobbies</h1>
							<div id="dl2">	
								<dl>
									<dt>Music</dt>
									<dd>I love music. I love listening to it and I love playing it.It is a huge part of my life.</dd>
									<dt>Programming</dt>
									<dd>I did a bit of html and qbasic back in school but it didn't catch my interest back then. I learned programming in college and have loved it ever since. I love playing around with them.</dd>
									<dt>Fun</dt>
									<dd>Mostly play music for fun, not much of an outdoor person, like hanging out with friends, play games and have got a huge dream of travelling to all sorts of places.</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="row" id="abtme_education">
						<div class="col-sm-12">
							<h1 align="center">Education Details</h1>
							
							<div class="table-responsive" id="tabl">          
								<table class="table">
									<thead>
										<tr>
											<th>Grade</th>
											<th>Educational Board</th>
											<th>Name of examination</th>
											<th>Institute</th>
											<th>Year of Passing</th>
											<th>Marks</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>10</td>
											<td>School Leaving Certificate (SLC)</td>
											<td>School Leaving Certificate (SLC)</td>
											<td>Campion School, Lagankhel, Lalitpur, Kathmandu, Nepal</td>
											<td>2011</td>
											<td>83.5%(Percentage)</td>
										</tr>
										<tr>
											<td>12</td>
											<td>Higher Secondary Educational Board(HSEB)</td>
											<td>Higher Secondary Educational Board(HSEB)</td>
											<td>Campion Academy, Higher Secondary School, Lagankhel, Lalitpur, Kathmandu, Nepal</td>
											<td>2013</td>
											<td>58.5%(Percentage)</td>
										</tr>
										<tr>
											<td>UG</td>
											<td>Sikkim Manipal University(SMU)</td>
											<td>Bachelor of Technology in Information Technology</td>
											<td>Sikkim Manipal Institute of Technology (SMIT), Majitar, Sikkim, India</td>
											<td>2017</td>
											<td>8.03(CGPA out of 10)</td>
										</tr>
									</tbody>
								</table>	  
							</div><!--tabl end-->
						</div><!--col-sm-->
					</div><!--Abouteducation end-->	
					<div class="row" id="abtme-languages">
						<div class="col-sm-12">
							<h1 align="center">Languages Known</h1>
							<div class="table-responsive" style="margin-top:30px;" id="tabl">          
								<table class="table">
									<thead>
										<tr>
											<th>Languages Known</th>
											<th>Read</th>
											<th>Write</th>
											<th>Speak</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>English</td>
											<td><span class="glyphicon glyphicon-ok"></span></td>
											<td><span class="glyphicon glyphicon-ok"></span></td>
											<td><span class="glyphicon glyphicon-ok"></span></td>
										</tr>
										<tr>
											<td>Hindi</td>
											<td><span class="glyphicon glyphicon-ok"></span></td>
											<td><span class="glyphicon glyphicon-ok"></span></td>
											<td><span class="glyphicon glyphicon-ok"></span></td>
										</tr>
										<tr>
											<td>Nepali</td>
											<td><span class="glyphicon glyphicon-ok"></span></td>
											<td><span class="glyphicon glyphicon-ok"></span></td>
											<td><span class="glyphicon glyphicon-ok"></span></td>
										</tr>
									</tbody>
								</table>	  
							</div>
						</div>
					</div>
				</div><!--end container-->
			</div><!--end content-about-->
			<div class="content-skills" >
				<div class="container">
					<div class="row" id="skills_header">
						<div class="col-sm-12">
							<h1>Skills Page</h1>
						</div>
					</div>
					<div class="row" id="skills_frontend">
						<div class="col-sm-12">
							<h1 align="center" style="margin-top:10px;padding:5px;">Front end skills</h1>
							<h2 align="center" style="margin-top:10px;padding:5px;">Here are some of the frontend tools that I use</h2>
							<div class="front_skills">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="html_css" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">HTML and CSS3</h1>
										<img src="img/CSS3&html.svg" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">The basics of any web-developer are these two languages. I like to use the new CSS3 features such as animation, transitions, media queris as well as the grid system to make websites interactive and responsive</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3"  id ="boot_strap" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">Bootstrap</h1>
										<img src="img/bootstrap-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">I like to use Twitter bootstrap for creating responsive design. I like using it's built in functionalities as it reduces development time and is easy to customize.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="java_script" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">JavaScript</h1>
										<img src="img/javascript-logo.jpg" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">The basis of every web developer Javascript is a scripting language that works on the client side. It is basically a programming language to add interactivity to the page such as detecting events, window size, form validation and also interact with server side languages. Recently javascript has been growing in popularity and has also developed a branch to work on the server side. The branch is called Nodejs.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="j_query" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">JQuery</h1>
										<img src="img/jquery-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">JQuery is a client side framework of javascript. I prefer using jQuery because it performs all client side activities performed by javascript and is easier to write, it also solves all the cross browser issues of Javascript, it also comes with some additional built-in functionalities and libraries and it is also an open-source framework and can easily be downloaded form their official website.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="react_js" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">ReactJs</h1>
										<img src="img/react-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">This area is under progress.</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="skills_backend">
						<div class="col-sm-12">
							<h1 align="center" style="margin-top:10px;padding:5px;">Back end skills</h1>
							<h2 align="center" style="margin-top:10px;padding:5px;">Here are some of the backend tools that I use</h2>
							<div class="back_skills">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="html_css" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">PHP</h1>
										<img src="img/php-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">PHP is one of the server side scripting languages. It works in the backend with all databases including relational as well as non-relational databases. It runs on all servers but the most popular and the cheap one is apache.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3"  id ="boot_strap" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">MySQL</h1>
										<img src="img/mysql-logo.jpg" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">MySql is a relational database management system for storing data of a website. It supports object oriented as well as procedural oriented syntax. It can also be used with PDO(PHP Data Objects). It is the most frequently used database storage system with PHP.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="java_script" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">AJAX</h1>
										<img src="img/ajax-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">AJAX stands for asynchronus Javascript and XML. it is a programming technique that uses javascript to send data to the server rather than forms. As a result a wide range of elements can send data to the server (not only forms) and the main reason to use AJAX is to update the contents of a page without having to refresh the entire page.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="java_script" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">NodeJS</h1>
										<img src="img/node-logo.jpg" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">This area is under progress</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="j_query" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">MongoDB</h1>
										<img src="img/mongodb-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">This area is under progress.</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="skills_api">
						<div class="col-sm-12">
							<h1 align="center" style="margin-top:10px;padding:5px;">API skills</h1>
							<h2 align="center" style="margin-top:10px;padding:5px;">This area is under progress</h2>
							<div class="api_skills">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="html_css" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">RESTful API</h1>
										<img src="img/restapi-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">This area is under progress.</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="skills_mvc">
						<div class="col-sm-12">
							<h1 align="center" style="margin-top:10px;padding:5px;">MVC Framework</h1>
							<h2 align="center" style="margin-top:10px;padding:5px;">This area is under progress</h2>
							<div class="mvc_skills">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="html_css" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">Laravel</h1>
										<img src="img/laravel-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">This area is under progress.</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="skills_dtt">
						<div class="col-sm-12">
							<h1 align="center" style="margin-top:10px;padding:5px;">Data Transfer Technologies</h1>
							<h2 align="center" style="margin-top:10px;padding:5px;">These are some data transfer technologies that I use</h2>
							<div class="dtt_skills">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="java_script" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">JSON</h1>
										<img src="img/json-logo.jpg" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">JavaScript Object Notation is a way to interchange data. It uses javascript object format to store and transfer data. it is becoming more popular nover XML nowdays.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="j_query" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">XML</h1>
										<img src="img/xml-logo.jpg" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">Extended Markup Language is a markup language used for transfering data. It allows us to create custom tags under certain rules.</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="skills_version">
						<div class="col-sm-12">
							<h1 align="center" style="margin-top:10px;padding:5px;">Version Control</h1>
							<h2 align="center" style="margin-top:10px;padding:5px;">Visit my github profile.</h2>
							<div class="version_skills">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="j_query" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">Github</h1>
										<img src="img/git-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">Github is an open-source version control platform. I learned github to save my code. I like to use it to look at other's codes, projects. Also it saves different versions of the work allowing me to go back and forth betweeen changes.</h2>
											<h2 align="center" style="font-size:1.0em;margin-top:10px;padding:5px;">Visit my github profile here: <a href="https://github.com/Zim95">https://github.com/Zim95</a></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="skills_programming">
						<div class="col-sm-12">
							<h1 align="center" style="margin-top:10px;padding:5px;">Other Programming Languages</h1>
							<h2 align="center" style="margin-top:10px;padding:5px;">Here are the other programming languages that I know</h2>
							<div class="programming_skills">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="html_css" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">C</h1>
										<img src="img/c-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">C was the first programming language that I learned in college. I learned the fundamentals of programming in C.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3"  id ="boot_strap" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">C++</h1>
										<img src="img/cpp-logo.jpg" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">I learned C++ in the fourth semester of my college years. I learned the concept of Object Oriented Programming along with C++ in that course.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="java_script" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">SQL</h1>
										<img src="img/sql-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">I learned SQL in the fourth semester of college. I learned the fundamentals of relational database models with SQL.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="j_query" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">Java</h1>
										<img src="img/java-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">I learned Java in the sixth semester of college. The basics of core Java were taught to us.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="react_js" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">Python</h1>
										<img src="img/python-logo.jpg" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">I used python to implement my mini and major project which were both data science projects.</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="skills_project">
						<div class="col-sm-12">
							<h1 align="center" style="margin-top:10px;padding:5px;">Projects</h1>
							<h2 align="center" style="margin-top:10px;padding:5px;">Here are some details on projects that I have done.</h2>
							<div class="project_skills">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="html_css" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">Activity Recognition using smartphone data (Mini Project)</h1>
										<img src="img/ds-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">Five people were made to walk and sit with smartphones in their pockets. The readings of the accelerometer inside their phones were recorded using an app. Then the readings were clustered into lists in Python using k-means clustering. Each new data point would then be clustered and identified as either sitting or walking. This allowed each new data point to be identified, rather than a group of datasets.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3"  id ="boot_strap" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">Anomaly Detection in vital signs (Major Project)</h1>
										<img src="img/ds-logo2.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">The ECG recordings of patients were obtained from MIT-BIH arrythmia database in text format via physionet.org. Then P,Q,R,S and T waves were extracted based on threshold and position. Then each feature was subjected to a sliding window which predicted a number based on previous values inside it. A range of error was calculated for this predicted value. If the current reading at that point was not within the calculated range then it would be flagged as an anomaly.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="java_script" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">Portfolio Site</h1>
										<img src="img/portfolio-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">This site was also a part of my projects. It is available in github at: <a href="https://github.com/Zim95/Portfolio">https://github.com/Zim95/Portfolio</a></h2>
											<h2 style="font-size:1.0em;margin-top:5px;padding:5px;">I used HTML,CSS3,Bootstrap,Jquery,AJAX,PHP, PHP and MySQL to implement this site.</h2>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col col-md-12 col-lg-3" id="j_query" style="height:370px;background:#bdc3c7;overflow:scroll;overflow-x:hidden;margin:2%;">
										<h1 align="center" style="font-size:1.2em;">Chat Application</h1>
										<img src="img/chat-logo.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										<div style="margin-top:30px;">
											<h2 align="center" style="font-size:1.0em;">It is a social network site that I am currently working on. It is being implemented in PHP and MYSQL. You can find it here at:<a href="https://github.com/Zim95/chatApplication">https://github.com/Zim95/chatApplication</a></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content-contact">
				<div class="container">
					<div class="row" id="contact-header">
						<div class="col-sm-12">
							<h1>Contact Page</h1>
						</div>
					</div>
					<div class="row" id="contact-content" style="border-bottom:1px solid #262626;padding-bottom:10px;">
						<h1 align="center" style="font-size:1.8em;">I'd <span class="glyphicon glyphicon-heart-empty"></span> to hear from you</h1>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="border-right:2px solid #262626;">
							<!--bootstrap form-->
							<form class="form-horizontal" style="padding:20px;">
								<div class="form-group">
									<label for="name" class="col-xs-3 control-label">Name</label>
									<div class="col-xs-9">
										<input type="text" class="form-control" name="name" placeholder="Enter Name" id="contact-name"/>
									</div>
								</div>

								<div class="form-group">
									<label for="email" class="col-xs-3 control-label">Email</label>
									<div class="col-xs-9">
										<input type="email" class="form-control" name="email" placeholder="Email" id="contact-email"/>
									</div>    
								</div>
								<div class="form-group">
									<label for="message" class="col-xs-3 control-label">Message</label>
									<div class="col-xs-9">
										<textarea placeholder="Enter Message Here" name="message" class="form-control" id="contact-message"></textarea>
									</div>
								</div>
								<div class="col-xs-3 col-xs-offset-3">
									<a href="#" class="btn btn-default" align="center" data-toggle="modal" data-target="#contact_modal" type="button" id="contact-send">Send</a>
								</div>
							</form>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<!--social media form-->
							<div class="phone_mail">
								<h2 style="margin-top:10%;">
									<span class="glyphicon glyphicon-map-marker"></span> 
									<b>Limbu Basti, Checkpost</b>
									<p style="font-size:0.8em;">Siliguri, West Bengal</p>
								</h2>
								<h2 style="margin-top:10%;"><span class="glyphicon glyphicon-earphone"></span>  +91-7319463066</h2>
								<h2 style="margin-top:10%;"><span class="glyphicon glyphicon-envelope"></span>  shresthanamah@gmail.com</h2>
							</div>
						</div>
					</div>
					<div class="row" id="contact-footer">
						<h1 align="center" style="font-size:1.8em;">I am Social</h1>
						<div class="col-xs-3 col-sm-3 col-sm-offset-3">
							<a class="fa fa-facebook" href="https://www.facebook.com/namah.shrestha.58"></a>
						</div>
						<div class="col-xs-3 col-sm-3">
							<a class="fa fa-google" href="https://plus.google.com/114804888205115302684"></a>
						</div>
						<div class="col-xs-3 col-sm-3">
							<a class="fa fa-github" href="https://github.com/Zim95"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="content-hire">
				<div class="container">
					<div class="row" id="hire-header">
						<div class="col-sm-12">
							<h1>Hire Me</h1>
						</div>
					</div>
					<div class="row" id="hire-hire">
						<div class="col-sm-12">
							<h1 align="center">Hire Stats</h1>
							<div class="row" id="hire-stats">
							
								<!--Nav Tabs-->
								<ul class="nav nav-tabs responsive" role="tablist">
									<li role="presentation" class="active"><a href="#hire-status" aria-controls="hire-status" role="tab" data-toggle="tab"> Status </a></li>
									<li role="presentation"><a href="#hire-total" aria-controls="hire-total" role="tab" data-toggle="tab"> Total Hires </a></li>
									<li role="presentation"><a href="#hire-history" aria-controls="hire-historys" role="tab" data-toggle="tab"> Hire History </a></li>
								</ul>
								
								<!-- Tab Panes-->
								<div class="tab-content responsive" style="padding:20px;">
									<div role="tabpanel" class="tab-pane active" id="hire-status">
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<img id="hire-tab-image" src="img/free.png" class="img-thumbnail" alt="Responsive Design" width="70%" height="190" style="border-radius:70%;position:relative;left:15%;"/>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-2 col-lg-6 col-lg-offset-2">
											<h1 align="center" id="hire-tab-headertext"style="font-size:1.9em;margin:10px;padding:10px;">I am available for work</h1>
											<h2 id="hire-tab-text1"style="font-size:1.2em;margin:10px;padding:10px;">To hire me, click on the hire me button.You'll be asked to enter your email,name and a few other details. </h2>
											<h2 id="hire-tab-text2"style="font-size:1.2em;margin:10px;padding:10px;">Or you could just signup using google or facebook.</h2>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="hire-total">
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<h1 id="hires-tab-image" width="70%" height="190" align="center" style="border-radius:59%;margin-left:80px;padding:22px;background:white;position:relative;left:15%;">0</h1>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-2 col-lg-6 col-lg-offset-2">
											<h1 align="center" id="hires-tab-headertext"style="font-size:1.9em;margin:10px;padding:10px;">The number is the number of times I have been hired</h1>
											<h2 id="hires-tab-text1"style="font-size:1.2em;margin:10px;padding:10px;">Help me increase this number.</h2>
											<h2 id="hires-tab-text2"style="font-size:1.2em;margin:10px;padding:10px;">Click on Hire me</h2>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="hire-history">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<h1 align="center" id="hires-tab-headertext"style="font-size:1.9em;margin:10px;padding:10px;">Here is a list of people who have hired me</h1>
											<div class="row" id="hire-history">
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:100px;overflow:scroll;overflow-x:hidden;background:white;">
													<table class="table">
														<thead>
															<tr>
																<th><p align="center">Email</p></th>
																<th><p align="center">Work</p></th>
																<th><p align="center">Skills Required</p></th>
															</tr>
														</thead>
														<tbody id="hire-history-table-row">
														</tbody>
													</table>	  
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--here-->
							
							<div class="row" id="hire-stats-button" style="margin:20px;padding:20px;">
								<a href="#" class="btn btn-default" align="center" data-toggle="modal" data-target="#hire_modal" type="button" id="hire-send" style="opacity:1.0;background:#262626;color:#fff;">Hire me?</a>
							</div>
						</div>
					</div>
					<div class="row" id="hire-ratings">
						<div class="col-sm-12">
							<h1 align="center">Ratings</h1>
							<div class="row" id="hire-rates">
							
								<!--Nav Tabs-->
								<ul class="nav nav-tabs responsive" role="tablist">
									<li role="presentation" class="active"><a href="#hire-seerate" aria-controls="hire-seerate" role="tab" data-toggle="tab"> See Ratings </a></li>
									<li role="presentation"><a href="#hire-ratework" aria-controls="hire-ratework" role="tab" data-toggle="tab"> Rate Work </a></li>
									<li role="presentation"><a href="#hire-readreviews" aria-controls="hire-readreviews" role="tab" data-toggle="tab"> Read Reviews </a></li>
									<li role="presentation"><a href="#hire-addreviews" aria-controls="hire-addreviews" role="tab" data-toggle="tab"> Write Reviews </a></li>
								</ul>
								
								<!-- Tab Panes-->
								<div class="tab-content responsive" style="padding:20px;">
									<div role="tabpanel" class="tab-pane active" id="hire-seerate">
										Ratings - Sorry this area is under construction
									</div>
									<div role="tabpanel" class="tab-pane" id="hire-ratework">
										Rate My Work - Sorry this area is under construction
									</div>
									<div role="tabpanel" class="tab-pane" id="hire-readreviews">
										Read Reviews - Sorry this area is under construction
									</div>
									<div role="tabpanel" class="tab-pane" id="hire-addreviews">
										Write Reviews - Sorry this area is under construction
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="hire-pagehit">
						<div class="col-sm-12">
							<h1 align="center">PageHits</h1>
							<div class="graph">
								<h2 align="center" style="margin-top:20px;">This area is under construction.</h2>
							</div>
						</div>
					</div>
					<div class="row" id="hire-preferences">
						<div class="col-sm-12">
							<h1 align="center">Preferences</h1>
							<h2 align="center" style="margin:10px;padding:10px;"><b>Preferred Designation:</b>Front-End Developer, Back-End Developer, Full Stack Developer, Data Analyst</h2>
							<h2 align="center" style="margin:10px;padding:10px;"><b>Preferred Job Location:</b> Karnataka, Bangalore</h2>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
		<footer>
			<div class="row">
				<div class="col-xs-7 col-xs-offset-2" style="padding:20px;">
					<h1 align="center">Thanks for visiting.</h1>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<h2 align="center" style="font-size:1.3em;margin-top:20px;padding:20px;">This site is under maintainance. I am really sorry about the bugs. They will be fixed shortly.</h2>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<h2 align="center" style="font-size:1.3em;margin-top:20px;padding:20px;">New Features are being added to the site so stay tuned. Keep hiring.</h2>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<h2 align="center" style="font-size:1.3em;margin-top:20px;padding:20px;">This is not the complete site. I am working on the features.</h2>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<h2 align="center" style="font-size:1.3em;margin-top:20px;padding:20px;">First five hirers will get a 50% discount.</h2>
						</div>
					</div>
					<div class="row">
						<h2 align="center" style="font-size:1.3em;margin-top:20px;padding:20px;">Please turn on javascript in your browser for this site to work.</h2>
					</div>
					<div class="row">
						<h2 align="center" style="font-size:1.3em;margin-top:10px;padding:10px;">This site uses a 3rd party software to send emails. I am looking for a new smtp server. Please bear with me.</h2>
					</div>
				</div>
			</div>
			
		</footer>
		<!--jquery import-->
		<script src="js/jquery.js"></script>
		
		<!--bootstrap javascript code import-->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<!--custom javascript code for header and navbar-->
		<script src="js/index_js.js"></script>
		
		<!--custom javascript code for content-->
		<script src="js/content_js.js"></script>
		
		<!--custom javascript code for contact-modal-->
		<script src="js/contact_modal_js.js"></script>
		
		<!--custom javascript code for contact-close-->
		<script src="js/contact_close.js"></script>
		
		<!--custom javascript code for hire-modal-->
		<script src="js/hire_modal_js.js"></script>
		
		<!--custom javascript code for hire-close-->
		<script src="js/hire_close.js"></script>
		
		<!--hire count-->
		<script src="js/hire_count.js"></script>
		
		<!--hire history-->
		<script src="js/hire_history.js"></script>
	</body>
</html>