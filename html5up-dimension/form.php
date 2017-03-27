<?php


function card2() {

		if(isset($_POST["submit"])){
		$hostname='localhost';
		$username='root';
		$password='Sq9SyWrUVupk';

			try {

			$dbh = new PDO("mysql:host=$hostname;dbname=wedding",$username,$password);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
			$sql = "INSERT INTO sign_up_form (name, email, message, client_ip, time_stamp)
			VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."','".$_SERVER['REMOTE_ADDR']."', NOW())";

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
}
card2();
?>
