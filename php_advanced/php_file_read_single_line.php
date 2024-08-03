<?php
$filename = (string)getcwd() . "/webdictionary.txt";
$myfile = fopen($filename, "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
