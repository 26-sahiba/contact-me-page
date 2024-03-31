<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
    * {
	 box-sizing: border-box;
}
 html {
	 font-size: 14px;
}
 body {
	 background: #f6f9fc;
	 font-family: "Open Sans", sans-serif;
	 color: #525f7f;
}
 h2 {
	 margin: 5%;
	 text-align: center;
	 font-size: 4rem;
	 font-weight: 100;
}
 h1 {
	 margin: 4%;
	 text-align: center;
	 font-size: 2rem;
	 font-weight: 10;
	 top: 0;
}
 .timeline {
	 display: flex;
	 flex-direction: column;
	 margin: 20px auto;
	 position: relative;
}
 .timeline__event {
	 margin-bottom: 20px;
	 position: relative;
	 display: flex;
	 margin: 20px 0;
	 border-radius: 6px;
	 align-self: center;
	 width: 50vw;
}
 .timeline__event:nth-child(2n + 1) {
	 flex-direction: row-reverse;
}
 .timeline__event:nth-child(2n + 1) .timeline__event__date {
	 border-radius: 0 6px 6px 0;
}
 .timeline__event:nth-child(2n + 1) .timeline__event__content {
	 border-radius: 6px 0 0 6px;
}
 .timeline__event:nth-child(2n + 1) .timeline__event__icon:before {
	 content: "";
	 width: 2px;
	 height: 100%;
	 background: #f6a4ec;
	 position: absolute;
	 top: 0%;
	 left: 50%;
	 right: auto;
	 z-index: -1;
	 transform: translateX(-50%);
	 animation: fillTop 2s forwards 4s ease-in-out;
}
 .timeline__event:nth-child(2n + 1) .timeline__event__icon:after {
	 content: "";
	 width: 100%;
	 height: 2px;
	 background: #f6a4ec;
	 position: absolute;
	 right: 0;
	 z-index: -1;
	 top: 50%;
	 left: auto;
	 transform: translateY(-50%);
	 animation: fillLeft 2s forwards 4s ease-in-out;
}
 .timeline__event__title {
	 font-size: 1.2rem;
	 line-height: 1.4;
	 text-transform: uppercase;
	 font-weight: 600;
	 color: #9251ac;
	 letter-spacing: 1.5px;
}
 .timeline__event__content {
	 padding: 20px;
	 box-shadow: 0 30px 60px -12px rgba(50, 50, 93, 0.25), 0 18px 36px -18px rgba(0, 0, 0, 0.3), 0 -12px 36px -8px rgba(0, 0, 0, 0.025);
	 background: #fff;
	 width: calc(40vw - 84px);
	 border-radius: 0 6px 6px 0;
}
 .timeline__event__date {
	 color: #f6a4ec;
	 font-size: 1.5rem;
	 font-weight: 600;
	 background: #9251ac;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 white-space: nowrap;
	 padding: 0 20px;
	 border-radius: 6px 0 0 6px;
}
 .timeline__event__icon {
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 color: #9251ac;
	 padding: 20px;
	 align-self: center;
	 margin: 0 20px;
	 background: #f6a4ec;
	 border-radius: 100%;
	 width: 40px;
	 box-shadow: 0 30px 60px -12px rgba(50, 50, 93, 0.25), 0 18px 36px -18px rgba(0, 0, 0, 0.3), 0 -12px 36px -8px rgba(0, 0, 0, 0.025);
	 padding: 40px;
	 height: 40px;
	 position: relative;
}
 .timeline__event__icon i {
	 font-size: 32px;
}
 .timeline__event__icon:before {
	 content: "";
	 width: 2px;
	 height: 100%;
	 background: #f6a4ec;
	 position: absolute;
	 top: 0%;
	 z-index: -1;
	 left: 50%;
	 transform: translateX(-50%);
	 animation: fillTop 2s forwards 4s ease-in-out;
}
 .timeline__event__icon:after {
	 content: "";
	 width: 100%;
	 height: 2px;
	 background: #f6a4ec;
	 position: absolute;
	 left: 0%;
	 z-index: -1;
	 top: 50%;
	 transform: translateY(-50%);
	 animation: fillLeftOdd 2s forwards 4s ease-in-out;
}
 .timeline__event__description {
	 flex-basis: 100%;
}
 .timeline__event--type2:after {
	 background: #555ac0;
}
 .timeline__event--type2 .timeline__event__date {
	 color: #87bbfe;
	 background: #555ac0;
}
 .timeline__event--type2:nth-child(2n + 1) .timeline__event__icon:before, .timeline__event--type2:nth-child(2n + 1) .timeline__event__icon:after {
	 background: #87bbfe;
}
 .timeline__event--type2 .timeline__event__icon {
	 background: #87bbfe;
	 color: #555ac0;
}
 .timeline__event--type2 .timeline__event__icon:before, .timeline__event--type2 .timeline__event__icon:after {
	 background: #87bbfe;
}
 .timeline__event--type2 .timeline__event__title {
	 color: #555ac0;
}
 .timeline__event--type3:after {
	 background: #24b47e;
}
 .timeline__event--type3 .timeline__event__date {
	 color: #aff1b6;
	 background-color: #24b47e;
}
 .timeline__event--type3:nth-child(2n + 1) .timeline__event__icon:before, .timeline__event--type3:nth-child(2n + 1) .timeline__event__icon:after {
	 background: #aff1b6;
}
 .timeline__event--type3 .timeline__event__icon {
	 background: #aff1b6;
	 color: #24b47e;
}
 .timeline__event--type3 .timeline__event__icon:before, .timeline__event--type3 .timeline__event__icon:after {
	 background: #aff1b6;
}
 .timeline__event--type3 .timeline__event__title {
	 color: #24b47e;
}
 .timeline__event:last-child .timeline__event__icon:before {
	 content: none;
}
 @media (max-width: 786px) {
	 .timeline__event {
		 flex-direction: column;
		 align-self: center;
	}
	 .timeline__event__content {
		 width: 100%;
	}
	 .timeline__event__icon {
		 border-radius: 6px 6px 0 0;
		 width: 100%;
		 margin: 0;
		 box-shadow: none;
	}
	 .timeline__event__icon:before, .timeline__event__icon:after {
		 display: none;
	}
	 .timeline__event__date {
		 border-radius: 0;
		 padding: 20px;
	}
	 .timeline__event:nth-child(2n + 1) {
		 flex-direction: column;
		 align-self: center;
	}
	 .timeline__event:nth-child(2n + 1) .timeline__event__date {
		 border-radius: 0;
		 padding: 20px;
	}
	 .timeline__event:nth-child(2n + 1) .timeline__event__icon {
		 border-radius: 6px 6px 0 0;
		 margin: 0;
	}
}
 @keyframes fillLeft {
	 100% {
		 right: 100%;
	}
}
 @keyframes fillTop {
	 100% {
		 top: 100%;
	}
}
 @keyframes fillLeftOdd {
	 100% {
		 left: 100%;
	}
}
 
