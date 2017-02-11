<?php


include_once('./card.php');
$date = date("Y-m-d H:i:s");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mike and Jenna 2017</title>
	<meta name="author" content="Murph" />
	<meta name="description" content="Murph and Jenna's wedding site" />
	<meta name="keywords"  content="murph,murphware,jenna,millsaps" />
	<meta name="Resource-type" content="Document" />

	<link rel="stylesheet" type="text/css" href="../jquery.pagepiling.css" />
	<link rel="stylesheet" type="text/css" href="examples.css" />
	<link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	<script type="text/javascript" src="../jquery.pagepiling.min.js"></script>
	<script type="text/javascript">
		var deleteLog = false;

		$(document).ready(function() {
	    	$('#pagepiling').pagepiling({
	    		menu: '#menu',
	    		anchors: ['home', 'details', 'contact'],
			    sectionsColor: ['#bfda00', '#2ebe21', '#2C3E50', '#51bec4'],
			    loopTop: true,
			    loopBottom: true
			});
	    });
    </script>

<style>

.form-wrapper {
  background-color: #f6f6f6;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8));
  background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
  background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
  background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
  background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
  background-image: linear-gradient(top, #f6f6f6, #eae8e8);
  border-color: #dedede #bababa #aaa #bababa;
  border-style: solid;
  border-width: 1px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
  -moz-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
  box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
/*  margin: 100px auto;
*/  overflow: hidden;
  padding: 8px;
    position: absolute;
    width: 40%;
    right: 80px;
    top: 250px;
}

.form-wrapper #name, #email, #comment {
  border: 1px solid #CCC;
  -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
  -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
  box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  color: #999;
  float: left;
  font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
  height: 25px;
  padding: 10px;
  width: 100%;
  text-align: center;
}

.form-wrapper #name:focus, #email:focus, #comment:focus {
  border-color: #aaa;
  -webkit-box-shadow: 0 1px 1px #bbb inset;
  -moz-box-shadow: 0 1px 1px #bbb inset;
  box-shadow: 0 1px 1px #bbb inset;
  outline: 0;
}

.form-wrapper #search:-moz-placeholder,
.form-wrapper #search:-ms-input-placeholder,
.form-wrapper #search::-webkit-input-placeholder {
  color: #999;
  font-weight: normal;
}

.form-wrapper #submit {
  background-color: #0483a0;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#31b2c3), to(#0483a0));
  background-image: -webkit-linear-gradient(top, #31b2c3, #0483a0);
  background-image: -moz-linear-gradient(top, #31b2c3, #0483a0);
  background-image: -ms-linear-gradient(top, #31b2c3, #0483a0);
  background-image: -o-linear-gradient(top, #31b2c3, #0483a0);
  background-image: linear-gradient(top, #31b2c3, #0483a0);
  border: 1px solid #00748f;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
  -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
  color: #fafafa;
  cursor: pointer;
  height: 42px;
  float: none;
  font: 15px Arial, Helvetica;
  padding: 0;
  text-transform: uppercase;
  text-shadow: 0 1px 0 rgba(0, 0 ,0, .3);
  width: 250px;

  -webkit-linear-gradient(top, #15adc0, #034f84)
}

.form-wrapper #submit:hover,
.form-wrapper #submit:focus {
  background-color: #31b2c3;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
  background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
  background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
  background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
  background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
  background-image: linear-gradient(top, #0483a0, #31b2c3);
}

.form-wrapper #submit:active {
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
  -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
  outline: 0;
}

.form-wrapper #submit::-moz-focus-inner {
  border: 0;
}

#comment {
  resize: none;
  height: 100px;
  margin-bottom: 10px;
}


</style>


    <style type="text/css">

    body {
      width: 50%;
    }

     .section {
    background-attachment: fixed;
    background-size: 100%;
    background-position: 50% 0%;
    background-repeat: no-repeat;
}
    	
	div#section1 {
	    background-image: url(../../img/2.jpg);

	}

		div#section4 {
	    background: url(../../img/3.jpg);


	}

		div#section2 {
	    background: url(../../img/4.jpg);

	}

	h1, h2, h3, h4 {
    font-family: Arizonia, cursive;
    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
    color: white;
	}

