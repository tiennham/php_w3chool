<?php
### array_intersect ###
/*

Definition and Usage
Return an arrays that collect the items has same * value *

*/

$vk_family = array("ma"=>"ma_vk","ba"=>"ba_vk","em"=>"ba_co_kho_tinh","sui_gia"=>"anh_chi_sui");
$ck_family = array("ma"=>"ma_ck","ba"=>"ba_ck","chi"=>"ba_co_kho_tinh","sui_gia"=>"anh_chi_sui");


print_r(array_intersect($vk_family,$ck_family));

/*
 * Result
Array
(
    [em] => ba_co_kho_tinh
    [sui_gia] => anh_chi_sui
)

 * */

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_intersect($a1,$a2,$a3);
print_r($result);

/*
 * Result
Array ( [a] => red )

 * */

