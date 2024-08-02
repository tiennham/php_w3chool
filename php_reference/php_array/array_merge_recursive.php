<?php
### array_merge_recursive ###
/*

Definition and Usage
The array_merge() function merges one or more arrays. If they have the same key, the value of that key will be a array with values is collected from values of the "same" key

*/

$vk_family = array("ma_vk","ba_vk","em_vk");
$ck_family = array("ma_ck","ba_ck","em_ck");

print_r(array_merge_recursive($vk_family,$ck_family));

/*
 * Result

 * */

