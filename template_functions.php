<?php

//	This will hold all of the code for our HTML template.  We will split these up into functions representing each section.

function head_tag() {
	echo '
			<!DOCTYPE html>
			<html lang="en">

			<head>

			    <meta charset="utf-8">
			    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    <meta name="viewport" content="width=device-width, initial-scale=1">
			    <meta name="description" content="">
			    <meta name="author" content="">

			    <title>Mike and Jenna 2017</title>

			    <!-- Bootstrap Core CSS -->
			    <link href="css/bootstrap.min.css" rel="stylesheet">

			    <!-- Custom CSS -->
			    <link href="css/landing-page.css" rel="stylesheet">
			    <link href="css/contact.css" rel="stylesheet">

			    <!-- Custom Fonts -->
			    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
			    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:600" rel="stylesheet">
			    <link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">

			    <script src="js/jquery.js"></script>
			    <script src="js/contact_card.js"></script>

			    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
			    <!--[if lt IE 9]>
			        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			    <![endif]-->

				';
			}


function contact_card() {

	if(isset($_POST["submit"])){
		$hostname='localhost';
		$username='root';
		$password='N0bigdeal';

			try {
			
			$dbh = new PDO("mysql:host=$hostname;dbname=wedding",$username,$password);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
			$sql = "INSERT INTO sign_up_form (name, email, comment, ip)
			VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["comment"]."','".$_SERVER['REMOTE_ADDR']."')";
			
			if ($dbh->query($sql)) {
				echo "<script type= 'text/javascript'>alert('Success');</script>";
			}	else{
		echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
		}

		$dbh = null;
		}
		catch(PDOException $e)
		{
		echo $e->getMessage();
		}
	}

	echo '
	                    <div class="card">
                        <button class="contact" id="main-button">sign up for updates</button> <br /><br />';

                    	if (isset($_POST['submit'])) {
                    		thanks_message();
                    	} else {
                    		echo 'Please fill out this form';
                    	}

    echo '
                          <form class="email-form" action="" method="POST">
                                <input id="name" type="text" placeholder="name" name="name" required>
                                <input id="email" type="text" placeholder="email" name="email" required>
                                <textarea id="comment" type="text" placeholder="comment" name="comment"></textarea>
                                <button class="contact" name="submit">send</button>
                          </form>
                    </div>';
		}

?>