<?php
### array_diff ###
/*

Definition and Usage
The array_diff() return an array that value of items cannot 'through' any items of another arrays

*/

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a1,$a2,$a3);
print_r($result);

/*
 * Result
Array (
    [b] => green
    [c] => blue
)
 * */

