<?php
### array_merge_recursive ###
/*

Definition and Usage
The array_merge() function merges one or more arrays. If they have the same key, the value of that key will be a array with values is collected from values of the "same" key

*/

$vk_family = array("ma"=>"ma_vk","ba"=>"ba_vk","em"=>"em_vk");
$ck_family = array("ma"=>"ma_ck","ba"=>"ba_ck","em"=>"em_ck");

print_r(array_merge_recursive($vk_family,$ck_family));

/*
 * Result

Array
(
    [ma] => Array
        (
            [0] => ma_vk
            [1] => ma_ck
        )

    [ba] => Array
        (
            [0] => ba_vk
            [1] => ba_ck
        )

    [em] => Array
        (
            [0] => em_vk
            [1] => em_ck
        )

)


 * */