h1.heading {
    position: fixed;
    top: 25px;
    right: 25px;
    font-size: 4em;
}

	#section h1 {color:white !important;}

h2.heading {
    position: fixed;
    top: 95px;
    right: 20px;
    font-size: 3em;
    z-index: -1;
}

h2.countdown {
    position: fixed;
    top: 375px;
    left: 90px;
    font-size: 2em;
}

h3.heading {
    position: fixed;
    top: 145px;
    right: 20px;
    font-size: 2em;
    z-index: -1;
}

h1.left {
    position: absolute;
    left: 25px;
    top: 50px;
}

p.left {
    position: absolute;
    top: 200px;
    left: 50px;
    width: 40%;
    /* color: black; */
    /* background: rgba(255, 255, 255, 0.39); */
    /* border-radius: 10px; */
}

h1.right {
    position: fixed;
    top: 25px;
    right: 25px;
}

p.right {
    top: 150px;
    position: fixed;
    right: 25px;
}

	/* ----------- iPhone 5 and 5S ----------- */

/* Portrait and Landscape */
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px)
  and (-webkit-min-device-pixel-ratio: 2) {

h1, h2, h3, h4 {
    font-family: Arizonia, cursive;
    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
    color: white;
  }

h1.heading {
    position: fixed;
    top: 25px;
    right: 25px;
    font-size: 3em;
}

  #section h1 {color:white !important;}

h2.heading {
    position: fixed;
    top: 95px;
    right: 20px;
    font-size: 2px;
    z-index: -1;
}

h2.countdown {
    position: fixed;
    top: 375px;
    left: 90px;
    font-size: 2em;
}

h3.heading {
    position: fixed;
    top: 145px;
    right: 20px;
    font-size: 2em;
    z-index: -1;
}

h1.left {
    position: absolute;
    left: 25px;
    top: 50px;
}

p.left {
    position: absolute;
    top: 200px;
    left: 50px;
    width: 40%;
    /* color: black; */
    /* background: rgba(255, 255, 255, 0.39); */
    /* border-radius: 10px; */
}

h1.right {
    position: fixed;
    top: 25px;
    right: 25px;
}

p.right {
    top: 150px;
    position: fixed;
    right: 25px;
}

}

/* Portrait */
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: portrait) {
}

/* Landscape */
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: landscape) {


/* ----------- iPhone 6 ----------- */

/* Portrait and Landscape */
@media only screen 
  and (min-device-width: 375px) 
  and (max-device-width: 667px) 
  and (-webkit-min-device-pixel-ratio: 2) { 
    h1, h2, h3, h4 {
    font-family: Arizonia, cursive;
    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
    color: white;
  }

h1.heading {
    position: fixed;
    top: 25px;
    right: 25px;
    font-size: 4em;
}

  #section h1 {color:white !important;}

h2.heading {
    position: fixed;
    top: 95px;
    right: 20px;
    font-size: 3em;
    z-index: -1;
}

h2.countdown {
    position: fixed;
    top: 375px;
    left: 90px;
    font-size: 2em;
}

h3.heading {
    position: fixed;
    top: 145px;
    right: 20px;
    font-size: 2em;
    z-index: -1;
}

h1.left {
    position: absolute;
    left: 25px;
    top: 50px;
}

p.left {
    position: absolute;
    top: 200px;
    left: 50px;
    width: 40%;
    /* color: black; */
    /* background: rgba(255, 255, 255, 0.39); */
    /* border-radius: 10px; */
}

h1.right {
    position: fixed;
    top: 25px;
    right: 25px;
}

p.right {
    top: 150px;
    position: fixed;
    right: 25px;
}

}

/* Portrait */
@media only screen 
  and (min-device-width: 375px) 
  and (max-device-width: 667px) 
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: portrait) { 

}

