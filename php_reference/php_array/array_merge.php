<?php
### array_merge ###
/*

Definition and Usage
The array_merge() function merges one or more arrays into one array.

Tip: You can assign one array to the function, or as many as you like.

Note: If two or more array elements have the same key, the last one overrides the others.

Note: If you assign only one array to the array_merge() function, and the keys are integers, the function returns a new array with integer keys starting at 0 and increases by 1 for each value (See example below).

Tip: The difference between this function and the array_merge_recursive() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.

*/

$vk_family = array("ma_vk","ba_vk","em_vk");
$ck_family = array("ma_ck","ba_ck","em_ck");

print_r(array_merge($vk_family,$ck_family));

/*
 * Result
Array
(
    [0] => ma_vk
    [1] => ba_vk
    [2] => em_vk
    [3] => ma_ck
    [4] => ba_ck
    [5] => em_ck
)

*/

# case overwrite the same key
$vk_family = array("ma"=>"ma_vk","ba"=>"ba_vk","em"=>"em_vk");
$ck_family = array("ma"=>"ma_ck","ba"=>"ba_ck","em"=>"em_ck");

print_r(array_merge($vk_family,$ck_family));
/*
 Array
(
    [ma] => ma_ck
    [ba] => ba_ck
    [em] => em_ck
)
*/

# case re-order the integer key
$vk_family = array("3"=>"ma_vk","5"=>"ba_vk","99"=>"em_vk");

print_r(array_merge($vk_family));

/*
 * Array
(
    [0] => ma_vk
    [1] => ba_vk
    [2] => em_vk
)

 * */

