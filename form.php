<?php

$name = ucfirst($_GET['name']);
$email = urlencode($_GET['email']);
echo $name . '<br />Thanks for filling out the form';


echo '<br />';
print_r($_GET);

echo '<br />';
echo $email;

echo '<br />';

echo urldecode($email);

?>
