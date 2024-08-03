<?php
$file_path = "/Users/tiennham/Learn/php/php_w3school/webdictionary.txt";
$myfile = fopen($file_path, "r") or die("Unable to open file!");
echo fread($myfile, filesize($file_path));
fclose($myfile);
