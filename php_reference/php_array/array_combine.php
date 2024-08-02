<?php
### array_combine ###
/*

Definition and Usage
The array_merge_combine() return an array that combine the values of pair item by the order of the items
The arrays must have same length (error if not)
*/

$vk_family = array("ma"=>"ma_vk","ba"=>"ba_vk","em"=>"em_vk","chau_ngoai"=>"ong_ba_ngoai");
$ck_family = array("ma"=>"ma_ck","ba"=>"ba_ck","em"=>"ba_co_kho_tinh","chau_noi"=>"ong_ba_noi");

print_r(array_combine($vk_family,$ck_family));

/*
 * Result
Array
(
    [ma_vk] => ma_ck
    [ba_vk] => ba_ck
    [em_vk] => ba_co_kho_tinh
    [ong_ba_ngoai] => ong_ba_noi
)
 * */
