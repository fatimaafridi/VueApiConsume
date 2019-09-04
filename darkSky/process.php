<?php
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$data = file_get_contents('https://api.darksky.net/forecast/72c6189b8163ac759f3164c2a3634094/'.$lat.','.$lng);   //get data from a file or a URL (Get request) $data for setting
//up as a variable
//concatenation by dot using php
//print_r($data);

echo $data; // echo it to the script
