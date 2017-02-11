<?php
	$name = explode(" ", $_POST["name"]);
	$first = $name[0];
	// $first = implode("", $first);
	// $first = strtolower($first);


    // Function to display a welcome message when someone signs up
	function thanks_message() {
		global $name;
		global $first;
	    if($_POST["name"] !== "" & isset($_POST["name"])){
		    echo '<p class="lead">Thanks ';
		    echo ucfirst($first) . '!';
		    echo '<br />';
		    echo 'We\'ll keep you posted!';
	    } else {}
	}

	function countdown() {

		$rem = strtotime('2017-08-11 00:00:00') - time();
		$day = floor($rem / 86400);
		$hr  = floor(($rem % 86400) / 3600);
		$min = floor(($rem % 3600) / 60);
		$sec = ($rem % 60);
			if($day) echo "<h2 class='countdown'>$day Days till our wedding...</h2>";
			// if($hr) echo "$hr Hours ";
			// if($min) echo "$min Minutes ";
			// if($sec) echo "$sec Seconds ";
	}

?>

