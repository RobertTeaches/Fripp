<?php

function log_error($errorMessage = "No Error Message Provided :(")
{
    $folderPath = "../../_admin_logs";
    $fileName = "ERROR:". time();
    $errorFile = fopen($folderPath.$fileName, "w");
    fwrite($errorFile,$errorMessage);
    fclose($errorFile);
}