<?php

function log_error($errorMessage = "No Error Message Provided :(")
{
    echo "logged";
    $folderPath = "/_admin_logs/";
    $fileName = "ERROR-". time() . ".txt";
    
    echo "<script>alert('$errorMessage')</script>";

    //file_put_contents($folderPath.$fileName, $errorMessage, FILE_APPEND);
    
    
    // $errorFile = f($folderPath.$fileName, "w");
    // fwrite($errorFile,$errorMessage);
    // fclose($errorFile);
}