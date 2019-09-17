<?php
$person = $_GET['person'];
$data = file_get_contents('https://swapi.co/api/people/'.$person);   //get data from a file or a URL (Get request) $data for setting
//up as a variable
//concatenation by dot using php
//print_r($data);

echo $data; // echo it to the script
