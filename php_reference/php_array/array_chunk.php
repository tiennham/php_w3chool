<?php
### array_chunk ###
# length == 6
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Vinfast");
print_r(array_chunk($cars,2));

# length == 5
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes");
print_r(array_chunk($cars,2));
