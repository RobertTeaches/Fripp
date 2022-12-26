<?php
include "../functions/log.php";

$name =  $_POST["text-name"];
$stars =  $_POST["stars-name"];
$email =  $_POST["email-name"];
$review =  $_POST["review-name"];




if(!$name) {
    log_error("Name not set");
    return;
}
if(!$stars) {
    log_error("Stars not set");
    return;
}
if(!$email) {
    log_error("Email not set");
    return;
}
if(!$review) {
    log_error("Review not set");
    return;
}