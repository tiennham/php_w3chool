<?php
### array_flip ###
/*

Definition and Usage
The array_flip() return an array that flip key <=> value of each items

*/

$vk_family = array("ma"=>"ma_vk","ba"=>"ba_vk","em"=>"em_vk");

print_r(array_flip($vk_family));

/*
 * Result
Array
(
    [ma_vk] => ma
    [ba_vk] => ba
    [em_vk] => em
)

 * */

$vk_family = array("ma","ba","em");

print_r(array_flip($vk_family));

/*
 * Result
Array
(
    [ma] => 0
    [ba] => 1
    [em] => 2
)

 * */
