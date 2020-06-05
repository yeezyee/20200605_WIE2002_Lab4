<?php

//set file to read
$file = 'cities.txt';

//read file contents
$data = file($file) or die ('Could not read file.');

$newData = explode(', ', $data[0]);

//open/create file
$newFile = fopen("largestCities.txt", "w") or die("Could not open file.");


//print file contents
foreach ($newData as $line)
{
    fwrite($newFile, $line.PHP_EOL) or die ('Could not write to file.');
}
?>

