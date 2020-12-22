<?php
include_once('sendmail.php');

$to = "testbookadoc@mailinator.com";
$fromEmail = "info@idomit.com";
$fromName = "BookADoc";
$vSubject = "RT Test";
$tContent = "Test";
if (sendEmailNew($to, $fromEmail, $fromName, $vSubject, $tContent)) {
    echo "Sent";
} else {
    echo "Fail;";
}
?>
