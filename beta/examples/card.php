<?php

function card2() {

    if(isset($_POST["submit"])){
    $hostname='localhost';
    $username='root';
    $password='N0bigdeal';

      try {
      
      $dbh = new PDO("mysql:host=$hostname;dbname=wedding",$username,$password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
      $date = date("Y-m-d H:i:s");
      $sql = "INSERT INTO sign_up_form (name, email, comment, ip, sign_up_time)
      VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["comment"]."','".$_SERVER['REMOTE_ADDR']."', NOW())";
      
      if ($dbh->query($sql)) {
        echo "<script type= 'text/javascript'>alert('Thanks for signing up!');</script>";
      } else{
    echo "<script type= 'text/javascript'>alert('Uh Oh, something went wrong...');</script>";
    }

    $dbh = null;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
  }


echo '
<form class="form-wrapper" method="POST" action="">
    <input type="text" id="name" name="name" placeholder="Your name..." required><br /><div style="height:30px;"></div>
  <input type="text" id="email" name="email" placeholder="Your email address..." required><br /><div style="height:30px;"></div>
  <textarea name="comment" id="comment" name="comment" rows="10" cols="30" placeholder="Leave us a message!"></textarea><br /><div style="height:50px;"></div>
    <input type="submit" value="submit" id="submit" name="submit">
</form>
';
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
