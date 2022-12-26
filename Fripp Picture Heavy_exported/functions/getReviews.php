<?php

include "./private/database_connect.php";
include "../functions/log.php";
$reviews = [];
try {
    $db = mysqli_connect($DB_NAME, $DB_USER, $DB_PASSWORD, $DB_SERVER);
    if (!$db) {
        log_error("Failed DB connection!");
        return;
    }
    $tableName = "public_reviews";
    //Grab all reviews
    //Consider limiting this depending on server speed
    $sql = "SELECT * FROM $tableName WHERE 1";

    $prepared = $db->prepare($sql);

    $reviews = [];
    //If sql makes sense to DB, else we log an internal error
    if ($prepared) {
        $prepared->execute();
        $result = $prepared->get_result();
        if ($result) {
            while ($row = $result->fetch_row()) {
                array_push($reviews, [
                    'name'=> $row[0],
                    'review'=> $row[1],
                    'stars'=> intval($row[2]),
                    'origin'=> 'Site'
                ]);
            }
        } else {
            log_error("No Result from DB query!: $sql");
        }
    } else {
        log_error("Failed to Prepare SQL for DB Query: $sql");
        return;
    }
} catch (Throwable $er) {
    //For now, we fill reviews with fake data
    for ($i=0; $i < 5; $i++) { 
        array_push($reviews, [
            'name'=> "Jane Doe",
            'review'=> "Super fun! Great!",
            'stars'=> $i,
            'origin'=> 'Test'
        ]);
    }

}

//Prepare curl statments for VRBO API

//Recieve results from API

//Translate results into functional data for site

if (count($reviews) > 0) {
    echo json_encode(["reviews" => $reviews]);
} else {
    echo json_encode(["error" => 300]);
}
