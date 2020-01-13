<!DOCTYPE html>
<html>
<!--
Name: Belkisa Nukić
Course: CS412
Assignment: Project 1
Due Date: 28.10.2019
Purpose: The purpose of this project is to learn the basics of HTML
-->
<head>
<title>Belkisa Nukić-CV </title>
<link href= "styles.css" type="text/css" rel="stylesheet" />

<link rel="icon" type="image" href="icon.png" >
    
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link" href="#edu">Education</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#sk">Skills</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#work">Work Experience</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#contact">Contact</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Progress
      </a>
      <div class="dropdown-menu">
      	<a class="dropdown-item" href="#">Progress 1</a> <!-- Made a mistake because I didn't make new repository for progress2, so no pr1-->
        <a class="dropdown-item" href="https://belkisanukic.github.io/CV/">Progress 2 </a>
       <!-- <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>-->
      </div>
    </li>
  </ul>
</nav>


<meta charset="UTF-8"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  


</head>

<body onpageshow="welcome()" >

	<div class="container-fluid">
	<div class="col-md-12">

	
	<div id="title">Curriculum Vitae </div>


	<div id="name">
		<h1 ><b>Belkisa Nukić</b></h1>
		<img src="belkisa.png">

	<div id="contactDetails">
	    <ul>

	    	<li><b>Adress: </b> Branilaca Kule Grada bb,<br>Gračanica 75320</li>
		    <li><b>E-mail: </b><a href="mailto:belkisa_nukic@outlook.com" target="_blank">belkisa_nukic@outlook.com</a></li>
		    <li><b>Mobile phone:</b> +387603230546</li>
		</ul>
	</div>
	</div>
	
	<div id="edu">
		<h1><b>Education</b></h1>
		<ul>
			<li>
				<h2>University</h2>
				<p>Current: International University of Sarajevo- Computer Science and Engineering </p>
			</li>
			<li>
				<h2>High School</h2>
				<p> 2013-2017: Gymnasium "Dr. Mustafa Kamarić"</p>
				</li>
			<li>
				<h2>Primary School</h2>
				<p>2004-2013: OŠ"Hasan Kikić"</p>
			</li>
		</ul>
	</div>


	<div id="sk">
		<h1><b>Key Skills</b></h1>
		<ul>
			<li>C++</li>
			<li>Java</li>
			<li>HTML</li>
			<li>My SQL </li>
					
		</ul>
	
		<h1><b>Foreign Languages</b></h1>
		<div class="container">
			  <div class="progress">
			  	<div class="progress-bar" style="width:100%">
			  		English(C1)</div>
			  		</div><br>
			  	<div class="progress">
			  	  <div class="progress-bar bg-success" style="width:80%">
			  	  	German(B2) </div>
			  	  	</div><br>
			  	 <div class="progress">
			  	 	<div class="progress-bar bg-warning" style="width:20%">
			  	 		Turkish(A1)</div>
			  	 		</div><br>
</div>
		<h1><b>Other Skills</b></h1>
			<ul>
				<li>good communication skills</li>
				<li>very responsible</li>
				<li>used on work under pressure</li>
				<li>debating skills</li>
			</ul>		
	</div>
			
	<div id="work" >
		<h1><b>Work Experience</b></h1>
		<ul> 
     		<li> Present-Computer Science Representative at SPIUS</li>
			<li>2018-Part-time job at "Ekom" Gračanica</li>
		</ul>
	</div>
			
 <div id="contact" style="position:relative;">
        <h1 ><b>Contact Me</b></h1>
<div class="contact">
            <form action="includes/signup.inc.php" method="POST">
                <label for="name1">First Name</label>
                <input type="text" id="name1" name="first" placeholder="Belkisa">

                <label for="surname">Last Name</label>
                <input type="text" id="surname" name="last" placeholder="Nukic">
          


                <label for="subject"></label>
                <textarea id="subject" name="comment" placeholder="Write Your message here..." style="height: 100px; width: 300px;  margin: 50px;"></textarea>
                <input type="submit" value="Submit" button type="button" class="btn btn-secondary">
                

            </form>
        </div>
          </div>
</div>
</div>

<script>
function welcome() {
  alert("Welcome to my CV!");
}
</script>
<script>
function submit() {
  alert("The form was submitted");
}
</script>

</body>

<footer>
	<p id="demo"></p>
	<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toString();
</script>


</footer>
</html>