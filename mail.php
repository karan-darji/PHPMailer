<?php
include("sendmail.php");
$to = "To email address";
$subject = "Hello";
$message = "hello <i>how are you.</i>";
$name = "To name";
$mailsend = sendmail($to, $subject, $message, $name);
if ($mailsend) {
    echo '<h2>email sent.</h2>';
} else {
    echo $mailsend;
}
