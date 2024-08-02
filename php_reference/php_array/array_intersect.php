<?php
### array_intersect ###
/*

Definition and Usage
Return an arrays that collect the items has same * key *
the value kept the first array
*/

$vk_family = array("ma"=>"ma_vk","ba"=>"ba_vk","em"=>"em_vk","anh"=>"anh_vk");
$ck_family = array("ma"=>"ma_ck","ba"=>"ba_ck","em"=>"em_ck", "chi"=>"chi_ck");


print_r(array_intersect($vk_family,$ck_family));

/*
 * Result

 * */

