<?php

    require(__DIR__ . "/../includes/config.php");

    // numerically indexed array of places
    $places = [];

    // TODO: search database for places matching $_GET["geo"]
    //var_dump($_GET["geo"]);
    //print("\n");
    $hello = query("SELECT * from places where place_name like ?",$_GET["geo"]);
    //array_push($places, $hello);
    $places=$hello;
    //var_dump($places);
    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($places, JSON_PRETTY_PRINT));

?>
