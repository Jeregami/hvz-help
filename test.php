<?php

require("Mail.php");

$temp = array("dog" => "sylus");

$name = "Jeremy";

print_r("You're good $name\n");

$mail = new Mail($name);
// Mail::$CODE
$mail->build(Mail::$ACTIVATION);
$mail->build(Mail::$PASS_RESET);
$mail->build(Mail::$USERNAME);

//error_log($temp, 0);

?>