/* Landscape */
@media only screen 
  and (min-device-width: 375px) 
  and (max-device-width: 667px) 
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: landscape) { 

        .intro-divider {
        width: 50%;
    }

    .intro-message {
    position: relative;
    padding-top: 20%;
    padding-bottom: 20%;
    top: -10vw;
    float: right;
    left: -2vw;
    }

    h2, .h2 {font-size: 25px;}

    .section-heading-spacer {float: none;}

}

/* ----------- iPhone 6+ ----------- */

/* Portrait and Landscape */
@media only screen 
  and (min-device-width: 414px) 
  and (max-device-width: 736px) 
  and (-webkit-min-device-pixel-ratio: 3) { 

}

/* Portrait */
@media only screen 
  and (min-device-width: 414px) 
  and (max-device-width: 736px) 
  and (-webkit-min-device-pixel-ratio: 3)
  and (orientation: portrait) { 

}

/* Landscape */
@media only screen 
  and (min-device-width: 414px) 
  and (max-device-width: 736px) 
  and (-webkit-min-device-pixel-ratio: 3)
  and (orientation: landscape) { 
    .intro-divider {width: 75%;}
    .intro-message {left: -1vw;}
    h2, .h2 {font-size: 25px;}


}


/* ----------- iPad mini ----------- */

/* Portrait and Landscape */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (-webkit-min-device-pixel-ratio: 1) {

}

/* Portrait */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 1) {

}

/* Landscape */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (orientation: landscape) 
  and (-webkit-min-device-pixel-ratio: 1) {

}

/* ----------- iPad 1 and 2 ----------- */
/* Portrait and Landscape */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (-webkit-min-device-pixel-ratio: 1) {

}

/* Portrait */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 1) {
    .intro-divider {width: 75%;}
    .intro-message {left: -2vw;}
    h2, .h2 {font-size: 25px;}

}

/* Landscape */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (orientation: landscape) 
  and (-webkit-min-device-pixel-ratio: 1) {
    .intro-divider {width: 75%;}
    .intro-message {left: -7vw;}
    h2, .h2 {font-size: 25px;}

}

/* ----------- iPad 3 and 4 ----------- */
/* Portrait and Landscape */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (-webkit-min-device-pixel-ratio: 2) {

}

/* Portrait */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 2) {

}

/* Landscape */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (orientation: landscape) 
  and (-webkit-min-device-pixel-ratio: 2) {

}

    </style>

</head>
<body>

	<ul id="menu">
		<li data-menuanchor="home" class="active"><a href="#home">Home</a></li>
		<li data-menuanchor="details"><a href="#details">Details</a></li>
		<li data-menuanchor="contact"><a href="#contact">Contact Us</a></li>
	</ul>

	<div id="pagepiling">
	    <div class="section" id="section1">
			    <h1 class="heading">Mike and Jenna</h1><br />
			    <h2 class="heading">August 11th, 2017</h2><br />
			    <h3 class="heading">Chattanooga, TN</h3>
	    </div>
	    <div class="section" id="section2">
	    	<div class="intro">
	    		<div class="col-md-5 col-sm-9 col-lg-5">
		    		<h1 class="left">Details coming soon</h1>
					<p class="left">We are in the early stages of starting to plan for our wedding, once we decide on a venue we will be updating our site with more information. Stay tuned.</p>
          <?php countdown(); ?>
				</div>
	    	</div>
	    </div>
	    <div class="section" id="section4">
	    	<div class="intro">
        <?php card2(); ?>
	    		<h1 class="right">Give us your info</h1>
				<p class="right">Leave us a message and we'll send you updates as soon as we have more details!</p>
	    	</div>
	    </div>
	</div>

</body>
</html>
