<?php
include_once('functions.php');

?>
<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Mike & Jenna 2017</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<style type="text/css">
			
			#clockdiv{
				font-family: sans-serif;
				color: #000;
				display: inline-block;
				font-weight: 100;
				text-align: center;
				font-size: 30px;
			}

			#clockdiv > div{
				padding: 10px;
				border-radius: 3px;
				background: ;
				display: inline-block;
			}

			#clockdiv div > span{
				padding: 15px;
				border-radius: 3px;
				background: ;
				display: inline-block;
			}

			.smalltext{
				padding-top: 5px;
				font-size: 16px;
			}

			/* test */
			ul#countdown {
			  transform: rotate(-45deg);
			  padding: 0;
			  overflow: hidden;
			  list-style: none;
			  position: relative;
		      left: 100px;
		      top: 200px;
			}

			ul#countdown li {
			  float: left;
			  background: rgba(255, 255, 255, 0.37);
			  border-radius: 10px;
			  margin: 2px;
			}

			ul#countdown li:nth-child(3) {
			  clear: left;
			  margin-left: 156px;
			}

			ul#countdown li div {
			  transform: rotate(45deg);
			  display: table-cell;
			  vertical-align: middle;
			  width: 150px;
			  height: 150px;
			  text-align: center;
			}

			ul#countdown li div span {
			  display: block;
			  font-size: 3em;
			  color: #323031;
			}


		</style>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Mike & Jenna</h1>
							<p class="major"><!--[-->August 11th, 2017<!--]-->
								<br />
								Wildwood Georgia
							</p>
							<ul class="actions vertical">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Our big day</a></li>
							</ul>
							


						</div>
						<div class="image">
							<img src="images/7-med.jpg" alt="" />
							<ul class="countdown" id="countdown"></ul>

							<script type="text/javascript">
								
								var myCountdown = document.getElementById('countdown');

countdown();

function countdown(){   
   
   var launch_date = new Date (Date.UTC(2017, 07, 11, 00, 00));
   var now = new Date();
   var days; var hours; var minutes; var seconds; var rest;
	
   seconds = rest = Math.floor(((launch_date.getTime() - now.getTime()) / 1000));

   days = zero (Math.floor(seconds / 86400));
   seconds -= days * 86400;
			
   hours = zero (Math.floor(seconds / 3600));
   seconds -= hours * 3600;

   minutes = zero (Math.floor(seconds / 60));
   seconds -= minutes * 60;

   seconds = zero (Math.floor(seconds));
    
   function zero(n){
  	   return (n < 10 ? '0' : false) + n;  
   }
  
   rest <= 0 ? days = hours = minutes = seconds = '00' : setTimeout(countdown, 1000);
     
   myCountdown.innerHTML =
      '<li><div><span>' + days +'</span>day' + (days > 1 ? 's' : '') +'</div></li>'
      +'<li><div><span>' + hours +'</span>hour' + (hours > 1 ? 's' : '') +'</div></li>'
      +'<li><div><span>' + minutes +'</span>minute' + (minutes > 1 ? 's' : '') +'</div></li>'
      +'<li><div><span>' + seconds +'</span>second' + (seconds > 1 ? 's' : '') +'</div></li>';
}
							</script>
						</div>
					</section>

				<!-- Two -->
					<section class="spotlight style1 orient-right content-align-center image-position-center onscroll-image-fade-in" id="first">
						<div class="content">
							<h2>The Ceremony</h2>
							<p>The ceremony will be held August 11th, 2017 at 6:00PM in Wildwood Georgia</p>
							<br />
							<h2>The Reception</h2>
							<p>The reception will be held at Calvary Chapel Chattanooga immediately following the ceremony</p>
							<ul class="actions vertical">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/6-med.jpg" alt="" />

							
						</div>
					</section>

				<!-- Three -->
					<section class="spotlight style1 orient-left content-align-center image-position-center onscroll-image-fade-in">
						<div class="content">
						<div class="inner">
							<h2>Registry</h2>
							</div>
							<p>We are currently registered at Bed Bath & Beyond and Target</p>
							<ul class="actions vertical">
								<li><a target="_blank" href="https://www.bedbathandbeyond.com/store/giftregistry/view_registry_guest.jsp?pwsToken=&eventType=Wedding&inventoryCallEnabled=true&registryId=544342577&pwsurl=" class="button">Bed Bath & Beyond Registry</a></li>
								<li><a target="_blank" href="http://www.target.com/gift-registry/giftgiver?registryId=60b5762818164e7d9330e3b09090e019=" class="button">Target Registry</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/1-med.jpg" alt="" />
						</div>
					</section>

				<!-- Four -->
<!-- 					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in">
						<div class="content">
							<h2>Pharetra etiam nulla</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id ante sed ex pharetra lacinia sit amet vel massa. Donec facilisis laoreet nulla eu bibendum. Donec ut ex risus. Fusce lorem lectus, pharetra pretium massa et, hendrerit vestibulum odio lorem ipsum dolor sit amet.</p>
							<ul class="actions vertical">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/spotlight03.jpg" alt="" />
						</div>
					</section> -->

				<!-- Five -->
					<section class="wrapper style1 align-center">
							<h2>Engagement Photos</h2>
							<p>Photos from the night we got engaged!</p>
						<!-- Gallery -->
							<div class="gallery style2 medium lightbox onscroll-fade-in"><?php image_gallery(); ?></div>
					</section>

				<!-- Six -->
					<!-- <section class="wrapper style1 align-center">
						<div class="inner">
							<h2>Ipsum sed consequat</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id ante sed ex pharetra lacinia sit amet vel massa. Donec facilisis laoreet nulla eu bibendum. Donec ut ex risus. Fusce lorem lectus, pharetra pretium massa et, hendrerit vestibulum odio lorem ipsum.</p>
							<div class="items style1 medium onscroll-fade-in">
								<section>
									<span class="icon style2 major fa-diamond"></span>
									<h3>Lorem</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-save"></span>
									<h3>Ipsum</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-bar-chart"></span>
									<h3>Dolor</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-wifi"></span>
									<h3>Amet</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-cog"></span>
									<h3>Magna</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-paper-plane"></span>
									<h3>Tempus</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-desktop"></span>
									<h3>Aliquam</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-refresh"></span>
									<h3>Elit</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-hashtag"></span>
									<h3>Morbi</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-bolt"></span>
									<h3>Turpis</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-envelope"></span>
									<h3>Ultrices</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-leaf"></span>
									<h3>Risus</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
							</div>
						</div>
					</section> -->

				<!-- Seven -->
					<section class="wrapper style1 align-center">
						<div class="inner medium">
							<h2>Get in touch</h2>
							<form method="post" action="">
								<div class="field half first">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" value="" />
								</div>
								<div class="field half">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" value="" />
								</div>
								<div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="6"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" name="submit" id="submit" value="Send Message" /></li>
								</ul>
							</form>

						</div>
					</section>

				<!-- Footer -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
						

							<p>&copy; The Murphs 2017</p>

						</div>
					</footer>

			</div>

		<!-- Scripts -->
		<?php script_includes() ?>

	</body>
</html>
