<?php

// Scan a directory containing images and spit out content for each image.
function image_gallery() {
    $i = 0; 
    $dir = 'images/gallery/thumbs/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
            	echo '
						<article>
							<a href="images/gallery/fulls/'.$file.'" class="image">
								<img src="images/gallery/thumbs/'.$file.'" alt="" /></a>
									<div class="caption">
										<ul class="actions">
											<li><span class="button small">View</span></li>
										</ul>
									</div>

						</article>
            	';
                $i++;
        }
    }
}

function script_includes() {
    echo '
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="assets/js/jquery.countdown.js"></script>
        ';
}



function contact() {

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
            }   else{
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
contact();

?>