</style>

</head>
<body>
<script src="https://kit.fontawesome.com/fc596df623.js" crossorigin="anonymous"></script>

<h2>Sahiba kathpal</h2>
<h1>IT FRESHER</h1>

<div class="timeline">

	<!--first-->
	<div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
		<div class="timeline__event__icon ">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			Contact
		</div>
		<div class="timeline__event__content ">
			<div class="timeline__event__title">
				
			</div>
			<div class="timeline__event__description">
				<p>phone- +91 8053582982<br><br>
					email-sahibakathpal82982@gmail.com<br><br>
					Linkedin-linkedin.com/in/sahibakathpal<be><br>
				</p>
			</div>
		</div>
	</div>

	<!--second-->

	<div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			Career Objective
		</div>
		<div class="timeline__event__content">
			<div class="timeline__event__title">
				
			</div>
			<div class="timeline__event__description">
				<p>To secure a challenging position as IT professional to use my <br> <br> software and analytical skills for the progress of organisation  <br> <br> and attain career targets.</p>
			</div>
		</div>
	</div>

	<!--third-->

	<div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			Key Skills
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>-Programming Languages:PHP, HTML, and XML<br>  <br> 
-Operating Systems: Windows XP/Vista/7, <br>  <br> 
-Packages: Microsoft Office, Adobe Photoshop<br> <br> 
-DBMS: MS-SQL server<br><br> </p>
			</div>

		</div>
	</div>

	<!--forth-->

	<div class="timeline__event animated fadeInUp timeline__event--type1">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			Personality Traits
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>-Excellent Communication skill <br>  <br> 
-Hard worker and good team player. <br>  <br> 
-Disciplined and positive thinker. <br>  <br> 
-Very professional with good etiquette. <br>  <br> </p>
			</div>
		</div>
	</div>

	<!--first-->
	<div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
		<div class="timeline__event__icon ">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
		Academic Qualification
		</div>
		<div class="timeline__event__content ">
			
			<div class="timeline__event__description">
				<p>
-Bachelor of Computer Applications , from <br>  <br>  chandigarh university with an aggregate of 80%. <br>  <br> 
-HSC with an aggregate of 76.78%. <br>  <br> 
-SSC with an aggregate of 74.86% <br>  <br> </p>
			</div>
		</div>
	</div>

	<!--second-->

	<div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			Vocational Trainings
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>Successfully completed advance credit program of 1 <br> <br> week  from 15 july 2023 to  21 July 2023 which includes:<br><br>

-Learning . PHP, JSP.<br><br>
-Preparing various forms by the help of these <br><br>languages.<br><br>
-Prepare small projects.<br><br>
-Undergone with the real time project environment.<br><br></p>
			</div>
		</div>
	</div>

	<!--third-->

	<div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			Languages Known
		</div>
		<div class="timeline__event__content">
		
			<div class="timeline__event__description">
				<p>English<br><br>
French<br><br>
hindi<br><br>
punjabi <br><br></p>

			</div>

		</div>
	</div>

	<!--forth-->

	<div class="timeline__event animated fadeInUp timeline__event--type1">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			Strengths
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>Sincere, hardworking and honest<br><br>Ability to grasp new skills quickly<br><br>Positive Attitude<br><br>Team work skills<br><br>Can execute a task within given time</p>
			</div>
		</div>
	</div>

	<!--first-->
	<div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
		<div class="timeline__event__icon ">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			Hobbies
		</div>
		<div class="timeline__event__content ">
		
			<div class="timeline__event__description">
				<p>playing badminton<br><br>
					travelling<br><br>
					nature photography<br><br>
				</p>
			</div>
		</div>
	</div>

</body>
</html>
